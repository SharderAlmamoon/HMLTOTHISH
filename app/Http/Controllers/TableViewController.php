<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableViewController extends Controller
{
  public function tablet( Request $request){
      $taview = DB::table('rosetable')->get();
     // dd($taview);exit();
      $data['view'] = $taview;
    //  dd($data);
    return view('table.index',$data);
  }
  public function create(){
      return view('table.create');
  }
  public function store(Request $request){
      $data['titleis']=$request->titleis;
      $data['bodyis']=$request->bodyis;
      $data['addressis']=$request->addressis;
      DB::table('rosetable')->insert($data);
      return redirect('tableview');
  }
   public function edit($id)
   {
   $post = DB::table('rosetable')->where('id',$id)->first();
   // dd($post);
       $data['pp'] = $post;
       return view('table.update',$data);
   }
    public  function update( Request $request,$id){
     //dd($request->all());
        $data['titleis']=$request->titleis;
        $data['bodyis']=$request->bodyis;
        $data['addressis']=$request->addressis;
        DB::table('rosetable')->where('id',$id)->update($data);
       return redirect()->to('tableview');
    }
    public function destroy($id){
      DB::table('rosetable')->where('id',$id)->delete();
      return redirect('tableview');
    }
}
