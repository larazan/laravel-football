<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Club;
use App\Models\Competition;
use App\Models\Matchs;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MatchController extends Controller
{
    public function __construct()
    {
      $shareComponent = \Share::page(
        'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
        'Your share text comes here',
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->telegram()
    ->whatsapp()        
    ->reddit();

      $this->data['shareComponent'] = $shareComponent;
    }
    
    public function index()
    {
        $monthEvent = 8;
        // $yearEvent = 2023;
        $monthNow = Carbon::now()->format('m');
        $yearNow = Carbon::now()->format('Y');
        $yearEvent = $monthNow < $monthEvent ? $yearNow - 1 : $yearNow;
        // $yearNow = $yearEvent;
        
        if ($monthNow < $monthEvent && $yearNow > $yearEvent) {
            $perSeason = $yearNow - 1 . '/' . $yearNow;
            $season = $yearNow - 1 . '/' . $yearNow;
        } elseif ($monthNow >= $monthEvent) {
            $perSeason = $yearNow . '/' . $yearNow + 1;
            $season = $yearNow . '/' . $yearNow + 1;
        }

        // dd($perSeason);

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
      $s = explode('_', $slug);
      
      $schedule = Schedule::where('slug', $slug)->first();
      $season = $schedule->season;
      $competition_id = $schedule->competition_id;
      $home = $schedule->home_team;
      $away = $schedule->awaay_team;

      $limit = 6;
      $this->data['articles'] = Article::active()->where('slug', '!=', $slug)->orderBy('id', 'DESC')->limit($limit)->get();

      $competiton = Competition::where('id', $competition_id)->first();
      $home_team = Club::where('id', $home)->first();
      $away_team = Club::where('id', $away)->first();

      $this->data['schedule'] = $schedule;
      $this->data['season'] = $season;
      $this->data['competiton'] = $competiton;
      $this->data['home_team'] = $home_team;
      $this->data['away_team'] = $away_team;
      $this->data['slug'] = $slug;

      return $this->loadTheme('match.detail', $this->data);
    }

    public function lineup($slug)
    {
      $HomePlayerData = collect([
        [
          'number' => 13,
          'name' => "lunin",
          'position' => "posGK",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "lunin",
        ],
        [
          'number' => 2,
          'name' => "carvajal",
          'position' => "posRB",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "carvajal",
        ],
        [
          'number' => 22,
          'name' => "rudiger",
          'position' => "posRCB",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "rudiger",
        ],
        [
          'number' => 6,
          'name' => "nacho",
          'position' => "posLCB",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "nacho",
        ],
        [
          'number' => 23,
          'name' => "Mendy",
          'position' => "posLB",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "mendy",
        ],
        [
          'number' => 18,
          'name' => "tchouameni",
          'position' => "posRCM",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "tchouameni",
        ],
        [
          'number' => 8,
          'name' => "kroos",
          'position' => "posLCM",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "kroos",
        ],
        [
          'number' => 15,
          'name' => "valverde",
          'position' => "posRW",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "valverde",
        ],
        [
          'number' => 5,
          'name' => "bellingham",
          'position' => "posLW",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => true,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "bellingham",
        ],
        [
          'number' => 21,
          'name' => "diaz",
          'position' => "posRCF",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => true,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "diaz",
        ],
        [
          'number' => 11,
          'name' => "rodrigo",
          'position' => "posLCF",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => true,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "rodrigo",
        ],
      ]);
    
      $HomeSubsData = collect([
        [
          'number' => 14,
          'name' => "joselu",
          'position' => "posGK",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "joselu",
        ],
        [
          'number' => 12,
          'name' => "eduardo camavinga",
          'position' => "posGK",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "camavinga",
        ],
        [
          'number' => 17,
          'name' => "lucas vasquez",
          'position' => "posGK",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "vasquez",
        ],
        [
          'number' => 10,
          'name' => "luca modric",
          'position' => "posGK",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "modric",
        ],
        [
          'number' => 3,
          'name' => "eder militao",
          'position' => "posGK",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "militao",
        ],
      ]);
    
      $AwayPlayerData = collect([
        [
          'number' => 13,
          'name' => "agirrezabala",
          'position' => "posGK",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "agirrezabala",
        ],
        [
          'number' => 18,
          'name' => "de marcos",
          'position' => "posRB",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "marcos",
        ],
        [
          'number' => 5,
          'name' => "alvarez",
          'position' => "posRCB",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "alvarez",
        ],
        [
          'number' => 4,
          'name' => "paredes",
          'position' => "posLCB",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "paredes",
        ],
        [
          'number' => 15,
          'name' => "lekue",
          'position' => "posLB",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "lekue",
        ],
        [
          'number' => 6,
          'name' => "vesga",
          'position' => "posRCM",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "vesga",
        ],
        [
          'number' => 24,
          'name' => "prados",
          'position' => "posLCM",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "prados",
        ],
        [
          'number' => 9,
          'name' => "williams",
          'position' => "posRW",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "williams",
        ],
        [
          'number' => 8,
          'name' => "sancet",
          'position' => "posAM",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "sancet",
        ],
        [
          'number' => 7,
          'name' => "berenguer",
          'position' => "posLW",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "berenguer",
        ],
        [
          'number' => 12,
          'name' => "guruzeta",
          'position' => "posST",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "guruzeta",
        ],
      ]);
    
      $AwaySubsData = collect([
        [
          'number' => 3,
          'name' => "daniel vivian",
          'position' => "posGK",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "vivian",
        ],
        [
          'number' => 16,
          'name' => "inigo ruiz de galarreta",
          'position' => "posGK",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "inigo",
        ],
        [
          'number' => 17,
          'name' => "yuri berchiche",
          'position' => "posGK",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "yuri",
        ],
        [
          'number' => 23,
          'name' => "malcom ares",
          'position' => "posGK",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "ares",
        ],
        [
          'number' => 10,
          'name' => "iker munian",
          'position' => "posGK",
          'rate' => 7.7,
          'subs' => 81,
          'assist' => false,
          'goal' => false,
          'yellowCard' => false,
          'redCard' => false,
          'img' => "munian",
        ],
      ]);
    
      $officialData = collect([
        [
          'name' => "jumpei lida",
          'pos' => "referee",
        ],
        [
          'name' => "kota watanabe",
          'pos' => "lineman",
        ],
        [
          'name' => "takeshi asada",
          'pos' => "lineman",
        ],
        [
          'name' => "yuichi nishimura",
          'pos' => "fourth official",
        ],
        [
          'name' => "akihiko ikeuchi",
          'pos' => "VAR official",
        ],
        [
          'name' => "hayato shimizu",
          'pos' => "VAR assistant",
        ],
      ]);

      $this->data['slug'] = $slug;
      $this->data['HomePlayerData'] = $HomePlayerData;
      $this->data['HomeSubsData'] = $HomeSubsData;
      $this->data['AwayPlayerData'] = $AwayPlayerData;
      $this->data['AwaySubsData'] = $AwaySubsData;
      $this->data['officialData'] = $officialData;

      return $this->loadTheme('match.lineup', $this->data);
    }

    public function statistic($slug)
    {
        $statistics = collect([
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
          ]);

        $this->data['slug'] = $slug;
        $this->data['statistics'] = $statistics;
        return $this->loadTheme('match.statistic', $this->data);
    }
}
