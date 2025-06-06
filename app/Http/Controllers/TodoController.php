<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('todo.list', [
            'todos' => Todo::where('user_id', Auth::id())->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $todo = $request->validate([
            'name' => 'required'
        ]);

        $newTodo = new Todo([
            'name' => $todo['name'],
            'user_id' => Auth::user()->id,
            'compelete' => false
        ]);
        $newTodo->save();

        return redirect('/list')->with('success', 'Data berhasil ditambahkan');;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        return view ('todo.edit', [
            'todo' => Todo::where('id', $id)->first()
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $todo = Todo::where('id',$id);

        $data = $request->validate([
            'name' => 'required'
        ]);
        
        if (isset($request['complete'])){
            $todo->update([
                'name' => $data['name'],
                'complete' => 1
            ]);
        } else {
            $todo->update([
                'name' => $data['name'],
                'complete' => 0
            ]);
        }

        return redirect('/list')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $todo = Todo::where('id',$id);

        $todo->delete();

        return redirect('/list')->with('success', 'Data berhasil dihapus');
    }
}
