@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Filtro de categorías -->
    <form method="GET" action="{{ route('home') }}" class="mb-4">
        <select name="category" class="form-select w-auto d-inline" onchange="this.form.submit()">
            <option value="">Todas las categorías</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" 
                    {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </form>

    <!-- Cartas de productos -->
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img 
                    src="{{ $product->url_image ? asset('storage/' . $product->url_image) : asset('images/default.jpg') }}" 
                    class="card-img-top" 
                    alt="{{ $product->name }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><strong>${{ number_format($product->price, 2) }}</strong></p>
                    @if($product->brand)
                    <p class="card-text"><small class="text-muted">{{ $product->brand->name }}</small></p>
                    @endif
                    <a href="#" class="btn btn-primary mt-auto">Ver producto</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
