<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductsController;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $controller = new ProductsController();
        $products = $controller->index();
        return view('home',["products" => $products]);
    }

    public function catalogue(){
        $controller = new ProductsController();
        $products = $controller->index();
        return view('welcome',["products" => $products]);
    }
}

