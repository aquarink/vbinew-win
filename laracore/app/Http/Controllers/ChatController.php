<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChatController extends Controller
{
    public function index() {
        return view('vbi.front.chat');
    }
}
