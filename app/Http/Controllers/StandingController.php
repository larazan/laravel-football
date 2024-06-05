<?php

namespace App\Http\Controllers;

use App\Models\TeamLeague;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StandingController extends Controller
{
    //
    public function index()
    {
        $monthEvent = 8;
        // $yearEvent = 2023;
        $monthNow = Carbon::now()->format('m');
        $yearNow = Carbon::now()->format('Y');
        $yearEvent = $monthNow < $monthEvent ? $yearNow - 1 : $yearNow;
        $yearNow = $yearEvent;
        
        if ($monthNow < $monthEvent && $yearNow > $yearEvent) {
            $perSeason = $yearNow - 1 . '/' . $yearNow;
            $season = $yearNow - 1 . '/' . $yearNow;
        } elseif ($monthNow >= $monthEvent) {
            $perSeason = $yearNow . '/' . $yearNow + 1;
            $season = $yearNow . '/' . $yearNow + 1;
        }

        $teams = TeamLeague::where('season', $perSeason)->orderBy('total_points', 'desc')->get();

        $this->data['teams'] = $teams;
        return $this->loadTheme('standing.index', $this->data);
    }
}
