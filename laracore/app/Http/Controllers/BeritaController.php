<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class BeritaController extends Controller {

    public function listberita() {
        return view('vbi.front.berita');
    }

    public function berita_id() {
        return view('vbi.front.bacaberita');
    }
    
}