<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Article;
use App\Models\Staff;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SquadController extends Controller
{
    public function index()
    {
        $clubId = Schedule::pinnedClub();
        // $teams = Player::selectRaw('id, club_id, level, name, slug, gender, country_id, shirt_number, position_id as position, medium')
        //             ->orderBy('position', 'asc')
        //             ->where('club_id', $clubId)
        //             ->get()
        //             ->groupBy('position');

        $teams = DB::table('players')
                    ->leftJoin('positions', 'players.position_id', '=', 'positions.id')
                    ->select('positions.name as psName', 'players.*')
                    ->orderBy('players.position_id', 'asc')
                    ->where('players.club_id', $clubId)
                    ->get()
                    ->groupBy('psName');

        $staffs = Staff::where('club_id', $clubId)->orderBy('name', 'asc')->get();

        $this->data['teams'] = $teams;
        $this->data['staffs'] = $staffs;
        return $this->loadTheme('team.index', $this->data);
    }

    public function show($slug)
    {
        $player = Player::where('slug', $slug)->first();
        // dd($player);

        // build breadcrumb data array
		$breadcrumbs_data['current_page_title'] = $player->name;
		$breadcrumbs_data['breadcrumbs_array'] = $this->_generate_breadcrumbs_array($player->id);
		$this->data['breadcrumbs_data'] = $breadcrumbs_data;

        // News
        $articles = Article::orderBy('created_at', 'DESC')->limit(5)->get();

        $this->data['articles'] = $articles;
        $this->data['player'] = $player;
        return $this->loadTheme('team.detail', $this->data);
    }

    public function _generate_breadcrumbs_array($id) {
		// $homepage_url = url('/');
		// $breadcrumbs_array[$homepage_url] = 'Home';
		
		// get sub cat title
		$sub_cat_title = 'Teams';
		// get sub cat url
		$sub_cat_url = url('squads');
	
		$breadcrumbs_array[$sub_cat_url] = $sub_cat_title;
		return $breadcrumbs_array;
	}
}
