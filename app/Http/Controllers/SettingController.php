<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::all();
        return view('setting.index', compact('setting'));
    }

    public function create()
    {
        return view('setting.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'hour' => 'required',
            'start' => 'required',
            'end' => 'required',
            'after_count_time' => 'required',
        ]);
        $setting = Setting::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'hour' => $request->hour,
            'start' => $request->start,
            'end' => $request->end,
            'logo' => '',
            'after_count_time' => $request->after_count_time,
        ]);
        return redirect()->route('setting.index')->with('add', 'تم الحفــظ بنجــاح');
    }

    public function edit($id)
    {
        $setting = Setting::findorFail($id);
        return view('setting.edit', compact('setting'));
    }

    public function update(Request $request, $id)
    {
        $setting =  Setting::findorFail($id);
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'hour' => 'required',
            'start' => 'required',
            'end' => 'required',
            'after_count_time' => 'required',
        ]);
        $setting->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'hour' => $request->hour,
            'start' => $request->start,
            'end' => $request->end,
            'after_count_time' => $request->after_count_time,
        ]);
        return redirect()->route('setting.index')->with('update', 'تم التعديــل بنجــاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Setting::findorFail($id)->delete();
        return redirect()->route('setting.index')->with('delete', 'تم الحــذف بنجــاح');
    }
}
