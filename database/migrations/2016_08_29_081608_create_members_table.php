<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); //users table(FK)
            $table->string('alias', 255);
            $table->string('priv_level', 1);
            $table->string('profile_path', 1000)->nullable();
            $table->string('is_deleted', 1);
            $table->timestamps();

            // set of foreign key (table users)
            $table->foreign('user_id')->references('id')->on('users');

            $table->index('priv_level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
    }
}
