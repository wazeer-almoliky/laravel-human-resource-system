<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\{User,Permission,Role};
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            ['name'=>'admin','email'=>'admin@gmail.com','password'=>Hash::make('admin123456')],
            
        ]);

        Role::insert([
            ['name'=>'المدير','slug'=>'المدير'],
            ['name'=>'ادمن','slug'=>'ادمن'],
            ['name'=>'مستخدم','slug'=>'مستخدم'],
            ['name'=>'متدرب','slug'=>'متدرب'],
        ]);
        
        $permissions = ['اعدادات بيئة المنشأة','الاعـدادات العـامة','عرض الاعـدادات','اعدادات جهاز البصمة','الاقسام','اضافة قســم','عرض الاقسام','الدورات التدريبية','اضافة دورة','عرض الدورات','الموظفين','اضافة موظف','تقارير الموظفين','الحضور والانصراف','تسجيـل','تقارير التحضير','تدريب الموظفين','طلب تدريب','تقارير التدريب','الرواتب','صرف راتب','عرض التقارير','المستخدمين','الصلاحيـات','الادوار','الاجازات','اضافة اجازة','عرض الاجازات','حذف','تعديل'];
        foreach ($permissions as $permission) {
        Permission::insert([
            ['name'=>$permission,'slug'=>$permission],
        ]);}
        //=========================
        $user = User::where('name','admin')->first();
        $role = Role::where('slug','المدير')->first();
        $user->roles()->attach($role);

        foreach (Permission::all() as $permission) {
            $user->permissions()->attach($permission);
        }
    }
}
