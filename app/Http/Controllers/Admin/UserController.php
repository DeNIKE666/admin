<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $users = User::paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function create()
    {
        // all roles
        $roles = Role::all();

        //all permissions
        $permissions = Permission::all();

        return view('admin.users.create', compact('roles' , 'permissions'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        if (!$request->hasAny(['name' , 'email' , 'password' , 'role' , 'permission'])) :
            return false;
        endif;

        $checkUser = User::whereEmail($request->input('email'))->first();

        if (!$checkUser) :

            // Добавляем нового пользователя
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            // Добавляем роль и права пользователю
            if ($request->hasAny(['role', 'permission'])) :
                $user->assignRole($request->input('role'));
                $user->syncPermissions($request->input('permission'));
            endif;

        endif;

        return redirect()->route('users')->with([
            'successfullMessage' => 'Новый пользователь добавлен.',
        ]);;
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function edit(User $user)
    {
        //all roles
        $roles = Role::all();

        //all permissions
        $permissions = Permission::all();

        return view('admin.users.edit', compact('user' ,'roles' , 'permissions'));
    }

    /**
     * @param User $user
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function update(User $user, Request $request)
    {
        $password = $user->password;

        if ($request->input('password') !== null) {
            $password = bcrypt($request->input('password'));
        }

        // Обновляем пользователя

        $user->update([
            'name'     => $request->input('name'),
            'email'    => $request->input('email'),
            'password' => $password,
        ]);

        // проверяем переданна ли роль и права доступа

        if ($request->hasAny(['role' , 'permission'])) {
            // обновляем роль
            $user->syncRoles($request->input('role'));
            // удаляем все права
            $user->revokePermissionTo(Permission::all());
            // Назначаем новые права
            $user->syncPermissions($request->input('permission'));
        }

        return redirect()->route('users')->with([
            'successfullMessage' => 'Пользователь обновлён.',
        ]);;
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */

    public function delete(User $user)
    {
        // удаляем пользователя
        $user->delete();

        // Ворачиваемся на страницу всех пользователей
        return redirect()->route('users')->with([
            'successfullMessage' => 'Пользователь удален.',
        ]);
    }

}
