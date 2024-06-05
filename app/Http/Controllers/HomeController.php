<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Article;
use App\Models\Schedule;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->data['categories'] = Category::parentCategories()
			->orderBy('name', 'DESC')
			->get();

        // Schedule
        $monthEvent = 8;
        // $yearEvent = 2023;
        $monthNow = Carbon::now()->format('m');
        $yearNow = Carbon::now()->format('Y');
        $yearEvent = $monthNow < $monthEvent ? $yearNow - 1 : $yearNow;
        $yearNow = $yearEvent;
        
        if ($monthNow < $monthEvent && $yearNow > $yearEvent) {
            $perSeason = $yearNow - 1 . '/' . $yearNow;
        } elseif ($monthNow >= $monthEvent) {
            $perSeason = $yearNow . '/' . $yearNow + 1;
        }

        $schedules = Schedule::selectRaw('id, slug, season, competition_id, stadion_id, home_team, away_team, fixture_match, hour, minute, DATE_FORMAT(fixture_match, "%M") as match_date, DATE_FORMAT(fixture_match, "%m") as match_month')
            ->orderBy('id', 'asc')
            ->where('season', $perSeason)
            ->get();

        $this->data['schedules'] = $schedules;
        
        // Award
        $awards = Award::orderBy('id', 'asc')->get()->groupBy('competition');

        $this->data['awards'] = $awards;

        // News
        $articles = Article::orderBy('created_at', 'DESC')->limit(5)->get();

        $this->data['articles'] = $articles;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $limit = 10;
		// $products = Product::popular()->get();
        // $this->data['products'] = $products;
        $products = Product::active()->orderBy('id', 'DESC')->limit($limit)->get();
        $this->data['products'] = $products;

		$slides = Slide::active()->orderBy('position', 'DESC')->get();
        $this->data['slides'] = $slides;

        return $this->loadTheme('home', $this->data);
    }

}
