<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Открыть тсраницу настроек
     */
    public function index(Request $request)
    {
        $settings = Setting::first();

        return view('admin.settings.index', compact('settings'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * Обновить настройки
     */

    public function updateSettings(Request $request)
    {
        $settings = Setting::first();

        if ($settings !== null) :
            $settings->update($request->all());
        endif;

        if ($settings == null) :
            $settings->create($request->all());
        endif;

        return redirect()->back()->with([
            'successfullMessage' => 'Настройки проекта обновлены',
        ]);
    }
}
