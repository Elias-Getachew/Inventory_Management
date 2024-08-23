@extends('layouts.app')

@section('content')
    <h1>Edit Sale</h1>
    <form action="{{ route('sales.update', $sale->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="product_id">Product</label>
            <select class="form-control" id="product_id" name="product_id" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" {{ $product->id == $sale->product_id ? 'selected' : '' }}>
                        {{ $product->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="customer_id">Customer</label>
            <select class="form-control" id="customer_id" name="customer_id" required>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $customer->id == $sale->customer_id ? 'selected' : '' }}>
                        {{ $customer->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $sale->quantity }}" required>
        </div>
        <div class="form-group">
            <label for="total_price">Total Price</label>
            <input type="number" class="form-control" id="total_price" name="total_price" step="0.01" value="{{ $sale->total_price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Sale</button>
    </form>
@endsection
