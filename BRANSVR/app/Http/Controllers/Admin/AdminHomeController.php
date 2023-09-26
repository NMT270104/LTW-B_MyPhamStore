<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Admin - Mỹ Phẩm Store";
        return view ("admin.home.index") -> with("viewData",$viewData);
    }
}