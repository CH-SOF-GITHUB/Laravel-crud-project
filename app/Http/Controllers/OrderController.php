<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    /* public function order($date, $number)
    {
        return view("orders.order", compact($date, $number));
    } */
    public function show($date, $num)
    {
        return view("orders.order", ["date" => $date, "num" => $num]);
    }
}
