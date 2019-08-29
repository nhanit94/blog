<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataInsert = [
            [
            'name' => 'nguyen van a',
            'email' => 'nguyenvana@gmail.com',
            'password' => bcrypt('123456'),
            ],
            [
            'name' => 'nguyen thi b',
            'email' => 'nguyenthib@gmail.com',
            'password' => bcrypt('123456'),
            ]
        ];
        DB::table('users')->insert( $dataInsert);

    }
}
