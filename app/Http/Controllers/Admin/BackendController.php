<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function teams(){

        return view("backend.teams");
    }

    public function tournaments(){
        return view("backend.tournaments");
    }

    public function matches(){
        return view("backend.matches");
    }
}
