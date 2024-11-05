<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
     
    //
 
    public function show(){
        $users = DB::table('students')->paginate(6) ;
        return view('welcome',['data'=>$users]) ;
    }

    public function Deleteuser($id){
       DB::table('students')->where('student_id',$id)->delete() ;
       return redirect('/') ;
    }

    public function Edituser($id){
       $user = DB::table('students')->where('student_id',$id)->get() ;
        return view('edituser' , ['user'=>$user]) ;
     }
     public function Edit( Request $req  ,  $id){
        DB::table('students')->where('student_id',$id)->update([
                    'username'=>$req->username, 
                    'email' =>$req->email,  
                    'password'=>$req->password 
        ]); 
        return redirect('/') ;
     }
     
     public function Adduser(Request $req ){
        DB::table('students')->insert([
            'username'=>$req->username, 
            'email' =>$req->email,  
            'password'=>$req->password 
]); 
   return redirect('/') ;
     }
}
