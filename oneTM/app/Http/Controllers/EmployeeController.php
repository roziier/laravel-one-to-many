<?php

namespace App\Http\Controllers;
use App\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function empIndex() {
        $emps = Employee::all();
        return view('pages.emp-index', compact('emps'));
    }

    public function empShow($id) {
        $show = Employee::findOrFail($id);
        return view('pages.emp-show', compact('show'));
    }
}
