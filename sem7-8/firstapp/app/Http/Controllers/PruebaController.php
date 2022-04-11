<?php

namespace App\Http\Controllers;

use Illuminate\Routing\controller as BaseController;
class PruebaController extends BaseController{
    public function index(){
        //return "Hola";
        return view ('index');
    }
}
