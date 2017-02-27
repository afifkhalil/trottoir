<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
use Image;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

      	
    static public function uploadImage($image){

        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = base_path('uploads/' . $filename);

        Image::make($image->getRealPath())->fit(500)->save($path, 80);

        return $filename;

    }
}
