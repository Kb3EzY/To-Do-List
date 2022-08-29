<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class ToDoController extends Controller
{

    public function index()
    {
        $todolists = TodoList::all();
        return view('index',compact('todolists'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);
        Todolist::create($data);
        return back();
    }


    public function destroy($id)
    {
        TodoList::destroy($id);
        return back();
    }
}
