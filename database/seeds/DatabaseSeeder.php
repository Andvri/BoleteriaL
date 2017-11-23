<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,30)->create();
        factory(App\Event::class,50)->create();
        for($i=0; $i<50; $i++){
           $user= App\User::inRandomOrder()->first();
           $event = App\Event::inRandomOrder()->first();
           factory(App\Ticket::class,10)->create([
               'user_id' => $user->id,
               'event_id' => $event->id
           ]);
        }

    }
}
