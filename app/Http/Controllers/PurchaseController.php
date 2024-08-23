<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::with(['product', 'supplier'])->get();
        return view('purchases.index', compact('purchases'));
    }

    public function create()
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('purchases.create', compact('products', 'suppliers'));
    }

    public function store(Request $request)
    {
        Purchase::create($request->all());
        return redirect()->route('purchases.index');
    }

    public function show(Purchase $purchase)
    {
        return view('purchases.show', compact('purchase'));
    }

    public function edit(Purchase $purchase)
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('purchases.edit', compact('purchase', 'products', 'suppliers'));
    }

    public function update(Request $request, Purchase $purchase)
    {
        $purchase->update($request->all());
        return redirect()->route('purchases.index');
    }

    public function destroy(Purchase $purchase)
    {
        $purchase->delete();
        return redirect()->route('purchases.index');
    }
}
