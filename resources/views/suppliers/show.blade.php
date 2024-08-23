@extends('layouts.app')

@section('content')
    <h1>Supplier Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $supplier->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $supplier->email }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $supplier->phone }}</p>
            <p class="card-text"><strong>Address:</strong> {{ $supplier->address }}</p>
            <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Back to Suppliers</a>
        </div>
    </div>
@endsection
