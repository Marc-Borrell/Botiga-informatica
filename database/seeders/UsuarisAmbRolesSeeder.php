<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsuarisAmbRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $llista_usuaris = [
        [
        'name' => 'maria',
        'role' => 'gestor',
        'email' => 'maria@fjeclot.net',
        'password' => Hash::make('fjeClot25#')
        ],
        [
        'name' => 'leandro',
        'role' => 'consultor',
        'email' => 'leandro@fjeclot.net',
        'password' => Hash::make('clotFje25@')
        ],
        [
        'name' => 'ines',
        'role' => 'consultor',
        'email' => 'ines@fjeclot.net',
        'password' => Hash::make('Clotfje26@')
        ],
        ];
        DB::table('users')->insert($llista_usuaris);
            }
}
