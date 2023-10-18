<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use App\Models\CategoryArticle;
use App\Models\Schedule;
use App\Models\TeamLeague;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function tesEvents()
    {
        $eve = Event::all()
        ->map( fn ($item) => [
            'id' => $item->id,
            'title' => $item->title,
            'start' => $item->start_date,
            'end' => date('Y-m-d',strtotime($item->end_date. '+1 days')),
            'category' => $item->category,
            'className' => ['bg-'. $item->category]
        ]);

        // $events = json_encode(Event::all());
        $events = json_encode($eve);
        dd($events);
    }

    public function testMessage()
    {

        $notifikasi = array(
            'pesan' => 'Artikel berhasil dibuat',
            'alert' => 'warning',
        );

        return redirect('admin/articles')->with($notifikasi);
    }


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

    public function position()
    {
        $positions = DB::select(DB::raw("
            SELECT 
                name AS Team, Sum(P) AS P,Sum(W) AS W,Sum(D) AS D,Sum(L) AS L,
                SUM(F) AS F,SUM(A) AS A,SUM(GD) AS GD,SUM(Pts) AS Pts
                FROM(
                SELECT
                    hteam Team,
                    1 P,
                    IF(hscore > ascore,1,0) W,
                    IF(hscore = ascore,1,0) D,
                    IF(hscore < ascore,1,0) L,
                    hscore F,
                    ascore A,
                    hscore-ascore GD,
                    CASE WHEN hscore > ascore THEN 3 WHEN hscore = ascore THEN 1 ELSE 0 END PTS
                FROM games
                UNION ALL
                SELECT
                    ateam,
                    1,
                    IF(hscore < ascore,1,0),
                    IF(hscore = ascore,1,0),
                    IF(hscore > ascore,1,0),
                    ascore,
                    hscore,
                    ascore-hscore GD,
                    CASE WHEN hscore < ascore THEN 3 WHEN hscore = ascore THEN 1 ELSE 0 END
                FROM games
                ) as tot
                JOIN teams t ON tot.Team=t.id
                GROUP BY Team
                ORDER BY SUM(Pts) DESC
        "));

        return view('admin.dashboards.league', compact('positions'));
    }
}
