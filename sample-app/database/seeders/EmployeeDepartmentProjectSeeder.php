<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeDepartmentProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // departmentsテーブルにデータを挿入
         DB::table('departments')->insert([
            ['name' => 'Engineering'],
            ['name' => 'Research'],
        ]);

        // employeesテーブルにデータを挿入
        DB::table('employees')->insert([
            ['name' => 'Alice', 'position' => 'Manager', 'department_id' => 1],
            ['name' => 'Bob', 'position' => 'Developer', 'department_id' => 1],
            ['name' => 'Charlie', 'position' => 'Developer', 'department_id' => 2],
            ['name' => 'David', 'position' => 'Analyst', 'department_id' => 2],
        ]);

        // projectsテーブルにデータを挿入
        DB::table('projects')->insert([
            ['name' => 'Project A', 'department_id' => 1],
            ['name' => 'Project B', 'department_id' => 1],
            ['name' => 'Project C', 'department_id' => 2],
        ]);

        // employee_projectテーブルにデータを挿入
        DB::table('employee_project')->insert([
            ['employee_id' => 1, 'project_id' => 1],
            ['employee_id' => 2, 'project_id' => 1],
            ['employee_id' => 2, 'project_id' => 2],
            ['employee_id' => 3, 'project_id' => 3],
            ['employee_id' => 4, 'project_id' => 3],
        ]);
    }
}
