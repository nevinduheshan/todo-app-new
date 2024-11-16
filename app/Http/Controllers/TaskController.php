<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $status = $request->get('status');
        $tasks = Task::when($status, function ($query) use ($status){
            return $query->where('status', $status);
        })->paginate(5);
        // dd($tasks);
        return view('pages.index', compact('tasks','status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|nullable|String',
            'status' => 'required|in:Pending,In Progress,Completed',
        ]);

        Task::create($request->all());
        toastr()->closeButton()->timeOut(3000)->success('Task created successfully');
        return redirect(Route('tasks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('pages.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|nullable|String',
            'status' => 'required|in:Pending,In Progress,Completed',
        ]);

        $task->update($request->all());
        toastr()->closeButton()->timeOut(3000)->success('Task Updated successfully');
        return redirect(Route('tasks.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        // DD($task);
        $task->delete();
        toastr()->closeButton()->timeOut(3000)->warning('Task deleted successfully');
        return redirect(Route('tasks.index'));
    }
}
