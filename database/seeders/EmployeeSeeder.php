<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'empID' => 'Emp101',
            'firstName' => 'Jason',
            'lastName' => 'David',
            'email' => 'jason.david@gmail.com',
            'role' => 'HR Admin'
        ]);

        Employee::create([
            'empID' => 'Emp102',
            'firstName' => 'Grace',
            'lastName' => 'Kola',
            'email' => 'grace.kola@gmail.com',
            'role' => 'Super Admin'
        ]);

        Employee::create([
            'empID' => 'Emp103',
            'firstName' => 'Kemi',
            'lastName' => 'Lawal',
            'email' => 'kemi.lawal@gmail.com',
            'role' => 'Employee'
        ]);
    }
}
