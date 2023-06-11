<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $data = [];

        $data['title'] = 'All Posts';

        $data['posts'] = cache('posts', function(){
            return  Post::all();
        });

        return view('post.index', $data);
    }

    Public function store(Request $request){

        $inputs = [
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
        ];

        Post::create($inputs);

        return redirect()->back();
    }
}
