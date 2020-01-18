<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnotherWayTable extends Controller
{
  public function views(){
      $date = DB::table('again')->get();
     // dd($date); exit();
      $data['viewon']=$date;
      //dd($data);
      return view('data.index',$data);
  }
  public function create(){
      return view('data.create');
  }
  public function store(Request $request){
      //dd($request);
      $data['name']=$request->name;
      $data['email']=$request->email;
      $data['document']=$request->document;
     // dd($data);
      DB::table('again')->insert($data);
      return redirect('view');
  }
 public function update($id){
    // dd($id);
     $date = DB::table('again')->where('id',$id)->first();
     //dd($date);exit();
     $data['stmp']=$date;
     return view('data.update',$data);
 }
 public function edit(Request $request,$id){
     $data['name']=$request->name;
     $data['email']=$request->email;
     $data['document']=$request->document;
     DB::table('again')->where('id',$id)->update($data);
    return redirect()->to('view');
 }
 public function delete($id){
      DB::table('again')->where('id',$id)->delete();
      return redirect()->to('view');
 }
}
