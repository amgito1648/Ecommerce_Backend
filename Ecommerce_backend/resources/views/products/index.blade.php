<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Ecommerce</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      background: #f6f7fb;
      color: #222;
      padding: 24px;
    }

    .container {
      max-width: 1100px;
      margin: 0 auto;
    }

    h1 {
      margin-bottom: 16px;
      font-size: 1.4rem;
      text-align: center;
    }

    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 16px;
      margin-top: 12px;
    }

    .product {
      background: #ffffff;
      border-radius: 10px;
      padding: 12px;
      box-shadow: 0 6px 18px rgba(20,20,40,0.06);
      display: flex;
      flex-direction: column;
      gap: 8px;
      transition: transform .12s ease, box-shadow .12s ease;
    }

    .product:hover {
      transform: translateY(-4px);
      box-shadow: 0 14px 30px rgba(20,20,40,0.08);
    }

    .thumb {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 8px;
      background: #eee;
    }

    .title-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 8px;
    }

    .product h3 {
      font-size: 1rem;
      margin: 0;
    }

    .price {
      font-weight: 700;
      color: #0b7b5c;
      white-space: nowrap;
      margin-left: 8px;
    }

    .desc {
      font-size: 0.9rem;
      color: #555;
      line-height: 1.3;
      margin-top: 4px;
      flex-grow: 1;
    }

    .actions {
      display: flex;
      gap: 8px;
      margin-top: 8px;
    }

    .btn {
      flex: 1;
      padding: 8px 10px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      font-weight: 600;
    }

    .btn-primary {
      background: #1f8ef1;
      color: white;
    }

    .btn-secondary {
      background: transparent;
      border: 1px solid #ddd;
      color: #333;
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

      <!-- Producto 2 -->
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

      <!-- Producto 3 -->
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

