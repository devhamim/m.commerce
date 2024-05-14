<div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">

        <div class="">
            <a href="{{ route('dashboard') }}" title="">
                @if($setting->first()->black_logo != null)
                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->black_logo }}" class="ec-brand-icon" width="180px" alt="Logo">
                @else
                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->white_logo }}" class="ec-brand-icon" width="180px" alt="Logo">
                @endif
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <!-- Dashboard -->
                <li class="active">
                    <a class="sidenav-item-link" href="{{ route('dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <hr>
                </li>

                <!-- user list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('users.index') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">Users</span>
                    </a>
                </li>
                <!-- Banner list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('banner.index') }}">
                        <i class="mdi mdi-tag-faces"></i>
                        <span class="nav-text">Banner</span>
                    </a>
                </li>
                <!-- category list -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-dns-outline"></i>
                        <span class="nav-text">Category</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('categorys.index') }}">
                                    <span class="nav-text">Category List</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('subcategorys.index') }}">
                                    <span class="nav-text">Subcategory List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Order list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('review.index') }}">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Review</span>
                    </a>
                </li>
                <!-- Order list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('orders.index') }}">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Order</span>
                    </a>
                </li>
                <!-- product list -->
                <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)">
                        <i class="mdi mdi-palette-advanced"></i>
                        <span class="nav-text">Product</span> <b class="caret"></b>
                    </a>
                    <div class="collapse">
                        <ul class="sub-menu" id="vendors" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('product.index') }}">
                                    <span class="nav-text">Product List</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('inventory.index') }}">
                                    <span class="nav-text">Attribute</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('attribute.index') }}">
                                    <span class="nav-text">Color</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="{{ route('size.list') }}">
                                    <span class="nav-text">Size</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- sms list -->
                <li>
                    <a class="sidenav-item-link" href="{{ route('sms.index') }}">
                        <i class="mdi mdi-account-group"></i>
                        <span class="nav-text">SMS</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
