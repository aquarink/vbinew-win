<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JadwalController extends Controller
{
    public function index() {
        return view('vbi.front.jadwal');
    }
    
    public function tambahjadwal() {
        return view('vbi.front.tambahjadwal');
    }
}
