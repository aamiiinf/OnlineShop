<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\ExternalEvent;
use App\Models\Setting;
use App\Models\Lang;
use Illuminate\Support\Facades\App;

class CalendarController extends Controller
{
    public function index(Request $request){

        $setting = Setting::find(1);
        $locale = Lang::find(1);
        App::setLocale($locale->lang);
        $externalevents = ExternalEvent::select('id' , 'title' , 'color')->get();

        return view('calendar', compact('setting' , 'externalevents'));
    }

    public function fetch(){

        $data = Event::select('id' , 'title' , 'start' , 'end')->get();
        return response()->json($data);
    }

    public function action(Request $request){

        if($request->ajax()){

            if($request->type == 'add'){

                $event = Event::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end'   => $request->end
                ]);
                return response()->json($event);
            }
            if($request->type == 'update'){

                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end'   => $request->end
                ]);
                return response()->json($event);
            }
            if($request->type == 'delete'){

                $event = Event::find($request->id)->delete();
                return response()->json($event);
            }
            if($request->type == 'addexternalevn'){

                $externalevn = ExternalEvent::create([
                    'title' => $request->title,
                    'color' => $request->color
                ]);
                return response()->json($externalevn);

            }
            if($request->type == 'deletexternalevn'){
                $externalevent = ExternalEvent::find($request->id)->delete();
                return response()->json($externalevent);
            }
        }

    }
}
