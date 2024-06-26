@extends('admin.principal')
<!doctype html>
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
        <form method="post" action="{{url('admin/product/')}}">

            @csrf

            <img class="mb-4" src="{{ asset('aside/images/img1.png') }}" alt="" width="350" height="100">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name">
                <label for="floatingInput">Name</label>
            </div>

            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="price" placeholder="Password">
                <label for="floatingPassword">Price</label>
            </div>
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="qte">
                <label for="floatingInput">Quantity</label>
            </div>

            @error('qte')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>

        </form>
    </main>
</body>
@endsection

</html>