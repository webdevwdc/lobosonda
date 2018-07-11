<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');        
            $table->string('contact_number');
            $table->string('contact_information');
            $table->string('jobs')->default('others');        
            $table->enum('status', array('Active,','Inactive'))->default('Active');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name'=>'Super Admin',
            'email'=>'admin@lobosonda.com',
            'password'=>bcrypt('123456'),
            'contact_number'=>'Null',
            'contact_information'=>'Null',
            'jobs'=>'others'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
