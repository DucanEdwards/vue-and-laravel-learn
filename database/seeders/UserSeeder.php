<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=User::factory(10)->create();
        $user=$users[0];
        $user['name']='wsz';
        $user['mobile'] =11111111111;
        $user->save();
        $user=$users[1];
        $user['name']='李四';
        $user['mobile'] =22222222222;
        $user->save();
    }
}
