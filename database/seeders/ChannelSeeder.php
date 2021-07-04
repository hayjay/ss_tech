<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channels')->insertOrIgnore(
            [
                [
                    'id'          => 1,
                    'channel_name' => 'SVT2',
                    'channel_icon' => 'svt2-icon.ico',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 2,
                    'channel_name' => 'SVT1',
                    'channel_icon' => 'svt1-icon.ico',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 3,
                    'channel_name' => 'LFVTC',
                    'channel_icon' => 'lfctv-icon.ico',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 4,
                    'channel_name' => 'SPORT-TV',
                    'channel_icon' => 'sporttv-icon.ico',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 5,
                    'channel_name' => 'iTV',
                    'channel_icon' => 'itv-icon.ico',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
