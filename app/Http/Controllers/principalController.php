<?php

namespace App\Http\Controllers;
use DB;
use App\principalModel;
use Illuminate\Http\Request;

class principalController extends Controller{
    public function index(){
        ini_set('max_execution_time', 180);
        $nombre="no hay xd";
        return view('principal',compact("nombre"));
    }
}
