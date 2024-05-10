<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = Attendance::all();
        return view('attendance.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendance.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->request([
            'checkin' => 'required',
            'checkout' => 'required',
            'empid' => 'required',
            'state' => 'required',
            'date' => 'required'
        ]);
        Attendance::create([
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
            'empid' => $request->employee,
            'state' => $request->state,
            'date' => $request->date,
        ]);
        return redirect()->route('attendance.index')->with('success', 'تم الحفــظ بنجــاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $attendance = Attendance::findOrFail($id);
        return view('attendance.edit', compact('attendance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->request([
            'checkin' => 'required',
            'checkout' => 'required',
            'empid' => 'required',
            'state' => 'required',
            'date' => 'required'
        ]);
        $attendance = Attendance::findOrFail($id);
        $attendance->update([
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
            'empid' => $request->employee,
            'state' => $request->state,
            'date' => $request->date,
        ]);
        return redirect()->route('attendance.index')->with('success', 'تم التعديــل بنجــاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Attendance::findorFail($id)->delete();
        return redirect()->route('attendance.index')->with('success', 'تم الحــذف بنجــاح');
    }
}
