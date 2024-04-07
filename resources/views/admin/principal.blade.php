<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet" />



    <link href="{{ asset('aside/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('aside/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('aside/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('aside/fonts/icomoon/style.css') }}" rel="stylesheet" />
    <title>TechWave</title>
</head>

<body>


    <aside class="sidebar">
        <div class="toggle">
            <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>
        </div>
        <div class="side-inner">
            <div class="profile">

                <img class="mb-4" src="{{ asset('aside/images/img1.png') }}" alt="" width="72" height="57">

                <h3 class="name">TechWave</h3>
                <span class="country">Phone Store </span>
            </div>


            <div class="nav-menu">
                <ul>
                    <li class="accordion">
                        <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne" class="collapsible">
                            <span class="icon-home mr-3"></span>product
                        </a>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                            <div>
                                <ul>
                                    <li><a href="{{url('admin/product/create')}}">Create</a></li>
                                    <li><a href="{{url('admin/product/show')}}">show</a></li>
                                    <li><a href="{{url('admin/product')}}">index</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="accordion">
                        <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo" class="collapsible">
                            <span class="icon-search2 mr-3"></span>Customer
                        </a>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne">
                            <div>
                                <ul>
                                    <li><a href="{{url('admin/customer/create')}}">Create</a></li>
                                    <li><a href="{{url('admin/customer/update')}}">Update</a></li>
                                    <li><a href="{{url('admin/customer')}}">index</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="accordion">
                        <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo" class="collapsible">
                            <span class="icon-search2 mr-3"></span>Suppliers
                        </a>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne">
                            <div>
                                <ul>
                                    <li><a href="{{url('admin/Suppliers/create')}}">Create</a></li>
                                    <li><a href="{{url('admin/Suppliers/update')}}">Update</a></li>
                                    <li><a href="{{url('admin/Suppliers')}}">index</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="accordion">
                        <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo" class="collapsible">
                            <span class="icon-search2 mr-3"></span>Category
                        </a>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne">
                            <div>
                                <ul>
                                    <li><a href="{{url('admin/category/create')}}">Create</a></li>
                                    <li><a href="{{url('admin/category/update')}}">Update</a></li>

                                    <li><a href="{{url('admin/category')}}">index</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"><span class="icon-notifications mr-3"></span>Notifications</a>
                    </li>
                    <li>
                        <a href="#"><span class="icon-location-arrow mr-3"></span>Direct</a>
                    </li>

                    <li>
                        <a href="#"><span class="icon-sign-out mr-3"></span>Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>

    </aside>




    <script src="{{ asset('aside/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('aside/js/popper.min.js') }}"></script>
    <script src="{{ asset('aside/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('aside/js/main.js') }}"></script>





    @yield('content')
</body>

</html>