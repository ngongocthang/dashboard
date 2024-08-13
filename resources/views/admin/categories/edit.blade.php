@extends('admin.layout')
@section('content')
<script>
        document.addEventListener("DOMContentLoaded", function() {
            if (document.getElementById('success-message')) {
                setTimeout(function() {
                    window.location.href = "{{ route('categories.index') }}";
                }, 7000);
            }
        });
    </script>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Category</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Show error controller -->
    @if(session('message-success'))
    <input type="hidden" id="success-message">
    @endif

    <!-- show error request -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Form</h5>

                        <!-- General Form Elements -->
                        <form action="{{ route('categories.update', $category->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control" style="height: 100px">{{ $category->description }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12 text-end">
                                    <a href="{{ route('categories.index') }}" class="btn-custom">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection