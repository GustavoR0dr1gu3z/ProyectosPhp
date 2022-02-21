<section>
            <div class="container">
                <h4>orden_pago</h4>
                <hr>
                
                <div class="col-md-7">
                    <form class="form-horizontal" action="" method="post">  
                        <div class="form-group">
                                <label class="col-md-4 control-label">paciente</label>
                                <div class="col-md-3">
                                <select name="id_paciente" class="form-control">
                                    <?php  
                                        //<td>'.$row['codigo'].'</td>
                                        $sql = mysqli_query($con, "SELECT * FROM  paciente");
                                        while($row = mysqli_fetch_assoc($sql)){
                                            echo "<option value='".$row['id_paciente']."'>".$row['nombre']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-4 control-label">medico</label>
                                <div class="col-md-3">
                                <select name="id_medico" class="form-control">
                                    <?php  
                                        //<td>'.$row['codigo'].'</td>
                                        $sql = mysqli_query($con, "SELECT * FROM medico");
                                        while($row = mysqli_fetch_assoc($sql)){
                                            echo "<option value='".$row['id_medico']."'>".$row['nombre']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                                <label class="col-md-4 control-label">descripcion servicio</label>
                                <div class="col-md-3">
                                <select name="id_descripcion" class="form-control">
                                    <?php  
                                        //<td>'.$row['codigo'].'</td>
                                        $sql = mysqli_query($con, "SELECT * FROM descripcion_servicio");
                                        while($row = mysqli_fetch_assoc($sql)){
                                            echo "<option value='".$row['id_descripcion']."'>".$row['cantidad']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">					
                            <input type="date" name="fecha" class="form-control" placeholder="" required>
                        </div>                       
                        <div class="form-group">					
                            <input type="text" name="subtotal" class="form-control" placeholder="subtotal" required>
                        </div>                       
                        <div class="form-group">					
                            <input type="text" name="promocion" class="form-control" placeholder="promocion" required>
                        </div>                       
                        <div class="form-group">					
                            <input type="text" name="total" class="form-control" placeholder="total" required>
                        </div>                       
                        
                        
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">&nbsp;</label>
                            <div class="col-sm-6">
                                <input type="submit" name="add_orden_pago" class="btn btn-sm btn-primary" value="Guardar datos">
                                <a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>
                    
                </div>
                
            </div>
        </section>
