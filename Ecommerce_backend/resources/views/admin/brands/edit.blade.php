@extends('admin.layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3">Edit Brand</h1>
</div>

<div class="card">
    <div class="card-body">

        <form action="{{ route('admin.brands.update', $brand->id) }}" 
              method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control"
                       value="{{ $brand->name }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ $brand->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Logo (opcional)</label>
                <input type="file" name="logo" class="form-control">

                @if($brand->logo)
                    <img src="{{ asset('storage/'.$brand->logo) }}" 
                         alt="{{ $brand->name }}" 
                         style="height:60px;" class="mt-2">
                @endif
            </div>

            <button type="submit" class="btn btn-success">
                Save changes
            </button>
        </form>

    </div>
</div>
@endsection
