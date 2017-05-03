<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'title' => 'blocked',
            'name' => 'Заблокирован',
            'level' => 0
        ]);
        DB::table('roles')->insert([
            'title' => 'user',
            'name' => 'Пользователь',
            'level' => 1
        ]);
        DB::table('roles')->insert([
            'title' => 'admin',
            'name' => 'Администратор',
            'level' => 99
        ]);
    }
}
