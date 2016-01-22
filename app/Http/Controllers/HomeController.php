<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Controllers\AppFunction\InitFunction as init;  
class HomeController extends Controller
{
    public function home(){
        $posts = DB::table('posts')->get();
        return view('home')->with('posts',$posts);
    }
    public function welcome(){ 
        return view('welcome');
    }
    public function post($slug){
        $post = DB::table('posts')->where('slug','like',$slug)->first();
        return view('post')->with('post',$post);
    }
    public function test(){
        $faker = \Faker\Factory::create();
        return view('test')->withData($faker);
    }
}