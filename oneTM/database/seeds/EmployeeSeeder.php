<?php

use Illuminate\Database\Seeder;

use App\Employee;

class EmployeeSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 12) -> create();
    }
}
