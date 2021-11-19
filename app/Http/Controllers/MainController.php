<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\Setting;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;

class MainController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        $setting->hit +=1;
        $setting->update();
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::all();
        $posts_a = Post::orderBy('id', 'DESC')->paginate(10);
        $posts_b = Post::orderBy('id', 'DESC')->paginate(4);
        $posts_c = Post::orderBy('id', 'DESC')->paginate(9);

        return view('front/index', compact('setting', 'categories', 'posts_a', 'posts_b', 'posts_c', 'tags', 'posts'));
    }

    public function post($id)
    {
        $categories = Category::all();
        $comments = Comment::all();
        $tags = Tag::all();
        $posts = Post::all();
        $posts_a = Post::orderBy('id', 'DESC')->paginate(10);
        $setting = Setting::find(1);
        $post_dd = Post::find($id);
        $post = Post::find($id);
        $post->hit +=1;
        $post->update();
        $posts_category = $post_dd->categories()->pluck('name');
        $v = new Verta($post_dd->created_at);

        return view('front/single-page', compact(
          'post_dd',
          'categories',
          'setting',
          'tags',
          'posts',
          'posts_a',
          'posts_category',
          'comments',
          'v'
        ));
    }

    public function category($id)
    {
      $setting = Setting::find(1);
      $categories = Category::all();
      $tags = Tag::all();
      $posts = Category::find($id)->posts()->get();

      return view('front/category_page', compact('setting', 'categories', 'tags', 'posts'));
    }

    public function tag($id)
    {
      $setting = Setting::find(1);
      $categories = Category::all();
      $tags = Tag::all();
      $posts = Post::all();
      $tag = Tag::find($id);

      return view('front/tag_page', compact('setting', 'categories', 'tags', 'posts', 'tag'));
    }

    public function contact()
    {
      $setting = Setting::find(1);
      $categories = Category::all();
      $tags = Tag::all();
      $posts = Post::all();
      $posts_a = Post::orderBy('id', 'DESC')->paginate(10);

      return view('front/contact', compact('setting', 'tags', 'categories', 'posts', 'posts_a'));
    }
    public function about()
    {
      $setting = Setting::find(1);
      $categories = Category::all();
      $tags = Tag::all();
      $posts = Post::all();
      $posts_a = Post::orderBy('id', 'DESC')->paginate(10);

      return view('front/about', compact('setting', 'tags', 'categories', 'posts', 'posts_a'));
    }
    public function cart()
    {
      $setting = Setting::find(1);

      return view('front/Cart', compact('setting'));
    }
}
