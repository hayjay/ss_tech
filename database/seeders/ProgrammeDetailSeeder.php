<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProgrammeDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programme_details')->insertOrIgnore(
            [
                [
                    'id'          => 1,
                    'programme_id' => 1,
                    'programme_thumbnail' => 'programme_thumbnail1.jpg',
                    'programme_description' => 'Lorem ipsum',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 2,
                    'programme_id' => 2,
                    'programme_thumbnail' => 'programme_thumbnail2.jpg',
                    'programme_description' => 'Lorem ipsum for programme 2',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 3,
                    'programme_id' => 3,
                    'programme_thumbnail' => 'programme_thumbnail3.jpg',
                    'programme_description' => 'Lorem ipsum for programme 3',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 4,
                    'programme_id' => 4,
                    'programme_thumbnail' => 'programme_thumbnail4.jpg',
                    'programme_description' => 'Lorem ipsum for programme 4',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 5,
                    'programme_id' => 5,
                    'programme_thumbnail' => 'programme_thumbnail5.jpg',
                    'programme_description' => 'Lorem ipsum for programme 5',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 6,
                    'programme_id' => 6,
                    'programme_thumbnail' => 'programme_thumbnail6.jpg',
                    'programme_description' => 'Lorem ipsum for programme 6',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 7,
                    'programme_id' => 7,
                    'programme_thumbnail' => 'programme_thumbnail7.jpg',
                    'programme_description' => 'Lorem ipsum for programme 7',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'id'          => 8,
                    'programme_id' => 8,
                    'programme_thumbnail' => 'programme_thumbnail4.jpg',
                    'programme_description' => 'Lorem ipsum for programme 8',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
