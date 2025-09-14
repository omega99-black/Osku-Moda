<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HrEmployee; // tu modelo generado por Reliese

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            ['first_name' => 'Juan', 'last_name' => 'Pérez', 'email' => 'juan.perez@example.com'],
            ['first_name' => 'María', 'last_name' => 'López', 'email' => 'maria.lopez@example.com'],
            ['first_name' => 'Carlos', 'last_name' => 'Ramírez', 'email' => 'carlos.ramirez@example.com'],
            ['first_name' => 'Lucía', 'last_name' => 'Gómez', 'email' => 'lucia.gomez@example.com'],
            ['first_name' => 'Andrés', 'last_name' => 'Martínez', 'email' => 'andres.martinez@example.com'],
            ['first_name' => 'Sofía', 'last_name' => 'Hernández', 'email' => 'sofia.hernandez@example.com'],
            ['first_name' => 'Miguel', 'last_name' => 'Castro', 'email' => 'miguel.castro@example.com'],
            ['first_name' => 'Laura', 'last_name' => 'Torres', 'email' => 'laura.torres@example.com'],
            ['first_name' => 'Pedro', 'last_name' => 'Vargas', 'email' => 'pedro.vargas@example.com'],
            ['first_name' => 'Camila', 'last_name' => 'Morales', 'email' => 'camila.morales@example.com'],
        ];

        foreach ($employees as $emp) {
            HrEmployee::create($emp);
        }
    }
}