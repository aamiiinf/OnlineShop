<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function UserChart(Request $request){
    
        $days = $request->input('days' , 30);

        $range = Carbon::now()->subDays($days);
        
        $stats = User::where('created_at', '>=', $range)
        ->groupBy('date')
        ->orderBy('date', 'ASC')
        ->get([
            DB::raw('Date(created_at) as date'),
            DB::raw('COUNT(*) as users')
        ]);
        return json_encode($stats);
    }

    public function PostChart(Request $request){

        $days = $request->input('days' , 30);

        $range = Carbon::now()->subDays($days);

        $stats = Post::where('created_at' , '>=' , $range)
        ->groupBy('date')
        ->orderBy('date' , 'ASC')
        ->get([
            DB::raw('Date(created_at) as date'),
            DB::raw('COUNT(hit) as posts')
        ]);
        return json_encode($stats);
    }
}
