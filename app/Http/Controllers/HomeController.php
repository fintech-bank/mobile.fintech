<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $customer = auth()->user()->customers;
        $wallet = $customer->wallets()->where('type', 'compte')->first();

        return view('dashboard', compact('customer', 'wallet'));
    }
}
