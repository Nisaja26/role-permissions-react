<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// impor model role dari paket permission
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // mendefinisikan metode run ketika seeder di jalankan
    public function run()
    {
        // membuat izin baru
        $createPost = Permission::create(['name' => 'create_post']);
        $editPost = Permission::create(['name' => 'edit_post']);
        $deletePost = Permission::create(['name' => 'delete_post']);

        // membuat peran baru
        $role = Role::create(['name' => 'editor']);
        // memberikan izin sebelumnya
        $role->givePermissionTo($createPost, $editPost, $deletePost);
    }
}
