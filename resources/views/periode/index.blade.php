@extends('template.template')

@section('title', 'Periode')

@push('css')
<link rel="stylesheet" href="{{asset('css/periode.css')}}">
@endpush

@section('content')
<div class="container w-100">
    {{-- button to create new periode --}}
    <a href="/periode/create" class="btn btn-success p-25 mt-3 mb-3">
        New Periode
    </a>
    <div class="card mb-5">
        <div class="card-body">
            {{-- table for data --}}
            <table class="table table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th scope="col" style="width: 10%">Periode Code</th>
                        <th scope="col" style="width: 10%">Start date</th>
                        <th scope="col" style="width: 10%">End date</th>
                        <th scope="col" style="width: 13%">Income</th>
                        <th scope="col" style="width: 13%">Expenses</th>
                        <th scope="col" style="width: 13%">Remainder</th>
                        <th scope="col" style="width: 15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">0</td>
                        <td class="font-body d-flex justify-content-evenly">
                            <a href="/periode/{{Carbon\Carbon::now()->format('Ym')}}/detail" class="btn btn-primary btn-sm flex-item">
                                detail
                            </a>
                            <button type="button" class="btn btn-danger btn-sm flex-item" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">0</td>
                        <td class="font-body d-flex justify-content-evenly">
                            <a href="/periode/{{Carbon\Carbon::now()->format('Ym')}}/detail" class="btn btn-primary btn-sm flex-item">
                                detail
                            </a>
                            <button type="button" class="btn btn-danger btn-sm flex-item" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">0</td>
                        <td class="font-body d-flex justify-content-evenly">
                            <a href="/periode/{{Carbon\Carbon::now()->format('Ym')}}/detail" class="btn btn-primary btn-sm flex-item">
                                detail
                            </a>
                            <button type="button" class="btn btn-danger btn-sm flex-item" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">0</td>
                        <td class="font-body d-flex justify-content-evenly">
                            <a href="/periode/{{Carbon\Carbon::now()->format('Ym')}}/detail" class="btn btn-primary btn-sm flex-item">
                                detail
                            </a>
                            <button type="button" class="btn btn-danger btn-sm flex-item" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">0</td>
                        <td class="font-body d-flex justify-content-evenly">
                            <a href="/periode/{{Carbon\Carbon::now()->format('Ym')}}/detail" class="btn btn-primary btn-sm flex-item">
                                detail
                            </a>
                            <button type="button" class="btn btn-danger btn-sm flex-item" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">0</td>
                        <td class="font-body d-flex justify-content-evenly">
                            <a href="/periode/{{Carbon\Carbon::now()->format('Ym')}}/detail" class="btn btn-primary btn-sm flex-item">
                                detail
                            </a>
                            <button type="button" class="btn btn-danger btn-sm flex-item" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">0</td>
                        <td class="font-body d-flex justify-content-evenly">
                            <a href="/periode/{{Carbon\Carbon::now()->format('Ym')}}/detail" class="btn btn-primary btn-sm flex-item">
                                detail
                            </a>
                            <button type="button" class="btn btn-danger btn-sm flex-item" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">1.000.0000</td>
                        <td class="font-body">0</td>
                        <td class="font-body d-flex justify-content-evenly">
                            <a href="/periode/{{Carbon\Carbon::now()->format('Ym')}}/detail" class="btn btn-primary btn-sm flex-item">
                                detail
                            </a>
                            <button type="button" class="btn btn-danger btn-sm flex-item" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            {{-- pagination data --}}
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('jquery')
<script src="{{asset('js/periode.js')}}"></script>
@endpush
