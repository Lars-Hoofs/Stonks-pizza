<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\Additional;
use App\Models\Products;
use App\Models\cart;


class CartController extends Controller
{
public function index()
{
    return view('cart.index');
}
}
