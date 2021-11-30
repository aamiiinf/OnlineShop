<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Lang;
use App\Models\Setting;
use Flash;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);

        return view('setting.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $locale = Lang::find(1);

        if (empty($request->title)) {
          if ($locale->lang == 'fa') {
            Flash::error('عنوان وارد نشده');
          }

          if ($locale->lang == 'en') {
            Flash::error('Title not fuond');
          }

            return redirect(route('setting'));
        }
        if (empty($request->descrption)) {
          if ($locale->lang == 'fa') {
            Flash::error('توضیحات توصیف نشده است');
          }

          if ($locale->lang == 'en') {
            Flash::error('Descrption not fuond');
          }

            return redirect(route('setting'));
        }
        if (empty($request->file)) {
          if ($locale->lang == 'fa') {
            Flash::error('فایل پیدا نشد');
          }

          if ($locale->lang == 'en') {
            Flash::error('File not fuond');
          }

            return redirect(route('setting'));
        }
        if (empty($request->google)) {
          if ($locale->lang == 'fa') {
            Flash::error('شناسه ردیابی Google Analytics پیدا نشد');
          }

          if ($locale->lang == 'en') {
            Flash::error('Google Analytics Tracking ID not fuond');
          }

            return redirect(route('setting'));
        }
        if (empty($request->email)) {
          if ($locale->lang == 'fa') {
            Flash::error('ایمیل وارد نشده');
          }

          if ($locale->lang == 'en') {
            Flash::error('Email not fuond');
          }

            return redirect(route('setting'));
        }
        if (empty($request->number)) {
          if ($locale->lang == 'fa') {
            Flash::error('شماره تلفن وارد نشده');
          }

          if ($locale->lang == 'en') {
            Flash::error('Number not fuond');
          }

            return redirect(route('setting'));
        }


        $setting = Setting::find(1);
        $setting->update($request->all());

        if ($locale->lang == 'fa') {
          Flash::success('تنظیمات با موفقیت بروز شد.');
        }

        if ($locale->lang == 'en') {
          Flash::success('Setting updated successfully.');
        }
        return redirect(route('setting'));
    }

    public function sun()
    {
      $setting = Setting::find(1);
      $setting->color = 1;
      $setting->save();
      return redirect()->back();
    }

    public function moon()
    {
      $setting = Setting::find(1);
      $setting->color = 2;
      $setting->save();
      return redirect()->back();
    }
}
