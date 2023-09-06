<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function orders()
    {
    $viewData = [];
    $viewData["title"] = "My Orders - Mỹ Phẩm Store";
    $viewData["subtitle"] = "My Orders";
    $viewData["orders"] = Order::where('user_id', Auth::user()->getId())->get();
    return view('myaccount.order')->with("viewData", $viewData);
    }

}