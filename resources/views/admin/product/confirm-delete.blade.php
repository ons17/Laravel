@extends('admin.principal')

@section('content')

<div class="container">
    <h1>Confirm Delete</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text">Are you sure you want to delete the product "{{ $product->name }}"?</p>
            <!-- Delete Confirmation Form -->
            <form action="{{ route('product.confirm-delete', $product->id) }}" method="POST">
                @csrf
                @method('delete')
                <div class="form-group">
                    <label for="productId">Product ID</label>
                    <input type="text" class="form-control" id="productId" name="product_id" placeholder="Product ID"
                        required>
                </div>
                <button type="submit" class="btn btn-danger">Confirm Delete</button>
            </form>
        </div>
    </div>
</div>

@endsection