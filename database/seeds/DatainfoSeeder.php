<?php

use Illuminate\Database\Seeder;

class DatainfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles_type')->insert([
            'name' => 'Subordinate',
            'created_at' => '2018-04-06 10:13:51',
        ]);
        DB::table('roles_type')->insert([
            'name' => 'Supervisor',
            'created_at' => '2018-04-06 10:13:51',
        ]);
        DB::table('roles_type')->insert([
            'name' => 'Administor',
            'created_at' => '2018-04-06 10:13:51',
        ]);

        DB::table('leaves_type')->insert([
            'name' => 'Vacation',
            'created_at' => '2018-04-06 10:13:51',
        ]);
        DB::table('leaves_type')->insert([
            'name' => 'Personal Errand',
            'created_at' => '2018-04-06 10:13:51',
        ]);
        DB::table('leaves_type')->insert([
            'name' => 'Sick',
            'created_at' => '2018-04-06 10:13:51',
        ]);

        

    }
}
