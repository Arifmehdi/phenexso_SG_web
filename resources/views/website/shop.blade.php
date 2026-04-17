@extends('website.layouts.sungoods')

@section('title', 'Shop - '. ($ws->name ?? env('APP_NAME')))

@section('body_class', '')

@section('meta')
    <meta name="description" content="Browse our wide selection of products at {{ $ws->name ?? 'Sungoods' }}. Find the best deals on quality items.">
    <meta name="keywords" content="shop, ecommerce, products, {{ $ws->meta_keywords ?? '' }}">
    <meta property="og:title" content="Shop - {{ $ws->name ?? env('APP_NAME') }}">
    <meta property="og:description" content="Explore our product collection and shop online.">
    <meta property="og:type" content="website">
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('sungoods/css/style.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('sungoods/vendor/nouislider/nouislider.min.css') }}">
<style>
    .pagination {
        justify-content: center;
    }
    .widget-body {
        display: block !important;
    }
    .filter-price-slider {
        margin-bottom: 20px;
    }
</style>
@endpush

@section('content')
<div class="page-header" style="background-image: url('{{ asset('sungoods/images/shop/page-header-back.jpg') }}'); background-color: #3C63A4;">
    <h3 class="page-subtitle">Categories</h3>
    <h1 class="page-title">Shop</h1>
    <ul class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="d-icon-home"></i></a></li>
        <li class="delimiter">/</li>
        <li>Shop</li>
    </ul>
</div>
<!-- End PageHeader -->

<div class="page-content mb-10 pb-6">
    <div class="container">
        <div class="row gutter-lg main-content-wrap">
            <aside class="col-lg-3 sidebar sidebar-fixed sidebar-toggle-remain shop-sidebar sticky-sidebar-wrapper">
                <div class="sidebar-overlay"></div>
                <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                <div class="sidebar-content">
                    <div class="sticky-sidebar" data-sticky-options="{'top': 10}">
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">All Categories</h3>
                            <ul class="widget-body filter-items search-ul">
                                <li><a href="{{ route('shop') }}">All ({{ $total_products }})</a></li>
                                @foreach ($allRootCategories as $rootCategory)
                                    <li>
                                        <a href="{{ route('productCategory', $rootCategory->slug) }}">{{ $rootCategory->name_en }} ({{ $rootCategory->products()->count() }})</a>
                                        @if($rootCategory->children->count() > 0)
                                        <ul>
                                            @foreach($rootCategory->children as $child)
                                            <li><a href="{{ route('productCategory', $child->slug) }}">{{ $child->name_en }} ({{ $child->products()->count() }})</a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">Filter by Price</h3>
                            <div class="widget-body mt-3">
                                <form method="GET" action="{{ url()->current() }}">
                                    @if(request('search')) <input type="hidden" name="search" value="{{ request('search') }}"> @endif
                                    @if(request('sort')) <input type="hidden" name="sort" value="{{ request('sort') }}"> @endif
                                    
                                    <div class="filter-price-slider"></div>
                                    <input type="hidden" name="price" id="price-range-input" value="{{ request('price') }}">

                                    <div class="filter-actions">
                                        <div class="filter-price-text mb-4">Price:
                                            <span class="filter-price-range"></span>
                                        </div>
                                        <button type="submit" class="btn btn-dark btn-filter btn-rounded">Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="widget widget-collapsible">
                            <h4 class="widget-title">Top Rated Product</h4>
                            <div class="widget-body">
                                @foreach($topClickedProducts as $topProduct)
                                <div class="product product-list-sm mb-4">
                                    <figure class="product-media">
                                        <a href="{{ route('productDetails', $topProduct->slug) }}">
                                            <img src="{{ route('imagecache', ['template' => 'pnism', 'filename' => $topProduct->fi()]) }}" alt="{{ $topProduct->name_en }}" width="100" height="114">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h3 class="product-name">
                                            <a href="{{ route('productDetails', $topProduct->slug) }}">{{ $topProduct->name_en }}</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">৳{{ number_format($topProduct->final_price, 2) }}</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="widget widget-collapsible">
                            <div class="widget-body">
                                <a href="#"><img src="{{ asset('sungoods/images/shop/banner.jpg') }}" alt="Banner"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="col-lg-9 main-content">
                <nav class="toolbox sticky-toolbox sticky-content fix-top">
                    <div class="toolbox-left">
                        <a href="#" class="sidebar-toggle"><i class="d-icon-filter-2"></i>Filter</a>
                        <div class="toolbox-item toolbox-sort select-box text-dark">
                            <label>Sort By :</label>
                            <form method="GET" action="{{ url()->current() }}" id="sort-form">
                                @if(request('search')) <input type="hidden" name="search" value="{{ request('search') }}"> @endif
                                @if(request('price')) <input type="hidden" name="price" value="{{ request('price') }}"> @endif
                                <select name="sort" class="form-control" onchange="this.form.submit()">
                                    <option value="">Default sorting</option>
                                    <option value="1" {{ request('sort') == 1 ? 'selected' : '' }}>Latest</option>
                                    <option value="2" {{ request('sort') == 2 ? 'selected' : '' }}>Oldest</option>
                                    <option value="3" {{ request('sort') == 3 ? 'selected' : '' }}>Price: High → Low</option>
                                    <option value="4" {{ request('sort') == 4 ? 'selected' : '' }}>Price: Low → High</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="toolbox-right">
                        <div class="toolbox-item toolbox-show select-box text-dark">
                            <label>Showing :</label>
                            <span>{{ $products->firstItem() }}-{{ $products->lastItem() }} of {{ $products->total() }} results</span>
                        </div>
                        <div class="toolbox-item toolbox-layout mr-lg-0">
                            <a href="#" class="d-icon-mode-grid btn-layout active"></a>
                        </div>
                    </div>
                </nav>
                <div class="row cols-2 cols-sm-3 product-wrapper">
                    @forelse($products as $product)
                    <div class="product-wrap">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="{{ route('productDetails', $product->slug) }}">
                                    <img src="{{ route('imagecache', ['template' => 'original', 'filename' => $product->fi()]) }}" alt="{{ $product->name_en }}" width="280" height="315">
                                </a>
                                <div class="product-label-group">
                                    @if($product->final_price < $product->selling_price)
                                    <label class="product-label label-sale">{{ calculateDiscountPercentage($product->selling_price, $product->discount_price) }}% off</label>
                                    @endif
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart add-to-cart-btn" data-id="{{ $product->id }}" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist add-to-wishlist" data-id="{{ $product->id }}" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="{{ route('productDetails', $product->slug) }}" class="btn-product" title="Quick View">View Details</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    @if($product->categories->first())
                                    <a href="{{ route('productCategory', $product->categories->first()->slug) }}">{{ $product->categories->first()->name_en }}</a>
                                    @endif
                                </div>
                                <h3 class="product-name">
                                    <a href="{{ route('productDetails', $product->slug) }}">{{ $product->name_en }}</a>
                                </h3>
                                <div class="product-price">
                                    @if($product->final_price < $product->selling_price)
                                    <ins class="new-price">৳{{ number_format($product->selling_price - $product->discount_price, 2) }}</ins><del class="old-price">৳{{ number_format($product->selling_price, 2) }}</del>
                                    @else
                                    <span class="price">৳{{ number_format($product->selling_price, 2) }}</span>
                                    @endif
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="{{ route('productDetails', $product->slug) }}" class="rating-reviews">( {{ $product->reviews_count ?? 0 }} reviews )</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <p class="text-center">No products found.</p>
                    </div>
                    @endforelse
                </div>
                
                <nav class="toolbox toolbox-pagination">
                    <p class="show-info">Showing {{ $products->firstItem() }}-{{ $products->lastItem() }} of {{ $products->total() }} results</p>
                    {{ $products->links('pagination.riode') }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('sungoods/vendor/nouislider/nouislider.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var priceRange = '{{ request()->get("price") }}';
        var minPrice = 0;
        var maxPrice = 10000;
        var currentMin = 0;
        var currentMax = 10000;

        if (priceRange) {
            var priceParts = priceRange.split('-');
            if (priceParts.length === 2) {
                currentMin = parseInt(priceParts[0]);
                currentMax = parseInt(priceParts[1]);
            }
        }

        var priceSlider = document.querySelector('.filter-price-slider');
        if (priceSlider) {
            noUiSlider.create(priceSlider, {
                start: [currentMin, currentMax],
                connect: true,
                step: 50,
                range: {
                    'min': minPrice,
                    'max': maxPrice
                }
            });

            priceSlider.noUiSlider.on('update', function (values, handle) {
                var rangeText = '৳' + Math.round(values[0]) + ' - ৳' + Math.round(values[1]);
                $('.filter-price-range').text(rangeText);
                $('#price-range-input').val(Math.round(values[0]) + '-' + Math.round(values[1]));
            });
        }

        // Add to cart AJAX
        $(document).on('click', '.add-to-cart-btn', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: "{{ route('cart.quick.add') }}",
                type: "GET",
                data: { id: id },
                success: function(res) {
                    if(res.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: res.message,
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: res.message,
                        });
                    }
                }
            });
        });

        // Add to wishlist AJAX
        $(document).on('click', '.add-to-wishlist', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: "{{ route('wishlist.add') }}",
                type: "POST",
                data: {
                    product_id: id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(res) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: res.message,
                    });
                }
            });
        });
    });
</script>
@endpush
