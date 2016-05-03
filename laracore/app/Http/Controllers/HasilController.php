<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HasilController extends Controller
{
    public function index() {
      return view('vbi.front.hasil');
    }
}
