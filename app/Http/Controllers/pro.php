<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pro extends Controller
{
  public function index(){
    $var = DB::table('pros')->get();
    // echo $var[2]->name;
    return view('show',['var'=>$var[2]->name]);;
    // return "mina";
  }
  public function save(Request $request){
    // dd($request);
    // echo $request->input('in');
    // echo $request->input('editor1');

    // return "mina".$request->in;
    DB::insert('insert into pros (name) values (?)', [$request->ta ]);
  }
}
