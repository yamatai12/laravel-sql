<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    // projectsテーブルは、departmentsテーブルと多対1の関係
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // projectsテーブルは、employeesテーブルと多対多の関係
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_project');
    }
}
