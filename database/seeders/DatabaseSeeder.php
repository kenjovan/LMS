<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('roles')->insert(
            [
                ['role'=>'admin'],
                ['role'=>'member']
            ]
        );

        DB::table('users')->insert(
            [
                ['name'=>'admin', 'email'=>'admin@admin.com', 'password'=>bcrypt('password'), 'role'=>1],
                ['name'=>'member', 'email'=>'member@member.com', 'password'=>bcrypt('password'), 'role'=>2]
            ]
        );
    }
}
