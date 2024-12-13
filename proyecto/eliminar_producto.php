<?php

    if(isset($_GET["id"])) {
        echo "bien";
        echo "<br>";
        if(!empty($_GET["id"])) {
            echo "todo bien";
            echo "<br>";
            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "productos_backend");

            $query = "DELETE FROM productos WHERE id_producto =".$_GET["id"];
            $resultado = mysqli_query($conexion, $query);

            mysqli_close($conexion);

            if($resultado === true) {
                echo "eliminado con exito";
                header('Location: tabla_productos.php');
            }
        }
    }
    else {
        echo "Algo salio mal.";
            echo "<br>";
    }

?>