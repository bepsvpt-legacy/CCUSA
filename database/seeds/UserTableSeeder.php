<?php

use App\Ccusa\User\User;
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
        factory(User::class, 20)->create();

        if (app()->environment(['local']) && ! User::where('username', '=', 'test')->exists()) {
            factory(User::class)->create([
                'username' => 'test',
                'password' => bcrypt('test'),
            ]);
        }
    }
}
