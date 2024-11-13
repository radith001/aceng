<?php

namespace Database\Seeders;

use Illuminate\Database\ConsolSeeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder 
{
    public function run(): void 
    {
        if (!Role::where('name', 'Mahasiswa')->where('guard_name', 'web')->exists()) {
            Role::create(['name' => 'Mahasiswa', 'guard_name' => 'web']);
        }
    }
}