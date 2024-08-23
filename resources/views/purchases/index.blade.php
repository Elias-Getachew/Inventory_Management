@extends('layouts.app')

@section('content')
    <h1>Purchases</h1>
    <a href="{{ route('purchases.create') }}" class="btn btn-primary mb-3">Add New Purchase</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>Supplier</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchases as $purchase)
                <tr>
                    <td>{{ $purchase->product->name }}</td>
                    <td>{{ $purchase->supplier->name }}</td>
                    <td>{{ $purchase->quantity }}</td>
                    <td>${{ $purchase->total_price }}</td>
                    <td>{{ $purchase->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('purchases.edit', $purchase->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('purchases.show', $purchase->id) }}" class="btn btn-info btn-sm">View</a>
                        <form action="{{ route('purchases.destroy', $purchase->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
