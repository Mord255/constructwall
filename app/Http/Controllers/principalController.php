<?php

namespace App\Http\Controllers;
use DB;
use App\principalModel;
use Illuminate\Http\Request;

class principalController extends Controller{
    public function index(){
        return view('home');
    }
}
