<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./css/estilos.css">
        <title>formulario de agregado</title>
    </head>
    <body>

        <form action="agregar_productos.php" method="post" enctype="multipart/form-data">
            <table style="margin-top: 12%;">
            
                <thead>
                
                    <tr>
                        <th><button><a href="tabla_productos.php">Volver</a></button></th>
                        <th><label>Imagen</label></th>
                        <th><label>Producto</label></th>
                        <th><label>Ensambladora</label></th>
                        <th><label>Stock</label></th>
                        <th><label>Precio</label></th>
                        <th><button style="font-size: 15px;">Agregar</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="transform: none;"></td>
                        <td style="transform: none;"><input style="width: 80%;" type="file" id="imagen_productos" name="imagen_productos"></td>
                        <td style="transform: none;"><input style="padding: 5px 15px; width: 100%; border-radius: 10px; text-align: center;" type="text" id="producto" name="producto" autocomplete="off"></td>
                        <td style="transform: none;"><input style="padding: 5px 15px; width: 100%; border-radius: 10px; text-align: center;" type="text" id="ensambladora_producto" name="ensambladora_producto" autocomplete="off"></td>
                        <td style="transform: none;"><input style="padding: 5px 15px; width: 100%; border-radius: 10px; text-align: center;" type="number" id="stock_producto" name="stock_producto" autocomplete="off"></td>
                        <td style="transform: none;"><input style="padding: 5px 15px; width: 100%; border-radius: 10px; text-align: center;" type="number" id="precio_producto" name="precio_producto" autocomplete="off"></td>
                    </tr>    
                </tbody>

            </table>
        </form>

    </body>
</html>



