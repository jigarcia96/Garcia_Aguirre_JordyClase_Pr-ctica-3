<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        .producto {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 15px;
            margin: 10px;
            display: inline-block;
            text-align: left;
        }

        img {
            width: 100px; /* Establece el ancho fijo para todas las imágenes */
            border-radius: 8px;
        }

        h2 {
            color: #333;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Lista de Productos</h1>

    <?php
    $nombreProducto1 = 'Producto 1';
    $descripcionProducto1 = 'Descripción del Producto 1';
    $precioProducto1 = 19.99;
    $imagenProducto1 = 'producto1.jpg';

    $nombreProducto2 = 'Producto 2';
    $descripcionProducto2 = 'Descripción del Producto 2';
    $precioProducto2 = 29.99;
    $imagenProducto2 = 'producto2.jpg';
    ?>

    <div class="producto">
        <img src="<?php echo $imagenProducto1; ?>" alt="<?php echo $nombreProducto1; ?>">
        <h2><?php echo $nombreProducto1; ?></h2>
        <p><?php echo $descripcionProducto1; ?></p>
        <p>Precio: $<?php echo number_format($precioProducto1, 2); ?></p>
        <button onclick="agregarAlCarrito('<?php echo $nombreProducto1; ?>', <?php echo $precioProducto1; ?>)">Agregar al Carrito</button>
    </div>

    <div class="producto">
        <img src="<?php echo $imagenProducto2; ?>" alt="<?php echo $nombreProducto2; ?>">
        <h2><?php echo $nombreProducto2; ?></h2>
        <p><?php echo $descripcionProducto2; ?></p>
        <p>Precio: $<?php echo number_format($precioProducto2, 2); ?></p>
        <button onclick="agregarAlCarrito('<?php echo $nombreProducto2; ?>', <?php echo $precioProducto2; ?>)">Agregar al Carrito</button>
    </div>

    <script>
        function agregarAlCarrito(nombre, precio) {
            alert('Producto agregado al carrito: ' + nombre + ' - Precio: $' + precio);
        }
    </script>
</body>
</html>
