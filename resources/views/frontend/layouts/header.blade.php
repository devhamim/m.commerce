<header class="header header-10 header-intro-clearance">

    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <a href="{{ url('/') }}" class="my-3">
                    @if($setting->first()->black_logo != null)
                        <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->black_logo }}" width="200px" alt="Logo">
                    @endif
                </a>
            </div>

            <div class="header-center">
                <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    {{-- <form action="#" method="get"> --}}
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="search_input" class="sr-only">সার্চ করুন</label>
                            <input type="search" class="form-control" name="q"  id="search_input" placeholder="সার্চ করুন ..." required value="{{@$_GET['q']}}">
                            <button id="search_btn" class="btn btn-primary" type="button"><i class="icon-search"></i></button>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>

            <div class="header-right">
                <div class="dropdown cart-dropdown">
                    <a href="{{ route('checkout') }}" class="dropdown-toggle">
                        <div class="icon">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count">{{ $totalItemsInCart }}</span>
                        </div>
                        <p>Cart</p>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="header-center nav-border">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                            <a class="px-4 py-2" href="{{ url('/') }}"><i class="icon-home" style="font-size: 24px"></i></a>
                        </li>
                        @foreach ($categorys->take(8) as $category)
                            <li class="">
                                <a class="px-4 py-2" href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
