<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width,
                              initial-scale=1.0">
          <title>Admin Panel - Products</title>
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

                    .table-wrapper {
                              margin-top: 20px;
                    }

                    .table thead th {
                              background-color: #343a40;
                              color: #fff;
                              vertical-align: middle;
                    }

                    .table .actions {
                              text-align: center;
                    }

                    .btn-edit,
                    .btn-delete {
                              padding: 0.25rem 0.75rem;
                              margin-right: 0.5rem;
                              font-size: 0.875rem;
                    }

                    .btn-edit {
                              background-color: #007bff;
                              border-color: #007bff;
                              color: #fff;
                    }

                    .btn-delete {
                              background-color: #dc3545;
                              border-color: #dc3545;
                              color: #fff;
                    }

                    .dropdown-categories {
                              width: 250px;
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





                    /*  */






                    .form-group {
                              margin-bottom: 20px;
                    }

                    .form-group label {
                              display: block;
                              margin-bottom: 5px;
                    }

                    .form-group input {
                              border: 1px solid #ccc;
                              border-radius: 4px;
                              box-sizing: border-box;
                              padding: 20px;
                              width: 100%;
                    }

                    .form-group input[readonly] {
                              background-color: #e9ecef;
                    }

                    .email-verified {
                              align-items: center;
                              display: flex;
                              margin-top: 5px;
                    }

                    .email-verified img {
                              height: 16px;
                              margin-right: 5px;
                              width: 16px;
                    }

                    .phone-input {
                              align-items: center;
                              display: flex;
                    }

                    .phone-input .country-code {
                              background-color: #e9ecef;
                              border: 1px solid #ccc;
                              border-radius: 4px 0 0 4px;
                              padding: 8px;
                    }

                    .phone-input input {
                              border-left: none;
                              border-radius: 0 4px 4px 0;
                              width: calc(100% - 40px);
                    }

                    .name-group,
                    .password-group {
                              display: flex;
                              justify-content: space-between;
                    }

                    .name-field,
                    .password-field {
                              display: flex;
                              flex-direction: column;
                              width: 45%;
                    }

                    .form-actions {
                              display: flex;
                              justify-content: flex-end;
                    }

                    .form-actions button {
                              border: none;
                              border-radius: 4px;
                              cursor: pointer;
                              padding: 10px 20px;
                              margin: 0 10px;
                    }

                    .form-actions .discard {
                              background-color: #6c757d;
                              color: white;
                    }

                    .form-actions .update {
                              transition: 0.3s all ease;
                              background-color: #0083CA;
                              color: white;
                    }

                    .form-actions .update:hover {
                              background-color: #286090;
                              color: white;
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
                    <!-- /#sidebar-wrapper --> <!-- Page Content -->
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

                              <div class="container-fluid">


                                        <div class="container mt-5">
                                                  <h2 class="mb-4">Add New User</h2>
                                                  <form action="/a-add-user" method="post">
                                                            @csrf
                                                            <div class="name-group">
                                                                      <div class="name-field form-group">
                                                                                <label for="firstName">First Name</label>
                                                                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name" >
                                                                                <span class="text-danger">
                                                                                          @error('firstName')
                                                                                          {{ $message}}
                                                                                          @enderror
                                                                                </span>
                                                                      </div>
                                                                      <div class="name-field form-group">
                                                                                <label for="lastName">Last Name</label>
                                                                                <input type="text" class="form-control" id="lastName"  name="lastName" placeholder="Enter last name" >
                                                                                <span class="text-danger">
                                                                                          @error('lastName')
                                                                                          {{ $message}}
                                                                                          @enderror
                                                                                </span>
                                                                      </div>
                                                            </div>
                                                            <div class="form-group">
                                                                      <label for="contactNumber">Contact Number</label>
                                                                      <div class="phone-input">
                                                                                <div class="country-code">+91</div>
                                                                                <input type="text" class="form-control" id="contactNumber" name="contactNumber" placeholder="Enter contact number" >
                                                                                <span class="text-danger">
                                                                                          @error('contactNumber')
                                                                                          {{ $message}}
                                                                                          @enderror
                                                                                </span>
                                                                      </div>
                                                            </div>
                                                            <div class="form-group">
                                                                      <label for="address">Address</label>
                                                                      <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" >
                                                                      <span class="text-danger">
                                                                                @error('address')
                                                                                {{ $message}}
                                                                                @enderror
                                                                      </span>
                                                            </div>
                                                            <div class="form-group">
                                                                      <label for="pincode">Pincode</label>
                                                                      <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter pincode" >
                                                                      <span class="text-danger">
                                                                                @error('pincode')
                                                                                {{ $message}}
                                                                                @enderror
                                                                      </span>
                                                            </div>
                                                            <div class="form-group">
                                                                      <label for="email">Email</label>
                                                                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" >
                                                                      <span class="text-danger">
                                                                                @error('email')
                                                                                {{ $message}}
                                                                                @enderror
                                                                      </span>
                                                            </div>
                                                            <div class="password-group">
                                                                      <div class="password-field form-group">
                                                                                <label for="password">Password</label>
                                                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" >
                                                                                <span class="text-danger">
                                                                                          @error('password')
                                                                                          {{ $message}}
                                                                                          @enderror
                                                                                </span>
                                                                      </div>
                                                                      <div class="password-field form-group">
                                                                                <label for="confirmPassword">Confirm Password</label>
                                                                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm password" >
                                                                                <span class="text-danger">
                                                                                          @error('confirmPassword')
                                                                                          {{ $message}}
                                                                                          @enderror
                                                                                </span>
                                                                      </div>
                                                            </div>
                                                            <div class="form-actions">
                                                                      <button type="button" class="discard">Discard</button>
                                                                      <button type="submit" class="update">Add User</button>
                                                            </div>
                                                  </form>
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

                    // Action buttons for editing and deleting products
                    $(document).on("click", ".btn-edit", function() {
                              var productId = $(this).data("product-id");
                              // Implement edit functionality
                              alert("Edit Product ID: " + productId);
                    });

                    $(document).on("click", ".btn-delete", function() {
                              var productId = $(this).data("product-id");
                              // Implement delete functionality
                              alert("Delete Product ID: " + productId);
                    });
          </script>
</body>

</html>