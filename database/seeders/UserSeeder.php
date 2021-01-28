<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $user['mobile']='18888888888';
        $user['name']='wsz';
        $user['email']='305185235@qq.com';
        $user->save();
    }
}
