@extends('master')

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>My Orders | ClanKart</title>

          <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">

          <link rel="stylesheet" href="{{URL::to('/')}}/view_css/selling_orders.css">

</head>

<body>

          @section('main-content')

          <div class="cart-container container rounded border my-5 mx-auto  cart-main">

                    <div class="row">
                              <div class="col-3">
                                        <div class="nav mt-3">

                                                  <a href="{{URL::to('/')}}/profile" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <svg height="25" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                                                          <title></title>
                                                                                          <g id="about">
                                                                                                    <path d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z"></path>
                                                                                                    <path d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z"></path>
                                                                                          </g>
                                                                                </svg>
                                                                      </div>
                                                                      <div class="nav-name  w-100 align-items-center">
                                                                                <span class="mx-3 fs-5"> My Profile </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="{{URL::to('/')}}/ads" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <img src="{{URL::to('/')}}/images/ads.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Ads </span>
                                                                      </div>

                                                            </div>
                                                  </a>

                                                  <a href="{{URL::to('/')}}/orders" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <img src="{{URL::to('/')}}/images/orders.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Orders </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="{{URL::to('/')}}/selling-orders" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="{{URL::to('/')}}/images/selling orders.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Selling Orders </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="{{URL::to('/')}}/wishlist" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="{{URL::to('/')}}/images/wishlist.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Wishlist </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                        </div>
                              </div>

                              <div class="col-9">
                                        <p class="p-3 fs-3 border-bottom d-flex justify-content-between align-items-center">
                                            <span>My Selling Orders ({{ isset($orders) ? $orders->count() : 0 }})</span>
                                            @if(isset($books) && $books->count() > 0)
                                                <form action="{{ route('selling_orders') }}" method="get" class="d-flex gap-2 align-items-center">
                                                    <label for="book_id" class="me-2 mb-0"> Book:</label>
                                                    <select name="book_id" id="book_id" class="form-select" style="min-width: 260px;">
                                                        <option value="">All Books</option>
                                                        @foreach($books as $book)
                                                            <option value="{{ $book->id }}" {{ (isset($selectedBookId) && (string)$selectedBookId === (string)$book->id) ? 'selected' : '' }}>
                                                                {{ $book->book_title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn btn-outline-primary">Apply</button>
                                                    <a href="{{ route('selling_orders') }}" class="btn btn-outline-secondary">Reset</a>
                                                </form>
                                            @endif
                                        </p>
                                        @if(session('success'))
                                            <div class="alert alert-success mx-3">{{ session('success') }}</div>
                                        @endif
                                        @if(session('error'))
                                            <div class="alert alert-danger mx-3">{{ session('error') }}</div>
                                        @endif

                                        <div class="cart-inner container w-auto d-flex flex-column">
                                            @if(isset($orders) && $orders->count() > 0)
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Order Date</th>
                                                                <th>Book</th>
                                                                <th>Amount</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($orders as $order)
                                                                <tr>
                                                                    <td>{{ \Carbon\Carbon::parse($order->order_date)->format('d M Y, h:i A') }}</td>
                                                                    <td>{{ $order->book_name }}</td>
                                                                    <td>₹{{ number_format($order->order_price, 2) }}</td>
                                                                    <td>
                                                                        <span class="badge {{ $order->order_status === 'delivered' ? 'bg-success' : ($order->order_status === 'pending' ? 'bg-warning text-dark' : 'bg-secondary') }}">
                                                                            {{ ucfirst($order->order_status) }}
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        @php $isPending = ($order->order_status === 'pending'); @endphp
                                                                        <div class="d-flex gap-2">
                                                                            @if($isPending)
                                                                                <form action="{{ route('selling_orders.update_status', ['order_id' => $order->id]) }}" method="post" onsubmit="return confirm('Confirm this order?');">
                                                                                    @csrf
                                                                                    <input type="hidden" name="status" value="confirmed">
                                                                                    <button type="submit" class="btn btn-sm btn-outline-success">Confirm</button>
                                                                                </form>
                                                                            @endif
                                                                            @if($order->order_status !== 'delivered')
                                                                                <form action="{{ route('selling_orders.update_status', ['order_id' => $order->id]) }}" method="post" onsubmit="return confirm('Mark this order as delivered?');">
                                                                                    @csrf
                                                                                    <input type="hidden" name="status" value="delivered">
                                                                                    <button type="submit" class="btn btn-sm btn-outline-primary">Mark Delivered</button>
                                                                                </form>
                                                                            @endif
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                <script>
                                                                        if ("{{ $order->order_status }}" === 'confirmed') {
                                                                                setTimeout(() => {
                                                                                        const delivered = "delivered";
                                                                                        const order_id = {{ $order->id }};
                                                                        
                                                                                                // Redirect to the specified URL
                                                                                        window.location.href = `/set_delivered/${order_id}/${delivered}`;
                                                                                }, 100);
                                                                        }
                                                                </script>

                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            @else
                                                <img src="{{URL::to('/')}}/images/storeclosed.png" alt="Empty" class=" img m-auto">
                                                <p class="p-3 fs-4 m-auto">No selling orders yet. Your listed books haven't been purchased yet.</p>
                                                <a href="{{ URL::to('/') }}/post-ad" class="btn btn-primary border-primary mb-5 p-3 my-3 d-md-block border rounded-1 m-auto search-btn">Start Selling now!</a>
                                            @endif
                                        </div>
                              </div>

                    </div>





          </div>

          @endsection

</body>

</body>

</html>