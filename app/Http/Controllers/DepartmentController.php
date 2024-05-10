<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view('department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department.create'); //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $department = Department::create([
            'name' => $request->name,
        ]);
        return redirect()->route('department.index')->with('add', 'تم الحفــظ بنجــاح');
    }


    public function edit($id)
    {
        $department =  Department::findorFail($id);
        return view('department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $department =  Department::findorFail($id);
        $department->update(['name' => $request->name]);
        return redirect()->route('department.index')->with('update', 'تم التعديــل بنجــاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Department::findorFail($id)->delete();
        return redirect()->route('department.index')->with('delete', 'تم الحــذف بنجــاح');
    }
}
