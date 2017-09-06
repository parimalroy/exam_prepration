<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.homeContent');
    }
    public function questionDetails(){
        return view('frontEnd.question.questionContent');
    }
}
