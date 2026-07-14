<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessCardIntroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('business_card_intros')->insert([
            'business_card_intro_id' => '588969101168',
            'intro_code' => '3d-leaves',
            'intro_thumbnail' => '3d-leaves.png',
            'intro_name' => '3D Leaves',
            'status' => '1',
            'created_at' => '2025-08-02 16:37:12',
            'updated_at' => '2025-08-02 16:37:12',
        ]);
    }
} 
