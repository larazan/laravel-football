<?php

namespace App\Http\Controllers;

use App\Models\Matchs;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MatchController extends Controller
{
    public function __construct()
    {
        
    }
    
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

        $dates = Schedule::selectRaw('id, slug, season, competition_id, stadion_id, home_team, away_team, fixture_match, hour, minute, DATE_FORMAT(fixture_match, "%M") as match_date, DATE_FORMAT(fixture_match, "%m") as match_month')
            ->orderBy('match_month', 'asc')
            ->where('season', $perSeason)
            ->get()
            ->groupBy('match_date');

        $this->data['dates'] = $dates;
        return $this->loadTheme('match.index', $this->data);
    }

    public function show($slug)
    {
        $match = Matchs::where('slug', $slug)->get();

        $this->data['match'] = $match;
        return $this->loadTheme('match.detail', $this->data);
    }

    public function lineup($slug)
    {
        return $this->loadTheme('match.lineup');
    }

    public function statistic($slug)
    {
        $statistics = [
            [
              'title' => "Shots",
              'home' => 18,
              'away' => 9,
            ],
            [
              'title' => "Shots on target",
              'home' => 9,
              'away' => 4,
            ],
            [
              'title' => "Possession",
              'home' => "67%",
              'away' => "33%",
            ],
            [
              'title' => "Passes",
              'home' => 637,
              'away' => 316,
            ],
            [
              'title' => "Pass accuracy",
              'home' => "86%",
              'away' => "72%",
            ],
            [
              'title' => "Fouls",
              'home' => 13,
              'away' => 11,
            ],
            [
              'title' => "Yellow cards",
              'home' => 4,
              'away' => 4,
            ],
            [
              'title' => "Red cards",
              'home' => 0,
              'away' => 1,
            ],
            [
              'title' => "Offsides",
              'home' => 3,
              'away' => 2,
            ],
            [
              'title' => "Corners",
              'home' => 11,
              'away' => 3,
            ],
          ];

        $this->data['statistics'] = $statistics;
        return $this->loadTheme('match.statistic', $this->data);
    }
}
