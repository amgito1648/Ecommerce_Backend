<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Detalle de producto</title>
  <style>
    body {
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, Arial;
      background: #f6f7fb;
      color: #222;
      padding: 30px;
    }

    .container {
      max-width: 700px;
      margin: 0 auto;
      background: #fff;
      padding: 24px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(20,20,40,0.06);
    }

    h1 {
      text-align: center;
      margin-bottom: 10px;
      font-size: 1.4rem;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 1.2rem;
    }

    .detail {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .detail .thumb {
      width: 100%;
      max-width: 500px;   /* ancho máximo */
      max-height: 300px;  /* alto máximo */
      object-fit: contain; /* muestra la imagen completa */
      display: block;
      margin: 0 auto;     /* centra la imagen */
      border-radius: 8px;
      background: #f5f5f5;
    }

    .title-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 8px;
      padding: 0 10px;
    }

    .detail h3 {
      font-size: 1.2rem;
      margin: 0;
    }

    .price {
      font-weight: 700;
      color: #0b7b5c;
      white-space: nowrap;
      margin-left: 8px;
    }

    .desc {
      font-size: 0.95rem;
      color: #555;
      line-height: 1.4;
      padding: 0 10px;
    }

    .actions {
      display: flex;
      gap: 12px;
      margin-top: 12px;
      padding: 0 10px;
    }

    .btn {
      flex: 1;
      padding: 10px;
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
    <h1>Product Detail</h1>
    <h2>Productos</h2>

    <div class="detail">
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
    </div>
  </div>
</body>
</html>
