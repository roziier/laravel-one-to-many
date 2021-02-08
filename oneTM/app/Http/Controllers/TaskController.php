<?php

namespace App\Http\Controllers;
use App\Task;
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
}
