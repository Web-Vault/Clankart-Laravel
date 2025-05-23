@extends('master')

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>categories | ClanKart</title>

          <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">


          <link rel="stylesheet" href="{{URL::to('/')}}/view_css/book-category.css">

</head>

<body>

          @section('main-content')

          <main class=" row my-5 container mx-auto p-1">
                    <aside class=" py-1 col-3">
                              <div class="sidebar border rounded-1">
                                        <div class="filter-section">
                                                  <h3>Book Condition <span class="condition-status">(Used)</span></h3>
                                                  <ul>
                                                            <li><input type="checkbox" id="condition1"><label for="condition1">Excellent</label></li>
                                                            <li><input type="checkbox" id="condition2"><label for="condition2">Good</label></li>
                                                            <li><input type="checkbox" id="condition3"><label for="condition3">Fair</label></li>
                                                  </ul>
                                        </div>
                                        <div class="filter-section">
                                                  <h3>Book Type</h3>
                                                  <ul>
                                                            <li><input type="checkbox" id="type1"><label for="type1">Hardcover</label></li>
                                                            <li><input type="checkbox" id="type2"><label for="type2">Paperback</label></li>
                                                            <li><input type="checkbox" id="type3"><label for="type3">Reading Books (Novels, Children, Business, Literature, History, etc.)</label></li>
                                                            <li><input type="checkbox" id="type4"><label for="type4">School / College Books</label></li>
                                                  </ul>
                                        </div>
                                        <div class="filter-section">
                                                  <h3>Book Category</h3>
                                                  <ul>
                                                            <li><input type="checkbox" id="category1"><label for="category1">Bachelor of Agriculture (B.Sc. Agriculture)</label></li>
                                                            <li><input type="checkbox" id="category2"><label for="category2">Bachelor of Architecture (B.Arch)</label></li>
                                                            <li><input type="checkbox" id="category3"><label for="category3">Bachelor of Arts (BA)</label></li>
                                                            <li><input type="checkbox" id="category4"><label for="category4">Bachelor of Ayurvedic Medicine & Surgery (BAMS)</label></li>
                                                  </ul>
                                        </div>
                              </div>

                    </aside>
                    <section class="border py-1 col-9">
                              <div class="main-header">
                                        <button class="btn btn-outline-secondary py-2 px-3 sidebar-toggle-btn" id="toggle">Filter</button>
                                        <h1>Buy Second Hand Books, Used Books Online In India</h1>
                                        <div class="filter-dropdown">
                                                  <label for="sort">Sort</label>
                                                  <select id="sort">
                                                            <option value="latest">Latest</option>
                                                            <option value="price_low_high">Price: Low to High</option>
                                                            <option value="price_high_low">Price: High to Low</option>
                                                  </select>
                                        </div>
                              </div>
                              <div class="product-row">
                                        <div class="product mx-1">
                                                  <img src="{{URL::to('/')}}/images/novels.jpg" alt=""> 
                                                  <div class="desc">
                                                            <p class="name">Computer Science book</p>
                                                            <p class="price">₹149 <span class="original-price">₹500</span> <span class="discount">70% off</span></p>
                                                            <p class="info">7 minutes ago</p>
                                                            <div class="purchase"><a href="click">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="{{URL::to('/')}}/images/novels.jpg" alt=""> 
                                                  <div class="desc">
                                                            <p class="name">GE3252 tamil book</p>
                                                            <p class="price">₹350</p>
                                                            <p class="info">8 minutes ago</p>
                                                            <div class="purchase"><a href="click">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="{{URL::to('/')}}/images/novels.jpg" alt="">
                                                  <div class="desc">
                                                            <p class="name">Computer Science Book</p>
                                                            <p class="price">₹149 <span class="original-price">₹400</span> <span class="discount">63% off</span></p>
                                                            <p class="info">10 minutes ago</p>
                                                            <div class="purchase"><a href="click">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="{{URL::to('/')}}/images/novels.jpg" alt="">
                                                  <div class="desc">
                                                            <p class="name">HS3252 regulation 2021</p>
                                                            <p class="price">₹500</p>
                                                            <p class="info">12 minutes ago</p>
                                                            <div class="purchase"><a href="click">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="{{URL::to('/')}}/images/novels.jpg" alt=""> 
                                                  <div class="desc">
                                                            <p class="name">HS3252 regulation 2021</p>
                                                            <p class="price">₹500</p>
                                                            <p class="info">12 minutes ago</p>
                                                            <div class="purchase"><a href="click">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="{{URL::to('/')}}/images/novels.jpg" alt=""> 
                                                  <div class="desc">
                                                            <p class="name">HS3252 regulation 2021</p>
                                                            <p class="price">₹500</p>
                                                            <p class="info">12 minutes ago</p>
                                                            <div class="purchase"><a href="click">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="{{URL::to('/')}}/images/novels.jpg" alt=""> 
                                                  <div class="desc">
                                                            <p class="name">HS3252 regulation 2021</p>
                                                            <p class="price">₹500</p>
                                                            <p class="info">12 minutes ago</p>
                                                            <div class="purchase"><a href="click">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="{{URL::to('/')}}/images/novels.jpg" alt="">                                                   <div class="desc">
                                                            <p class="name">HS3252 regulation 2021</p>
                                                            <p class="price">₹500</p>
                                                            <p class="info">12 minutes ago</p>
                                                            <div class="purchase"><a href="click">Buy Now</a></div>
                                                  </div>
                                        </div>
                                        <div class="product mx-1">
                                                  <img src="{{URL::to('/')}}/images/novels.jpg" alt=""> 
                                                  <div class="desc">
                                                            <p class="name">HS3252 regulation 2021</p>
                                                            <p class="price">₹500</p>
                                                            <p class="info">12 minutes ago</p>
                                                            <div class="purchase"><a href="click">Buy Now</a></div>
                                                  </div>
                                        </div>
                              </div>
                    </section>
          </main>

          @endsection
</body>

<script>
          document.addEventListener('DOMContentLoaded', function() {
                    const sidebar = document.querySelector('.sidebar');
                    const toggleBtn = document.querySelector('.sidebar-toggle-btn');

                    toggleBtn.addEventListener('click', function() {
                              sidebar.classList.toggle('active');
                    });
          });
</script>


</html>