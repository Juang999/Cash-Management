@extends('template.template')

@section('title', 'Category')

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

<div class="container d-flex justify-content-center">
    <div class="w-75 flex-item d-flex justify-content-center mt-5">
        <div class="card w-75 flex-item">
            <h5 class="card-header">Category</h5>
            <div class="card-body">
                <div class="border-bottom pb-4 mb-4">
                    <h5 class="card-title">Add Category</h5>
                    <form action="/settings/category/post" method="POST">
                        @csrf
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="flex-item w-50">
                                <input type="text" class="form-control w-100" name="category_description"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="flex-item">
                                <button type="submit" class="btn btn-primary">+ Add</button>
                            </div>
                        </div>
                        @error('category_description')
                        <div class="form-text text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </form>
                </div>
                @foreach ($categories as $category)
                <div class="d-flex justify-content-between mb-4">
                    <div class="flex-item">
                        <h6>{{$category->category_description}}</h6>
                    </div>
                    <div class="flex-item">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-danger btn-sm delete-category"  data-id="{{$category->id}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Delete
                    </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex justify-content-center align-items-center">
        <img src="{{asset('images/icon/alert.png')}}" class="flex-item" alt="...">
        <p class="flex-item">Are you sure want to remove this category?</p>
      <div >
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">No</button>
        <form class="form-delete" action="" method="POST">
            @method("delete")
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


@push('jquery')
<script src="{{asset('js/category.js')}}"></script>
@endpush
