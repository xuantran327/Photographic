<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "id" => 1,
                "name" => "Hồng Hạnh",
                "img" => "/avatar/honghanh.jpg",
                "email" => "honghanh@gmail.com",
                "email_verified_at" => null,
                "password" => "$2y$10$2tgrZb//0burZz6ZYPWngOi/Y2Y9A//7N24CeiqNt27a8PDytwkve",
                "status" => 0,
                "address" => null,
                "phone" => null,
                "remember_token" => null,
                "created_at" => "2021-10-21 14:58:38",
                "updated_at" => "2021-10-21 14:58:38"
            ],
            [
                "id" => 5,
                "name" => "Hải Nhân",
                "img" => "/img/220px-User_icon_2.svg.png",
                "email" => "hainhan@gmail.com",
                "email_verified_at" => null,
                "password" => '$2y$10$vJlkuTtf2t/WO7UNQtyTBOsbxgFY5xLBKDMRzgBBxFGVMcVBs9rCG',
                "status" => 0,
                "address" => null,
                "phone" => null,
                "remember_token" => null,
                "created_at" => null,
                "updated_at" => null
            ]
         ]);
    }
}
