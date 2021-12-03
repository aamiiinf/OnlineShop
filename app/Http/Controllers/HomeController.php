<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Comment;
use App\Models\Work;
use App\Models\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = count(User::get());
        $post = count(Post::get());
        $setting = Setting::find(1);
        $commends = Comment::all();
        $works = Work::paginate(6);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);
        $is_online = count(User::online()->get());
        $posts = Post::latest()->paginate(10);

        return view('home', compact('user', 'setting', 'commends', 'works', 'post', 'is_online', 'posts'));
    }

      public function online_user()
      {
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);
        $online_users = User::online()->get();
        $user_browser = visitor()->browser();
        $user_platform = visitor()->platform();

        return view('online_user', compact('setting', 'online_users', 'user_platform', 'user_browser'));
      }

     public function visit()
     {
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        return view('visits', compact('setting'));
      }

      public function reports()
      {
         $setting = Setting::find(1);
         $locale = Lang::find(1);
         App::setLocale($locale->lang);

         return view('reports', compact('setting'));
       }


      public function calendar()
      {
        $locale = Lang::find(1);
        App::setLocale($locale->lang);
        $setting = Setting::find(1);

        return view('calendar', compact('setting'));
      }

}
