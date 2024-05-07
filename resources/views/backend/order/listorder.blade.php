@extends('backend.layouts.app')
@section('content')
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Orders List</h1>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Orders
            </p>
        </div>
        <div>
            <a href="{{ route('orders.create') }}" class="btn btn-primary">Add Orders</a>
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
                                    <th>sl</th>
                                    <th>Image</th>
                                    <th>Invoice No.</th>
                                    <th>Customer Info</th>
                                    <th>Product</th>
                                    <th>Subtotal</th>
                                    <th>Charge</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($orders as $sl=>$order)
                                    <tr>
                                        <td>{{ $sl+1 }}</td>
                                        <td>
                                            @foreach ($order->rel_to_orderpro->take(1) as $OrderProduct)
                                                @if ($OrderProduct != null)
                                                    @if ($OrderProduct->rel_to_attribute != null)
                                                        <img width="100" src="{{ asset('uploads/product') }}/{{ $OrderProduct->rel_to_attribute->image }}" alt="Image" />
                                                    @elseif ($OrderProduct->rel_to_pro)
                                                        <img width="100" src="{{ asset('uploads/product') }}/{{ $OrderProduct->rel_to_pro->image }}" alt="Image" />
                                                    @endif
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $order->order_id }}</td>
                                        <td>
                                            <span>{{ $order->rel_to_billing ? $order->rel_to_billing->name : 'No Billing Details' }}</span>
                                            <br>
                                            <a href="tel: {{ $order->rel_to_billing ? $order->rel_to_billing->mobile : 'No Billing Details' }}"><span>{{ $order->rel_to_billing ? $order->rel_to_billing->mobile : 'No Billing Details' }}</span></a>
                                            <br>
                                            <span>{{ $order->rel_to_billing ? $order->rel_to_billing->address : 'No Billing Details' }}</span>
                                            <br>
                                            <span>{{ $order->rel_to_billing ? $order->rel_to_billing->district : 'No Busines Name' }}</span>
                                        </td>
                                        <td>
                                            @foreach ($order->rel_to_orderpro as $OrderProduct)
                                                @if ($OrderProduct != null)
                                                    @if ($OrderProduct->rel_to_attribute != null)
                                                        <span>{{ $OrderProduct->rel_to_pro->name }} <br> {{ $OrderProduct->quantity }} x {{ $OrderProduct->rel_to_attribute ? $OrderProduct->rel_to_attribute->sell_price : $OrderProduct->rel_to_attribute->price }},
                                                            @if ($OrderProduct->rel_to_attribute->weight != null)
                                                                Weight: {{ $OrderProduct->rel_to_attribute->weight }}
                                                            @else
                                                                Color: {{ $OrderProduct->rel_to_attribute->color_id }}
                                                                Size: {{ $OrderProduct->rel_to_attribute->size_id }}
                                                            @endif
                                                        </span><hr>
                                                    @elseif ($OrderProduct->rel_to_pro != null)
                                                        <span>{{ $OrderProduct->rel_to_pro->name }} <br> {{ $OrderProduct->quantity }} x {{ $OrderProduct->rel_to_pro ? $OrderProduct->rel_to_pro->sell_price : $OrderProduct->rel_to_pro->price }},
                                                            @if ($OrderProduct->rel_to_pro->weight != null)
                                                                Weight: {{ $OrderProduct->rel_to_pro->weight }}
                                                            @else
                                                                Color: {{ $OrderProduct->rel_to_pro->color_id }}
                                                                Size: {{ $OrderProduct->rel_to_pro->size_id }}
                                                            @endif
                                                        </span><hr>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ $order->sub_total }}Tk</td>
                                        <td>{{ $order->delivery_charge }}Tk</td>
                                        <td>{{ $order->total }}Tk</td>
                                        <td>
                                            @if ($order->status == 0)
                                                <div class="badge badge-success">Processing</div>
                                            @else
                                                <div class="badge badge-danger">Cancel</div>
                                            @endif
                                        </td>
                                        <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                        <td>
                                            <div class="btn-group mb-1">
                                                <button type="button"
                                                    class="btn btn-outline-success">Info</button>
                                                <button type="button"
                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" data-display="static">
                                                    <span class="sr-only">Info</span>
                                                </button>

                                                <div class="dropdown-menu">
                                                    <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editBanner{{ $order->id }}">
                                                        Edit
                                                    </button>
                                                    <form action="{{ route('orders.destroy',  $order->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?')">
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
