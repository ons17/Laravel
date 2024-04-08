@extends('admin.principal')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Product Details: {{ $product->name }}</div>

                <div class="card-body">
                    <div class="product-details">
                        <div class="mb-3">
                            <strong>Nom:</strong> {{ $product->name }}
                        </div>
                        <div class="mb-3">
                            <strong>Prix:</strong> {{ $product->price }}
                        </div>
                        <div class="mb-3">
                            <strong>Quantité:</strong> {{ $product->qte }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection