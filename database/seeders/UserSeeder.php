<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Bangkit Juang Raharjo",
            "email" => "bangkitjuangraharjo@gmail.com",
            "phone_number" => "+6281325507780",
            "password" => Hash::make("Juang Tampan")
        ]);
    }
}
