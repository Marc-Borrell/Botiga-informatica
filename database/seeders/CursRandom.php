<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Principal;
use Illuminate\Support\Facades\DB;

class CursRandom extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Principal::factory()->count(10)->create();
        //$ids_factories=Principal::latest()->take(1)->pluck('index');
        //DB::table('principal')->whereIn('index', $ids_factories)->delete();
    }
}
