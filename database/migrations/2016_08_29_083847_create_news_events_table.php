<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 500);
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->text('contents');
            $table->timestamps();

            $table->index('start_time', 'end_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news_events');
    }
}
