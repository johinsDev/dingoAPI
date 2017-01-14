<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
            factory(\App\User::class , 500)->create()->each(function ($user){
               $user->posts()->saveMany(factory(\App\Post::class, 1000)->make());
            });
        Model::reguard();
    }
}
