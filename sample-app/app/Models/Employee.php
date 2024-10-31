<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Project;

class Employee extends Model
{
    // employeesテーブルは、departmentsテーブルと多対1の関係
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // employeesテーブルは、projectsテーブルと多対多の関係
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'employee_project');
    }
}
