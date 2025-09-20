<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrderController extends Controller
{
    public function index()
    {
        $Orders = Orders::all(); //Ambil semua data dari model Monitor
        $totalOrder = Orders::count();
        return view('Admin_Pannel.Admin_Pannel1', ['Orders'=>$Orders,'totalOrder'=>$totalOrder]);
    }
}
