<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tasks = Task::orderBy('id', 'DESC')->paginate(3);

        return [
            'pagination' => [
                'total' => $tasks->total(),
                'current_page' => $tasks->currentPage(),
                'per_page' => $tasks->perPage(),
                'last_page' => $tasks->lastPage(),
                'from' => $tasks->firstItem(),
                'to' => $tasks->lastItem(),
            ],
            'tasks' => $tasks 
        ];
        /* return $tasks; */
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'keep' => 'required'
        ]);

        Task::create($request->all());

        return;
    }

    public function edit(Task $task)
    {
        return $task;
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'keep' => 'required'
        ]);
        $task = Task::find($id)->update($request->all());
        return;
    }

    public function destroy(Task $task)
    {
        $task->delete();
    }
}
