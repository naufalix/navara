<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Virtual;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Maatwebsite\Excel\Facades\Excel;

class DashVirtual extends Controller
{

    public function index(){
        return view('dashboard.virtual',[
            "title" => "Dashboard | Virtual Tour",
            "virtuals" => Virtual::orderBy("id","DESC")->get(),
            "cities" => City::orderBy("name","ASC")->get(),
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
        if($request->submit=="virtual"){
            $res = $this->virtual($request);
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
            'city'=>'required',
            'category'=>'required',
            'name'=>'required',
            'maps'=>'required',
            'image' => 'required|image|file|max:1024',
        ]);

        //Read image
        $manager = new ImageManager(new Driver());
        $image = $manager->read($request->file('image'));
        
        // Resize image
        $maxwidth = 800;
        $maxheight = 450;
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
        $imageWebp->save('assets/img/virtual/'.$validatedData['image']);
        
        Virtual::create($validatedData);
        return ['status'=>'success','message'=>'Virtual tour berhasil ditambahkan'];

    }

    public function update(Request $request){
        $validatedData = $request->validate([
            'id'=>'required|numeric',
            'city'=>'required',
            'category'=>'required',
            'name'=>'required',
            'maps'=>'required',
            'image' => 'image|file|max:1024',
        ]);
        
        $vr = Virtual::find($request->id);

        //Check if the data is found
        if(!$vr){
            return ['status'=>'error','message'=>'Virtual tour tidak ditemukan'];
        }
        
        //Check if has image
        if($request->file('image')){

            // Delete old image
            $image_path = public_path().'/assets/img/virtual/'.$vr->image;
            if (file_exists($image_path)) {
                unlink($image_path); // Delete the image file
            }
            
            //Read image
            $manager = new ImageManager(new Driver());
            $image = $manager->read($request->file('image'));
            
            // Resize image
            $maxwidth = 800;
            $maxheight = 450;
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
            $imageWebp->save('assets/img/virtual/'.$validatedData['image']);
            
            $vr->update($validatedData);
            return ['status'=>'success','message'=>'Virtual tour berhasil diupdate'];
            
        }else{
            // Update data
            $vr->update($validatedData);    
            return ['status'=>'success','message'=>'Virtual tour berhasil diedit'];
        }
        
    }
    
    public function virtual(Request $request){
        $validatedData = $request->validate([
            'id'=>'required|numeric',
            'virtual' => 'required|image|file|max:5120',
        ]);
        
        $vr = Virtual::find($request->id);

        //Check if the data is found
        if(!$vr){
            return ['status'=>'error','message'=>'Virtual tour tidak ditemukan'];
        }

        // Delete old image
        $image_path = public_path() . '/assets/img/virtual/' . $vr->virtual;
        if (is_file($image_path) && file_exists($image_path)) {
            unlink($image_path); // Delete the image file
        }
        
        // Upload new image
        $validatedData['virtual'] = $validatedData['id'].'-'.time().".jpg";
        $request->file('virtual')->move(public_path('assets/img/virtual'), $validatedData['virtual']);
        
        $vr->update($validatedData);
        return ['status'=>'success','message'=>'Virtual tour berhasil diupdate'];
            
    
        
    }

    public function destroy(Request $request){
        
        $validatedData = $request->validate([
            'id' => 'required|numeric',
        ]);

        $vr = Virtual::find($request->id);

        // Check if the data is found
        if (!$vr) {
            return ['status' => 'error', 'message' => 'Virtual tour tidak ditemukan'];
        }

        $image_path = public_path().'/assets/img/virtual/'.$vr->image;

        // Check if the image file exists before attempting to delete it
        if (file_exists($image_path)) {
            unlink($image_path); // Delete the image file
        }

        Virtual::destroy($request->id);
        return ['status' => 'success', 'message' => 'Virtual tour berhasil dihapus'];
    }

}
