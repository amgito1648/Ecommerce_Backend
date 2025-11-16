@extends('admin.layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Brands</h4>
            <a href="{{ route('admin.brands.create') }}" class="btn btn-primary btn-sm">
                Add new Brand
            </a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @include('admin.brands.table')
        </div>
    </div>
</div>
@endsection
