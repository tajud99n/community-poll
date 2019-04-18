<?php

use Illuminate\Database\Seeder;

class CommunityPollTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Poll', 5)->create();
    }
}
