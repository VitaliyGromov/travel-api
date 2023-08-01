<?php

use App\Enums\Roles;
use App\Models\Role;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        foreach(Roles::getAllRoles() as $role){
            Role::create(['name' => $role]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach(Roles::getAllRoles() as $role){

            $roleFromDatabase = Role::where('name', $role)->first();
            $roleFromDatabase->delete();
        }
    }
};
