@extends('admin.layout')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>General Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item">Order</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Order</h5>
                            <a href="{{ route('orders.create') }}" class="btn btn-primary btn-sm" title="plus">
                                <i class="bi bi-patch-plus"></i> Create
                            </a>
                        </div>

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price (VND) </th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Create At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td></td>
                                    <td>VND</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex justify-content-around">
                                            <a href="#" class="btn btn-success btn-sm" title="View"><i class="bi bi-eye"></i></a>
                                            <a href="" class="btn btn-warning btn-sm" title="Edit"><i class="bi bi-pencil"></i></a>
                                            <form action="#" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->

@endsection