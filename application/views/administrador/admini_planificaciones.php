<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                     <li class="">
                        <a href="<?php echo base_url();?>index.php/administrador"><i class="fa fa-fw fa-file"></i> Noticias</a>
                    </li>
                    <li class ="" >
                        <a href="<?php echo base_url();?>index.php/administrador/admin_profesor"><i class="glyphicon glyphicon-th-list"></i> Profesores</a>
                    </li>
                    <li class >
                        <a href="<?php echo base_url();?>index.php/administrador/admin_usuarios"><i class="glyphicon glyphicon-user"></i> Usuarios</a>
                    </li>
                    <li class >
                        <a href="<?php echo base_url();?>index.php/administrador/admin_asignatura"><i class="glyphicon glyphicon-paperclip"></i> Cursos</a>
                    </li>
                    <li class="active" >
                        <a href="<?php echo base_url();?>index.php/administrador/malla_actual"><i class="glyphicon glyphicon-time"></i> Planificaciones</a>
                    </li>
                    <li class>
                        <a href='<?php echo base_url();?>index.php/administrador/malla'><i class="glyphicon glyphicon-time"></i>Planificaciones historicas</a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url();?>index.php/administrador/agregar_noticia"><i class="glyphicon glyphicon-plus"></i> Agregar Noticia</a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url();?>index.php/administrador/plantillas_ad"><i class="glyphicon glyphicon-plus"></i>Administrar Plantillas</a>
                    </li>        
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <?php
                   
                     $consulta = $this->mod_usuarios->consulta_nom();
                     $consulta2= $this->mod_usuarios->consulta_ape();
                     $aux = count($consulta);
                      ?>
                   

                          <div class="form-group">
                        <label for="nombre" class="control-label col-xs-4">Nombre profesor</label>
                        <div class="col-xs-5">
                            <select name = "plan" class="col-xs-12">  
                        <?php $i=0; 

                            for ($i=0; $i <$aux ; $i++) { ?>
                                <option  value="<?php echo $consulta[$i].' '.$consulta2[$i] ?>" > <?php echo $consulta[$i].' '.$consulta2[$i] ?> </option>
                           <?php }

                        ?>  
                             </select> 
                            <span class="help-block"></span>
                        </div>

                          <button class="btn btn-primary col-xs-5 col-xs-offset-4"  type="submit" ><span class="glyphicon glyphicon-log-in"></span> Aceptar</button> 
                    </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!--<script src="<?php echo base_url();?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

</body>

</html>
