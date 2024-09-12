<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::all();
        return view('todo.index', compact('todo'));
    }

    public function create(Request $request){
        Todo::create([
            'todo' => $request->todo
        ]);
        return redirect()->back();
    }

    public function completed(Request $request){
        $todo = Todo::find($request->id);
        $todo->delete(); 
        return redirect()->back();
    }
}
