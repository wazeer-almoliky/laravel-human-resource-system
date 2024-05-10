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
            ['name'=>'wazeer','email'=>'wazeer@gmail.com','password'=>Hash::make('wazeer123456')],
            ['name'=>'name','email'=>'name@gmail.com','password'=>Hash::make('name123456')],
        ]);

        Role::insert([
            ['name'=>'admin','slug'=>'admin'],
            ['name'=>'user','slug'=>'user'],
            ['name'=>'owner','slug'=>'owner'],
        ]);
        Permission::insert([
            ['name'=>'add','slug'=>'add'],
            ['user'=>'update','slug'=>'update'],
            ['owner'=>'delete','slug'=>'delete'],
        ]);
    }
}
