@extends('backend.layouts.app')
@section('content')
<div class="content">
    <div class="breadcrumb-wrapper breadcrumb-contacts">
        <div>
            <h1>Attribute List</h1>
            <p class="breadcrumbs"><span><a href="{{ route('dashboard') }}">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Attribute
            </p>
        </div>
        <div>
            <a href="{{ route('inventory.create') }}" class="btn btn-primary">Add Attribute</a>
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
                                    <th>Title</th>
                                    <th>SKU</th>
                                    <th>Brand</th>
                                    <th>Inventory</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($inventorys as $inventory)
                                    <tr>
                                        <td>
                                            @if ($inventory->rel_to_attribute->isNotEmpty() && $inventory->rel_to_attribute->first()->image)
                                            <img width="100" src="{{ asset('uploads/product') }}/{{ $inventory->rel_to_attribute->first()->image }}" alt="Image" />
                                            @else
                                                No image available
                                            @endif
                                        </td>
                                        <td>{{ $inventory->title }}</td>
                                        <td>{{ $inventory->sku }}</td>
                                        <td>
                                            @if ($inventory->brand != null)
                                                {{ $inventory->brand }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @foreach ($inventory->rel_to_attribute as $attribute)
                                                @if ($attribute->color_id)
                                                    color: {{  $attribute->color_id }},
                                                @endif
                                                @if ($attribute->size_id)
                                                    size: {{  $attribute->size_id }},
                                                @endif
                                                @if ($attribute->weight)
                                                    Weight: {{  $attribute->weight }},
                                                @endif
                                                Price: {{  $attribute->price }}, Sell Price: {{  $attribute->sell_price }}, Quantity: {{  $attribute->quantity }},<br>
                                            @endforeach
                                        </td>
                                        <td>
                                            @if ($inventory->status == 1)
                                                <div class="badge badge-success">Active</div>
                                            @else
                                                <div class="badge badge-danger">Deactive</div>
                                            @endif
                                        </td>
                                        <td>{{ $inventory->created_at->format('d-m-Y') }}</td>
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
                                                    <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editBanner{{ $inventory->id }}">
                                                        Edit
                                                    </button>
                                                    <form action="{{ route('inventory.destroy',  $inventory->id) }}" method="POST">
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

                                        <!-- Edit User Modal  -->

                                    {{-- <div class="modal fade modal-add-contact" id="editBanner{{ $banner->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="modal-content">
                                                <form action="{{ route('banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-header px-4">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Banner</h5>
                                                    </div>

                                                    <div class="modal-body px-4">
                                                        <div class="form-group row mb-6">
                                                            <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Banner <span class="text-secondary">(Optional)</span></label>

                                                            <div class="col-sm-4 col-lg-6">
                                                                <div class="custom-file mb-1">
                                                                    <input type="file" class="custom-file-input @error('address') is-invalid @enderror" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                                                    <label class="custom-file-label" for="coverImage">Choose
                                                                        file...</label>
                                                                    <div class="invalid-feedback">Example invalid custom file feedback
                                                                    </div>
                                                                </div>
                                                                @error('image')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="col-sm-4 col-lg-4" style="height: 100px">
                                                                <img width="100" id="blah" src="{{ asset('uploads/banner') }}/{{ $banner->image }}" alt="">
                                                            </div>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="event">Link <span class="text-secondary">(Optional)</span></label>
                                                                    <input type="text" class="form-control" name="link" value="{{ $banner->link }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mb-4">
                                                                    <label for="event">Status</label>
                                                                    <select name="status" class="form-control">
                                                                        <option value="1"{{ $banner->status == 1?'selected':'' }}>Active</option>
                                                                        <option value="0"{{ $banner->status == 0?'selected':'' }}>Deactive</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer px-4">
                                                        <button type="button" class="btn btn-secondary btn-pill"
                                                            data-bs-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary btn-pill">Save Contact</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> --}}
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
