<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
   public function view(){
       $data = DB::table('students')->get();
       $date['all']=$data;
       //dd($date);
       return view('student.index',$date);
   }
   public function create(){
       return view('student.create');
   }
   public function store(Request $request){
       $request->validate([
           'name' => 'required',
           'date_of_birth'=>'required',
           'phone'=>'required',
           'email'=>'required',
       ]);
       $a['name']=$request->name;
       $a['date_of_birth']=$request->date_of_birth;
       $a['phone']=$request->phone;
       $a['email']=$request->email;
       $a['created_at']=now();
       DB::table('students')->insert($a);
       return redirect()->to('student');
   }
   public function edit($id){
       $p=DB::table('students')->where('id',$id)->first();
       $stud['all']=$p;
       return view('student.edit',$stud);
   }
   public function updated(Request $request,$id){
       $request->validate([
           'name' => 'required',
           'date_of_birth'=>'required',
           'phone'=>'required',
           'email'=>'required',
       ]);
       $as['name']=$request->name;
       $as['date_of_birth']=$request->date_of_birth;
       $as['phone']=$request->phone;
       $as['email']=$request->email;
       $as['updated_at']=now();
       // dd($as);
       DB::table('students')->where('id',$id)->update($as);
       return redirect()->to('student');
   }
   public function delete($id){
       DB::table('students')->where('id',$id)->delete();
       return redirect('student');
   }
}
