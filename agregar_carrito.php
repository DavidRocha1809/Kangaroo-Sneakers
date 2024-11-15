<?php
session_start();

$id = $_POST['idProductos'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

$producto = [
    'idProductos' => $id,
    'nombre' => $nombre,
    'cantidad' => $cantidad,
    'precio' => $precio
];

// Verifica si el producto ya está en el carrito
$found = false;
foreach ($_SESSION['carrito'] as &$item) {
    if ($item['idProductos'] == $id && $item['nombre'] == $nombre) {
        // Incrementa la cantidad si el producto ya está en el carrito
        $item['cantidad'] += $cantidad;
        $found = true;
        break;
    }
}

if (!$found) {
    // Si el producto no está en el carrito, agrégalo
    $_SESSION['carrito'][] = $producto;
}

header("Location: Carrito.php");
exit();
?>