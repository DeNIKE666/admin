<?php

namespace App\Http\Controllers\Ajax\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUsersController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     * Get RoleAndPermission User by {id}
     */

    public function roleAndPermission()
    {
        $user = \App\User::find(request()->query('id'));

        return response()->json([
            'currentPermissions' => $user->getPermissionNames(),
            'currentRoles' => $user->roles[0],
        ]);
    }
}
