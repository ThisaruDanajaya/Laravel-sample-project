<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{

    public function index()
    {
        $student = student::all();
        return view ('stindex')->with('student', $student);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        student::create($input);
        return redirect('student')->with('flash_message', 'student Addedd!');  
    }

    public function show($id)
    {
        $student = student::find($id);
        return view('show')->with('student', $student);
    }

    public function edit($id)
    {
        $student = student::find($id);
        return view('edit')->with('student', $student);
    }

    public function update(Request $request, $id)
    {
        $student = student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');  
    }

    public function destroy($id)
    {
        student::destroy($id);
        return redirect('student')->with('flash_message', 'student deleted!');  
    }
}
