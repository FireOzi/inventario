<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM producto";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Productos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Nuevo producto</h1>
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="cod_producto" placeholder="cod_producto">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="proveedor" placeholder="proveedor">
                                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="cantidad">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                    <th>cod_producto</th>
                                        <th>nombre</th>
                                        <th>proveedor</th>
                                        <th>cantidad</th>
                                        <th>precio</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['cod_producto']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['proveedor']?></th>
                                                <th><?php  echo $row['cantidad']?></th>
                                                <th><?php  echo $row['precio']?></th>       
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_producto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_producto'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>