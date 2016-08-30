<?php

use Illuminate\Database\Seeder;

class NewsEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('news_events')->insert([
            ['title' 	  => 'first event', 
             'start_time' => '2016-08-01 12:00:00',
             'end_time'	  => '2016-12-31 18:00:00',
             'contents'	  => 'Congratulation first text'],
             ['title' 	  => 'Second News', 
             'start_time' => '2016-08-01 12:00:00',
             'end_time'	  => '9999-12-31 00:00:00',
             'contents'	  => 'Input 2nd blog. thanks!']
        ]);
    }
}
