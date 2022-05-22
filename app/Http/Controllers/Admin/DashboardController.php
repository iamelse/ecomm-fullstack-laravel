<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        $costumer = User::count();
        $revenue  = Transaction::sum('total_price');
        $transaction = Transaction::count();

        return view('pages.admin.dashboard', [
            'costumer' => $costumer,
            'revenue'  => $revenue,
            'transaction' => $transaction
        ]);
    }
}
