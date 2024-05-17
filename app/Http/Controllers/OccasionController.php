<?php

namespace App\Http\Controllers;

use App\Models\Occasion;
use Illuminate\Http\Request;

class OccasionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $occasions = Occasion::all();
       return view('occasion.index',compact('occasions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('occasion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'date'=>'required'
        ]);

        $course= Occasion::create(['name'=> $request->name,'date'=> $request->date]);
        return redirect()->route('occasion.index')->with('add', 'تم الحفــظ بنجــاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Occasion $occasion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $occasion = Occasion::findorfail($id);
        return view('occasion.edit',compact('occasion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'date'=>'required'
        ]);
        $occasion = Occasion::findorfail($id);
        $occasion->update(['name'=> $request->name,'date'=> $request->date]);
        return redirect()->route('occasion.index')->with('update', 'تم التعديــل بنجــاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = Occasion::findorfail($id)->delete();
        return redirect()->route('occasion.index')->with('delete', 'تم الحذف بنجــاح');
    }
}
