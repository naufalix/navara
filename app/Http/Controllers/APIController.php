<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\City;
use App\Models\Agenda;
use App\Models\Gallery;
use App\Models\Encyclopedia;
use App\Models\Testimonial;
use App\Models\Virtual;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIController extends Controller
{
  
  public function cities(){
    return ApiFormatter::createApi(200,"Success",City::all());
  }
  public function city(City $city){  
    return ApiFormatter::createApi(200,"Success",$city);
  }
  public function agenda(Agenda $agenda){  
    return ApiFormatter::createApi(200,"Success",$agenda);
  }
  public function encyclopedia(Encyclopedia $encyclopedia){  
    return ApiFormatter::createApi(200,"Success",$encyclopedia);
  }
  public function gallery(Gallery $gallery){  
    return ApiFormatter::createApi(200,"Success",$gallery);
  }
  public function testimonial(Testimonial $testimonial){  
    return ApiFormatter::createApi(200,"Success",$testimonial);
  }
  public function virtual(Virtual $virtual){  
    return ApiFormatter::createApi(200,"Success",$virtual);
  }

}
