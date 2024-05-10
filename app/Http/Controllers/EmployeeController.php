<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees =  Employee::all();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('employee.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'salary' => 'required',
            // 'deptid' => 'required',
        ]);
        $employee =  Employee::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'salary' => $request->salary,
            'deptid' => $request->department,
        ]);
        return redirect()->route('employee.index')->with('add', 'تم الحفــظ بنجــاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee =  Employee::findorfail($id);
        $departments  =  Department::all();
        return view('employee.edit', compact('employee','departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'salary' => 'required',
            // 'deptid' => 'required',
        ]);

        $employee =  Employee::findorfail($id);
        $employee->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'salary' => $request->salary,
            'departid' => $request->department,
        ]);
        return redirect()->route('employee.index')->with('update', 'تم التعديــل بنجــاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Employee::findorfail($id)->delete();
        return redirect()->route('employee.index')->with('delete', 'تم الحــذف بنجــاح');
    }
}
