<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['libelle' => 'GESTIONAIRE', 'isactive' => true]);
        Role::create(['libelle' => 'CLIENT', 'isactive' => true]);
        Role::create(['libelle' => 'LIVREUR', 'isactive' => true]);

    }}
