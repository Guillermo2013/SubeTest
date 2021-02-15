<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public $model;
    
    public function __construct()
    {
        $this->model = new Products();
    }

    
    public function index()
    {
        
        try {
            if(isset($_GET["busqueda"]))
                return $this->model->where("name","like","%".$_GET["busqueda"]."%")->paginate(10);
            else
                return $this->model->paginate(10);
        } catch (\Exception $ex) {
            return  response()->view('errors.404', [], 404);
        }
       
    }

    public function show($id)
    {
        try {
            $product = $this->model->findOrFail($id);
            return view('pages/products/show',["product" => $product]);
        } catch (\Exception $ex) {
            return  response()->view('errors.404', [], 404);
        } 
    }

    public function create()
    {
        return  view('pages/products/create');
    }

    public function post(Request $request)
    {

        $product = new Products();
        $data = $request->all();
        $product->name = $data["name"];
        $product->description = $data["description"];
        $product->price = $data["price"];        
        $product->image = 'https://subebucket.s3.us-east-2.amazonaws.com/'.$request->file('image')->storePublicly( 'images' , 's3');
        $product->save(); 
        return redirect()->route("showProduct",["id" => $product->id]);  
    }

    public function update($id)
    {

        $product = $this->model->findOrFail($id);
        return  view('pages/products/create',["product" => $product]);
    }

    public function postUpdate(Request $request,$id)
    {

        $data = $request->all();
        $product = $this->model->findOrFail($id);
        $product->name = $data["name"];
        $product->description = $data["description"];
        $product->price = $data["price"];        
        $product->image = (!isset($data["image"]) )?$product->image:'https://subebucket.s3.us-east-2.amazonaws.com/'.$request->file('image')->storePublicly( 'images' , 's3');
        $product->save();
        return redirect()->route("showProduct",["id" => $product->id]);   
    }
}
