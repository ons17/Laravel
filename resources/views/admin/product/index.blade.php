@extends('admin.principal')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css"
        integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <title>MyApp</title>
    <link href="{{asset('/assets/dist/css/table.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/dist/css/table.css')}}" rel="stylesheet">
</head>

@section('content')

<body>
    git init
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <h4 class="mb-4"><small>Simple With Actions</small></h4>
                <form action="{{ route('search') }}" method="GET" class="d-flex">
                    <input type="text" name="query" class="form-control mr-2" placeholder="Search...">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success" id="successAlert">
        {{ session('success') }}
    </div>
    <script>
    // Wait for 10 seconds and then hide the alert
    setTimeout(function() {
        document.getElementById('successAlert').style.display = 'none';
    }, 2000);
    </script>
    @endif

    <div class="container">
        @if(isset($message))
        <div class="alert alert-info">{{ $message }}</div>
        @else
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $p)
                    <tr>
                        <td class="text-center">{{$p->id}}</td>
                        <td>{{$p->name}}</td>
                        <td>{{$p->price}} </td>
                        <td>{{$p->qte}} </td>
                        <td>{{$p->created_at}} </td>
                        <td>{{$p->updated_at}} </td>
                        <td class="td-actions text-left">
                            <div class="d-flex">
                                <a href="{{ route('product.show', $p->id) }}"
                                    class="btn btn-info btn-link btn-just-icon btn-sm" title="View"
                                    onclick=" details({{$p->id}})">
                                    <i class="material-icons">visibility</i>
                                </a>
                                <a href="{{ route('product.edit', $p->id) }}"
                                    class="btn btn-success btn-link btn-just-icon btn-sm" title="Edit">
                                    <i class=" material-icons">edit</i>
                                </a>
                                <form action="{{ route('product.destroy', $p->id) }}" method="post" class="ml-2">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-link btn-just-icon btn-sm"
                                        title="Delete" onclick="confirmDelete({{ $p->id }})">
                                        <i class="material-icons">close</i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {!! $products->links() !!}
        @endif
    </div>

    <script>
    function confirmDelete(productId) {
        var confirmed = confirm("Are you sure you want to delete this product?");
        if (confirmed) {
            // Proceed with deletion confirmation
            fetch('/products/' + productId + '/confirm-delete')
                .then(response => response.json())
                .then(data => {
                    if (data.message === 'Product found. Proceed with deletion?') {
                        // Product found, proceed with deletion
                        window.location.href = '/products/' + productId + '/delete';
                    } else {
                        // Product not found or other error
                        alert('Error: ' + data.error);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while confirming deletion.');
                });
        } else {
            // Cancel deletion
            alert("Product deletion canceled.");
        }
    }
    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
    </script>
</body>

</html>
@endsection