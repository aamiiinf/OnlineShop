<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Setting;
use App\Models\Lang;
use App\Models\Post;
use App\Models\Category;
use App\Models\Management;
use Flash;

class ManagementController extends Controller
{
  public function index()
  {
    $locale = Lang::find(1);
    App::setLocale($locale->lang);
    $setting = Setting::find(1);
    $management = Management::find(1);
    $categories = Category::all();
    $posts = Post::all();
    $idea = json_decode($management->slider_mangement_3);

    return view('Management', compact('setting', 'categories', 'management', 'posts', 'idea'));
  }

  public function update(Request $request)
  {
    $management = Management::find(1);
    $management->update($request->all());
    $locale = Lang::find(1);

    if ($locale->lang == 'fa') {
      Flash::success('تنظیمات با موفقیت بروز شد.');
    }

    if ($locale->lang == 'en') {
      Flash::success('Setting updated successfully.');
    }

    return redirect(route('management'));
  }
}
