<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Support\Facades\DB;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask(Task $task, TaskRequest $req){
        $data = [
            'name' => $req->name
        ];
        $task->name = $data['name'];
        $task->save();
        return redirect('/tasks');
    }

    public function allTasks(Task $task){
        $task = $task->orderBy('id', 'desc')->paginate(10);
        return view('home.tasks', [
            'task' => $task
        ]);
    }

    public function deleteTask(Task $task, Request $req){
        $task->find($req->id)->delete();
        return redirect('/tasks');
    }
}
