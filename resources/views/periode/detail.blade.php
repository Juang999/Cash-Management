@extends('template.template')

@section('title', 'Detail Periode')

@section('content')
<div class="container mt-3 d-flex justify-content-center mb-5">
    <div class="flex-item w-75">
        <div class="card w-100">
            <h5 class="card-header">Detail Periode</h5>
            <div class="card-body">
                <div class="d-flex justify-content-evenly">
                    <div class="p-3 flex-item border" style="width: 33%;">
                        <h5>Income</h5>
                        <h3>Rp. 1.500.000,00</h3>
                    </div>
                    <div class="p-3 flex-item border" style="width: 33%;">
                        <h5>Monthly Budget</h5>
                        <h3>Rp. 1.350.000,00</h3>
                    </div>
                    <div class="p-3 flex-item border" style="width: 33%;">
                        <h5>Remainder</h5>
                        <h3>Rp. 150.000,00</h3>
                    </div>
                </div>
            </div>
        </div>
        {{-- monthly needs --}}
        <div class="card mt-4">
            <h5 class="card-header d-flex justify-content-between">
                <div class="flex-item">
                    Needs
                </div>
                <!-- Button trigger modal -->
                <div class="flex-item">
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        New +
                    </button>
                </div>
            </h5>
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
                            <td class="d-flex justify-content-evenly">
                                <button class="flex item btn btn-primary btn-sm">Update</button>
                                <button class="flex-item btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Makan</td>
                            <td>Pangan</td>
                            <td class="text-center">5.000</td>
                            <td class="text-center">31</td>
                            <td>155.000</td>
                            <td class="d-flex justify-content-evenly">
                                <button class="flex item btn btn-primary btn-sm">Update</button>
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
                            <td class="d-flex justify-content-evenly">
                                <button class="flex item btn btn-primary btn-sm">Update</button>
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
                            <td class="d-flex justify-content-evenly">
                                <button class="flex item btn btn-primary btn-sm">Update</button>
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
                            <td class="d-flex justify-content-evenly">
                                <button class="flex item btn btn-primary btn-sm">Update</button>
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
                            <td class="d-flex justify-content-evenly">
                                <button class="flex item btn btn-primary btn-sm">Update</button>
                                <button class="flex-item btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <div class="flex-item border-end" style="width: 40%">
                    <h6>Remainder</h6>
                    <h5>350.000,00</h5>
                </div>
                <div class="flex-item container" style="width: 60%;">
                    <form>
                        <div class="mb-3">
                            <label for="description" class="form-label" style="font-size: 14px">Description</label>
                            <input type="text" class="form-control" id="description"
                                style="height: 30px; font-size: 14px;" placeholder="description">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label" style="height: 30px; font-size: 14px;">Category</label>
                            <select id="category" class="form-select" style="font-size: 14px;">
                                <option style="font-size: 14px;">Sandang</option>
                                <option style="font-size: 14px;">Pangan</option>
                                <option style="font-size: 14px;">Papan</option>
                                <option style="font-size: 14px;">Personal</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="unit-price" class="form-label" style="font-size: 14px">Unit Price</label>
                            <input type="number" class="form-control" id="unit-price"
                                style="height: 30px; font-size: 14px;" placeholder="0">
                        </div>
                        <div class="mb-3">
                            <label for="days" class="form-label" style="font-size: 14px">Days</label>
                            <input type="number" class="form-control" id="days"
                                style="height: 30px; width: 30%; font-size: 14px;" placeholder="0">
                        </div>
                        <div class="mb-3">
                            <label for="total-price" class="form-label" style="font-size: 14px;">Total</label>
                            <input id="total-price" class="form-control" type="text" value="{{0}}"
                                style="height: 30px; font-size: 14px;" aria-label="readonly input example" readonly>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Add</button>
            </div>
        </div>
    </div>
</div>
@endsection
