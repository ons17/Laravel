@extends('admin.principal')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Educational registration form</title>
  
  <link href="{{asset('/assets//dist/css/signin.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">

 

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
    @section('content')

  <body class="text-center">

<main class="form-signin w-100 m-auto">
<form method="post" action ="{{url('admin/category/')}}" >
      @csrf  
        <img class="mb-4" src="https://www.asirox.com/wp-content/uploads/2022/07/pngtree-user-vector-avatar-png-image_1541962.jpeg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name">
      <label for="floatingInput">Name of product</label>
    </div>
    

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
