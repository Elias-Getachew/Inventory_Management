<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::with(['product', 'customer'])->get();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('sales.create', compact('products', 'customers'));
    }

    public function store(Request $request)
    {
        Sale::create($request->all());
        return redirect()->route('sales.index');
    }

    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('sales.edit', compact('sale', 'products', 'customers'));
    }

    public function update(Request $request, Sale $sale)
    {
        $sale->update($request->all());
        return redirect()->route('sales.index');
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sales.index');
    }
}
