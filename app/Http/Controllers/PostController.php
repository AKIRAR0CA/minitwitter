<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\posts;
use DB;
use Carbon\Carbon;

class PostController extends Controller
{
    public function createPost(Request $request){
     
        DB::table('posts')->insert([
            'user_id'=>$request->user()->id,
            'description'=>$request->description,
            'date_post'=>carbon::now(),
        ]);
        return back()->with('/home','Post Publicado con exito');
    }
    
    
  
    

}
