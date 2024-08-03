<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_has_permissions')->delete();
        DB::statement("ALTER TABLE `role_has_permissions` AUTO_INCREMENT = 1");

        DB::table('permissions')->delete();
        DB::statement("ALTER TABLE `permissions` AUTO_INCREMENT = 1");

        DB::table('roles')->delete();
        DB::statement("ALTER TABLE `roles` AUTO_INCREMENT = 1");

//        DB::table('users')->delete();
        DB::statement("ALTER TABLE `users` AUTO_INCREMENT = 1");

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create user management permissions
        Permission::create(['name' => 'view user management', 'group_name' => 'user management', 'permission_type' => 1, 'guard_name' => 'admin']);
        Permission::create(['name' => 'create user management', 'group_name' => 'user management', 'permission_type' => 2, 'guard_name' => 'admin']);
        Permission::create(['name' => 'update user management', 'group_name' => 'user management', 'permission_type' => 3, 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete user management', 'group_name' => 'user management', 'permission_type' => 4, 'guard_name' => 'admin']);

        // create role management permissions
        Permission::create(['name' => 'view role management', 'group_name' => 'role management', 'permission_type' => 1, 'guard_name' => 'admin']);
        Permission::create(['name' => 'create role management', 'group_name' => 'role management', 'permission_type' => 2, 'guard_name' => 'admin']);
        Permission::create(['name' => 'update role management', 'group_name' => 'role management', 'permission_type' => 3, 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete role management', 'group_name' => 'role management', 'permission_type' => 4, 'guard_name' => 'admin']);

        // create profile management permissions
        Permission::create(['name' => 'view profile management', 'group_name' => 'profile management', 'permission_type' => 1, 'guard_name' => 'admin']);
        Permission::create(['name' => 'create profile management', 'group_name' => 'profile management', 'permission_type' => 2, 'guard_name' => 'admin']);
        Permission::create(['name' => 'update profile management', 'group_name' => 'profile management', 'permission_type' => 3, 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete profile management', 'group_name' => 'profile management', 'permission_type' => 4, 'guard_name' => 'admin']);

        // create contact management permissions
        Permission::create(['name' => 'view contact management', 'group_name' => 'contact management', 'permission_type' => 1, 'guard_name' => 'admin']);
        Permission::create(['name' => 'create contact management', 'group_name' => 'contact management', 'permission_type' => 2, 'guard_name' => 'admin']);
        Permission::create(['name' => 'update contact management', 'group_name' => 'contact management', 'permission_type' => 3, 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete contact management', 'group_name' => 'contact management', 'permission_type' => 4, 'guard_name' => 'admin']);

        // create ticket management permissions
        Permission::create(['name' => 'view ticket management', 'group_name' => 'ticket management', 'permission_type' => 1, 'guard_name' => 'admin']);
        Permission::create(['name' => 'create ticket management', 'group_name' => 'ticket management', 'permission_type' => 2, 'guard_name' => 'admin']);
        Permission::create(['name' => 'update ticket management', 'group_name' => 'ticket management', 'permission_type' => 3, 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete ticket management', 'group_name' => 'ticket management', 'permission_type' => 4, 'guard_name' => 'admin']);

        // create task management permissions
        Permission::create(['name' => 'view task management', 'group_name' => 'task management', 'permission_type' => 1, 'guard_name' => 'admin']);
        Permission::create(['name' => 'create task management', 'group_name' => 'task management', 'permission_type' => 2, 'guard_name' => 'admin']);
        Permission::create(['name' => 'update task management', 'group_name' => 'task management', 'permission_type' => 3, 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete task management', 'group_name' => 'task management', 'permission_type' => 4, 'guard_name' => 'admin']);

        // create setting management permissions
        Permission::create(['name' => 'view setting management', 'group_name' => 'setting management', 'permission_type' => 1, 'guard_name' => 'admin']);
        Permission::create(['name' => 'create setting management', 'group_name' => 'setting management', 'permission_type' => 2, 'guard_name' => 'admin']);
        Permission::create(['name' => 'update setting management', 'group_name' => 'setting management', 'permission_type' => 3, 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete setting management', 'group_name' => 'setting management', 'permission_type' => 4, 'guard_name' => 'admin']);

        // create log management permissions
        Permission::create(['name' => 'view log management', 'group_name' => 'log management', 'permission_type' => 1, 'guard_name' => 'admin']);
        Permission::create(['name' => 'create log management', 'group_name' => 'log management', 'permission_type' => 2, 'guard_name' => 'admin']);
        Permission::create(['name' => 'update log management', 'group_name' => 'log management', 'permission_type' => 3, 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete log management', 'group_name' => 'log management', 'permission_type' => 4, 'guard_name' => 'admin']);

        // create tag management permissions
        Permission::create(['name' => 'view tag management', 'group_name' => 'tag management', 'permission_type' => 1, 'guard_name' => 'admin']);
        Permission::create(['name' => 'create tag management', 'group_name' => 'tag management', 'permission_type' => 2, 'guard_name' => 'admin']);
        Permission::create(['name' => 'update tag management', 'group_name' => 'tag management', 'permission_type' => 3, 'guard_name' => 'admin']);
        Permission::create(['name' => 'delete tag management', 'group_name' => 'tag management', 'permission_type' => 4, 'guard_name' => 'admin']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Super Admin', 'guard_name' => 'admin', 'role_type' => 1]);
        $role1->givePermissionTo(Permission::all());

        // create demo users
        $user1 = Admin::whereEmail('admin@admin.com')->first();

        $user1->assignRole($role1);

    }
}
