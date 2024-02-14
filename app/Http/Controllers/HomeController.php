<?php
 
namespace App\Http\Controllers;

use Illuminate\View\View;
 
class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function about(): View
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "This is an about page ...";
        $viewData["author"] = "Developed by: Sergio Córdoba";
        return view('home.about')->with("viewData", $viewData);
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
