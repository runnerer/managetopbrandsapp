@extends('layouts.app')

@section('title', 'Toplist Brands')

@section('header', 'Toplist Brands')

@section('content')
<!-- Responsive Brand List -->
<div class="row">
    @foreach($brands as $brand)
    <div class="col-12 border rounded p-3 mb-3">
        <!-- Header Row for Large Screens -->
        <div class="row d-none d-md-flex fw-bold">
            <div class="col-md-5">Brand</div>
            <div class="col-md-3">Rating</div>
            <div class="col-md-3">Country</div>
        </div>

        <!-- Brand Details -->
        <div class="row align-items-center">
            <div class="col-md-5 d-flex align-items-center mb-3 mb-md-0" data-label="Brand">
                <img src="{{ $brand->brand_image }}" class="rounded-circle me-3 brand-image" alt="{{ $brand->brand_name }}">
                <span>{{ $brand->brand_name }}</span>
            </div>

            <div class="col-md-3 mb-3 mb-md-0" data-label="Rating">
                @foreach(range(1, 5) as $star)
                    @if($star <= $brand->rating)
                        <span class="rating-star">★</span>
                    @else
                        <span class="rating-star empty">☆</span>
                    @endif
                @endforeach
            </div>
            <div class="col-md-3 mb-3 mb-md-0" data-label="Country">
                <span>{{ $brand->country }}</span>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

@section('scripts')
<style>
    /* Style for circular brand image */
    .brand-image {
        width: 80px;
        height: 80px;
        object-fit: cover;
    }

    /* Ratings Styling */
    .rating-star {
        color: #ffc107; /* Gold color for stars */
        font-size: 1.2rem;
    }

    .rating-star.empty {
        color: #e4e5e9; /* Light gray for empty stars */
    }

</style>
@endsection
