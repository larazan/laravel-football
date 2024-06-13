<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesController extends Controller
{
    //
    public function index()
    {
        $sql = DB::select('
        select *,(3*WIN+Draw) as Points
from
(
select M.teamname,M.seasonyear,M.leaguename,
home_matches+away_matches as Matches,
Home_wins+away_wins as WIN,
Home_loss+away_loss as Loss,
Home_draw+away_draw as Draw,
home_goals_scored+away_goals_scored as Goal_Scored,
home_goals_conceded+away_goals_conceded as Goal_conceded,
(home_goals_scored+away_goals_scored)-(home_goals_conceded+away_goals_conceded) as Goal_Difference
from 

(
select a.teamname,c.seasonyear,d.leaguename,
count(distinct b.match_id) as home_matches,
count(distinct case when homescore>awayscore then b.match_id else null end) as Home_wins,
count(distinct case when homescore<awayscore then b.match_id else null end) as Home_loss,
count(distinct case when homescore=awayscore then b.match_id else null end) as Home_draw,
sum(HomeScore) as home_goals_scored,
sum(awayScore) as home_goals_conceded,
sum(HomeScore)-sum(awayScore) as home_goal_difference

from team as a
left join match_level as b
on a.TEAMID=b.HomeTeamID
left join season as c
on b.seasonid=c.SeasonID
left join league as d
on b.leagueid=d.LeagueID
where seasonyear= @season
and LeagueName= @league
group by 1,2
order by 5 desc) as M

left join 
(
select a.teamname,c.seasonyear,d.leaguename,
count(distinct b.match_id) as away_matches,
count(distinct case when awayscore>homescore then b.match_id else null end) as Away_wins,
count(distinct case when awayscore<homescore then b.match_id else null end) as Away_loss,
count(distinct case when awayscore=homescore then b.match_id else null end) as Away_draw,
sum(AwayScore) as away_goals_scored,
sum(homeScore) as away_goals_conceded,
sum(AwayScore)-sum(homeScore) as away_goal_difference

from team as a
left join match_level as b
on a.TEAMID=b.AwayTeamID
left join season as c
on b.seasonid=c.SeasonID
left join league as d
on b.leagueid=d.LeagueID
where seasonyear= @season
and LeagueName= @league
group by 1,2
order by 5 desc) as N
on M.teamname=N.teamname
and M.seasonyear=N.seasonyear
and M.leaguename=N.leaguename
) as P
order by points desc
        ');

    $sql2 = DB::select('
    select 
    team, 
    count(*) played, 
    count(case when goalsfor > goalsagainst then 1 end) wins, 
    count(case when goalsagainst> goalsfor then 1 end) lost, 
    count(case when goalsfor = goalsagainst then 1 end) draws, 
    sum(goalsfor) goalsfor, 
    sum(goalsagainst) goalsagainst, 
    sum(goalsfor) - sum(goalsagainst) goal_diff,
    sum(
          case when goalsfor > goalsagainst then 3 else 0 end 
        + case when goalsfor = goalsagainst then 1 else 0 end
    ) score 
from (
    select hometeam team, goalsfor, goalsagainst from scores 
  union all
    select awayteam, goalsagainst, goalsfor from scores
) a 
group by team
order by score desc, goal_diff desc;
    ');
    }
}
