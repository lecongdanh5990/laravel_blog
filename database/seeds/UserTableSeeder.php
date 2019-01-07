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
        App\User::create([
            'name'=>'Lê Công Danh',
            'email'=>'congdanh5990@gmail.com',
            'password'=>bcrypt('0966212818'),

        ]);
    }
}
