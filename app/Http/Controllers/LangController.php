<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lang;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{

      public function en()
      {
        $locale = Lang::find(1);
        $locale->lang = 'en';
        $locale->save();
        return redirect()->back();
      }

      public function fa()
      {
        $locale = Lang::find(1);
        $locale->lang = 'fa';
        $locale->save();
        return redirect()->back();
      }
}
