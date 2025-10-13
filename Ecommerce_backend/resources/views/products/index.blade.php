@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Lista de Productos</h1>

    <div class="row">
        
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://golty.com.co/wp-content/uploads/2024/08/camiseta-deportiva-golty-hombre-blanca-azul-1.webp" class="card-img-top" alt="Camiseta Nike">
                <div class="card-body">
                    <h5 class="card-title">Camiseta Nike</h5>
                    <p class="card-text">$120.000</p>
                    <a href="/products/1" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/5f09742875d64ab7b527360a6834b5d9_9366/Tenis_de_Running_Galaxy_7_Negro_ID8760_HM11.jpg" class="card-img-top" alt="Tenis Adidas">
                <div class="card-body">
                    <h5 class="card-title">Tenis Adidas</h5>
                    <p class="card-text">$320.000</p>
                    <a href="/products/2" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="https://m.media-amazon.com/images/I/915k7JyNxOL._AC_SL1500_.jpg" class="card-img-top" alt="Mochila Deportiva">
                <div class="card-body">
                    <h5 class="card-title">Mochila Deportiva</h5>
                    <p class="card-text">$120.000</p>
                    <a href="/products/3" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
