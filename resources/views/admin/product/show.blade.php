@extends('admin.principal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product Details: {{ $product->name }}</div>

                <div class="card-body">
                    <div class="product-details">
                        <img src="{{ asset('aside/images/img1.png') }}" alt="Product Image" class="img-fluid mb-3">
                        <p><strong>Nom:</strong> {{ $product->name }}</p>
                        <p><strong>Prix:</strong> {{ $product->price }}</p>
                        <p><strong>Quantité:</strong> {{ $product->qte }}</p>
                        <p><strong>Date de création:</strong> {{ $product->created_at }}</p>
                        <p><strong>Date de mise à jour:</strong> {{ $product->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection