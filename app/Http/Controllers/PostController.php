<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name; 
        }

        return view('posts', [
            'title' => 'All Posts' . $title,
            "active" => 'posts',
            // 'posts' => Post::all()
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
            // 'posts' => $Post::latest()
        ]);   
    }

    public function show(Post $post){
            return view('post', [
            "title" => "single post",
            "active" => 'post',
            "post" => $post
        ]);
    }
}
