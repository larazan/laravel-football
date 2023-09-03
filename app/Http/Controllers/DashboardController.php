<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $seasonNow = Carbon::now()->format('Y') . '/' . Carbon::now()->format('Y') + 1;

        $dates = Schedule::selectRaw('id, slug, season, competition_id, stadion_id, home_team, away_team, fixture_match, hour, minute, DATE_FORMAT(fixture_match, "%M") as match_date')
        ->orderBy('match_date', 'asc')
        ->where('season', $seasonNow)
        ->get()
        ->groupBy('match_date');

        // dd($dates);

        return view('admin.dashboards.index', compact('dates'));
    }
}
