<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    // departmentsテーブルは、employeesテーブルと1対多の関係
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    // departmentテーブルは、projectsテーブルと1対多の関係
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
