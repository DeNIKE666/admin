<?php

namespace App\Http\Controllers\Admin;

use App\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlansController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $plans = Plan::orderBy('created_at' , 'desc')->paginate(10);

        return view('admin.plans.index', compact('plans'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function create()
    {
        return view('admin.plans.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        Plan::create($request->all());

        return redirect()->route('plans');
    }

    /**
     * @param Plan $plan
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function edit(Plan $plan)
    {
        return view('admin.plans.edit', compact('plan'));
    }

    /**
     * @param Request $request
     * @param Plan $plan
     * @return \Illuminate\Http\RedirectResponse
     */

    public function update(Request $request, Plan $plan)
    {
        $plan->update($request->all());

        return redirect()->route('plans');
    }

    /**
     * @param Plan $plan
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */

    public function delete(Plan $plan)
    {
        $plan->delete();

        return redirect()->route('plans');
    }
}
