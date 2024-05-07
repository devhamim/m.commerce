@extends('frontend.layouts.app')
@section('content')

<div class="container">
    <div class="toolbox">
        <div class="toolbox-center">
            <div class="toolbox-info">
                <a href="{{ url('/') }}">Home</a> / <span>Category</span>
            </div><!-- End .toolbox-info -->
        </div><!-- End .toolbox-center -->
    </div><!-- End .toolbox -->

    <div class="products">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                    {{-- <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product.html">
                                <img src="assets/images/products/product-1.jpg" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action -->

                            <div class="product-action action-icon-top">
                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Women</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">{{ $product->name }}</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $50.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 0 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" style="background: #cc9966;"><span class="sr-only">Color name</span></a>
                                <a href="#" class="active" style="background: #ebebeb;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div> --}}
                    <div class="product">
                        <figure class="product-media">
                            {{-- <span class="product-label label-new">off {{$product->price}}Tk</span> --}}
                            <a href="{{route('product.details', $product->slug)}}">
                                @if ($product->inventorie_id != null)
                                    @if ($product->rel_to_inventorie)
                                        @php
                                            $inventorie = $product->rel_to_inventorie
                                        @endphp
                                        @foreach ($inventorie->rel_to_attribute->take(1) as $attribute)
                                            <img src="{{asset('uploads/product')}}/{{ $attribute->image }}" alt="Product image" class="product-image">
                                        @endforeach
                                    @endif
                                @else
                                    <img src="{{asset('uploads/product')}}/{{$product->image}}" alt="Product image" class="product-image">
                                @endif
                            </a>
                            <div class="product-action-vertical">
                                <p style="background-image: url( '{{asset('frontend/assets/images/discount.png')}}' )"></p>
                            </div>

                            <div class="text-center">
                                <form action="#" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" class="btn-product btn-cart btn-buy mr-5 w-100" name="btn" value="2"><span>অর্ডার করুন</span></button>
                                </form>
                            </div>
                        </figure>

                        <div class="product-body">
                            <h3 class="product-title pb-1"><a href="{{route('product.details', $product->slug)}}">{{Str::limit($product->name, '19', '')}}</a></h3>
                            @if ($product->inventorie_id != null)
                                @if ($product->rel_to_inventorie)
                                    @php
                                        $inventorie = $product->rel_to_inventorie
                                    @endphp
                                    @foreach ($inventorie->rel_to_attribute->take(1) as $attribute)
                                        @if ($attribute->sell_price != null)
                                            <span class="new-price">৳ {{$attribute->sell_price}}</span>
                                            <del style="color: #cccccc">Was ৳ {{$attribute->price}}</del>
                                        @else
                                            <span class="product-price">৳ {{$attribute->price}}</span>
                                        @endif
                                    @endforeach
                                @endif
                            @else
                                @if ($product->sell_price != null)
                                    <span class="new-price">৳ {{$product->sell_price}}</span>
                                    <del style="color: #cccccc">Was ৳ {{$product->price}}</del>
                                @else
                                    <span class="product-price">৳ {{$product->price}}</span>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>

            @endforeach


        </div><!-- End .row -->

        <div class="load-more-container text-center">
            <a href="#" class="btn btn-outline-darker btn-load-more">More Products <i class="icon-refresh"></i></a>
        </div><!-- End .load-more-container -->
    </div>

</div>

@endsection
