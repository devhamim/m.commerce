@extends('frontend.layouts.app')
@section('content')
<div class="intro-slider-container">
    <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
            "nav": false,
            "responsive": {
                "992": {
                    "nav": true
                }
            }
        }'>
        @foreach ($banners as $banner)
        <a href="{{ $banner->banner_link }}" target="_blank">
        <div class="intro-slide" style="background-image: url({{asset('uploads/banner')}}/{{ $banner->image }});">
                <div class="container intro-content">

                </div>
            </div>
        </a>
        @endforeach
    </div>
    <span class="slider-loader"></span>
</div>
<!-- End .intro-slider-container -->


<div class="mb-4"></div>
@foreach ($categorys as $category)
    <div class="container electronics">
        <div class="heading heading-flex heading-border ">
            <div class="heading-left">
                <h2 class="title">{{ $category->name }}</h2>
            </div>

        <div class="heading-right">
                <a href="#" class="see_more"><h3 class="me-1">See More</h3><span>></span></a>
        </div>
        </div>

        <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="elec-new-tab" role="tabpanel" aria-labelledby="elec-new-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1280": {
                                    "items":5,
                                    "nav": true
                                }
                            }
                        }'>
                        @foreach ($products as $product)
                            @if ($product->category_id == $category->id)
                                <div class="product cartpage">
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
                                                <a href="{{route('product.details', $product->slug)}}" class="btn-product btn-cart btn-buy mr-5 w-100" name="btn" value="2"><span>অর্ডার করুন</span></a>
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
                            @endif
                        @endforeach
                    </div>
                </div>
        </div><!-- End .tab-content -->
    </div>
@endforeach

@endsection

