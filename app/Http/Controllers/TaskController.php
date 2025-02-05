<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {

        $todo = Todo::create($request->validated());

        return redirect()->route("task.list")->with("success", "Görev Başarıyla Kaydedildi");
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
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        return view("todo.edit", compact("todo"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, string $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->update($request->validated());
        return redirect()->route("task.list")->with("success","Görev Başarıyla Güncellendi");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return redirect()->route("task.list")->with("delete","Görev Başarıyla Silindi");
    }
}
