<?php

namespace Database\Seeders;

use App\Models\TrainingSession;
use App\Models\TrainingType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $training_types = [
            [
                'name' => 'General',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Match Preparation',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Attacking',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Defending',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Technical',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Tactical',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Goalkeeping',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Set Pieces',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Physical',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'Extra-Curricular',
                'created_at' => Carbon::now(),
            ],
        ];

        TrainingType::insert($training_types);

        $training_sessions = [
            [
                'training_type_id' => 1,
                'name' => 'Overall',
                'focus' => 'A holistic session where the players put a small amount of work into every area of their game. Performed as a team',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Outfield',
                'focus' => 'A holistic session where the outfield players put a small amount of work into each aspect of the Technical and Mental',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Goalkeeping',
                'focus' => 'A holistic session where the goalkeeper put a small amount of work into every aspect of their game. Performed as a team',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Attacking',
                'focus' => 'A session focused on the attacking side of the game. Performed as a team',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Possession',
                'focus' => 'A session focused on ball possesion. Performed as a team',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Defending',
                'focus' => 'A session focused on the defensive side of the game. Performed as a team',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Tactical',
                'focus' => 'A session focused on the tactical side of the game. Performed as a team',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Physical',
                'focus' => 'A session focused on the physical work. Performed as a team',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 2,
                'name' => 'Match Tactics',
                'focus' => 'A session fully focused on preparing the team tactically for the upcoming match',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 2,
                'name' => 'Teamwork',
                'focus' => 'A session dedicated to molding individuals into an effective team ahead of the upcoming match',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 2,
                'name' => 'Defensive Shape',
                'focus' => 'A session focused on the defensive unit and the roles they will play in the upcoming match',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 2,
                'name' => 'Attacking Movement',
                'focus' => 'A session focused on the attacking unit and the roles they will play in the upcoming match',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 2,
                'name' => 'Match Practice',
                'focus' => 'A full 11-a-side practice match with a focus on the next fixture',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 3,
                'name' => 'Attacking Wings',
                'focus' => 'A session dedicated to effective wing play. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 3,
                'name' => 'Attacking Patient',
                'focus' => 'A session dedicated to patient attacking approach. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 3,
                'name' => 'Attacking Direct',
                'focus' => 'A session dedicated to a direct attacking approach. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 3,
                'name' => 'Attacking Overlap',
                'focus' => 'A session focused on attacking overlapping play in wide areas',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 4,
                'name' => 'Defending Engaged',
                'focus' => 'A session dedicated to engaging the . Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 4,
                'name' => 'Defending Disengaged',
                'focus' => 'A session dedicated to maintaining defensive shape out of possesion. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 4,
                'name' => 'Defending Wide',
                'focus' => 'A session dedicated to maintaining defending from wide side areas. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 4,
                'name' => 'Ground Defense',
                'focus' => 'Specific work on defending with the ball on the floor. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 4,
                'name' => 'Aerial Defense',
                'focus' => 'Specific work focused on defending with the ball in the air. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 4,
                'name' => 'Defending From',
                'focus' => 'A session focused on defending while out of possesion. with a particular focus on the forwards',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 5,
                'name' => 'Chance Conversion',
                'focus' => 'Specific work on converting chance into goals. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 5,
                'name' => 'Chance Creation',
                'focus' => 'Specific work on creating goalscoring chances . Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 5,
                'name' => 'Ball Distribution',
                'focus' => 'Specific work on distribution and keeping the ball effectively. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 5,
                'name' => 'Transition - Press',
                'focus' => 'Specific work on transitioning from defense to attacking through pressing the opponent. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 5,
                'name' => 'Transition - Restric',
                'focus' => 'Specific work on transitioning to defense after losing possesion by restricting the space in which the opposition can play. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 5,
                'name' => 'Ball Retention',
                'focus' => 'Specific work on keeping the ball. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 5,
                'name' => 'Play from the back',
                'focus' => 'A session focused on developing technical play from defensive areas',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 6,
                'name' => 'Attacking Shadow Play',
                'focus' => 'Specific work on the tactical and mental side of the attacking phase. Split into positional units',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 6,
                'name' => 'Defensive Shadow Play',
                'focus' => 'Specific work on the tactical and mental side of the defensive phase. Split into positional units',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 7,
                'name' => 'Shot Stopping',
                'focus' => 'A goalkeeper-specific session focused on shot stopping. Outheld units work on their player roles',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 7,
                'name' => 'Handling',
                'focus' => 'A goalkeeper-specific session focused on handling. Outheld units work on their player roles',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 7,
                'name' => 'One-On-Ones',
                'focus' => 'A goalkeeper-specific session focused on one-on-one situations. Outheld units work on their player roles',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 7,
                'name' => 'Distribution',
                'focus' => 'A goalkeeper-specific session focused on ball distribution. Outheld units work on their player roles',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 8,
                'name' => 'Attacking Free-Kicks',
                'focus' => 'A session focused on the conversion of attacking free kicks into goals',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 8,
                'name' => 'Attacking Corners',
                'focus' => 'A session focused on the conversion of attacking corners into goals',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 8,
                'name' => 'Defending Free-Kicks',
                'focus' => 'A session focused on defending against free kicks',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 8,
                'name' => 'Defending Corners',
                'focus' => 'A session focused on defending against corners',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 8,
                'name' => 'Penalties',
                'focus' => 'A session focused on penalties',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 8,
                'name' => 'Set Piece Deliveries',
                'focus' => 'A session focused on the delivery of set pieces',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 9,
                'name' => 'Endurance',
                'focus' => 'A specialized session focused on the players endurance and fitness. Performed as a team',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 9,
                'name' => 'Resistance',
                'focus' => 'A specialized session in the gym, focused on the players power and strength. Performed as a team',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 9,
                'name' => 'Quickness',
                'focus' => 'A specialized session focused on speed. Performed as a team',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 9,
                'name' => 'Recovery',
                'focus' => 'A specialized session where the team spend time with the medical staff, focused on recovery and injury prevention. Performed as a team',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 9,
                'name' => 'Rest',
                'focus' => 'The players are given rest from training',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 10,
                'name' => 'Community Outreach',
                'focus' => 'Time devoted to connecting with the local community and performing charitable duties. Conducted as a team',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 10,
                'name' => 'Team bonding',
                'focus' => 'Time devoted to social activities in which the whole team participates',
                'created_at' => Carbon::now(),
            ],
        ];

        TrainingSession::insert($training_sessions);
    }
}
