@extends('template.template')

@section('title', 'Periode')

@push('css')
<link rel="stylesheet" href="{{asset('css/periode.css')}}">
@endpush

@section('content')
<div class="container h-100 w-100">
    <br>
    <form>
        <div class="card h-100">
            <div class="card-body">
                <div class="w-50 d-flex justify-content-between">
                    <div class="mb-3 input-periode flex-item">
                        <label for="startDate" class="form-label fs-6">Start date</label>
                        <input type="date" class="form-control" id="startDate" aria-describedby="startDateHelp">
                    </div>
                    <div class="mb-3 input-periode flex-item">
                        <label for="endDate" class="form-label fs-6">End date</label>
                        <input type="date" class="form-control" id="endDate">
                    </div>
                </div>
                <div class="mb-3 input-periode">
                    <label for="endDate" class="form-label fs-6">Periode code</label>
                    <input disabled type="string" class="form-control" id="endDate">
                </div>
            </div>
            <div class="container">
                <div class="card text-center mb-3">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('jquery')
<script src="{{asset('js/periode.js')}}"></script>
@endpush
