<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'admin',
            'email' => 'cardoso.oliveira@gmail.com',
            'password' => '$2y$12$hs0hgoIIq/Jm.SujNIz4sOzKORECIRxabG2ul8Krnop0HcaCj9kua',
        ]); 
    }
}
