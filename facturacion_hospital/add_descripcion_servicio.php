<section>
            <div class="container">
                <h4>Descripcion_servicio</h4>
                <hr>
                
                <div class="col-md-7">
                    <form class="form-horizontal" action="" method="post">
                        <!--
                        <div class="form-group">					
                            <input type="text" name="" class="form-control" placeholder="" required>
                        </div>
                        -->
                    
                        <div class="form-group">
                                <label class="col-md-4 control-label">Servicios</label>
                                <div class="col-md-3">
                                <select name="id_servicio" class="form-control">
                                    <?php  
                                        //<td>'.$row['codigo'].'</td>
                                        $sql = mysqli_query($con, "SELECT * FROM servicio ORDER BY id_servicio ASC");
                                        while($row = mysqli_fetch_assoc($sql)){
                                            echo "<option value='".$row['id_servicio']."'>".$row['nombre']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">					
                            <input type="number" name="cantidad" class="form-control" placeholder="cantidad" required>
                        </div>                       


                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">&nbsp;</label>
                            <div class="col-sm-6">
                                <input type="submit" name="add_descripcion_servicio" class="btn btn-sm btn-primary" value="Guardar datos">
                                <a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </section>