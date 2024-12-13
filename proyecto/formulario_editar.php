<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/estilos.css">
        <title>formulario de editado</title>
    </head>
    <body>
        
        <?php 

            $producto = array();

            if(isset($_GET["id"])) {

                $id = $_GET["id"];
                
                if(!empty($id)) {
                    
                    $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "productos_backend");

                    $query = "SELECT * FROM productos WHERE id_producto = ".$id;
                    $resultado = mysqli_query($conexion, $query);

                    $producto = mysqli_fetch_assoc($resultado);

                    mysqli_close($conexion);
                }
            }
        ?>

        <form action="editar_productos.php" method="post" enctype="multipart/form-data"> 
            <table style="margin-top: 12%;">

                <thead>
                    <tr>
                        <th><button><a href="tabla_productos.php">Volver</a></button></th>
                        <th><label>Imagen</label></th>
                        <th><label>Producto</label></th>
                        <th><label>Ensambladora</label></th>
                        <th><label>Stock</label></th>
                        <th><label>Precio</label></th>
                        <th><button style="font-size: 15px;">Editar</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <input type="hidden" id="id_producto" name="id_producto" value="<?php echo ((isset($producto["id_producto"])) ? ($producto["id_producto"]) : ("")) ?>">
                        <td style="transform: none;"></td>
                        <td style="transform: none;">
                            <img style="max-width: 50px;" class="imagen-preview" src="<?php echo ((isset($producto["imagen_productos"])) ? ($producto["imagen_productos"]) : ("")) ?>">
                            <input style="width: 80%;" type="file" id="imagen_productos" name="imagen_productos">
                        </td>
                        <td style="transform: none;"><input style="padding: 5px 15px; width: 100%; border-radius: 10px; text-align: center;" type="text" value="<?php echo ((isset($producto["producto"])) ? ($producto["producto"]) : ("")) ?>" id="producto" name="producto" autocomplete="off"></td>
                        <td style="transform: none;"><input style="padding: 5px 15px; width: 100%; border-radius: 10px; text-align: center;" type="text" value="<?php echo ((isset($producto["ensambladora_producto"])) ? ($producto["ensambladora_producto"]) : ("")) ?>" id="ensambladora_producto" name="ensambladora_producto" autocomplete="off"></td>
                        <td style="transform: none;"><input style="padding: 5px 15px; width: 100%; border-radius: 10px; text-align: center;" type="number" value="<?php echo ((isset($producto["stock_producto"])) ? ($producto["stock_producto"]) : ("")) ?>" id="stock_producto" name="stock_producto" autocomplete="off"></td>
                        <td style="transform: none;"><input style="padding: 5px 15px; width: 100%; border-radius: 10px; text-align: center;" type="number" value="<?php echo ((isset($producto["precio_producto"])) ? ($producto["precio_producto"]) : ("")) ?>" id="precio_producto" name="precio_producto" autocomplete="off"></td>
                    </tr>
                </tbody>
                    
            </table>
        </form>

    </body>
</html>

