@extends('backend.layouts.app')

@section('content')
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Product List</h1>
            <p class="breadcrumbs">
                <span><a href="{{ route('dashboard') }}">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Product
            </p>
        </div>
        <div>
            <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="ec-vendor-list card card-default">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="responsive-data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>SKU</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Subcategory</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th>Weight</th>
                                    <th>Brand</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Sell Price</th>
                                    <th>Tag</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>
                                        @php
                                        $image = $product->inventorie_id != null && $product->rel_to_inventorie ?
                                        $product->rel_to_inventorie->rel_to_attribute->first()->image :
                                        $product->image;
                                        @endphp
                                        <img width="100" src="{{ asset('uploads/product/' . $image) }}" alt="Image" />
                                    </td>
                                    <td>{{ $product->inventorie_id ? $product->rel_to_inventorie->sku ?? 'N/A' : $product->sku ?? 'N/A' }}</td>
                                    <td>{{ $product->name ?? 'N/A' }}</td>
                                    <td>{{ $product->category_id ? $product->rel_to_cat->name ?? 'C/N/A' : 'N/A' }}</td>
                                    <td>{{ $product->subcategory_id ? $product->rel_to_subcat->name ?? 'C/N/A' : 'N/A' }}</td>
                                    <td>
                                        @php
                                        $color = $product->inventorie_id != null && $product->rel_to_inventorie ?
                                        $product->rel_to_inventorie->rel_to_attribute->first()->rel_to_color :
                                        $product->rel_to_color;
                                        @endphp
                                        {{ $color ? $color->name : 'N/A' }}
                                    </td>
                                    <td>
                                        @php
                                        $size = $product->inventorie_id != null && $product->rel_to_inventorie ?
                                        $product->rel_to_inventorie->rel_to_attribute->first()->rel_to_size :
                                        $product->rel_to_size;
                                        @endphp
                                        {{ $size ? $size->name : 'N/A' }}
                                    </td>
                                    <td>
                                        @php
                                        $weight = $product->inventorie_id != null && $product->rel_to_inventorie ?
                                        $product->rel_to_inventorie->rel_to_attribute->first()->weight :
                                        $product->weight;
                                        @endphp
                                        {{ $weight ?? 'N/A' }}
                                    </td>
                                    <td>{{ $product->brand ?? 'N/A' }}</td>
                                    <td>
                                        @php
                                        $quantity = $product->inventorie_id != null && $product->rel_to_inventorie ?
                                        $product->rel_to_inventorie->rel_to_attribute->first()->quantity :
                                        $product->quantity;
                                        @endphp
                                        {{ $quantity ?? 'N/A' }}
                                    </td>
                                    <td>
                                        @php
                                        $price = $product->inventorie_id != null && $product->rel_to_inventorie ?
                                        $product->rel_to_inventorie->rel_to_attribute->first()->price :
                                        $product->price;
                                        @endphp
                                        {{ $price ?? 'N/A' }}
                                    </td>
                                    <td>
                                        @php
                                        $sell_price = $product->inventorie_id != null && $product->rel_to_inventorie ?
                                        $product->rel_to_inventorie->rel_to_attribute->first()->sell_price :
                                        $product->sell_price;
                                        @endphp
                                        {{ $sell_price ?? 'N/A' }}
                                    </td>
                                    <td>{{ $product->tag ?? 'N/A' }}</td>
                                    <td>
                                        <div class="badge {{ $product->status == 1 ? 'badge-success' : 'badge-danger' }}">
                                            {{ $product->status == 1 ? 'Active' : 'Deactive' }}
                                        </div>
                                    </td>
                                    <td>{{ $product->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-outline-success">Info</button>
                                            <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                <span class="sr-only">Info</span>
                                            </button>

                                            <div class="dropdown-menu">
                                                <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                    data-bs-target="#editBanner{{ $product->id }}">
                                                    Edit
                                                </button>
                                                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item"
                                                        onclick="return confirm('Are you sure you want to delete this item?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
