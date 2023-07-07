<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(DB::table('food')->count() < 0){
            $foods = [
                'Riz','Salade'
            ];
            foreach ($foods as $food){
                DB::table('food')->insert([
                    'label'=>$food,
                ]);
            }
        }

    }
}
