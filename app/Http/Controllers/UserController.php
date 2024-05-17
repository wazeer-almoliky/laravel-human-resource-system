<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
   public function indexPermission($id){
    
    $user = User::findOrFail($id);
    $roles = Role::all();
    $permissions = Permission::all();
    $result1 = DB::table('users_roles')->where('user_id',$id)->pluck('role_id');
    $result2 = DB::table('users_permissions')->where('user_id',$id)->pluck('permission_id');
    $userrole = (array) $result1;
    $userpermissions = (array) $result2;
    // gettype($userrole);
    return view('user.user_permission_index',compact('user','roles','userrole','permissions','userpermissions'));
   }
   public function createPermission(){
    $users = User::all();
    $roles =  Role::all();//DB::table('roles')->get();
    $permissions =  Permission::all();//DB::table('permissions')->get();
    return view('user.user_permission_create',compact('users','roles','permissions'));
   }
   public function storePermission(Request $request){
    // echo 'User'.$request->user;
    // echo 'Role'.$request->role;
    // print_r($request->permissions);
    // echo 'Permissions'.$request->permissions;
    $user = User::findOrFail($request->user);
    $user->roles()->attach($request->role);
    $user->permissions()->attach($request->permissions);
    // $roles =  Role::all();//DB::table('roles')->get();
    // $permissions =  Permission::all();//DB::table('permissions')->get();
    return view('user.index');
   }
   public function editPermission($user_id,$role_id,$permission_id){
    $users = User::findorfail($user_id);
    $roles =  DB::table('roles')->where('id','=',$role_id)->get();
    $permissions =  DB::table('permissions')->where('id','=',$permission_id)->get();
    return view('user.user_permission_edit',compact('users','roles','permissions'));
   }
//    public function updatePermission(Request $request,$id){
//     $users = User::all();
//     $roles =  DB::table('roles')->get();
//     $permissions =  DB::table('permissions')->get();
//     return view('user.index');
//    }
   public function destroyPermission(Request $request){
    $users = User::all();
    $roles =  DB::table('roles')->get();
    $permissions =  DB::table('permissions')->get();
    return view('user.user_permission_index',compact('users','roles','permissions'));
   }
}
