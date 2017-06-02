<?php

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
        Schema::create('USER', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('student_name');
            $table->string('student_number',5)->unique();
            $table->string('google_id')->unique();
            $table->text('introduction')->nullable();
            $table->string('image_pass')->nullable();
            $table->boolean('regular_notice')->default(true);
            $table->boolean('event_join_notice')->default(true);
            $table->boolean('event_cancel_notice')->default(true);            
            $table->rememberToken();
            $table->timestamps();     
            $table->timestamp('deleted_at')->nullable();       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('USER');
    }
}
