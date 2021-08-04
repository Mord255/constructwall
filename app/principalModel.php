<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class principalModel extends Model{
    public static function logearUsuario($data){
        $sql = "CALL sp_nombre_sesion(?)";
        $result=DB::select($sql,[$data]);
        return $result;
    }
}
