<?php

namespace Database\Seeders;

use App\Models\Timezone;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimezoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            [
                'value' => 'Etc/GMT+12',
                'text' => '(GMT-12:00) International Date Line West',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Pacific/Midway',
                'text' => '(GMT-11:00) Midway Island, Samoa',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Pacific/Honolulu',
                'text' => '(GMT-10:00) Hawaii',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'US/Alaska',
                'text' => '(GMT-09:00) Alaska',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Los_Angeles',
                'text' => '(GMT-08:00) Pacific Time (US & Canada)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Tijuana',
                'text' => '(GMT-08:00) Tijuana, Baja California',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'US/Arizona',
                'text' => '(GMT-07:00) Arizona',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Chihuahua',
                'text' => '(GMT-07:00) Chihuahua, La Paz, Mazatlan',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'US/Mountain',
                'text' => '(GMT-07:00) Mountain Time (US & Canada)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Managua',
                'text' => '(GMT-06:00) Central America',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'US/Central',
                'text' => '(GMT-06:00) Central Time (US & Canada)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Mexico_City',
                'text' => '(GMT-06:00) Guadalajara, Mexico City, Monterrey',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Canada/Saskatchewan',
                'text' => '(GMT-06:00) Saskatchewan',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Bogota',
                'text' => '(GMT-05:00) Bogota, Lima, Quito, Rio Branco',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'US/Eastern',
                'text' => '(GMT-05:00) Eastern Time (US & Canada)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'US/East-Indiana',
                'text' => '(GMT-05:00) Indiana (East)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Canada/Atlantic',
                'text' => '(GMT-04:00) Atlantic Time (Canada)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Caracas',
                'text' => '(GMT-04:00) Caracas, La Paz',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Manaus',
                'text' => '(GMT-04:00) Manaus',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Santiago',
                'text' => '(GMT-04:00) Santiago',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Canada/Newfoundland',
                'text' => '(GMT-03:30) Newfoundland',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Sao_Paulo',
                'text' => '(GMT-03:00) Brasilia',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Argentina/Buenos_Aires',
                'text' => '(GMT-03:00) Buenos Aires, Georgetown',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Godthab',
                'text' => '(GMT-03:00) Greenland',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Montevideo',
                'text' => '(GMT-03:00) Montevideo',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'America/Noronha',
                'text' => '(GMT-02:00) Mid-Atlantic',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Atlantic/Cape_Verde',
                'text' => '(GMT-01:00) Cape Verde Is.',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Atlantic/Azores',
                'text' => '(GMT-01:00) Azores',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Africa/Casablanca',
                'text' => '(GMT+00:00) Casablanca, Monrovia, Reykjavik',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Etc/Greenwich',
                'text' => '(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Europe/Amsterdam',
                'text' => '(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Europe/Belgrade',
                'text' => '(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Europe/Brussels',
                'text' => '(GMT+01:00) Brussels, Copenhagen, Madrid, Paris',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Europe/Sarajevo',
                'text' => '(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Africa/Lagos',
                'text' => '(GMT+01:00) West Central Africa',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Amman',
                'text' => '(GMT+02:00) Amman',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Europe/Athens',
                'text' => '(GMT+02:00) Athens, Bucharest, Istanbul',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Beirut',
                'text' => '(GMT+02:00) Beirut',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Africa/Cairo',
                'text' => '(GMT+02:00) Cairo',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Africa/Harare',
                'text' => '(GMT+02:00) Harare, Pretoria',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Europe/Helsinki',
                'text' => '(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Jerusalem',
                'text' => '(GMT+02:00) Jerusalem',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Europe/Minsk',
                'text' => '(GMT+02:00) Minsk',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Africa/Windhoek',
                'text' => '(GMT+02:00) Windhoek',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Kuwait',
                'text' => '(GMT+03:00) Kuwait, Riyadh, Baghdad',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Europe/Moscow',
                'text' => '(GMT+03:00) Moscow, St. Petersburg, Volgograd',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Africa/Nairobi',
                'text' => '(GMT+03:00) Nairobi',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Tbilisi',
                'text' => '(GMT+03:00) Tbilisi',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Tehran',
                'text' => '(GMT+03:30) Tehran',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Muscat',
                'text' => '(GMT+04:00) Abu Dhabi, Muscat',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Baku',
                'text' => '(GMT+04:00) Baku',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Yerevan',
                'text' => '(GMT+04:00) Yerevan',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Kabul',
                'text' => '(GMT+04:30) Kabul',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Yekaterinburg',
                'text' => '(GMT+05:00) Yekaterinburg',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Karachi',
                'text' => '(GMT+05:00) Islamabad, Karachi, Tashkent',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Calcutta',
                'text' => '(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Katmandu',
                'text' => '(GMT+05:45) Kathmandu',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Almaty',
                'text' => '(GMT+06:00) Almaty, Novosibirsk',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Dhaka',
                'text' => '(GMT+06:00) Astana, Dhaka',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Rangoon',
                'text' => '(GMT+06:30) Yangon (Rangoon)',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Bangkok',
                'text' => '(GMT+07:00) Bangkok, Hanoi, Jakarta',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Krasnoyarsk',
                'text' => '(GMT+07:00) Krasnoyarsk',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Hong_Kong',
                'text' => '(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Kuala_Lumpur',
                'text' => '(GMT+08:00) Kuala Lumpur, Singapore',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Irkutsk',
                'text' => '(GMT+08:00) Irkutsk, Ulaan Bataar',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Australia/Perth',
                'text' => '(GMT+08:00) Perth',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Taipei',
                'text' => '(GMT+08:00) Taipei',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Tokyo',
                'text' => '(GMT+09:00) Osaka, Sapporo, Tokyo',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Seoul',
                'text' => '(GMT+09:00) Seoul',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Yakutsk',
                'text' => '(GMT+09:00) Yakutsk',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Australia/Adelaide',
                'text' => '(GMT+09:30) Adelaide',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Australia/Darwin',
                'text' => '(GMT+09:30) Darwin',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Australia/Brisbane',
                'text' => '(GMT+10:00) Brisbane',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Australia/Canberra',
                'text' => '(GMT+10:00) Canberra, Melbourne, Sydney',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Australia/Hobart',
                'text' => '(GMT+10:00) Hobart',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Pacific/Guam',
                'text' => '(GMT+10:00) Guam, Port Moresby',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Vladivostok',
                'text' => '(GMT+10:00) Vladivostok',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Asia/Magadan',
                'text' => '(GMT+11:00) Magadan, Solomon Is., New Caledonia',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Pacific/Auckland',
                'text' => '(GMT+12:00) Auckland, Wellington',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Pacific/Fiji',
                'text' => '(GMT+12:00) Fiji, Kamchatka, Marshall Is.',
                'created_at' => Carbon::now(),
            ],
            [
                'value' => 'Pacific/Tongatapu',
                'text' => '(GMT+13:00) Nuku alofa',
                'created_at' => Carbon::now(),
            ],
        ];

        Timezone::insert($data);
    }
}
