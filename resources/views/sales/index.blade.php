@extends('layouts.app')

@section('content')
    <h1>Sales</h1>
    <a href="{{ route('sales.create') }}" class="btn btn-primary mb-3">Add New Sale</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>Customer</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->product->name }}</td>
                    <td>{{ $sale->customer->name }}</td>
                    <td>{{ $sale->quantity }}</td>
                    <td>${{ $sale->total_price }}</td>
                    <td>{{ $sale->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('sales.show', $sale->id) }}" class="btn btn-info btn-sm">View</a>
                        <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline-block;">
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
