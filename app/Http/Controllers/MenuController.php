<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menus;

class MenuController extends Controller
{
    public function index(){

    }

    public function getMenuList()
    {
    	$menus = Menus::all();
    	return response()->json($menus);

    }
}
