@extends('admin.principal')

@section('content')
    <div>
        <h1>Détails du produit</h1>
        <p>Nom: {{ $product->name }}</p>
        <p>Prix: {{ $product->price }}</p>
        <p>Quantité: {{ $product->qte }}</p>
        <p>Date de création: {{ $product->created_at }}</p>
        <p>Date de mise à jour: {{ $product->updated_at }}</p>
    </div>
@endsection
