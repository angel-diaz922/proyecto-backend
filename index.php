<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
        <link rel="stylesheet" type="text/css" href="proyecto/css/estilos.css">
        <title>productos</title>
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
                <a href="proyecto/login.html"><i class="las la-user">Ingresar</i></a>
                <a href="#"><i class="las la-shopping-cart"></i></a>
            </div>
        </header>
        
        <div>
            <h1 class="title_products">Elegí tu Placa de Video</h1>
            <select class="order">
                <option>Todos</option>
                <option>Ofertas</option>
                <option>Mayor precio</option>
                <option>Menor precio</option>
            </select>
        </div>
        
        <div class="container">
            
            <div class="contenido_menu">
        
                <ul>Nvidia
                    <li><a href="#">RTX 3050 6GB</a></li>
                    <li><a href="#">RTX 4060 Ti 8GB</a></li>
                    <li><a href="#">RTX 4070 SUPER 12GB</a></li>
                </ul>
                <ul>Amd
                    <li><a href="#">RX 550 2GB</a></li>
                    <li><a href="#">RX 6600 8GB</a></li>
                </ul>
                <ul>Marca
                    <li><a href="#">Asus</a></li>
                    <li><a href="#">Asrock</a></li>
                    <li><a href="#">Gigabyte</a></li>
                    <li><a href="#">MSI</a></li>
                </ul>

            </div>

            <div class="contenido_product">
                
                <?php

                    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "productos_backend");

                    $query = "SELECT * FROM productos";
                    $resultado = mysqli_query($conexion, $query);

                    while($unaFila = mysqli_fetch_assoc($resultado)) {
                        echo'<div class="product">
                                <figure>
                                    <img src="'.$unaFila["imagen_productos"].'">
                                </figure>
                                <h3>Placa de Video '.$unaFila["producto"].', '.$unaFila["ensambladora_producto"].'</h3>
                                <strong class="price"> '.$unaFila["precio_producto"].'</strong>
                                <button class="btn_añadir">Añadir al carrito</button>
                                <button class="btn_añadir">VER MAS</button>
                            </div>';

                    }

                    mysqli_close($conexion); 

                ?>

            </div>

        </div>
    </body>
</html>