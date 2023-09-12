<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index() {
        $viewData = [];
        $viewData["title"] = "Home Page - Mỹ phẩm Store";
        return view('home.index')->with("viewData", $viewData);

    }
    public function about(){
        $viewData = [];
        $viewData["title"] = "About us - Mỹ Phẩm Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "Project: Bán Mỹ Phẩm SVR";
        $viewData["author"] = "Developed by: Nguyễn Minh Thư_22-0-21093  Hoàng Thị Kim Anh_22-1-21166";
        return view('home.about')->with("viewData", $viewData);
    }
// public function about(){
// $data1 = "About us Online Store";
// $data2 = "About";
// $description = "This ia an about page";
// $author = "Developed by: HovaTen ";
// return view("home.about")
// ->with("title", $data1)
// ->with("subtitle", $data2)
// ->with("description", $description)
// ->with("author", $author);
// }
}

?>