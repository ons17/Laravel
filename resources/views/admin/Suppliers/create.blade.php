@extends('admin.principal')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>MyApp</title>
  
  <link href="{{asset('/assets//dist/css/signin.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">

 

    
    <link href="signin.css" rel="stylesheet">
  </head>
    @section('content')

  <body class="text-center">

<main class="form-signin w-100 m-auto">
  <form  method="post" action ="{{url('admin/Suppliers/')}}">
         @csrf

   
  <img class="mb-4" src="https://www.asirox.com/wp-content/uploads/2022/07/pngtree-user-vector-avatar-png-image_1541962.jpeg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

   <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="first_name" >
      <label for="floatingInput">First Name</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="last_name">
      <label for="floatingInput">Last Name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="phone">
      <label for="floatingInput">Phone</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="country">
      <label for="floatingPassword">Country</label>
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
