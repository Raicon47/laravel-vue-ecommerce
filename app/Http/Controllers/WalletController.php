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

    public function deposit()
    {
        $user = auth()->user;
    }

}
