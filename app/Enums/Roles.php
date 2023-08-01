<?php
namespace App\Enums;

use Illuminate\Support\Arr;

enum Roles: string
{
    case Admin = 'admin';
    case Editor = 'editor';

    public static function getAllRoles(): array
    {
        $roles = [];

        foreach(Roles::cases() as $role){
            array_push($roles, $role->value);
        }

        return $roles;
    }
}