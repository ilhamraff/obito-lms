<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\TransactionService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    protected $transactionService;

    public function __construct(TransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    public function subscriptions()
    {
        $transaction = $this->transactionService->getUserTransactions();

        return view('front.subscriptions', compact('transactions'));
    }

    public function subscription_details(Transaction $transaction)
    {
        return view('front.subscriptions.details', compact('transaction'));
    }
}
