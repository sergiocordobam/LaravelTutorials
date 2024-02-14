<?php
 
namespace App\Http\Controllers;

use Illuminate\View\View;
 
class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData["title"] = "Contact";
        $viewData["subtitle"] =  "Contact";
        $viewData["email"] = "ejemplo@mail.com";
        $viewData["number"] = "1234567890";
        return view('home.contact')->with("viewData", $viewData);
  
    }
}
