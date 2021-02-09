<?php

namespace App\Http\Controllers;
use App\Task;
use App\Employee;
use App\Typology;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function taskIndex() {
        $tasks = Task::all();
        return view('pages.task-index', compact('tasks'));
    }

    public function taskShow($id) {
        $show = Task::findOrFail($id);
        return view('pages.task-show', compact('show'));
    }

    public function taskCreate() {

        $emps = Employee::all();
        $typs = Typology::all();
        return view('pages.task-create-form', compact('emps', 'typs'));

    }

    public function taskStore(Request $request) {
        $data = $request -> all();
        
        $emp = Employee::findOrFail($data['employee_id']);
        
        $task = Task::make($request -> all());
        $task -> employee() -> associate($emp);
        $task -> save();

        
        
        $typs = Typology::findOrFail($data['typs']);
        $task -> typs() -> attach($typs);
        
        return redirect() -> route('task-index', compact('$emp', '$task', 'typs'));
    }

    public function taskEdit($id) {
        $task = Task::findOrFail($id);
        
        $emps = Employee::all();
        $typs = Typology::all();
        return view('pages.task-edit', compact('task', 'emps', 'typs'));

    }

    public function taskUpdate(Request $request, $id) {
        $data = $request -> all();

        $emp = Employee::findOrFail($data['employee_id']);
        $task = Task::findOrFail($id);
        $task -> update($data);
        $task -> employee() -> associate($emp);
        $task -> save();

        $typs = Typology::findOrFail($data['typs']);
        $task -> typs() -> sync($typs);

        return redirect() -> route('task-index', compact('$emp', '$task', 'typs'));
        
    }
}
