@extends('admin.principal')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
<title>Educational registration form</title>
  <link href="{{asset('/assets/dist/css/table.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/dist/css/table.css')}}" rel="stylesheet">
  </head>
      @section('content')

<body>
    <div class="container">
    	
            <div class="col-lg-10 col-md-10 ml-auto mr-auto">
            <h4><small>Simple With Actions</small></h4>
                 @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                             <th>Name</th>
                           
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                         @foreach($categories as $ca)
                        <tr>
                             <td class="text-center">{{$ca->id}}</td>
                            <td>{{$ca->name}}</td>
                           
                            <td>{{$ca->created_at}} </td>
                            <td>{{$ca->updated_at}} </td>
                             <td class="td-actions text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-link btn-just-icon btn-sm" data-original-title="" title="">
                                    <i class="material-icons">person</i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success btn-link btn-just-icon btn-sm" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                </button>
                                 <form action="{{route('category.destroy', $ca->id)}}" method="post">
                                @csrf
                                
                                @method("delete")
                                <button  rel="tooltip" class="btn btn-danger btn-link btn-just-icon btn-sm" data-original-title="" title="">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                        </tr>
                                               @endforeach

                    </tbody>
                </table>
                </div>
    
                
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  
</body>
@endsection
</html>