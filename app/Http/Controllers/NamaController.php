<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaController extends Controller
{
   public function index (){
    return view ('forminputnama');
   }
   public function savecreate(Request $request){
    DB::table('table_profile') -> insert({
        'Nama' -> $request['xNama'],
        'TTL' -> $request['xTTL'],
        'Alamat' -> $request['xAlamat'],
        'Agama' -> $request['xAgama'],
        'Hobi' -> $request['xHobi'],
    });
   public function read(){
    $data = DB::table('table_profile') -> get({
        return view('daftarnama',compact('data'));
    }
    public function update($id){
    $data = DB::table('table_profile') -> where('id",$id)->get();
    return view('formupdatenama');
    }
   }