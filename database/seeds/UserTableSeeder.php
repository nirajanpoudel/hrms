<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 25)
           ->create()
           ->each(function($u) {
                $u->employee()->save(factory(App\Repositories\Employee::class)->make());
            });
    }
}