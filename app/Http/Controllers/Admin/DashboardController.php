<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Order\OrderService;
use App\Services\Payment\WalletService;
use App\Services\User\UserService;

class DashboardController extends Controller
{
    protected $userService;

    public function __construct(
        UserService $userService
    )
    {
        $this->userService = $userService;
    }

    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

}
