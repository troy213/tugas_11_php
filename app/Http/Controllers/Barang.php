<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Barang extends Controller
{
    public function getData(){
      $data = DB::table('tbl_katalog')->get();
      if(count($data) > 0){
        $res['message'] = "Success!";
        $res['value'] = $data;
        return response($res);
      }else{
        $res['message'] = "Empty!";
        return response($res);
      }
    }
}
