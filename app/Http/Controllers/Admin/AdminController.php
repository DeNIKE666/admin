<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Главная админки
     */

    public function index()
    {
        return view('admin.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Файловый менеджер
     */

    public function fileManager()
    {
        return view('admin.fm');
    }
}
