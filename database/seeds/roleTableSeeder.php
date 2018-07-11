<?php

use Illuminate\Database\Seeder;

class roleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Super Admin',
            'description' => 'User is allowed to manage and edit other users',
        ]);

        DB::table('roles')->insert([
            'name' => 'staff',
            'display_name' => 'Staff',
            'description' => 'Can do bookings, introduce clients on the database, and indicate the
hours spent on each task',
        ]);

        DB::table('roles')->insert([
            'name' => 'hotel',
            'display_name' => 'Hotels',
            'description' => ' Can request bookings, introduce clients on the database',
        ]);

        DB::table('roles')->insert([
            'name' => 'client',
            'display_name' => 'Client',
            'description' => ' No access. They only receive a confirmation email with the details of
their upcoming trip, date and hour and meeting point. They can also receive an
email if a trip is being canceled, due to bad weather for example.',
        ]);
    }
}
