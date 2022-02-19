<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{
    public function index($id){
        
       // $post=\DB::table('posts')->where('id',$id)->first();

       $post=Post::all();
        
        $data=[

            "post"=>$post

        ];

        return view('post.index',$data);
    }
}
