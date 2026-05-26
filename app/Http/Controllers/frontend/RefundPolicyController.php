<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RefundPolicyController extends Controller
{
    public function index()
    {
        return view('frontend.refund_policy');
    }
}
