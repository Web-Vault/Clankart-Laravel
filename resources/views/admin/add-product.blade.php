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

                    .form-group input,
                    .form-group select,
                    .form-group textarea {
                              border: 1px solid #ccc;
                              border-radius: 4px;
                              box-sizing: border-box;
                              padding: 20px;
                              width: 100%;
                    }

                    .form-group input[readonly] {
                              background-color: #e9ecef;
                    }

                    .form-actions {
                              display: flex;
                              justify-content: space-between;
                    }

                    .form-actions button {
                              border: none;
                              border-radius: 4px;
                              cursor: pointer;
                              padding: 15px 20px;
                              margin: 0 10px;
                              height: max-content;
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

                    .name-group,
                    .year-group,
                    .price-group {
                              display: flex;
                              justify-content: space-between;
                    }

                    .name-field,
                    .year-field,
                    .price-field {
                              display: flex;
                              flex-direction: column;
                              width: 45%;
                    }

                    .form-actions {
                              display: flex;
                              justify-content: space-between;
                              margin-top: 20px;
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

                                        <a href="a-offer" class="links">
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
                                                  <h2 class="mb-4">Add New Book</h2>
                                                  <form action="add-product" method="post">
                                                            @csrf
                                                            <div class="name-group">
                                                                      <div class="name-field form-group">
                                                                                <label for="title">Title</label>
                                                                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" >
                                                                                <span class="text-danger">
                                                                                          @error('title')
                                                                                          {{ $message}}
                                                                                          @enderror
                                                                                </span>
                                                                      </div>
                                                            </div>
                                                                <div class="form-group">
                                                                                <label for="category">Category</label>
                                                                                <select class="form-control" id="category" name="category">
                                                                                    <option value="" disabled selected>Select category</option>
                                                                                    
                                                                                    <option value="1">School / College books</option>
                                                                                    <option value="2">Fiction</option>
                                                                                    <option value="3">Novel</option>
                                                                                    <option value="4">Other</option>
                                                                                </select>
                                                                                <span class="text-danger">
                                                                                    @error('category')
                                                                                    {{ $message }}
                                                                                    @enderror
                                                                                </span>
                                                                            </div>

                                                            <div class="form-group">
                                                                      <label for="type">Type</label>
                                                                      <select class="form-control" id="type" name="type" >
                                                                                <option value="" disabled selected>Select type</option>
                                                                                <option value="hardcover">Hardcover</option>
                                                                                <option value="paperback">Paperback</option>
                                                                                <option value="ebook">E-book</option>
                                                                      </select>
                                                                      <span class="text-danger">
                                                                                @error('type')
                                                                                {{ $message}}
                                                                                @enderror
                                                                      </span>
                                                            </div>
                                                            <div class="name-group">
                                                                      <div class="name-field form-group">
                                                                                <label for="authorName">Author Name</label>
                                                                                <input type="text" class="form-control" id="authorName" name="authorName" placeholder="Enter book name" >
                                                                                <span class="text-danger">
                                                                                          @error('authorName')
                                                                                          {{ $message}}
                                                                                          @enderror
                                                                                </span>
                                                                      </div>
                                                                      <div class="name-field form-group">
                                                                                
                                                                      </div>
                                                            </div>
                                                            <div class="year-group">
                                                                      <div class="year-field form-group">
                                                                                <label for="year">Year</label>
                                                                                <input type="number" class="form-control" id="year" name="year" placeholder="Enter year of publication" >
                                                                                <span class="text-danger">
                                                                                          @error('year')
                                                                                          {{ $message}}
                                                                                          @enderror
                                                                                </span>
                                                                      </div>
                                                                      <div class="year-field form-group">
                                                                                <label for="condition">Condition</label>
                                                                                <input type="text" class="form-control" id="condition" name="condition" placeholder="Enter condition (e.g., New, Used)" >
                                                                                <span class="text-danger">
                                                                                          @error('condition')
                                                                                          {{ $message}}
                                                                                          @enderror
                                                                                </span>
                                                                      </div>
                                                            </div>
                                                            <div class="form-group">
                                                                      <label for="description">Description</label>
                                                                      <textarea class="form-control" id="description" name="description" placeholder="Enter description" rows="4" ></textarea>
                                                                      <span class="text-danger">
                                                                                @error('description')
                                                                                {{ $message}}
                                                                                @enderror
                                                                      </span>
                                                            </div>
                                                            <div class="form-group">                                                                                <label for="stock">stock</label>
                                                                                <input type="number" class="form-control" id="stock" name="stock" placeholder="Enter stock Count" >
                                                                                <span class="text-danger">
                                                                                          @error('stock')
                                                                                          {{ $message}}
                                                                                          @enderror
                                                                                </span>
                                                                      
                                                            </div>
                                                            <input type="hidden" name="seller_id" value="1">
                                                            <div class="price-group">
                                                                      <div class="price-field form-group">
                                                                                <label for="price">Price</label>
                                                                                <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" >
                                                                                <span class="text-danger">
                                                                                          @error('price')
                                                                                          {{ $message}}
                                                                                          @enderror
                                                                                </span>
                                                                      </div>

                                                                      <div class="form-actions">
                                                                                <button type="button" class="discard">Discard</button>
                                                                                <button type="submit" class="update">Add Book</button>
                                                                      </div>
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