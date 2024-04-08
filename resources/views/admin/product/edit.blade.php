@extends('admin.principal')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>TechWave</title>

    <link href="{{asset('/assets//dist/css/signin.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
</head>

@section('content')

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @method('PUT')
            <!-- Use PUT method for update -->
            @csrf

            <img class="mb-4" src="{{ asset('aside/images/img1.png') }}" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name"
                    value="{{ $product->name }}"> <!-- Name field -->
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="price" placeholder="Password"
                    value="{{$product->price}}"> <!-- Price field -->
                <label for="floatingPassword">Price</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="qte"
                    value="{{$product->qte}}"> <!-- Quantity field -->
                <label for="floatingInput">Quantity</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button> <!-- Update button -->
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>

        </form>
    </main>
</body>
@endsection

</html>