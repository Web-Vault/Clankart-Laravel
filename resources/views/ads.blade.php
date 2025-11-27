@extends('master')
        <link rel="stylesheet" href="{{ URL::to('/') }}/view_css/ads.css">

        @section('main-content')

                <div class="cart-container container rounded border my-5 mx-auto cart-main">

                        <div class="row gx-4">
                                <div class="col-lg-3 mb-4 mb-lg-0 py-4">
                                        <div class="offcanvas-lg offcanvas-start account-sidebar mt-3" tabindex="-1"
                                                id="accountSidebar" aria-labelledby="accountSidebarLabel">
                                                <div class="offcanvas-header d-lg-none">
                                                        <h5 class="offcanvas-title" id="accountSidebarLabel">Account</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                                aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body p-0">
                                                        <div class="nav py-2">

                                                                <a href="{{URL::to('/')}}/profile" class="links">
                                                                        <div class="nav-item p-4 d-flex w-100">

                                                                                <div class="nav-icon">
                                                                                        <svg height="25" viewBox="0 0 32 32"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <title></title>
                                                                                                <g id="about">
                                                                                                        <path
                                                                                                                d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z">
                                                                                                        </path>
                                                                                                        <path
                                                                                                                d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z">
                                                                                                        </path>
                                                                                                </g>
                                                                                        </svg>
                                                                                </div>
                                                                                <div
                                                                                        class="nav-name  w-100  align-items-center">
                                                                                        <span class="mx-3 fs-5"> My Profile
                                                                                        </span>
                                                                                </div>

                                                                        </div>
                                                                </a>


                                                                <a href="{{URL::to('/')}}/ads" class="links">
                                                                        <div class="nav-item p-4 d-flex w-100">

                                                                                <div class="nav-icon">
                                                                                        <img src="{{URL::to('/')}}/images/ads.png"
                                                                                                alt="">
                                                                                </div>
                                                                                <div
                                                                                        class="nav-name  w-100  align-items-center">
                                                                                        <span class="mx-3 fs-5"> My Ads </span>
                                                                                </div>

                                                                        </div>
                                                                </a>

                                                                <a href="{{URL::to('/')}}/orders" class="links">
                                                                        <div class="nav-item p-4 d-flex w-100">

                                                                                <div class="nav-icon">
                                                                                        <img src="{{URL::to('/')}}/images/orders.png"
                                                                                                alt="">
                                                                                </div>
                                                                                <div
                                                                                        class="nav-name  w-100  align-items-center">
                                                                                        <span class="mx-3 fs-5"> My Orders
                                                                                        </span>
                                                                                </div>

                                                                        </div>
                                                                </a>


                                                                <a href="{{URL::to('/')}}/selling-orders" class="links">
                                                                        <div class="nav-item p-4 d-flex w-100">
                                                                                <div class="nav-icon">
                                                                                        <img src="{{URL::to('/')}}/images/selling orders.png"
                                                                                                alt="">
                                                                                </div>
                                                                                <div
                                                                                        class="nav-name  w-100  align-items-center">
                                                                                        <span class="mx-3 fs-5"> My Selling
                                                                                                Orders </span>
                                                                                </div>

                                                                        </div>
                                                                </a>


                                                                <a href="{{URL::to('/')}}/wishlist" class="links">
                                                                        <div class="nav-item p-4 d-flex w-100">
                                                                                <div class="nav-icon">
                                                                                        <img src="{{URL::to('/')}}/images/wishlist.png"
                                                                                                alt="">
                                                                                </div>
                                                                                <div
                                                                                        class="nav-name  w-100  align-items-center">
                                                                                        <span class="mx-3 fs-5"> My Wishlist
                                                                                        </span>
                                                                                </div>

                                                                        </div>
                                                                </a>


                                                        </div>
                                                </div>
                                        </div>
                                </div>

                                <div class="col-lg-9">
                                        <section class="ads-hero bg-gradient p-4 p-md-5 rounded-3 mb-3" style="background: linear-gradient(135deg, #eef4ff, #f6f7fb); border: 1px solid #e5e7eb;">
                                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                                        <div>
                                                                <h1 class="h3 mb-1">Manage Your Listings</h1>
                                                                <p class="text-muted mb-0">Create, track and optimize your book ads</p>
                                                        </div>
                                                        <a href="{{ URL::to('/') }}/post-ad" class="btn btn-primary btn-lg">Post New Ad</a>
                                                </div>
                                        </section>
                                        <div class="page-header d-flex align-items-center justify-content-between p-3 border-bottom flex-wrap gap-2">
                                                <div>
                                                        <h2 class="h3 m-0">My Ads (<span id="adsCount">{{ isset($my_books) ? $my_books->count() : 0 }}</span>)</h2>
                                                        <p class="text-muted m-0 small">Manage your listings and track performance</p>
                                                </div>
                                                <div class="d-flex align-items-center gap-2 ms-auto">
                                                        <button class="btn btn-outline-secondary d-lg-none" type="button"
                                                                data-bs-toggle="offcanvas" data-bs-target="#accountSidebar"
                                                                aria-controls="accountSidebar">Menu</button>
                                                        <a href="{{ URL::to('/') }}/post-ad" class="btn btn-primary">Post New Ad</a>
                                                </div>
                                        </div>
                                        @if(session('success'))
                                                <div class="alert alert-success m-3">{{ session('success') }}</div>
                                        @endif
                                        @if(session('error'))
                                                <div class="alert alert-danger m-3">{{ session('error') }}</div>
                                        @endif


                                        <!-- <div class="cart-inner container w-auto d-flex flex-column">


                                                                  <img src="{{URL::to('/')}}/images/storeclosed.png" alt="Empty"  class="img m-auto">
                                                                  <p class="p-3 fs-4 m-auto">You have no books listed for sale :(</p>
                                                                  <button class="btn btn-primary border-primary d-none mb-5 p-3 my-3 d-md-block border rounded-1 m-auto search-btn">Click Here To Sll Your Books For Actual Money!</button>



                                                        </div> -->



                                        <div class="cart-inner container w-auto d-flex flex-column">
                                                <div class="main-content my-4">
                                                        <div class="header">
                                                                <div>
                                                                        <h1 class="mb-1">Your Books Listed for Sale</h1>
                                                                        <p class="text-muted m-0">Refine by search, sort, and filters</p>
                                                                </div>
                                                        </div>

                                                        <div class="stat-cards row g-3 mb-3">
                                                                <div class="col-6 col-md-4">
                                                                        <div class="stat-card">
                                                                                <div class="stat-label">Total Ads</div>
                                                                                <div class="stat-value">{{ isset($my_books) ? $my_books->count() : 0 }}</div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-6 col-md-4">
                                                                        <div class="stat-card">
                                                                                <div class="stat-label">Total Stock</div>
                                                                                <div class="stat-value">{{ isset($my_books) ? ($my_books->sum('stock') ?? 0) : 0 }}</div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-12 col-md-4">
                                                                        <div class="stat-card">
                                                                                <div class="stat-label">Total Orders</div>
                                                                                <div class="stat-value">{{ isset($orderCounts) ? (is_array($orderCounts) ? array_sum($orderCounts) : (method_exists($orderCounts, 'sum') ? $orderCounts->sum() : 0)) : 0 }}</div>
                                                                        </div>
                                                                </div>
                                                        </div>

                                                        <div class="content-toolbar d-flex flex-wrap gap-2 align-items-center mb-3">
                                                                <div class="flex-grow-1">
                                                                        <input id="adsSearch" type="text" class="form-control form-control-sm" placeholder="Search your ads by title...">
                                                                </div>
                                                                <select id="sortSelect" class="form-select form-select-sm" style="max-width: 240px;">
                                                                        <option value="recent">Sort: Most recent</option>
                                                                        <option value="stock_desc">Sort: Stock (High → Low)</option>
                                                                        <option value="stock_asc">Sort: Stock (Low → High)</option>
                                                                        <option value="orders_desc">Sort: Orders (High → Low)</option>
                                                                        <option value="orders_asc">Sort: Orders (Low → High)</option>
                                                                </select>
                                                                <div class="d-none d-md-flex gap-2">
                                                                        <button type="button" class="chip chip-filter active" data-filter="all">All</button>
                                                                        <button type="button" class="chip chip-filter" data-filter="active">Active</button>
                                                                        <button type="button" class="chip chip-filter" data-filter="outofstock">Out of Stock</button>
                                                                </div>
                                                        </div>

                                                        <div id="noResults" class="alert alert-info d-none" role="status">
                                                                No ads match your current search or filters.
                                                        </div>

                                                        <div class="ads-container">


                                                                @if (isset($my_books))

                                                                        @foreach ($my_books as $book)
                                                                                @php
                                                                                        $ordersForBook = isset($orderCounts[$book->id]) ? (int) $orderCounts[$book->id] : 0;
                                                                                        $stockForBook = (int) ($book->stock ?? 0);
                                                                                        $createdTs = \Illuminate\Support\Carbon::parse($book->created_at)->timestamp;
                                                                                @endphp

                                                                                <div class="ad-item"
                                                                                     data-title="{{ strtolower($book->book_title) }}"
                                                                                     data-stock="{{ $stockForBook }}"
                                                                                     data-orders="{{ $ordersForBook }}"
                                                                                     data-created="{{ $createdTs }}">
                                                                                        <img src="{{URL::to('/')}}{{$book->book_image}}"
                                                                                                alt="{{$book->book_title}}">

                                                                                        <div class="ad-details">
                                                                                                <h2
                                                                                                        class="ad-title d-flex justify-content-between align-items-center">
                                                                                                        <span>{{$book->book_title}}</span>
                                                                                                        <span class="badge bg-primary">Orders: {{ $ordersForBook }}</span>
                                                                                                </h2>

                                                                                                <p class="ad-info">Posted: {{ $book->created_at }}<br>Quantity Available: {{$stockForBook}}</p>

                                                                                                <form action="{{ route('books.update_stock', ['book_id' => $book->id]) }}"
                                                                                                        method="post"
                                                                                                        class="d-flex align-items-end gap-2 mt-2"
                                                                                                        style="max-width: 320px;">
                                                                                                        @csrf
                                                                                                        <div class="flex-grow-1">
                                                                                                                <label for="stock_{{ $book->id }}"
                                                                                                                        class="form-label m-0">Update
                                                                                                                        Stock</label>
                                                                                                                <input type="number"
                                                                                                                        id="stock_{{ $book->id }}"
                                                                                                                        name="stock" min="0"
                                                                                                                        class="form-control"
                                                                                                                        value="{{ (int) ($book->stock ?? 0) }}">
                                                                                                        </div>
                                                                                                        <button type="submit"
                                                                                                                class="btn btn-outline-success">Save</button>
                                                                                                </form>
                                                                                                <div
                                                                                                        class="ad-actions d-flex gap-3 align-items-center flex-wrap mt-2">
                                                                                                        <form action="{{ route('ads.delete', ['book_id' => $book->id]) }}" method="post" onsubmit="return confirm('Delete this ad? This action cannot be undone.');">
                                                                                                                @csrf
                                                                                                                <button type="submit" class="btn btn-link p-0 delete-link">Delete</button>
                                                                                                        </form>
                                                                                                        <button type="button" class="btn btn-link p-0 share-link" data-share-url="{{ URL::to('/') }}/click/{{ $book->id }}">Share</button>
                                                                                                        <a href="{{ route('selling_orders', ['book_id' => $book->id]) }}"
                                                                                                                class="view_order_btn btn btn-sm text-decoration-none btn-outline-primary">View
                                                                                                                Orders</a>
                                                                                                </div>

                                                                                                <p class="ad-earnings">You will earn
                                                                                                        ₹{{$book->price / 10}} for this ad</p>
                                                                                        </div>
                                                                                        <!-- <div class="ad-id">Ad ID: 1001721315778855</div> -->
                                                                                </div>
                                                                        @endforeach

                                                                @endif




                                                        </div>
                                                </div>

                                        </div>

                                </div>

                        </div>





                </div>

        <script>
        (function () {
                const container = document.querySelector('.ads-container');
                if (!container) return;

                const cards = Array.from(container.children);
                const searchInput = document.getElementById('adsSearch');
                const sortSelect = document.getElementById('sortSelect');
                const chipButtons = Array.from(document.querySelectorAll('.chip-filter'));
                const countEl = document.getElementById('adsCount');
                const noResults = document.getElementById('noResults');

                let state = {
                        term: '',
                        filter: 'all',
                        sort: sortSelect ? sortSelect.value : 'recent'
                };

                function normalize(str) { return (str || '').toString().toLowerCase(); }

                function getMeta(card) {
                        return {
                                title: (card.getAttribute('data-title') || '').toLowerCase(),
                                stock: Number(card.getAttribute('data-stock') || 0),
                                orders: Number(card.getAttribute('data-orders') || 0),
                                created: Number(card.getAttribute('data-created') || 0)
                        };
                }

                function apply() {
                        let filtered = cards.filter(card => {
                                const m = getMeta(card);
                                const termOk = !state.term || m.title.includes(state.term);
                                let filterOk = true;
                                if (state.filter === 'active') filterOk = m.stock > 0;
                                if (state.filter === 'outofstock') filterOk = m.stock === 0;
                                return termOk && filterOk;
                        });

                        filtered.sort((a, b) => {
                                const ma = getMeta(a); const mb = getMeta(b);
                                switch (state.sort) {
                                        case 'stock_desc': return mb.stock - ma.stock;
                                        case 'stock_asc': return ma.stock - mb.stock;
                                        case 'orders_desc': return mb.orders - ma.orders;
                                        case 'orders_asc': return ma.orders - mb.orders;
                                        case 'recent':
                                        default:
                                                return mb.created - ma.created; // most recent first
                                }
                        });

                        // Re-render
                        container.innerHTML = '';
                        filtered.forEach(c => container.appendChild(c));

                        // Count and empty state
                        if (countEl) countEl.textContent = String(filtered.length);
                        if (noResults) noResults.classList.toggle('d-none', filtered.length !== 0);
                }

                if (searchInput) {
                        searchInput.addEventListener('input', (e) => {
                                state.term = normalize(e.target.value);
                                apply();
                        });
                }
                if (sortSelect) {
                        sortSelect.addEventListener('change', (e) => {
                                state.sort = e.target.value;
                                apply();
                        });
                }
                chipButtons.forEach(btn => {
                        btn.addEventListener('click', () => {
                                chipButtons.forEach(b => b.classList.remove('active'));
                                btn.classList.add('active');
                                state.filter = btn.getAttribute('data-filter') || 'all';
                                apply();
                        });
                });

                // clipboard share handler
                container.addEventListener('click', function(e){
                        const btn = e.target.closest('.share-link');
                        if(!btn) return;
                        const url = btn.getAttribute('data-share-url');
                        if(!url) return;
                        if(navigator.clipboard && navigator.clipboard.writeText){
                                navigator.clipboard.writeText(url).then(function(){
                                        flashMsg('Link copied to clipboard.', 'success');
                                }).catch(function(){
                                        flashMsg('Failed to copy link. Please copy manually: ' + url, 'danger');
                                });
                        } else {
                                // Fallback
                                const ta = document.createElement('textarea');
                                ta.value = url; document.body.appendChild(ta); ta.select();
                                try { document.execCommand('copy'); flashMsg('Link copied to clipboard.', 'success'); }
                                catch(err){ flashMsg('Failed to copy link. Please copy manually: ' + url, 'danger'); }
                                document.body.removeChild(ta);
                        }
                });

                function flashMsg(text, type){
                        const wrap = document.createElement('div');
                        wrap.className = 'alert alert-' + (type === 'success' ? 'success' : 'danger');
                        wrap.textContent = text;
                        // place near top listing area
                        const headerAfter = document.querySelector('.border-bottom.flex-wrap');
                        if(headerAfter && headerAfter.parentNode){
                                headerAfter.parentNode.insertBefore(wrap, headerAfter.nextSibling);
                        } else {
                                document.body.appendChild(wrap);
                        }
                        setTimeout(()=>{ wrap.remove(); }, 3000);
                }

                // Initial paint
                apply();
        })();
        </script>

        @endsection
