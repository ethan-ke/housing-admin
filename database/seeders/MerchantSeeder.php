<?php

namespace Database\Seeders;

use App\Models\Merchant;
use Illuminate\Database\Seeder;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Merchant::insert([
            [
                'username' => 'ethan',
                'nickname' => 'Sunshine',
                'password' => '$2y$10$kB4xH/xOOTErmeFO7tNnjeSZ4cTahD63disX1cRdLqLAxy4g6rfmu',
            ],
            [
                'username' => 'lingbao',
                'nickname' => '稚灵',
                'password' => '$2y$10$kB4xH/xOOTErmeFO7tNnjeSZ4cTahD63disX1cRdLqLAxy4g6rfmu',
            ],
        ]);
    }
}
