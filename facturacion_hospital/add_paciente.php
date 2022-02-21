<section>
            <div class="container">
                <h4>paciente</h4>
                <hr>
                
                <div class="col-md-7">
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">					
                            <input type="text" name="nombre" class="form-control" placeholder="nombre" required>
                        </div>
                        <div class="form-group">					
                            <input type="text" name="apellido_paterno" class="form-control" placeholder="apellido_paterno" required>
                        </div>
                        <div class="form-group">					
                            <input type="text" name="apellido_materno" class="form-control" placeholder="apellido_materno" required>
                        </div>
                        <div class="form-group">					
                            <input type="date" name="fecha_nacimiento" class="form-control" placeholder="fecha_nacimiento" required>
                        </div>
                        <div class="form-group">					
                            <input type="text" name="curp" class="form-control" placeholder="curp" required>
                        </div>
                        <div class="form-group">					
                            <input type="text" name="telefono" class="form-control" placeholder="telefono" required>
                        </div>
                        <div class="form-group">					
                            <input type="text" name="direccion" class="form-control" placeholder="direccion" required>
                        </div>              
                    <!--
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Estado</label>
                            <div class="col-sm-3">
                                <select name="estado" class="form-control">
                                    <option value=""> ----- </option>
                                <option value="1">Fijo</option>
                                    <option value="2">Contratado</option>
                                    
                                    <option value="3">Outsourcing</option>
                                </select>
                            </div>
                        </div>
                        -->
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">&nbsp;</label>
                            <div class="col-sm-6">
                                <input type="submit" name="add_paciente" class="btn btn-sm btn-primary" value="Guardar datos">
                                <a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </section>
