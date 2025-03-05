<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Todo::orderBy('task','asc')->get();
        return view('todo.app', compact('data'));
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
    public function store(Request $request)
    {
        $request->validate([
            'task'=>'required|min:3|max:25'
        ],[
            'task.required' => 'Task tidak boleh kosong',
            'task.min' => 'Task minimal 3 karakter',
            'task.max' => 'Task maksimal 25 karakter',
        ]);

        $data =[
            'task'=> $request->input('task')
        ];

        Todo::create($data);
        return redirect()->route('todo')->with('success','Data berhasil ditambahkan');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
