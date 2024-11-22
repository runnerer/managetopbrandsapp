@extends('layouts.app')

@section('title', 'Manage Brands')

@section('header', 'Manage Brands')

@section('content')
<div class="row mb-3">
    <div class="col-12 text-end">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addBrandModal">Add New Brand</button>
    </div>
</div>

<div class="row">
    @error('brand_name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    @error('brand_image')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    @error('rating')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    @error('country')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    @foreach($brands as $brand)
            <div class="col-12 border rounded p-3 mb-3">
                <!-- Header Row for Large Screens -->
                <div class="row d-none d-md-flex fw-bold">
                    <div class="col-md-3">Brand</div>
                    <div class="col-md-3">Brand Image</div>
                    <div class="col-md-2">Rating</div>
                    <div class="col-md-2">Country</div>
                    <div class="col-md-2 text-end">Actions</div>
                </div>

                <form class="row align-items-center" method="POST" action="{{ route('brands.update', $brand->brand_id) }}">
                    @csrf
                    @method('PUT')
                    <div class="col-md-3 d-flex align-items-center mb-3 mb-md-0" data-label="Brand">
                        <img src="{{ $brand->brand_image }}" class="rounded-circle me-3 brand-image" alt="{{ $brand->brand_name }}">
                        <input type="text" name="brand_name" class="form-control" value="{{ $brand->brand_name }}" required />
                    </div>
                    <div class="col-md-3 mb-3 mb-md-0" data-label="Brand Image">
                        <input type="url" name="brand_image" class="form-control" value="{{ $brand->brand_image }}" required />
                    </div>
                    <div class="col-md-2 mb-3 mb-md-0" data-label="Rating">
                        <input type="number" name="rating" class="form-control" value="{{ $brand->rating }}" min="1" max="5" required />
                    </div>
                    <div class="col-md-2 mb-3 mb-md-0" data-label="Country">
                        <input type="text" name="country" class="form-control" value="{{ $brand->country }}" maxlength="2" required />
                    </div>
                    <div class="col-md-2 text-end">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </form>

                <form method="POST" action="{{ route('brands.destroy', $brand->brand_id) }}" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>

    @endforeach
</div>

@include('partials.add_brand_modal')
@endsection

@section('scripts')
<style>
    .brand-image {
        width: 40px;
        height: 40px;
        object-fit: cover;
    }
</style>
@endsection