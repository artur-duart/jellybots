<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;

class InvestmentController extends Controller
{
    public function create()
    {
        return view('invest');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Investment::create($request->all());

        return redirect()->route('invest.create')->with('success', 'Investment submitted successfully.');
    }
}
