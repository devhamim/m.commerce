@extends('frontend.layouts.app')
@section('content')
    <div class="page-content">
        <div class="container mt-2">
            <div class="product-details-top">
                <div class="product_data">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="row" style="border: 1px solid #E5E7EB; margin-right: 10px">
                                <div class="col-lg-10 mt-2 m-auto">
                                    <div class="product-gallery product-gallery-vertical">
                                        <div class="row">
                                            <div id="productDetailsImage">

                                            </div>
                                            @if ($products->first()->inventorie_id != null)
                                                @if ($products->first()->rel_to_inventorie)
                                                    @php
                                                        $inventorie = $products->first()->rel_to_inventorie
                                                    @endphp

                                                    @foreach ($inventorie->rel_to_attribute->take(1) as $sl => $attribute)
                                                    <figure class="product-main-image productDetailsImageemptey">
                                                            <img id="product-zoom" src="{{ asset('uploads/product') }}/{{ $attribute->image }}" data-zoom-image="{{ asset('uploads/product') }}/{{ $attribute->image }}" alt="product image">

                                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                                <i class="icon-arrows"></i>
                                                            </a>
                                                        </figure>
                                                    @endforeach
                                                    @foreach ($inventorie->rel_to_attribute as $sl => $attribute)
                                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                                            <a class="product-gallery-item active" href="#" data-image="{{ asset('uploads/product') }}/{{ $attribute->image }}" data-zoom-image="assets/images/products/single/1-big.jpg">
                                                                <img src="{{ asset('uploads/product') }}/{{ $attribute->image }}" alt="product side">
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            @else
                                                <figure class="product-main-image">
                                                    <img id="product-zoom"
                                                        src="{{ asset('uploads/product') }}/{{ $products->first()->image }}"
                                                        data-zoom-image="{{ asset('uploads/product') }}/{{ $products->first()->image }}"
                                                        alt="product image">
                                                    <a href="" id="btn-product-gallery" class="btn-product-gallery">
                                                        <i class="icon-arrows"></i>
                                                    </a>
                                                </figure>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 pt-3" style="border: 1px solid #E5E7EB; margin-left: 10px">
                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" class="product_id" value="{{ $products->first()->id }}">
                                <div class="product-details">
                                <h1 class="product-title">{{ $products->first()->name }}</h1>
                                @if ($products->first()->inventorie_id != null)
                                    <input type="hidden" name="inventory_id" class="inventorie_id" value="{{ $products->first()->inventorie_id }}">
                                    <div class="product_code" style="border-bottom: 1px solid #E5E7EB; padding-bottom: 10px; margin-bottom: 10px">
                                        <p class="sku_text"><strong>SKU: </strong>
                                            @if ($products->first()->rel_to_inventorie)
                                                <span style="font-weight: 400">{{ $products->first()->rel_to_inventorie->sku }}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="product-price">
                                        @if ($products->first()->rel_to_inventorie)
                                            @php
                                                $inventorie = $products->first()->rel_to_inventorie
                                            @endphp
                                            @foreach ($inventorie->rel_to_attribute->take(1) as $attribute)
                                                @if ($attribute->sell_price != null)
                                                    Price: <span class="line-through pl-3 text-dark" style="font-size: 14px">৳{{ $attribute->price }}</span>
                                                    <span class="pl-3">৳ {{ $attribute->sell_price }}</span>
                                                @else
                                                    Price: <span class="pl-3">৳ {{ $attribute->sell_price }}</span>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="details-filter-row details-row-size">
                                        <div class="product-nav ">
                                            <label for="color">Brand:</label>
                                            @if ($products->first()->rel_to_inventorie)
                                                <span style="font-weight: 400">{{ $products->first()->rel_to_inventorie->brand }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="details-filter-row details-row-size">
                                        <div class="product-nav ">
                                            <label for="color">Status:</label>
                                            @if ($products->first()->rel_to_inventorie)
                                                @php
                                                    $inventorie = $products->first()->rel_to_inventorie
                                                @endphp
                                                @foreach ($inventorie->rel_to_attribute->take(1) as $attribute)
                                                    @if ($attribute->quantity != 0)
                                                        <span style="font-weight: 400" class="text-success">In Stock</span>
                                                    @else
                                                        <span style="font-weight: 400" class="text-danger">Out Of Stock</span>
                                                    @endif
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>
                                    @if ($products->first()->rel_to_inventorie)
                                        @php
                                            $inventorie = $products->first()->rel_to_inventorie;
                                        @endphp
                                        @if ($inventorie->rel_to_attribute->where('weight', '!=', null)->isNotEmpty())
                                            <div class="details-filter-row details-row-size">
                                                <label>Weight:</label>
                                                <div class="product-nav product-nav-thumbs product_details_weight">
                                                    @foreach ($inventorie->rel_to_attribute as $attribute)
                                                        <input type="radio" id="weight_details_{{ $attribute->id }}" class="px-2 weight-option inpute_weight" name="attribute_id" value="{{ $attribute->id }}"  required>
                                                        <label for="weight_details_{{ $attribute->id }}">{{ $attribute->weight }}</label>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @elseif ($inventorie->rel_to_attribute->where('rel_to_color', '!=', null)->isNotEmpty())
                                            <div class="details-filter-row details-row-size">
                                                <label>Color:</label>
                                                <div class="product-nav product-nav-thumbs">
                                                    @foreach ($inventorie->rel_to_attribute as $attribute)
                                                        @if ($attribute->rel_to_color != null)
                                                        <a href="#" class="color-option" data-color="{{ $attribute->rel_to_color->name }}" style="background: {{ $attribute->rel_to_color->code }}">
                                                            <input  type="radio" name="color" value="{{ $attribute->rel_to_color->id }}" required>
                                                        </a>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                        <div id="productDetails">
                                            <!-- Display dynamic content here (image, price, quantity) -->
                                        </div>
                                    @endif

                                    <div class="details-filter-row details-row-size pro_details_ico">
                                        <label for="qty">পরিমান :</label>
                                        <div class="product-details-quantity">
                                            <input type="number" name="quantity" id="qty"
                                                class="form-control qty-input" value="1" min="1" max="10"
                                                step="1" data-decimals="0" required>

                                        </div>
                                    </div>
                                @else
                                    <div class="product_code"
                                        style="border-bottom: 1px solid #E5E7EB; padding-bottom: 10px; margin-bottom: 10px">
                                        <p class="sku_text"><strong>SKU: </strong>
                                            <span style="font-weight: 400">{{ $products->first()->sku }}</span>
                                        </p>
                                    </div>
                                    <div class="product-price">
                                        @if ($products->first()->sell_price != null)
                                            Price: <span class="line-through pl-3 text-dark"
                                                style="font-size: 14px">৳{{ $products->first()->price }}</span>
                                            <span class="pl-3">৳ {{ $products->first()->sell_price }}</span>
                                        @else
                                            Price: <span class="pl-3">৳ {{ $products->first()->sell_price }}</span>
                                        @endif
                                    </div>
                                    <div class="details-filter-row details-row-size">
                                        <div class="product-nav ">
                                            <label for="color">Brand:</label>
                                            <span >{{ $products->first()->brand }}</span>
                                        </div><!-- End .product-nav -->
                                    </div>

                                    <div class="details-filter-row details-row-size">
                                        <div class="product-nav ">
                                            <label for="color">Status:</label>
                                            @if ($products->first()->quantity != 0)
                                                <span style="font-weight: 400" class="text-success">In Stock</span>
                                            @else
                                                <span style="font-weight: 400" class="text-danger">Out Of Stock</span>
                                            @endif
                                        </div><!-- End .product-nav -->
                                    </div>
                                    <div class="details-filter-row details-row-size">
                                        <label>Color:</label>
                                        <div class="product-nav product-nav-thumbs">

                                                @if ($products->first()->inventorie_id != null)
                                                    @if ($products->first()->rel_to_inventorie)
                                                        @php
                                                            $inventorie = $products->first()->rel_to_inventorie
                                                        @endphp
                                                        @foreach ($inventorie->rel_to_attribute as $attribute)
                                                            @if ($attribute->rel_to_color != null)
                                                            <a href="#" class="" style="background: #000">
                                                                <input type="radio" name="color" value="{{ $attribute->rel_to_color->name }}" required>
                                                            </a>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @else
                                                    @if ($products->first()->color_id != null)
                                                        @if ($products->first()->rel_to_color != null)
                                                            <input type="radio" name="color" value="{{ $products->first()->rel_to_color->name }}" required>
                                                        @else
                                                            C/N/A
                                                        @endif
                                                    @else
                                                        N/A
                                                    @endif
                                                @endif

                                        </div><!-- End .product-nav -->
                                    </div>
                                    <div class="details-filter-row details-row-size">
                                        <input type="hidden" name="product_id" class="product_id" value="{{ $products->first()->id }}">
                                    </div><!-- End .details-filter-row -->

                                    <div class="details-filter-row details-row-size pro_details_ico">
                                        <label for="qty">পরিমান :</label>
                                        <div class="product-details-quantity">
                                            <input type="number" name="quantity" id="qty"
                                                class="form-control qty-input" value="1" min="1" max="10"
                                                step="1" data-decimals="0" required>

                                        </div><!-- End .product-details-quantity -->
                                    </div>
                                @endif

                                    <div class="mt-3" style="border-top: 2px solid #E5E7EB; padding-top: 10px; display: flex; width: 100%">
                                        <button type="submit" style="width: 50%; padding: 10px 0; background: #CD6727; color: #fff; font-weight: 700; border: 0;" class="btn-cart mr-3" name="btn" value="1" id="load"><span>Add to cart</span></button>
                                        <button type="submit" style="width: 50%; background: #000; color: #fff; font-weight: 700; border: 0;" class=" btn-cart btn-buy " name="btn" value="2"><span>Buy now</span></button>
                                    </div><!-- End .product-details-action -->
                                    <div class="my-3 call-btn">
                                        <a href="" style="width: 100%; background: #22C55E; ">কল করুন : 01604702965</a>
                                    </div>
                                    <div class="my-3 call-btn">
                                        <a href="" style="width: 100%; background: #22C55E; ">হোয়াটসঅ্যাপ অর্ডার</a>

                                    </div>
                                </div><!-- End .product-details -->
                            </form>
                        </div><!-- End .col-md-6 -->
                    </div>
                </div>
            </div><!-- End .product-details-top -->
        </div>
    </div>
@endsection

@section('footer_script')
    <script>
        $('input[name="color"]').on('click', function() {
            var color = $(this).val();
            var inventorie_id = '{{  $products->first()->inventorie_id }}';
            $.ajax({
                url: '{{ route("getProductDetails") }}',
                method: 'GET',
                data: { color: color, inventorie_id: inventorie_id},
                success: function(response) {
                    updateProductDetails(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        $('input[name="attribute_id"]').on('click', function() {
            var attribute_id = $(this).val();
            var inventorie_id = '{{  $products->first()->inventorie_id }}';
            $.ajax({
                url: '{{ route("getProductDetails") }}',
                method: 'GET',
                data: { attribute_id: attribute_id, inventorie_id: inventorie_id},
                success: function(response) {
                    updateProductDetails(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
                    // <p>Quantity: ${response.quantity}</p>
        function updateProductDetails(response) {
            $('.productDetailsImageemptey').empty();
            $('#productDetails').html(`
                <div>
                    <del style="font-size:22px; font-weight:600; color:#9d9d9d; margin-right:10px">${response.price}৳ </del>
                    <span style="font-size:22px; font-weight:600; color:#000"> ${response.sell_price}৳ </span>
                    <input type="hidden" name="price" value="${response.sell_price}" >
                </div>
            `);
            $('#productDetailsImage').html(`
                <div>
                    <figure class="product-main-image productDetailsImageemptey">
                        <img id="product-zoom" src="{{ asset('uploads/product') }}/${response.image}" data-zoom-image="{{ asset('uploads/product') }}/${response.image}" alt="product image">

                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                            <i class="icon-arrows"></i>
                        </a>
                    </figure>
                </div>
            `);
        }
    </script>
@endsection
