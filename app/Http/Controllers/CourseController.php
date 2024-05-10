<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $courses = Course::all();
       return view('course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'trainer'=>'required'
        ]);

        $course= Course::create(['name'=> $request->name,'trainer'=> $request->trainer]);
        return redirect()->route('course.index')->with('add', 'تم الحفــظ بنجــاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Course::findorfail($id);
        return view('course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'trainer'=>'required'
        ]);
        $course = Course::findorfail($id);
        $course->update(['name'=> $request->name,'trainer'=> $request->trainer]);
        return redirect()->route('course.index')->with('update', 'تم التعديــل بنجــاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Course::findorfail($id)->delete();
        return redirect()->route('course.index')->with('update', 'تم الحذف بنجــاح');
    }
}
