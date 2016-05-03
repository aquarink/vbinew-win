<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class TeamriderController extends Controller {

    public function team() {
        return view('vbi.front.team');
    }
    
    public function team_id() {
        return view('vbi.front.teamdetail');
    }
    
}