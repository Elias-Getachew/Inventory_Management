@extends('layouts.app')

@section('content')
    <h1>Sale Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $sale->product->name }}</h5>
            <p class="card-text"><strong>Customer:</strong> {{ $sale->customer->name }}</p>
            <p class="card-text"><strong>Quantity:</strong> {{ $sale->quantity }}</p>
            <p class="card-text"><strong>Total Price:</strong> ${{ $sale->total_price }}</p>
            <p class="card-text"><strong>Date:</strong> {{ $sale->created_at->format('Y-m-d') }}</p>
            <a href="{{ route('sales.index') }}" class="btn btn-secondary">Back to Sales</a>
        </div>
    </div>
@endsection
