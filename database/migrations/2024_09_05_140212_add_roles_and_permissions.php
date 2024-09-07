<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Permission::create(['name' => 'view the list of users']);
        Permission::create(['name' => 'ban users']);
        Permission::create(['name' => 'view unposted articles']);
        Permission::create(['name' => 'delete comments']);
        Permission::create(['name' => 'hide articles']);
        Permission::create(['name' => 'delete articles']);

        Permission::create(['name' => 'create articles']);
        Permission::create(['name' => 'edit own articles']);
        Permission::create(['name' => 'delete own articles']);
        Permission::create(['name' => 'write comments']);
        Permission::create(['name' => 'change own comments']);
        Permission::create(['name' => 'save articles']);
        Permission::create(['name' => 'change own profile information']);


        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        $admin->givePermissionTo('view the list of users');
        $admin->givePermissionTo('ban users');
        $admin->givePermissionTo('view unposted articles');
        $admin->givePermissionTo('delete comments');
        $admin->givePermissionTo('hide articles');
        $admin->givePermissionTo('delete articles');

        $user->givePermissionTo('create articles');
        $user->givePermissionTo('edit own articles');
        $user->givePermissionTo('delete own articles');
        $user->givePermissionTo('write comments');
        $user->givePermissionTo('change own comments');
        $user->givePermissionTo('save articles');
        $user->givePermissionTo('change own profile information');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Role::findByName('admin')->delete();
        Role::findByName('user')->delete();

        Permission::findByName('view the list of users')->delete();
        Permission::findByName('ban users')->delete();
        Permission::findByName('view unposted articles')->delete();
        Permission::findByName('delete comments')->delete();
        Permission::findByName('hide articles')->delete();
        Permission::findByName('delete articles')->delete();

        Permission::findByName('create articles')->delete();
        Permission::findByName('edit own articles')->delete();
        Permission::findByName('delete own articles')->delete();
        Permission::findByName('write comments')->delete();
        Permission::findByName('change own comments')->delete();
        Permission::findByName('save articles')->delete();
        Permission::findByName('change own profile information')->delete();
    }
};
