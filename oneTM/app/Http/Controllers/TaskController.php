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

        dd($data);
        
        $typs = Typology::findOrFail($data['typs']);
        $task -> typologies() -> attach($typs);

        $task -> typologies() -> attach($typs);
        dd($task);
        // return redirect() -> route('task-index', compact('task'));
    }
}
