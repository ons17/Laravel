@extends('admin.principal')

@section('content')

<div class="container">
    <h1>Product Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Product Name: {{ $product->name }}</h5>
            <p class="card-text">Price: {{ $product->price }}</p>
            <p class="card-text">Quantity: {{ $product->qte }}</p>
            <!-- You can display other details here -->
        </div>
    </div>
</div>

@endsection