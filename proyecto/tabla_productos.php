<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./css/estilos.css">
        <title>Tabla de productos</title>
    </head>
    <body> 
        
        <header>
            <h1>Tecno Grafica</h1>
            <div id="search-relative">
                <input type="search" class="input">
                    <span id="icon">
                    <i class="las la-search"></i>
                    </span>
            </div>
            <div>
                <a href="./login.html"><i class="las la-user">Ingresar</i></a>
                <a href="#"><i class="las la-shopping-cart"></i></a>
            </div>
        </header>

        <div><h2>Lista de Productos</h2></div>

        <div class="volver"><button><a href="/backend/trabajo/pag/index.php">Vover</a></button></div>

        <table>
            <thead>
                <tr class="encabezado">
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Ensambladora</th>
                    <th>Stock</th>
                    <th>Precio</th>
                    <th colspan="2"><button><a href="formulario_agregar.php">Agregar</a></button></th>
                </tr>
            </thead>
            <tbody>

                <?php

                    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "productos_backend");

                    $query = "SELECT * FROM productos";
                    $resultado = mysqli_query($conexion, $query);

                    while($unaFila = mysqli_fetch_assoc($resultado)) {
                        echo '  <tr>
                                    <td>'.$unaFila["id_producto"].'</td>
                                    <td><img style="width: 30%;" src="'.$unaFila["imagen_productos"].'"></td>
                                    <td>'.$unaFila["producto"].'</td>
                                    <td>'.$unaFila["ensambladora_producto"].'</td>
                                    <td>'.$unaFila["stock_producto"].'</td>
                                    <td class="price"> '.$unaFila["precio_producto"].'</td>
                                    <td><a href="./formulario_editar.php?id='.$unaFila["id_producto"].'"><i class="las la-edit"></i></a></td>
                                    <td><a href="./eliminar_producto.php?id='.$unaFila["id_producto"].'"><i class="las la-trash"></i></a></td>
                                </tr>';
                    }

                    mysqli_close($conexion); 

                ?>
                               
            </tbody>
        </table>
        
    </body>
</html>




