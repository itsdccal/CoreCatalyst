<?php

namespace Database\Seeders;

use App\Models\Muscle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Muscle::create([
            "muscleName" => "Neck",
        ]);

        Muscle::create([
            "muscleName" => "Chest",
        ]);

        Muscle::create([
            "muscleName" => "Traps",
        ]);

        Muscle::create([
            "muscleName" => "Rhomboid",
        ]);

        Muscle::create([
            "muscleName" => "Lats",
        ]);

        Muscle::create([
            "muscleName" => "Shoulder",
        ]);

        Muscle::create([
            "muscleName" => "Tricep",
        ]);

        Muscle::create([
            "muscleName" => "Bicep",
        ]);

        Muscle::create([
            "muscleName" => "Forearm",
        ]);

        Muscle::create([
            "muscleName" => "Core",
        ]);

        Muscle::create([
            "muscleName" => "Quadriceps",
        ]);

        Muscle::create([
            "muscleName" => "Hamstring",
        ]);

        Muscle::create([
            "muscleName" => "Calf",
        ]);

        Muscle::create([
            "muscleName" => "Full Body",
        ]);

        Muscle::create([
            "muscleName" => "Cardio",
        ]);
    }
}
