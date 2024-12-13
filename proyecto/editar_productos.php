<?php 

if(isset($_POST["id_producto"])) {
    $id = $_POST["id_producto"];

    if(!empty($id)) {

        $imagen_productos = $_FILES["imagen_productos"];
        $producto = $_POST["producto"];
        $ensambladora_producto = $_POST["ensambladora_producto"];
        $stock_producto = $_POST["stock_producto"];
        $precio_producto = $_POST["precio_producto"];  

        $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "productos_backend");
        
        if(!empty($_FILES["imagen_productos"]["name"])){

            $imagen_producto = $_FILES["imagen_productos"];
            $type = pathinfo($imagen_productos["name"], PATHINFO_EXTENSION);
            $data = file_get_contents($imagen_productos["tmp_name"]);
            $imagen_base64 = "data:image/".$type.";base64,".base64_encode($data);

            $query = "UPDATE productos SET imagen_productos = '".$imagen_base64."', producto = '".$producto."', ensambladora_producto = '".$ensambladora_producto."', stock_producto = '".$stock_producto."', precio_producto = '".$precio_producto."' WHERE id_producto = ".$id;
            $editado = mysqli_query($conexion, $query);      
        }
        else {
            $query = "UPDATE productos SET producto = '".$producto."', ensambladora_producto = '".$ensambladora_producto."', stock_producto = '".$stock_producto."', precio_producto = '".$precio_producto."' WHERE id_producto = ".$id;
            $editado = mysqli_query($conexion, $query);
        }

        if($editado) {
            header('Location: tabla_productos.php');
        }
        else {
            echo "Algo salio mal.";
            echo "<br>";
        }  
        mysqli_close($conexion);
    }
    else {
        echo "El ID no existe.";
        echo "<br>";
    }
}
?>