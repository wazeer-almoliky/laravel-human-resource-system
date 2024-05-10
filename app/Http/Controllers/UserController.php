<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function create(){
    return view('user.create');
   }
   public function store(Request $request){
    User::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'password'=> Hash::make($request->email),
    ]);
    return redirect()->route('user.index')->with('add','تم الحفظ بنجــاح');
   }

   public function index(){
    $users = User::all();
    return view('user.index',compact('users'));
   }
   public function edit($id){
    $user = User::findorfail($id);
    return view('user.edit',compact('user'));
   }
   public function update(Request $request, $id){
    $user = User::findorfail($id);
    $user->update([
        'name'=> $request->name,
        'email'=> $request->email,
        'status'=> 1,
        'password'=> Hash::make($request->email),
    ]);
    return redirect()->route('user.index')->with('update','تم التعديــل بنجــاح');
   }
   public function destroy($id){
    User::findorfail($id)->delete();
    return redirect()->route('user.index')->with('delete','تم الحذف بنجــاح');
   }
}
