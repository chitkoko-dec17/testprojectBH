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
        Employee::create(
        
        [
            'name' => 'Hla Hla',
            'age' => rand(20, 50),
            'job' => 'IT',
            'salary' => rand(1000, 500000),
        ]
    	);
    }
}
