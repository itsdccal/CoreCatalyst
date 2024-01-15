<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipment::create([
            "name" => "Barbell",
        ]);

        Equipment::create([
            "name" => "Dumbbell",
        ]);

        Equipment::create([
            "name" => "Kettlebell",
        ]);

        Equipment::create([
            "name" => "Machine",
        ]);

        Equipment::create([
            "name" => "Plate",
        ]);

        Equipment::create([
            "name" => "Resistance Band",
        ]);

        Equipment::create([
            "name" => "Suspension",
        ]);

        Equipment::create([
            "name" => "Bodyweight",
        ]);

        Equipment::create([
            "name" => "Other",
        ]);
    }
}
