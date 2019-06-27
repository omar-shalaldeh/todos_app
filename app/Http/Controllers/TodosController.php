<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {

         $todos=Todo::orderby('id','DESC')->paginate(4);
        return view('todos.index',compact('todos'));
    }


    public function show($todoId)
{
    $todo=Todo::find($todoId);
    return view('todos.show',compact('todo'));


}
public function create()
{
    return view('todos.create');

}
public function store(Request $request)
{
    $this->validate($request,[
        'name'=>'required|unique:todos|min:6',
        'description'=>'required'
    ]);
Todo::create($request->all());
   session()->flash('success','create todo is successfuly');
return redirect()->route('tod');
}
public function edit($todoId)
{
    $todo=Todo::find($todoId);

    return view('todos.edit',compact('todo'));

}
public function update(Request $request,$todoId)
{
    $this->validate($request,[
        'name'=>'required|unique:todos|min:6',
        'description'=>'required'
    ]);

    $todo=Todo::find($todoId);
    $todo->name=$request->name;
    $todo->description=$request->description;
    $todo->update();
    session()->flash('success','update todo is successfuly');
    return redirect()->route('tod');


}
public function uptrue(Request $request,$todoId)
{
    $todo=Todo::find($todoId);
    if ($todo->completed==0) {
        $todo->update(['completed'=>1]);
        }

    return redirect()->back();

}

public function destroy($todoId)
{
    Todo::destroy($todoId);
    session()->flash('delete','the delete todo is successFully');
    return redirect()->route('tod');

}
}



