@extends('template.template')

@section('title', 'Create Periode')

@push('css')
<link rel="stylesheet" href="{{asset('css/createPeriode.css')}}">
@endpush

@section('content')
<div class="container mt-3 mb-5">
    <div class="card">
        <div class="card-header">
            Add Periode
        </div>
        <div class="card-body">
            <form>
                <div class="d-flex justify-content-evenly">
                    <div class="flex-item d-flex justify-content-between w-50 border-end border-bottom container">
                        <div class="mb-3 flex-item startdate">
                            <label for="startdate" class="form-label">Start date</label>
                            <input type="date" class="form-control" id="startdate">
                        </div>
                        <div class="mb-3 flex-item enddate">
                            <label for="enddate" class="form-label">End date</label>
                            <input type="date" class="form-control" id="enddate">
                        </div>
                    </div>
                    <div class="flex-item w-50 container border-bottom">
                        <div class="mb-3">
                            <label for="enddate" class="form-label">Income</label>
                            <input type="number" class="form-control w-75" id="enddate">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-evenly align-items-end mt-3">
                    <div class="mb-3 flex-item description">
                        <label for="Description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="Description"
                            placeholder="input your description here . . .">
                    </div>
                    <div class="mb-3 flex-item category">
                        <label for="category" class="form-label">Category</label>
                        <select id="category" class="form-select">
                            <option>Sandang</option>
                            <option>Pangan</option>
                            <option>Papan</option>
                            <option>Personal</option>
                        </select>
                    </div>
                    <div class="mb-3 flex-item unit-price">
                        <label for="unit-price" class="form-label">Unit price</label>
                        <input type="number" class="form-control" id="unit-price" placeholder="0">
                    </div>
                    <div class="mb-3 flex-item days">
                        <label for="days" class="form-label">Days</label>
                        <input type="number" class="form-control" id="days" placeholder="0">
                    </div>
                    <div class="mb-3 flex-item total">
                        <label for="total-price" class="form-label">Total</label>
                        <input id="total-price" class="form-control" type="text" value="{{0}}"
                            aria-label="readonly input example" readonly>
                    </div>
                    <div class="flex-item mb-3">
                        <label for="" class="form-label"></label>
                        <button class="btn btn-primary">+Add</button>
                    </div>
                </div>
        </div>
    </div>

    <div class="card mt-4">
        <h5 class="card-header">Needs</h5>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 15%;">Description</th>
                        <th scope="col" style="width: 10%;">Category</th>
                        <th scope="col" class="text-center" style="width: 20%;">Unit Price</th>
                        <th scope="col" class="text-center" style="width: 10%;">Days</th>
                        <th scope="col">Total</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Makan</td>
                        <td>Pangan</td>
                        <td class="text-center">5.000</td>
                        <td class="text-center">31</td>
                        <td>155.000</td>
                        <td class="d-flex justify-content-center">
                            <button class="btn btn-danger btn-sm flex-item">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Makan</td>
                        <td>Pangan</td>
                        <td class="text-center">5.000</td>
                        <td class="text-center">31</td>
                        <td>155.000</td>
                        <td class="d-flex justify-content-center">
                            <button class="btn btn-danger btn-sm flex-item">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Makan</td>
                        <td>Pangan</td>
                        <td class="text-center">5.000</td>
                        <td class="text-center">31</td>
                        <td>155.000</td>
                        <td class="d-flex justify-content-center">
                            <button class="flex-item btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Makan</td>
                        <td>Pangan</td>
                        <td class="text-center">5.000</td>
                        <td class="text-center">31</td>
                        <td>155.000</td>
                        <td class="d-flex justify-content-center">
                            <button class="flex-item btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Makan</td>
                        <td>Pangan</td>
                        <td class="text-center">5.000</td>
                        <td class="text-center">31</td>
                        <td>155.000</td>
                        <td class="d-flex justify-content-center">
                            <button class="flex-item btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Makan</td>
                        <td>Pangan</td>
                        <td class="text-center">5.000</td>
                        <td class="text-center">31</td>
                        <td>155.000</td>
                        <td class="d-flex justify-content-center">
                            <button class="flex-item btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <button class="flex-item btn btn-primary">Save</button>
        </div>
        </form>
    </div>
</div>
@endsection
