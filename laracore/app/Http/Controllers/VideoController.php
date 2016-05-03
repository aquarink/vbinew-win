<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class VideoController extends Controller {

    public function lists() {
        return view('vbi.front.video');
    }
}
