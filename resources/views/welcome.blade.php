<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Welcome to the Inventory Management System</h1>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('customers.index') }}" class="btn btn-primary btn-block">Manage Customers</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-block">Manage Categories</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('suppliers.index') }}" class="btn btn-success btn-block">Manage Suppliers</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <a href="{{ route('products.index') }}" class="btn btn-info btn-block">Manage Products</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('purchases.index') }}" class="btn btn-warning btn-block">Manage Purchases</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('sales.index') }}" class="btn btn-danger btn-block">Manage Sales</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
