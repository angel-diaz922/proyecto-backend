<?php 

$imagen_productos = $_FILES["imagen_productos"];
$producto = $_POST["producto"];
$ensambladora_producto = $_POST["ensambladora_producto"];
$stock_producto = $_POST["stock_producto"];
$precio_producto = $_POST["precio_producto"];

$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "productos_backend");

if(!empty($_FILES["imagen_productos"]["name"])){

    $type = pathinfo($imagen_productos["name"], PATHINFO_EXTENSION);
    $data = file_get_contents($imagen_productos["tmp_name"]);
    $imagen_base64 = "data:image/".$type.";base64,".base64_encode($data);

    $query = "INSERT INTO productos (imagen_productos, producto, ensambladora_producto, stock_producto, precio_producto) VALUES ('".$imagen_base64."', '".$producto."', '".$ensambladora_producto."', '".$stock_producto."', '".$precio_producto."')";
    $agregado = mysqli_query($conexion, $query);
}
else {
    $query = "INSERT INTO productos (producto, ensambladora_producto, stock_producto, precio_producto) VALUES ('".$producto."', '".$ensambladora_producto."', '".$stock_producto."', '".$precio_producto."')";
    $agregado = mysqli_query($conexion, $query);
}

if($agregado) {
    header('Location: tabla_productos.php');
}
else {
    echo "Algo salio mal.";
    echo "<br>";
}

mysqli_close($conexion);

?>