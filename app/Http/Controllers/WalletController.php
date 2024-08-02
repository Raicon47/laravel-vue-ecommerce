<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class WalletController extends Controller
{

    public function deposit_view()
    {
        return Inertia::render('Wallet/WalletDeposit', [
        ]);
    }

    public function deposit(Request $request): RedirectResponse
    {
       $amount_validated = $request->validate([
            'amount' => 'required|string|max:255',
        ]);
        $user = auth()->user();

        $user->deposit($request->amount);

        return Redirect::route('dashboard');
    }

    public function withdraw_view()
    {
        return Inertia::render('Wallet/WalletWithdraw', [
        ]);
    }


    public function withdraw(Request $request): RedirectResponse
    {

       $amount_validated = $request->validate([
            'amount' => 'required|string|max:255',
        ]);
        $user = auth()->user();

        if ($user->balance < $request->amount) {
            return Redirect::route('dashboard');
        }

        $user->withdraw($request->amount);

        return Redirect::route('dashboard');
    }

}
