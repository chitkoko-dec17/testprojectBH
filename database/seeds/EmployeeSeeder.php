<?php

use Illuminate\Database\Seeder;
use App\Employee;

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
            'name' => 'John',
            'age' => rand(20, 50),
            'job' => 'HR',
            'salary' => rand(1000, 500000),
        ]);

        Employee::create([
            'name' => 'Nancy',
            'age' => rand(20, 50),
            'job' => 'IT',
            'salary' => rand(1000, 500000),
        ]);

        Employee::create([
            'name' => 'Hla Hla',
            'age' => rand(20, 50),
            'job' => 'HR',
            'salary' => rand(1000, 500000),
        ]);

        Employee::create([
            'name' => 'Ko Ko',
            'age' => rand(20, 50),
            'job' => 'IT',
            'salary' => rand(1000, 500000),
        ]);

        Employee::create([
            'name' => 'Ko Aung',
            'age' => rand(20, 50),
            'job' => 'Sales',
            'salary' => rand(1000, 500000),
        ]);

        Employee::create([
            'name' => 'Kyaw',
            'age' => rand(20, 50),
            'job' => 'Sales',
            'salary' => rand(1000, 500000),
        ]);

        Employee::create([
            'name' => 'Mya Mya',
            'age' => rand(20, 50),
            'job' => 'Marketing',
            'salary' => rand(1000, 500000),
        ]);

        Employee::create([
            'name' => 'Hla Aye',
            'age' => rand(20, 50),
            'job' => 'IT',
            'salary' => rand(1000, 500000),
        ]);

        Employee::create([
            'name' => 'U Zaw',
            'age' => rand(20, 50),
            'job' => 'Marketing',
            'salary' => rand(1000, 500000),
        ]);

        Employee::create([
            'name' => 'Hla Kyaw',
            'age' => rand(20, 50),
            'job' => 'Sales',
            'salary' => rand(1000, 500000),
        ]);
    }
}
