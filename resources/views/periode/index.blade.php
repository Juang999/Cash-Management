@extends('template.template')

@section('title', 'Periode')

@push('css')
<link rel="stylesheet" href="{{asset('css/periode.css')}}">
@endpush

@section('content')
<div class="container h-100 w-100">
    @include('periode.create')
    <div class="card">
        <div class="card-body">
            {{-- button to create new periode --}}
            {{-- table for data --}}
            <table class="table table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th scope="col" style="width: 13%">Periode Code</th>
                        <th scope="col">Start date</th>
                        <th scope="col">End date</th>
                        <th scope="col" style="width: 10%">Income</th>
                        <th scope="col" style="width: 10%">Expenses</th>
                        <th scope="col" style="width: 10%">Remainder</th>
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
                        <td class="font-body">
                            @include('periode.detail')
                            @include('periode.delete')
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">0</td>
                        <td class="font-body" style="width: 15%">
                            @include('periode.detail')
                            @include('periode.delete')
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">0</td>
                        <td class="font-body" style="width: 15%">
                            @include('periode.detail')
                            @include('periode.delete')
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">0</td>
                        <td class="font-body" style="width: 15%">
                            @include('periode.detail')
                            @include('periode.delete')
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">0</td>
                        <td class="font-body" style="width: 15%">
                            @include('periode.detail')
                            @include('periode.delete')
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">0</td>
                        <td class="font-body" style="width: 15%">
                            @include('periode.detail')
                            @include('periode.delete')
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">0</td>
                        <td class="font-body" style="width: 15%">
                            @include('periode.detail')
                            @include('periode.delete')
                        </td>
                    </tr>
                    <tr>
                        <td class="font-body">{{Carbon\Carbon::now()->format('Ym')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body">{{Carbon\Carbon::now()->format('D, d M Y')}}</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">1.000.0000</td>
                        <td class="font-body" style="width: 10%">0</td>
                        <td class="font-body" style="width: 15%">
                            @include('periode.detail')
                            @include('periode.delete')
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
@endsection

@push('jquery')
<script src="{{asset('js/periode.js')}}"></script>
@endpush
