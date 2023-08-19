<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.todo_index', compact('todos'));
    }
    public function create()
    {
        return view('todos.todo_create');
    }
    public function store(Request $request)
    {
        Todo::create($request->all());
        return redirect()->route('todo_index');
    }
    public function show($id)
    {
        $todo = Todo::find($id);

        return view('todos.todo_show', compact('todo'));
    }
    public function delete($id)
    {
        Todo::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.todo_edit', compact('todo'));
    }
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id)->update($request->except('_token'));
        return redirect()->route('todo_index');
    }
}
