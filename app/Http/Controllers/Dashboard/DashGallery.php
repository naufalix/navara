<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Maatwebsite\Excel\Facades\Excel;

class DashGallery extends Controller
{

    public function index(){
        return view('dashboard.gallery',[
            "title" => "Dashboard | Galeri",
            "galleries" => Gallery::orderBy("sort","ASC")->get()
        ]);
    }

    public function postHandler(Request $request){
        //dd($request);
        if($request->submit=="store"){
            $res = $this->store($request);
            return back()->with($res['status'],$res['message']);
        }
        if($request->submit=="update"){
            $res = $this->update($request);
            return back()->with($res['status'],$res['message']);
        }
        if($request->submit=="destroy"){
            $res = $this->destroy($request);
            return back()->with($res['status'],$res['message']);
            // return back()->with("info","Fitur hapus sementara dinonaktifkan");
        }
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title'=>'required',
            'image' => 'required|image|file|max:1024',
            'sort'=>'required',
        ]);

        //Read image
        $manager = new ImageManager(new Driver());
        $image = $manager->read($request->file('image'));
        
        // Resize image
        $maxwidth = 1600;
        $maxheight = 900;
        if ($image->width() > $image->height()) {
            if ($image->width() > $maxwidth) {
                $newheight = $image->height() / ($image->width() / $maxwidth);
                $image->resize($maxwidth, $newheight);
            }
        } else {
            if ($image->height() > $maxheight) {
                $newwidth = $image->width() / ($image->height() / $maxheight);
                $image->resize($newwidth, $maxheight);
            }
        }

        //Convert to .webp
        $imageWebp = $image->toWebp(100);
        
        // Upload new image
        $validatedData['image'] = time().".webp";
        $imageWebp->save('assets/img/gallery/'.$validatedData['image']);
        
        Gallery::create($validatedData);
        return ['status'=>'success','message'=>'Galeri berhasil ditambahkan'];

    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'id'=>'required|numeric',
            'title'=>'required',
            'sort'=>'required',
            'image' => 'image|file|max:1024',
        ]);
        
        $gallery = Gallery::find($request->id);

        //Check if the data is found
        if(!$gallery){
            return ['status'=>'error','message'=>'Galeri tidak ditemukan'];
        }
        
        //Check if has image
        if($request->file('image')){

            // Delete old image
            $image_path = public_path().'/assets/img/gallery/'.$gallery->image;
            if (file_exists($image_path)) {
                unlink($image_path); // Delete the image file
            }
            
            //Read image
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image'));
            
            // Resize image
            $maxwidth = 1600;
            $maxheight = 900;
            if ($image->width() > $image->height()) {
                if ($image->width() > $maxwidth) {
                    $newheight = $image->height() / ($image->width() / $maxwidth);
                    $image->resize($maxwidth, $newheight);
                }
            } else {
                if ($image->height() > $maxheight) {
                    $newwidth = $image->width() / ($image->height() / $maxheight);
                    $image->resize($newwidth, $maxheight);
                }
            }

            //Convert to .webp
            $imageWebp = $image->toWebp(100);
            
            // Upload new image
            $validatedData['image'] = $validatedData['id'].'-'.time().".webp";
            $imageWebp->save('assets/img/gallery/'.$validatedData['image']);
            
            $gallery->update($validatedData);
            return ['status'=>'success','message'=>'Galeri berhasil diupdate'];
            
        }else{
            // Update data
            $gallery->update($validatedData);    
            return ['status'=>'success','message'=>'Galeri berhasil diedit'];
        }
        
    }

    public function destroy(Request $request){
        
        $validatedData = $request->validate([
            'id' => 'required|numeric',
        ]);

        $gallery = Gallery::find($request->id);

        // Check if the data is found
        if (!$gallery) {
            return ['status' => 'error', 'message' => 'Galeri tidak ditemukan'];
        }

        $image_path = public_path().'/assets/img/gallery/'.$gallery->image;

        // Check if the image file exists before attempting to delete it
        if (file_exists($image_path)) {
            unlink($image_path); // Delete the image file
        }

        Gallery::destroy($request->id);
        return ['status' => 'success', 'message' => 'Galeri berhasil dihapus'];
    }

}
