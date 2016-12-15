<!-- Sidebar
 Menu Items - These collapse to the responsive navigation menu on small screens -->

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                     <li class="">
                        <a href="<?php echo base_url();?>index.php/administrador"><i class="fa fa-fw fa-file"></i> Noticias</a>
                    </li>
                    <li class ="" >
                        <a href="<?php echo base_url();?>index.php/administrador/admin_planificaciones_com"><i class="glyphicon glyphicon-th-list"></i> Planificaciones globales</a>
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
                   
                     $consulta = $this->Mod_usuarios->consulta_nom();
                     $consulta2= $this->Mod_usuarios->consulta_ape();
                     $consulta3= $this->Mod_usuarios->consulta_rut();
                     $aux = count($consulta);
                      ?>
                   

                        <form action= <?php echo base_url().'index.php/administrador/agregar_planificacion';?> method="post">
                        <div class="col-xs-12">
                            <label class="col-xs-2">Ramo</label>
                            <input class="col-xs-2" type="text" name="ramo" readonly value=<?php echo $_GET['cod_asig'];?> >
                        </div>
                        
                        <div class="col-xs-12">
                                <label for="nombre" class="control-label col-xs-2">Semestre</label>
                                <select name="semestre" class="col-xs-2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                              </select>
                        </div>

                        <div class="col-xs-12">
                             <label for="nombre" class="control-label col-xs-2">Año</label>
                             <input type="Text" name="fecha" class="col-xs-2" value=<?php echo date("Y");?> readonly >
                        </div>

                        
                        <div class="col-xs-12">
                            <label for="nombre" class="control-label col-xs-2">Nombre profesor</label>
                            <select name = "profesor" class="col-xs-2">  
                            <option><?php echo '';?></option>
                             <?php $i=0; 

                            for ($i=0; $i <$aux ; $i++) { ?>
                                <option  value="<?php echo $consulta3[$i]?>" > <?php echo $consulta[$i].' '.$consulta2[$i] ?> </option>
                            <?php }

                             ?>  
                             </select>                    
                                                   
                        </div>
                         <div class="col-xs-12">
                            <label for="nombre" class="control-label col-xs-2">Nombre profesor 2</label>
                            <select name = "profesor_dos" class="col-xs-2">  
                            <option><?php echo '';?></option>
                             <?php $i=0; 

                            for ($i=0; $i <$aux ; $i++) { ?>
                                <option  value="<?php echo $consulta3[$i]?>" > <?php echo $consulta[$i].' '.$consulta2[$i] ?> </option>
                            <?php }

                             ?>  
                             </select>  
                             <label for="nombre" class="control-label col-xs-2">(Opcional)</label>                  
                                                   
                        </div>
                        <div id="campos">
                        </div>                        
                        <button class="btn btn-primary col-xs-2 col-xs-offset-2"  type="submit" ><span class="glyphicon glyphicon-log-in"></span> Aceptar</button> 
                    </form>
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
