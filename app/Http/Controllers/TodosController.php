<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all the todo items from the database
        $todos = Todo::all();

        // Return the index view with the todos
        return view('index', ['todos' => $todos]);
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
        // Check if the request method is POST
        if ($request->isMethod('post')) {

            $validatedData = $request->validate([
                'title' => 'required',
            ]);

            // $title = $request->input('title');
            // $description = $request->input('description');

            $title = $validatedData['title'];
            $description = $request->input('description');

            // Create a new todo item with the specified title
            $todo = new Todo;
            $todo->title = $title;
            $todo->description = $description;
            $todo->completed = false;
            $todo->save();
        }
        return redirect('/');
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
    public function update(Request $request, Todo $todo)
    {
        $completed = $request->input('completed') ? true : false;

        $todo->completed = $completed;

        $todo->save();

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect('/');
    }
}
