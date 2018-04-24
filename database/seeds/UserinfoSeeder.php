<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users_info')->insert([
            'role_id' => 1,
            'name' => 'p',
            'surename' => 'k',
            'picture' => null,
            'address' => '28',
            'email' => 'poom10510@gmail.com',
            'contact' => 'poom10510@gmail.com',
            'created_at' => '2018-04-06 10:13:51',
        ]);

        DB::table('tasks')->insert([
            'responsibility' => '1',
            'user_id' => '2',
            'period' => '2018-04-06 10:13:51',
            'substitute_id' => '3',
            'created_at' => '2018-04-06 10:13:51',
        ]);

        DB::table('user_login')->insert([
            'username' => '3',
            'password' => '2',
            'user_id' => '1',
            'created_at' => '2018-04-06 10:13:51',
        ]);

        DB::table('leave_history')->insert([
            'task_id' => '1',
            'user_id' => '1',
            'status' => 'no',
            'type_id' => '1',
            'approver_id' => null,
            'created_at' => '2018-04-06 10:13:51',
        ]);
    }
}
