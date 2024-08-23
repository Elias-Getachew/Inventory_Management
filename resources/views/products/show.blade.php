@extends('layouts.app')

@section('content')
    <h1>Product Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text"><strong>Category:</strong> {{ $product->category->name }}</p>
            <p class="card-text"><strong>Supplier:</strong> {{ $product->supplier->name }}</p>
            <p class="card-text"><strong>Price:</strong> ${{ $product->price }}</p>
            <p class="card-text"><strong>Quantity:</strong> {{ $product->quantity }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
        </div>
    </div>
@endsection
