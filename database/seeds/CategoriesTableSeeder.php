<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
                'name' => 'HTML',

            ],
            [
                'name' => 'CSS',

            ]
        ];
        DB::table('categories')->insert( $dataInsert);
    }
}
