<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);
        
        DB::table('permissions')->insert([
            'id' => 1,
            'name' => 'access_admin',
            'guard_name' => 'web',
        ]);
        
        DB::table('role_has_permissions')->insert([
            'permission_id' => 1,
            'role_id' => 1,
        ]);
        
        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\Models\User',
            'model_id' => 1,
        ]);
        
        

    }
}
