<?php

namespace App\Http\Controllers;
use DB;
use App\principalModel;
use Illuminate\Http\Request;

class principalController extends Controller{
    public function index(){
        $nombre="no hay xd";
        return view('principal',compact("nombre"));
    }
}
