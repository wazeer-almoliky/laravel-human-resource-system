<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Employee;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $balances = Balance::all();
        // $employees = Employee::all();
        return view('balance.index', compact('balances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('balance.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'type' => 'required',
            'empid'=>'required',
            'date' => 'required'
        ]);
        Balance::create([
            'amount' => $request->amount,
            'type' => $request->type,
            'empid' => $request->empid,
            // 'date' => $request->date,
        ]);
        return redirect()->route('balance.index')->with('add', 'تم الحفظ بنجــاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Balance $balance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $balance = Balance::findOrFail($id);
        return view('balance.edit', compact('balance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->request([
            'amount' => 'required',
            'type' => 'required',
            'empid' => 'required',
            'state' => 'required',
            'date' => 'required'
        ]);
        $balance = Balance::findOrFail($id);
        $balance->update([
            'amount' => $request->amount,
            'type' => $request->type,
            'empid' => $request->empid,
            'state' => 1,
            // 'date' => $request->date,
        ]);
        return redirect()->route('balance.index')->with('success', 'تم التعديـل بنجــاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Balance::findOrFail($id)->delete();
        return redirect()->route('balance.index')->with('success', 'تم الحــذف بنجــاح');
    }

}
