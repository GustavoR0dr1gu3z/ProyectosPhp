<?php

include("conexion.php");
    if(isset($_POST['add_paciente'])){
        $nombre = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
        $apellido_paterno = mysqli_real_escape_string($con,(strip_tags($_POST["apellido_paterno"],ENT_QUOTES)));
        $apellido_materno= mysqli_real_escape_string($con,(strip_tags($_POST["apellido_materno"],ENT_QUOTES)));
        $fecha_nacimiento= mysqli_real_escape_string($con,(strip_tags($_POST["fecha_nacimiento"],ENT_QUOTES)));
        $curp= mysqli_real_escape_string($con,(strip_tags($_POST["curp"],ENT_QUOTES)));
        $telefono= mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
        $direccion= mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
        
        $values = "(NULL, '".$nombre."', '".$apellido_paterno."', '".$apellido_materno."', '".$fecha_nacimiento."', '".$curp."', '".$telefono."', '".$direccion."');";
        $query =" INSERT INTO `paciente` (`id_paciente`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_nacimiento`, `curp`, `telefono`, `direccion`) VALUES".$values;
        $insert = mysqli_query($con,$query);
        if($insert){
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
        }else{
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos NO han sido guardados</div>';
        }
    }
    if(isset($_POST['add_cliente'])){
        //rfc = mysqli_real_escape_string($con,$_POST[""]);
        $rfc = mysqli_real_escape_string($con,$_POST["rfc"]);
        $razon_social = mysqli_real_escape_string($con,$_POST["razon_social"]);
        $nombre = mysqli_real_escape_string($con,$_POST["nombre"]);
        $apellido_paterno = mysqli_real_escape_string($con,$_POST["apellido_paterno"]);
        $apellido_materno = mysqli_real_escape_string($con,$_POST["apellido_materno"]);
        $tipo_persona = mysqli_real_escape_string($con,$_POST["tipo_persona"]);
        $numero = mysqli_real_escape_string($con,$_POST["numero"]);
        $calle = mysqli_real_escape_string($con,$_POST["calle"]);
        $colonia = mysqli_real_escape_string($con,$_POST["colonia"]);
        $municipio = mysqli_real_escape_string($con,$_POST["municipio"]);
        $estado = mysqli_real_escape_string($con,$_POST["estado"]);
        $C_P = mysqli_real_escape_string($con,$_POST["C_P"]);
        $telefono = mysqli_real_escape_string($con,$_POST["telefono"]);
        $correo = mysqli_real_escape_string($con,$_POST["correo"]);
        
        $values = "(NULL, '". $rfc ."', '". $razon_social ."', '". $nombre."', '".$apellido_paterno ."', '".$apellido_materno ."', '".$tipo_persona."', '".$numero."', '".$calle."', '". $colonia."', '".$municipio."', '".$estado."', '".$C_P."', '".$telefono."', '".$correo."');";    
        $query ="INSERT INTO `cliente` (`id_cliente`, `rfc`, `razon_social`, `nombre`, `apellido_paterno`, `apellido_materno`, `tipo_persona`, `numero`, `calle`, `colonia`, `municipio`, `estado`, `C_P`, `telefono`, `correo`) VALUES ".$values;
        $insert = mysqli_query($con,$query);
        if($insert){
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
        }else{
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos NO han sido guardados</div>';
        }

    }
    if(isset($_POST['add_medico'])){
        //rfc = mysqli_real_escape_string($con,$_POST[""]);
        $nombre = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
        $apellido_paterno = mysqli_real_escape_string($con,(strip_tags($_POST["apellido_paterno"],ENT_QUOTES)));
        $apellido_materno= mysqli_real_escape_string($con,(strip_tags($_POST["apellido_materno"],ENT_QUOTES)));
        $fecha_nacimiento= mysqli_real_escape_string($con,(strip_tags($_POST["fecha_nacimiento"],ENT_QUOTES)));
        $curp= mysqli_real_escape_string($con,(strip_tags($_POST["curp"],ENT_QUOTES)));
        $telefono= mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
        $direccion= mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
        $cedula_profecional= mysqli_real_escape_string($con,(strip_tags($_POST["cedula_profecional"],ENT_QUOTES)));
        $especialidad= mysqli_real_escape_string($con,(strip_tags($_POST["especialidad"],ENT_QUOTES)));

        //"(NULL, 'qaz', 'wsh', 'jhj', '2019-11-12', 'sadasdn', 'hjsakdm', 'hjkash', 'asdhsj', 'asdjshd');";
        $values = "(NULL, '".$nombre."', '".$apellido_paterno."', '".$apellido_materno."', '".$fecha_nacimiento."', '".$curp."', '".$direccion."', '".$telefono."', '".$cedula_profecional ."', '".$especialidad ."');";
        $query ="INSERT INTO `medico` (`id_medico`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_nacimiento`, `curp`, `direccion`, `telefono`, `cedula_profecional`, `especialidad`) VALUES ".$values;
        $insert = mysqli_query($con,$query);
        if($insert){
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
        }else{
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos NO han sido guardados</div>';
        }
    }

    if(isset($_POST['add_servicio'])){
        //rfc = mysqli_real_escape_string($con,$_POST[""]);
        //$id_servicio = mysqli_real_escape_string($con,$_POST["id_servicio"]);
        $nombre = mysqli_real_escape_string($con,$_POST["nombre"]);
        $costo = mysqli_real_escape_string($con,$_POST["costo"]);
        
        //INSERT INTO `servicio` (`id_servicio`, `nombre`, `costo`) VALUES (NULL, 'consulta', '20');
        $values = "(NULL, '".$nombre. "', '". $costo."');";
        $query ="INSERT INTO `servicio` (`id_servicio`, `nombre`, `costo`) VALUES ".$values;
        $insert = mysqli_query($con,$query);
        if($insert){
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
        }else{
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos NO han sido guardados</div>';
        }

    }
    /**  * */
    if(isset($_POST['add_habitacion'])){

    }
    /**  * */
    if(isset($_POST['add_descripcion_servicio'])){
        //$id_descripcion = mysqli_real_escape_string($con,$_POST["id_descripcion"]);
        $id_servicio= mysqli_real_escape_string($con,$_POST["id_servicio"]);
        $cantidad= mysqli_real_escape_string($con,$_POST["cantidad"]);
        
        //INSERT INTO `descripcion_servicio` (`id_descripcion`, `id_servicio`, `cantidad`, `id_habitacion`) VALUES (NULL, '1', '2', NULL);
        $values = "(NULL, '".$id_servicio."', '".$cantidad."', NULL);";
        $query ="INSERT INTO `descripcion_servicio` (`id_descripcion`, `id_servicio`, `cantidad`, `id_habitacion`) VALUES  ".$values;
        $insert = mysqli_query($con,$query);
        if($insert){
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
        }else{
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos NO han sido guardados</div>';
        }

    }
    if(isset($_POST['add_orden_pago'])){
        //$id_orden_pago = mysqli_real_escape_string($con,$_POST["id_orden_pago"]);
        $id_paciente = mysqli_real_escape_string($con,$_POST["id_paciente"]);
        $id_medico = mysqli_real_escape_string($con,$_POST["id_medico"]);
        $id_descripcion = mysqli_real_escape_string($con,$_POST["id_descripcion"]);
        $fecha = mysqli_real_escape_string($con,$_POST["fecha"]);
        $subtotal = mysqli_real_escape_string($con,$_POST["subtotal"]);
        $promocion = mysqli_real_escape_string($con,$_POST["promocion"]);
        $total = mysqli_real_escape_string($con,$_POST["total"]);
        
        //INSERT INTO `orden_pago` (`id_orden_pago`, `id_paciente`, `id_medico`, `id_descripcion`, `fecha`, `subtotal`, `promocion`, `total`) VALUES (NULL, '1', '2', '1', '2019-11-12', '50', '10', '20');
        $values = "(NULL, '".$id_paciente ."', '".$id_medico."', '".$id_descripcion."', '".$fecha."', '".$subtotal."', '".$promocion."', '".$total."');";    
        $query ="INSERT INTO `orden_pago` (`id_orden_pago`, `id_paciente`, `id_medico`, `id_descripcion`, `fecha`, `subtotal`, `promocion`, `total`) VALUES ".$values;
        $insert = mysqli_query($con,$query);
        if($insert){
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
        }else{
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos NO han sido guardados</div>';
        }
    }
    if(isset($_POST['add_fatura'])){
        //$id_factura = mysqli_real_escape_string($con,$_POST["id_factura"]);
        $id_orden_pago = mysqli_real_escape_string($con,$_POST["id_orden_pago"]);
        $id_cliente = mysqli_real_escape_string($con,$_POST["id_cliente"]);
        $iva = mysqli_real_escape_string($con,$_POST["iva"]);
        $importe = mysqli_real_escape_string($con,$_POST["importe"]);
        
        //INSERT INTO `factura` (`id_factura`, `id_orden_pago`, `id_cliente`, `iva`, `importe`) VALUES (NULL, '1', '6', '16', '200');
        $values = "(NULL, '".$id_orden_pago ."', '". $id_cliente."', '". $iva."', '". $importe."');";    
        $query ="INSERT INTO `factura` (`id_factura`, `id_orden_pago`, `id_cliente`, `iva`, `importe`) VALUES ".$values;
        $insert = mysqli_query($con,$query);
        if($insert){
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
        }else{
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos NO han sido guardados</div>';
        }
    }
    


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">HOSPITAL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <?php
            include("add_paciente.php");
            include("add_cliente.php");
            include("add_medico.php");
            include("add_servicio.php");
            include("add_descripcion_servicio.php");
            include("add_orden_pago.php");
            include("add__factura.php");            
        ?>

        <section>
                    <div class="container">
                        <h4>factura</h4>
                        <hr>
                        
                        <div class="col-md-7">
                            <form class="form-horizontal" action="" method="post">  
                                <div class="form-group">
                                        <label class="col-md-4 control-label">orden pago</label>
                                        <div class="col-md-3">
                                        <select name="id_orden_pago" class="form-control">
                                            <?php  
                                                //<td>'.$row['codigo'].'</td>
                                                $sql = mysqli_query($con, "SELECT * FROM  orden_pago");
                                                while($row = mysqli_fetch_assoc($sql)){
                                                    echo "<option value='".$row['id_orden_pago']."'>".$row['id_orden_pago']."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-md-4 control-label">cliente</label>
                                        <div class="col-md-3">
                                        <select name="id_cliente" class="form-control">
                                            <?php  
                                                //<td>'.$row['codigo'].'</td>
                                                $sql = mysqli_query($con, "SELECT * FROM cliente");
                                                while($row = mysqli_fetch_assoc($sql)){
                                                    echo "<option value='".$row['id_cliente']."'>".$row['nombre']."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                                     
                                <div class="form-group">					
                                    <input type="text" name="iva" class="form-control" placeholder="iva" required>
                                </div>                       
                                <div class="form-group">					
                                    <input type="text" name="importe" class="form-control" placeholder="importe" required>
                                </div>                       
                                
                                
                                
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">&nbsp;</label>
                                    <div class="col-sm-6">
                                        <input type="submit" name="add_fatura" class="btn btn-sm btn-primary" value="Guardar datos">
                                        <a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        
                    </div>
                </section>

                

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    </body>
</html>



