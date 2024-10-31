<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\EmployeeProject;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Contracts\Database\Query\Builder;

use function PHPSTORM_META\map;

class SqlTrainingController extends Controller
{
    public function index()
    {
        $employees = DB::table('employees')->get();
        // $employees = Employee::all();
        // $employees = DB::select('SELECT * FROM employees');
        // $employees = Employee::query()->get();
        // $employees = Employee::select()->get();
        // $employees = Employee::query()->select()->get();
        // $count = Employee::query()->select('*')->where('position','Manager')->count();


//     SELECT employees.name, COUNT(employee_project.project_id) AS project_count
// FROM employees
// JOIN employee_project ON employees.id = employee_project.employee_id
// GROUP BY employees.id
// ORDER BY project_count DESC
// LIMIT 1;


        return view('sql-training.employees-table', compact('employees'));
    }
}
