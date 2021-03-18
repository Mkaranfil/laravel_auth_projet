<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                'url' => '1.jpg',
                'name' => 'Default'
            ],
            [
                'url' => '2.png',
                'name' => 'Default'
            ],
            [
                'url' => '3.png',
                'name' => 'Default'
            ],
            [
                'url' => '4.png',
                'name' => 'Default'
            ],
            [
                'url' => '5.png',
                'name' => 'Default'
            ],
            [
                'url' => '6.png',
                'name' => 'Default'
            ],
        ]);
    }
}
