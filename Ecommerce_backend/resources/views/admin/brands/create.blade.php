@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h3 class="mb-4">Add new Brand</h3>

        <form action="{{ route('admin.brands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="logo">Logo (opcional)</label>
                <input id="logo" name="logo" type="file" class="form-control">
            </div>

            <button class="btn btn-success" type="submit">Save</button>
        </form>
    </div>
</div>
@endsection
