<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class PlaceorderController extends Controller
{
    public function index(){
        $pizzas=DB::table('pizzas')->get();
        //$pizzas=Pizza::get();
        //dd($pizzas->toArray());
        return view('pages.Main.index',compact('pizzas'));
    }
    public function index1(){
        return view('pages.Main.setorder');
    }
}
