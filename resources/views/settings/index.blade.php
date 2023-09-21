@extends('template.template')

@section('title', 'Setting')

@section('content')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif (session('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ session('failed') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="w-100 container mt-4" style="height: 100vh;">
    <div class="card">
        <div class="card-header">
            Settings
        </div>
        <div class="card-body d-flex justify-content-center">
            <div class="w-50 border-end">
                <div class="container">
                    <form action="/profile/email/update" method="POST">
                        @csrf
                        @method('patch')
                        <div class="d-flex justify-content-between align-items-end mb-4">
                            <div class="w-75 flex-item">
                                <label for="email-input" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" value="{{$user_profile->email}}"
                                    id="email-input" aria-describedby="emailHelp">
                            </div>
                            <div class="flex-item">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="mb-2">
                        <h5>User Profile</h5>
                    </div>
                    <div class="border-top">
                        <form action="/profile/update" method="POST">
                            @csrf
                            @method('put')
                            <div class="mb-3 mt-3 w-50">
                                <label for="username-input" class="form-label">Username</label>
                                <input type="text" class="form-control" name="name" value="{{$user_profile->name}}"
                                    id="username-input">
                                @error('name')
                                    <div class="form-text text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 w-50">
                                <label for="phone-number-input" class="form-label">Phone</label>
                                <input type="number" class="form-control" name="phone_number" value="{{$user_profile->phone_number}}"
                                    id="phone-number-input">
                                @error('phone_number')
                                    <div class="form-text text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 w-50">
                                <label for="password-input" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password-input">
                                @error('password')
                                    <div class="form-text text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3 w-50">
                                <label for="password-confirmation-input" class="form-label">password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password-confirmation-input">
                                @error('password')
                                    <div class="form-text text-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-50 container pt-3 pb-3">
                <div class="d-flex justify-content-evenly align-items-center">
                    <div class="w-75 flex-item">
                        <h5 style="height: 15px;">Category</h5>
                        <p style="font-size:14px;">This setting is there to create categories from period features</p>
                    </div>
                    <div class="w-25 flex-item d-flex justify-content-center">
                        <div class="flex-item">
                            <a href="/settings/category" class="btn btn-primary">Display</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
