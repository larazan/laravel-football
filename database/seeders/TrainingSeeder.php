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
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Outfield',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Goalkeeping',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Attacking',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Possession',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Defending',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Tactical',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 1,
                'name' => 'Physical',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 2,
                'name' => 'Match Tactics',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 2,
                'name' => 'Teamwork',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 2,
                'name' => 'Defensive Shape',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 2,
                'name' => 'Attacking Movement',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 2,
                'name' => 'Match Practice',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 3,
                'name' => 'Attacking Wings',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 3,
                'name' => 'Attacking Patient',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 3,
                'name' => 'Attacking Direct',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 3,
                'name' => 'Attacking Overlap',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 4,
                'name' => 'Defending Engage',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 4,
                'name' => 'Defending Disengage',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 4,
                'name' => 'Defending Wide',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 4,
                'name' => 'Ground Defense',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 4,
                'name' => 'Aerial Defense',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 4,
                'name' => 'Defending From',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 5,
                'name' => 'Chance Conversion',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 5,
                'name' => 'Chance Creation',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 5,
                'name' => 'Ball Distribution',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 5,
                'name' => 'Transition',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 5,
                'name' => 'Transition',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 5,
                'name' => 'Ball Retention',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 5,
                'name' => 'Play from',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 6,
                'name' => 'Attacking Shadow Play',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 6,
                'name' => 'Defensive Shadow Play',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 7,
                'name' => 'Shot Stopping',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 7,
                'name' => 'Handling',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 7,
                'name' => 'One-On-Ones',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 7,
                'name' => 'Distribution',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 8,
                'name' => 'Attacking Free-Kicks',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 8,
                'name' => 'Attacking Corners',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 8,
                'name' => 'Defending Free-Kicks',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 8,
                'name' => 'Defending Corners',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 8,
                'name' => 'Penalties',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 8,
                'name' => 'Set Piece Deliveries',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 9,
                'name' => 'Endurance',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 9,
                'name' => 'Resistance',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 9,
                'name' => 'Quickness',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 9,
                'name' => 'Recovery',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 9,
                'name' => 'Rest',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],

            [
                'training_type_id' => 10,
                'name' => 'Community Outreach',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'training_type_id' => 10,
                'name' => 'Team bonding',
                'focus' => '',
                'created_at' => Carbon::now(),
            ],
        ];

        TrainingSession::insert($training_sessions);
    }
}
