<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Setting;

class SearchControlle extends Controller
{

    public function AdminSearch(Request $request){

        $setting = Setting::find(1);
        $search = $request->input('search');

        //search in users
        $users = User::query()
        ->where('name' , 'like' , "%{$search}%")
        ->orWhere('email' , 'like' , "%{$search}%")->orderBy('id' , 'desc');
        if($users->count() > 0){
            $users = $users->paginate(10);
            return view('users.index' , compact('users' , 'setting'));
        }

        //search in news
        $posts = Post::query()
        ->where('name' , 'like' , "%{$search}%")
        ->orWhere('discription' , 'like' , "%{$search}%")
        ->orWhere('body' , 'like' , "%{$search}%")
        ->orderBy('id' , 'desc');
        if($posts->count() > 0){
            $posts = $posts->paginate(10);
            return view('posts.index' , compact('posts','setting'));
        }

        //search in categoreis
        $posts = Category::where('name' , 'like' , "%{$search}%");
        if($posts->count() > 0){
            $posts = $posts->first()->posts()->orderBy('id' , 'desc')->paginate(10);
            return view('posts.index' , compact('posts', 'setting'));
        }

        //search in tags
        $posts = Tag::where('title' , 'like' , "%{$search}%")
        ->orWhere('name' , 'like' , "%{$search}%");
        if($posts->count() > 0){
            $posts = $posts->first()->posts()->orderBy('id' , 'desc')->paginate(10);
            return view('posts.index' , compact('posts' , 'setting'));
        }
        else{
            $setting = Setting::find(1);
            return view('NotFound', compact('setting'));
        }
    }

    public function search(Request $request){

        $setting = Setting::find(1);
        $categories = Category::all();
        $tags = Tag::all();
        $search = $request->input('search');
        $posts = post::query()
        ->where('name', 'like', "%{$search}%")
        ->orWhere('body', 'like', "%{$search}%")
        ->orderBy('created_at' , 'desc')->paginate(10);

        return view('front/search' , compact('posts','categories','tags','setting'));

      }
}
