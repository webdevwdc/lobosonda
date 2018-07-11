<?php

use Illuminate\Database\Seeder;

class boatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boats')->insert([
            'name' => 'ST',
            'seats' => 12,
            'crew' => 2,
            'description' => 'This is a test description for ST Boat',
        ]);

        DB::table('boats')->insert([
            'name' => 'RB',
            'seats' => 16,
            'crew' => 4,
            'description' => 'This is a test description for RB Boat',
        ]);
    }
}
