<?php

namespace App\Http\Controllers;

use App\{Country, Category, Image, Post};
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function create(){
        $categories = Category::pluck('category_name', 'id');
        $countries = Country::pluck('name', 'id');
        return view('front.addPost', compact('categories'), compact('countries'));
    }
    public function store(Request $request){
      $post = Post::create($request->all() + ['user_id' => $request->user()->id ]);
      foreach ($request->images as $img) {
          $filename = $img->store('public/img');
          $image = new Image();
          $image->image = basename($filename);
          $post->images()->save($image);
      }
      return back()->with('success', 'تم إضافة الإعلان');
    }
}
