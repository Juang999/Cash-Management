@extends('template.template')

@section('title', 'Dashboard')

@push('css')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endpush

@section('content')
<div class="container body-dashboard h-100 d-flex justify-content-evenly align-items-center">
    <div class="flex-item">
        <div class="card d-flex flex-column" style="width: 18rem;">
            <div class="bg-icon d-flex justify-content-center align-items-center w-100">
                <img src="{{ asset('images/icon/grace-period.png') }}" class="card-img-top img-icon flex-item">
            </div>
            <div class="card-body d-flex justify-content-center">
                <a href="/periode" class="btn fs-5 nav-link">Periode</a>
            </div>
        </div>
    </div>
    <div class="flex-item">
        <div class="card d-flex flex-column" style="width: 18rem;">
            <div class="bg-icon d-flex justify-content-center align-items-center w-100">
                <img src="{{ asset('images/icon/save-money.png') }}" class="card-img-top img-icon flex-item">
            </div>
            <div class="card-body d-flex justify-content-center">
                <a href="/cash-management" class="btn fs-5 nav-link">Cash Management</a>
            </div>
        </div>
    </div>
    <div class="flex-item">
        <div class="card d-flex flex-column" style="width: 18rem;">
            <div class="bg-icon d-flex justify-content-center align-items-center w-100">
                <img src="{{ asset('images/icon/wish-list.png') }}" class="card-img-top img-icon flex-item">
            </div>
            <div class="card-body d-flex justify-content-center">
                <a href="#" class="btn fs-5 nav-link">Wishlist</a>
            </div>
        </div>
    </div>
</div>
@endsection
