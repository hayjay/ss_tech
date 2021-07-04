<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programmes')->insertOrIgnore(
            [
                [
                    'id'          => 1,
                    'programme_name' => 'Daily News',
                    'start_time' => Carbon::now()->format('Y-m-d 09:00:00'),
                    'end_time' => Carbon::now()->format('Y-m-d 10:00:00'),
                    'duration' => Carbon::now()->format('Y-m-d 01:00:00'),
                    'channel_id' => 1,
                    'timezone' => 'Europe-London',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 2,
                    'programme_name' => 'Finance and Stock Exchange',
                    'start_time' => Carbon::now()->format('Y-m-d 12:00:00'),
                    'end_time' => Carbon::now()->format('Y-m-d 03:00:00'),
                    'duration' => Carbon::now()->format('Y-m-d 01:00:00'),
                    'channel_id' => 1,
                    'timezone' => 'Africa-Lagos',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 3,
                    'programme_name' => 'Secret Crush',
                    'start_time' => Carbon::now()->format('Y-m-d 03:30:00'),
                    'end_time' => Carbon::now()->format('Y-m-d 04:00:00'),
                    'duration' => Carbon::now()->format('Y-m-d 00:30:00'),
                    'channel_id' => 2,
                    'timezone' => 'MiddleEast-Qatar',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 4,
                    'programme_name' => 'Teens Show',
                    'start_time' => Carbon::now()->format('Y-m-d 07:25:00'),
                    'end_time' => Carbon::now()->format('Y-m-d 08:00:00'),
                    'duration' => Carbon::now()->format('Y-m-d 00:35:00'),
                    'channel_id' => 2,
                    'timezone' => 'MiddleEast-Dubai',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 5,
                    'programme_name' => 'Tourism and Wildlife Shows',
                    'start_time' => Carbon::now()->format('Y-m-d 05:00:00'),
                    'end_time' => Carbon::now()->format('Y-m-d 05:45:00'),
                    'duration' => Carbon::now()->format('Y-m-d 00:45:00'),
                    'channel_id' => 2,
                    'timezone' => 'Europe-Amsterdam',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 6,
                    'programme_name' => 'Entertainment',
                    'start_time' => Carbon::now()->format('Y-m-d 20:00:00'),
                    'end_time' => Carbon::now()->format('Y-m-d 21:00:00'),
                    'duration' => Carbon::now()->format('Y-m-d 01:00:00'),
                    'channel_id' => 3,
                    'timezone' => 'Europe-Paris',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 7,
                    'programme_name' => 'Love In Island',
                    'start_time' => Carbon::now()->format('Y-m-d 21:00:00'),
                    'end_time' => Carbon::now()->format('Y-m-d 21:30:00'),
                    'duration' => Carbon::now()->format('Y-m-d 00:30:00'),
                    'channel_id' => 4,
                    'timezone' => 'Europe-Lisbon',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 8,
                    'programme_name' => 'Advertisement',
                    'start_time' => Carbon::now()->format('Y-m-d 21:35:00'),
                    'end_time' => Carbon::now()->format('Y-m-d 22:00:00'),
                    'duration' => Carbon::now()->format('Y-m-d 00:35:00'),
                    'channel_id' => 5,
                    'timezone' => 'Europe-Madrid',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
