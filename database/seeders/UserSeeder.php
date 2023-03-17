<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'drew',
            'email' => 'andrewdefretes@gmail.com',
            'password' => '$2y$10$YOnD7.7GNqWoRiGswl2co.ThOekuaj5UaYwRalXZwMM.8jTZ.dTy2',
            'telpon' => '081326118259',
            'role_id' => Role::where('nama_role', 'admin'),
        ]);
    }
}