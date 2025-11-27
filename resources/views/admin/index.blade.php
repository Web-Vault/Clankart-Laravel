<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
                              initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="{{ URL::to('/') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>

    <style>
        body {
            overflow-x: hidden;
        }

        #wrapper {
            display: flex;
            width: 100%;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            transition: margin 0.25s ease-out;
            background: #343a40;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
            color: white;
            background: #343a40;
        }

        .sidebar-heading>img {
            width: 150px;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #sidebar-wrapper .list-group-item {
            background: #343a40;
            color: #fff;
        }

        #sidebar-wrapper .list-group-item:hover {
            background: #495057;
        }

        #page-content-wrapper {
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        .card {
            margin-bottom: 20px;
        }

        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }

        .navbar {
            padding: 1rem;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar-nav .nav-item .nav-link {
            font-size: 1rem;
            margin-left: 1rem;
        }

        .navbar-nav .nav-item .nav-link i {
            margin-right: 0.5rem;
        }

        .dropdown-menu {
            border-radius: 0.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-outline-light {
            border: none;
            color: white;
        }

        .btn-outline-light:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        /*  */

        .table-wrapper {
            margin-top: 20px;
        }

        .table thead th {
            background-color: #343a40;
            color: #fff;
        }

        .btn-confirm,
        .btn-cancel {
            padding: 0.25rem 0.75rem;
            margin-right: 0.5rem;
        }

        .btn-confirm {
            background-color: #28a745;
            border-color: #28a745;
            color: #fff;
        }

        .btn-cancel {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff;
        }












        /*  */








        .nav-item {
            cursor: pointer;
            transition: 0.3s all ease;
        }

        .nav-item:hover {
            background-color: #eee;
            color: #0083CA;
        }

        .links {
            text-decoration: none;
            color: #fff;
            width: 100%;
        }

        .none:hover {
            cursor: pointer;
            transition: 0.3s all ease;
            background: none;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper"> <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading"><img src="{{URL::to('/')}}/images/clankart-logo.png" alt="logo"></div>
            <div class="nav mt-3 w-100 d-block">
                <a href="{{URL::to('/')}}/a-index" class="links">
                    <div class="nav-item
                                                                      p-3
                                                                      d-flex
                                                                      w-100">
                        <div class="nav-icon">
                            <i class="fas
                                                                                                    fa-home"></i>
                        </div>
                        <div class="nav-name
                                                                                w-100
                                                                                d-flex
                                                                                align-items-center">
                            <span class="mx-3
                                                                                          fs-5">
                                Dashboard
                            </span>
                        </div>
                    </div>
                </a>

                <a href="{{URL::to('/')}}/a-orders" class="links">
                    <div class="nav-item
                                                                      p-3
                                                                      d-flex
                                                                      w-100">
                        <div class="nav-icon">
                            <i class="fas fa-box
                                                                      mr-2"></i>
                        </div>
                        <div class="nav-name
                                                                                w-100
                                                                                d-flex
                                                                                align-items-center">
                            <span class="mx-3
                                                                                          fs-5">
                                Orders
                            </span>
                        </div>
                    </div>
                </a>


                <a href="{{URL::to('/')}}/a-product" class="links">
                    <div class="nav-item
                                                                      p-3
                                                                      d-flex
                                                                      w-100">
                        <div class="nav-icon">
                            <i class="fas
                                                                                fa-cubes
                                                                                mr-2"></i>
                        </div>
                        <div class="nav-name
                                                                                w-100
                                                                                d-flex
                                                                                align-items-center">
                            <span class="mx-3
                                                                                          fs-5">
                                Products
                            </span>
                        </div>
                    </div>
                </a>


                <a href="{{URL::to('/')}}/a-customer" class="links">
                    <div class="nav-item
                                                                      p-3
                                                                      d-flex
                                                                      w-100">
                        <div class="nav-icon">
                            <i class="fas
                                                                                fa-users
                                                                                mr-2"></i>
                        </div>
                        <div class="nav-name
                                                                                w-100
                                                                                d-flex
                                                                                align-items-center">
                            <span class="mx-3
                                                                                          fs-5">
                                Customers
                            </span>
                        </div>
                    </div>
                </a>


                <a href="{{URL::to('/')}}/a-offer" class="links">
                    <div class="nav-item
                                                      p-3
                                                      d-flex
                                                      w-100">
                        <div class="nav-icon">
                            <i class="fas
                                                                fa-chart-line
                                                                mr-2"></i>
                        </div>
                        <div class="nav-name
                                                                w-100
                                                                d-flex
                                                                align-items-center">
                            <span class="mx-3
                                                                          fs-5">
                                Offers & Discounts
                            </span>
                        </div>
                    </div>
                </a>


            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg
                                                  navbar-light bg-primary
                                                  border-bottom shadow-sm">
                <button class="btn
                                                            btn-outline-light" id="menu-toggle">
                    <i class="fas
                                                                      fa-bars"></i>
                </button>

                <a class="navbar-brand
                                                            text-white ml-3" href="#">Admin Panel</a>
                <div class="collapse
                                                            navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav
                                                                      ml-auto
                                                                      mt-2
                                                                      mt-lg-0">
                        <li class="nav-item none">
                            <a class="nav-link
                                                                                          text-white"
                                href="{{URL::to('/')}}/a-index">
                                <i class="fas
                                                                                                    fa-home"></i>
                                Dashboard
                            </a>
                        </li>

                        <li class="nav-item none
                                                                                dropdown">
                            <a class="nav-link
                                                                                          dropdown-toggle
                                                                                          text-white" href="#"
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas
                                                                                                    fa-user"></i>
                                Admin
                            </a>
                            <div class="dropdown-menu
                                                                                          dropdown-menu-right"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <h1 class="mt-4">Welcome to
                    the Admin Panel</h1>
                <p>Manage your e-commerce site
                    effectively.</p>
                <div class="row">
                    <div class="col-lg-4
                                                                      col-md-6">
                        <div class="card
                                                                                bg-primary
                                                                                text-white">
                            <div class="card-body">
                                <div class="card-title">
                                    <i
                                        class="fas
                                                                                                              fa-shopping-cart"></i>
                                    Orders
                                </div>
                                <h2 class="card-text">100</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4
                                                                      col-md-6">
                        <div class="card
                                                                                bg-success
                                                                                text-white">
                            <div class="card-body">
                                <div class="card-title">
                                    <i
                                        class="fas
                                                                                                              fa-cubes"></i>
                                    Products
                                </div>
                                <h2 class="card-text">100</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4
                                                                      col-md-6">
                        <div class="card
                                                                                bg-warning
                                                                                text-white">
                            <div class="card-body">
                                <div class="card-title">
                                    <i
                                        class="fas
                                                                                                              fa-users"></i>
                                    Customers
                                </div>
                                <h2 class="card-text">100</h2>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Scroller section: after stats -->
                <div class="table-wrapper">
                    <h3 class="mt-4">Home Scroller Images</h3>
                    <div class="mb-3">
                        <a href="{{URL::to('/')}}/scroll" class="btn btn-primary btn-sm">Add Scroller Image</a>
                    </div>

                    @if (isset($images) && count($images))
                        <div class="row">
                            @foreach ($images as $img)
                                <div class="col-md-3 mb-3">
                                    <div class="card h-100">
                                        <img src="{{ URL::to('/') }}/{{ $img->scroller_image }}" class="card-img-top" alt="scroller image">
                                        <div class="card-body text-center">
                                            <a href="{{ URL::to('/') }}/remove-scroller/{{ $img->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Remove this image?')">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No scroller images uploaded yet.</p>
                    @endif
                </div>

                <!-- Orders section: after scroller -->
                <div class="table-wrapper">
                    <h3 class="mt-4">Recent
                        Orders</h3>

                    @if (isset($orders))

                        <table class="table
                                                                                    table-striped
                                                                                    table-bordered">
                            <thead>
                                <tr>
                                    <th>Order
                                        ID</th>
                                    <th>Customer
                                        Name</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($orders as $item)

                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->customer_name}}</td>
                                        <td>{{$item->book_name}}</td>
                                        <td>{{$item->order_date}}</td>
                                        <td>{{$item->order_status}}</td>
                                        <td>${{$item->order_price}}.00</td>
                                        <td>
                                            <button
                                                class="btn
                                                                                                                      btn-sm
                                                                                                                      btn-success
                                                                                                                      btn-confirm"
                                                data-order-id="1001"><a href="{{URL::to('/')}}/confirm_order/{{$item->id}}"
                                                    class="text-decoration-none text-white">Confirm</a></button>
                                            <button
                                                class="btn
                                                                                                                      btn-sm
                                                                                                                      btn-danger
                                                                                                                      btn-cancel"
                                                data-order-id="1001"> <a href="{{URL::to('/')}}/cancel_order/{{$item->id}}"
                                                    class="text-decoration-none text-white">Cancel</a> </button>
                                        </td>
                                    </tr>

                                @endforeach

                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>


                    @endif

                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $(document).on("click", ".btn-confirm", function () {
            var orderId = $(this).data("order-id");
            alert("Order " + orderId + " confirmed.");
        });

        $(document).on("click", ".btn-cancel", function () {
            var orderId = $(this).data("order-id");
            alert("Order " + orderId + " cancelled.");
        });
    </script>
</body>

</html>