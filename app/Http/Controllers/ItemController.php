<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\Additional;
use App\Models\Products;
use App\Http\Controllers\CartController;


class ItemController extends Controller
{
    public function index()
    {
        $items = Products::all();
        return view('items.index', compact('items'));
    }
    
    public function show(Products $item)
    {
        $additionals = Additional::all();
        return view('items.show', compact('item', 'additionals'));
    }
}
