<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Input;
use Crypt;

class MemberController extends Controller {

    public function index() {
        return view('vbi.front.index');
    }

    public function profil() {
        return view('vbi.front.profil');
    }

    public function daftar() {
        return view('vbi.front.daftar');
    }

    public function masuk() {
        return view('vbi.front.masuk');
    }

    public function prosesDaftar() {
        $dataNewMember = array(
            'email' => Input::get('emailTxt')
        );
        
        //print_r($dataNewMember);
        
            echo $hashedpassword = bcrypt('plaintextpassword');
    }

}
