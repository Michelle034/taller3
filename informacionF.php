<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto1 = $_POST['producto1'];
    $precio1 = $_POST['precio1'];
    $producto2 = $_POST['producto2'];
    $precio2 = $_POST['precio2'];
    $producto3 = $_POST['producto3'];
    $precio3 = $_POST['precio3'];
    
    $suma = $precio1 + $precio2 + $precio3;
    $descuento = $suma * 0.16;
    $total = $suma - $descuento;
    
    echo "<h2>Detalles de los productos</h2>";
    echo "Producto 1: $producto1 - Precio: $precio1<br>";
    echo "Producto 2: $producto2 - Precio: $precio2<br>";
    echo "Producto 3: $producto3 - Precio: $precio3<br>";
    echo "Suma de los precios: $suma<br>";
    echo "Descuento (16%): $descuento<br>";
    echo "Total a pagar: $total<br>";
}
?>
