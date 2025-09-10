
@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card shadow-sm">
        <img src="https://golty.com.co/wp-content/uploads/2024/08/camiseta-deportiva-golty-hombre-blanca-azul-1.webp" 
             alt="Camiseta Nike" 
             class="thumb img-fluid mx-auto d-block" 
             style="max-width: 400px; object-fit: contain;">

        <div class="card-body text-center">
            <h3 class="card-title">Camiseta Nike</h3>
            <h4 class="text-success">$120.000</h4>
            <p class="card-text">
                Camiseta ligera, ideal para uso diario. 100% algodón.
            </p>
            <p><strong>Marca:</strong> Nike</p>

            <div class="d-flex justify-content-center gap-3 mt-3">
                <a href="#" class="btn btn-primary">
                    <i class="bi bi-cart-plus"></i> Agregar
                </a>
                <a href="{{ url('/products') }}" class="btn btn-outline-secondary">
                    Volver a Productos
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
