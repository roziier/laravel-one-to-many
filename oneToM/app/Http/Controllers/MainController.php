<?php

use App\Employee;
use App\Task;

namespace App\Http\Controllers;


use Illuminate\Http\Request;



class MainController extends Controller
{
    public function emp_index() {
        $emps = Employee::all();
        return view('pages.emp-index', compact('emps'));
    }
}
