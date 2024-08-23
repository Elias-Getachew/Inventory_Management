@extends('layouts.app')

@section('content')
    <h1>Customer Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $customer->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $customer->email }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $customer->phone }}</p>
            <p class="card-text"><strong>Address:</strong> {{ $customer->address }}</p>
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back to Customers</a>
        </div>
    </div>
@endsection
