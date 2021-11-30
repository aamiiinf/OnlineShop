<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\Setting;
use App\Models\Management;
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
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        $tags = Tag::all();
        $posts = Post::all();
        $management = Management::find(1);
        $idea_1 = $management->slider_mangement_1;
        $idea_2 = $management->slider_mangement_2;
        $idea_3 = json_decode($management->slider_mangement_3);

        return view('front/index', compact(
          'idea_1',
          'idea_2',
          'idea_3',
          'setting',
          'categories',
          'tags',
          'posts',
          'subcategories'
        ));
    }

    public function post($id)
    {
        $categories = Category::all();
        $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();
        $setting = Setting::find(1);
        $comments = Comment::all();
        $tags = Tag::all();
        $posts = Post::all();
        $post = Post::find($id);
        $post->hit +=1;
        $post->update();
        $posts_category = $post->categories()->pluck('name');

        return view('front/single', compact(
          'subcategories',
          'categories',
          'comments',
          'setting',
          'tags',
          'posts',
          'post',
          'posts_category'
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
      $categories = Category::all();
      $subcategories = Category::with('parent')->whereNotNull('parent_id')->get();

      return view('front/Cart', compact('setting', 'subcategories', 'categories'));
    }
}
