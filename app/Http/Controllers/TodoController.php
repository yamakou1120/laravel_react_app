<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Inertia\Inertia;

class TodoController extends Controller
{
    public function create(TodoRequest $request, Todo $todo)
    {
        $input = $request->all();
        $todo->fill($input)->save();
        $year=$request->input('year');
        $month = $request->input('month');
        $date = $request->input('date');
        return redirect("/home/{$year}/{$month}/{$date}");
    }
    
    public function edit(TodoRequest $request, Todo $todo)
    {
        $input = $request->all();
        $todo->fill($input)->save();
        $year=$request->input('year');
        $month = $request->input('month');
        $date = $request->input('date');
        return redirect("/home/{$year}/{$month}/{$date}");
    }
    
    public function delete(Todo $todo)
    {
        $todo -> delete();
    }
}
