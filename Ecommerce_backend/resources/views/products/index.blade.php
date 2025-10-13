@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Lista de Productos</h1>

    <!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Ecommerce</title>

  <style>
    .thumb {
      width: 100%;
      height: 250px; /* Ajusta este valor según prefieras */
      object-fit: cover; /* Mantiene proporciones recortando exceso */
      border-radius: 8px; /* Opcional, mejora el aspecto visual */
    }
  </style>
  
</head>
<body>
  <div class="container">
    <h1>Productos</h1>
  
    <div class="products-grid">
      <!-- Producto 1 -->
      <article class="product" aria-label="Camisa casual">
        <img class="thumb" src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab" alt="Camisa casual">
        <div class="title-row">
          <h3>Camisa casual</h3>
          <div class="price">$29.99</div>
        </div>
        <p class="desc">Camisa ligera, ideal para uso diario. 100% algodón.</p>
        <div class="actions">
          <button class="btn btn-primary">Agregar</button>
          <button class="btn btn-secondary">Detalles</button>
        </div>
      </article>

      <article class="product" aria-label="Zapatos deportivos">
        <img class="thumb" src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519" alt="Zapatos deportivos">
        <div class="title-row">
          <h3>Zapatos deportivos</h3>
          <div class="price">$59.99</div>
        </div>
        <p class="desc">Cómodos y resistentes, suela antideslizante.</p>
        <div class="actions">
          <button class="btn btn-primary">Agregar</button>
          <button class="btn btn-secondary">Detalles</button>
        </div>
      </article>

      <article class="product" aria-label="Mochila urbana">
        <img class="thumb" src="https://m.media-amazon.com/images/I/71K1fp1QGDL._AC_SL1500_.jpg" alt="Mochila urbana">
        <div class="title-row">
          <h3>Mochila urbana</h3>
          <div class="price">$39.99</div>
        </div>
        <p class="desc">Compartimento para laptop y varios bolsillos organizadores.</p>
        <div class="actions">
          <button class="btn btn-primary">Agregar</button>
          <button class="btn btn-secondary">Detalles</button>
        </div>
      </article>
    </div>
  </div>
</body>
</html>
@endsection

