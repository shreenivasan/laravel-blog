<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $posts = Post::orderBy('updated_at','desc')->get();
        return view('pages.index')->withPosts($posts);
    }
    
    public function about(){
        return view('pages.about');
    }
    
    public function contact(){
        return view('pages.contact');
    }
}
