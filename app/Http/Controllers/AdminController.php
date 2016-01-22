<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AdminController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

   public function dashboard(){
   	 return view('admin.dashboard');
   }
   public function users(){
   	 $users = DB::table('users')->get();
   	 return view('admin.users.list')->with('users',$users);
   }
   public function blog(){
   	 $posts = DB::table('posts')->get();
   	 return view('admin.blog.list')->with('posts',$posts);
   }
}
