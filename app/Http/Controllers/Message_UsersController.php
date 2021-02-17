<?php

namespace App\Http\Controllers;
use App\Models\Message_users;

use Illuminate\Http\Request;

class Message_UsersController extends Controller
{

    public $model;
    
    public function __construct()
    {
        $this->model = new Message_users();
    }


    public function index()
    {
        
        try {
            $message;
            if(isset($_GET["busqueda"]))
                $message = $this->model->where("email","like","%".$_GET["busqueda"]."%")
                ->orWhere("name","like","%".$_GET["busqueda"]."%")->paginate(10);
            else
                $message = $this->model->paginate(10);

            return view('pages/message/index',["message" => $message]);
        } catch (\Exception $ex) {
            return  response()->view('errors.404', [], 404);
        }
       
    }

    public function create(Request $request)
    {
        $message = new Message_users($request->all());
        $message->save(); 
        return response()->json(['success'=>'Ajax request submitted successfully']); 
    }
}
