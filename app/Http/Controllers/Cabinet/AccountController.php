<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    /**
     * @return \Illuminate\Http\RedirectResponse
     * Profile Logout
     */
    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Show profile
     */

    public function profile()
    {
        return view('cabinet.profile.index');
    }

    public function update(Request $request)
    {
        // Текущий пароль пользователя
        $password = $request->user()->password;

        // Устанавливаем новый пароль если он указан
        if ($request->has('password')) {
            $password = bcrypt($request->input('password'));
        }

        // Обновляем пользователя
        $request->user()->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $password,
        ]);

        return redirect()->route('user.profile')->with([
            'success' => 'Профиль обновлен ' ,
        ]);
    }
}
