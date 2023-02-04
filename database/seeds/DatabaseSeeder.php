<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user=new User;
        $user->name ='Admin';
        $user->email= 'admin@test.com';
        $user->password ='12345678';
        $user->role='admin';
        $user->nickname='admin';
        $user->save();
    }
    
}
