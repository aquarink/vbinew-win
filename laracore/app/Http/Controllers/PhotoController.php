<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PhotoController extends Controller {

    public function album() {
        return view('vbi.front.album');
    }
    
    public function photo() {
        return view('vbi.front.photo');
    }
}
