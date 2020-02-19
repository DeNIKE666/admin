<?php

namespace App\Http\Controllers\Cabinet;

use App\Data;
use App\Deposit;
use App\Plan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepositsController extends Controller
{
    public function deposits()
    {
        $deposits = Deposit::orderBy('created_at', 'desc')->paginate(10);

        return view('cabinet.finance.deposits.index' ,  compact('deposits'));
    }

    public function create()
    {
        $plans = Plan::whereStatus(1)->get();

        return view('cabinet.finance.deposits.create', compact('plans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'plan_id' => 'required',
            'amount' => 'required|integer',
        ]);

        $request->merge(['user_id' => auth()->user()->id]);

        Deposit::create($request->all());

        return redirect()->route('deposits');
    }


}
