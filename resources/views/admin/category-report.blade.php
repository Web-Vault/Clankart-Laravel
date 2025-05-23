<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width,
                              initial-scale=1.0">
          <title>Returns & Refunds - Category Name</title>
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

                    /* Main Content */
                    .container {
                              padding: 30px;
                    }

                    .table {
                              width: 100%;
                              margin-bottom: 1rem;
                              color: #212529;
                    }

                    .table th,
                    .table td {
                              padding: 0.75rem;
                              vertical-align: top;
                              border-top: 1px solid #dee2e6;
                    }

                    .table thead th {
                              vertical-align: bottom;
                              border-bottom: 2px solid #dee2e6;
                              background-color: #f8f9fa;
                              color: #495057;
                    }

                    .table tbody+tbody {
                              border-top: 2px solid #dee2e6;
                    }

                    .table-bordered {
                              border: 1px solid #dee2e6;
                    }

                    .table-bordered th,
                    .table-bordered td {
                              border: 1px solid #dee2e6;
                    }

                    .table-bordered thead th,
                    .table-bordered thead td {
                              border-bottom-width: 2px;
                    }

                    .btn-primary {
                              background-color: #007bff;
                              border-color: #007bff;
                    }

                    .btn-primary:hover {
                              background-color: #0069d9;
                              border-color: #0062cc;
                    }

                    .btn-danger {
                              background-color: #dc3545;
                              border-color: #dc3545;
                    }

                    .btn-danger:hover {
                              background-color: #c82333;
                              border-color: #bd2130;
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
                                                                                          text-white" href="index">
                                                                                <i class="fas
                                                                                                    fa-home"></i>
                                                                                Dashboard
                                                                      </a>
                                                            </li>

                                                            <li class="nav-item none
                                                                                dropdown">
                                                                      <a class="nav-link
                                                                                          dropdown-toggle
                                                                                          text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="fas
                                                                                                    fa-user"></i>
                                                                                Admin
                                                                      </a>
                                                                      <div class="dropdown-menu
                                                                                          dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                                <a class="dropdown-item" href="#">Profile</a>
                                                                                <div class="dropdown-divider"></div>
                                                                                <a class="dropdown-item" href="#">Logout</a>
                                                                      </div>
                                                            </li>
                                                  </ul>
                                        </div>
                              </nav>

                              <div class="container mt-4">
                                        <h1>Returns & Refunds -
                                                  Category Name</h1>
                                        <div class="table-responsive
                                                            mt-4">
                                                  <table class="table
                                                                      table-bordered">
                                                            <thead class="thead-light">
                                                                      <tr>
                                                                                <th>Product
                                                                                          Name</th>
                                                                                <th>Order
                                                                                          ID</th>
                                                                                <th>Return
                                                                                          Date</th>
                                                                                <th>Refund
                                                                                          Date</th>
                                                                                <th>Status</th>
                                                                                <th>Actions</th>
                                                                      </tr>
                                                            </thead>
                                                            <tbody>
                                                                      <tr>
                                                                                <td>Product
                                                                                          1</td>
                                                                                <td>12345</td>
                                                                                <td>2024-07-15</td>
                                                                                <td>2024-07-20</td>
                                                                                <td>Refunded</td>
                                                                                <td>
                                                                                          <button class="btn
                                                                                                              btn-success
                                                                                                              btn-sm
                                                                                                              mr-2" onclick="acceptAction(12345)">Accept
                                                                                                    Refund</button>
                                                                                          <button class="btn
                                                                                                              btn-danger
                                                                                                              btn-sm" onclick="cancelAction(12345)">Cancel</button>
                                                                                </td>
                                                                      </tr>
                                                                      <tr>
                                                                                <td>Product
                                                                                          2</td>
                                                                                <td>12346</td>
                                                                                <td>2024-07-18</td>
                                                                                <td></td>
                                                                                <td>Pending</td>
                                                                                <td>
                                                                                          <button class="btn
                                                                                                              btn-success
                                                                                                              btn-sm
                                                                                                              mr-2" onclick="acceptAction(12346)">Accept
                                                                                                    Refund</button>
                                                                                          <button class="btn
                                                                                                              btn-danger
                                                                                                              btn-sm" onclick="cancelAction(12346)">Cancel</button>
                                                                                </td>
                                                                      </tr>
                                                                      <!-- Add more rows as needed -->
                                                            </tbody>
                                                  </table>
                                        </div>
                              </div>
                    </div>
                    <!-- /#page-content-wrapper -->
          </div>
          <!-- /#wrapper -->

          <!-- Bootstrap core JavaScript -->
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          <!-- Menu Toggle Script -->
          <script>
                    $("#menu-toggle").click(function(e) {
                              e.preventDefault();
                              $("#wrapper").toggleClass("toggled");
                    });

                    function acceptAction(orderId) {
                              alert("Accept Refund for Order ID: " + orderId);
                              // Implement your accept refund logic here
                    }

                    function cancelAction(orderId) {
                              alert("Cancel Refund for Order ID: " + orderId);
                              // Implement your cancel refund logic here
                    }
          </script>
</body>

</html>