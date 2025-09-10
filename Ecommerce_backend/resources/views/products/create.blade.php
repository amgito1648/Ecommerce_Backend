<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Formulario de producto</title>
  <style>
    body {
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, Arial;
      background: #f6f7fb;
      color: #222;
      padding: 30px;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background: #fff;
      padding: 24px;
      border-radius: 12px;
      box-shadow: 0 6px 18px rgba(20,20,40,0.06);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 1.4rem;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    label {
      font-weight: 600;
      margin-bottom: 4px;
      display: block;
    }

    input, textarea, select {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
    }

    .actions {
      display: flex;
      justify-content: flex-end;
      gap: 12px;
    }

    .btn {
      padding: 10px 16px;
      border-radius: 8px;
      border: none;
      font-weight: 600;
      cursor: pointer;
      font-size: 1rem;
    }

    .btn-primary {
      background: #1f8ef1;
      color: #fff;
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
    <h1>Registrar Producto</h1>
    <form action="#" method="post" enctype="multipart/form-data">
      <div>
        <label for="nombre">Nombre del producto</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>

      <div>
        <label for="precio">Precio</label>
        <input type="number" id="precio" name="precio" step="0.01" required>
      </div>

      <div>
        <label for="descripcion">Descripción</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
      </div>

      <div>
        <label for="imagen">Imagen</label>
        <input type="file" id="imagen" name="imagen" accept="image/*" required>
      </div>

      <div>
        <label for="marca">Marca</label>
        <input type="text" id="marca" name="marca" required>
      </div>

      <div class="actions">
        <button type="reset" class="btn btn-secondary">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
</body>
</html>
