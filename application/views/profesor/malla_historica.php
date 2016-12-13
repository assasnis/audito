</div>


<div class="container" id="formulario2">
  <div class="row">
    <h2 align="center"><span class="glyphicon glyphicon-book"></span> Planificaciones Historicas </h2> 
           
    <table class="table">
     <tr>
       <td style="color:black; font-size:200%"colspan="2" align="center">Primer Año</td>

       <td style="color:black; font-size:200%"colspan="2" align="center">Segundo Año</td>

       <td style="color:black; font-size:200%"colspan="2" align="center">Tercer Año</td>

       <td style="color:black; font-size:200%"colspan="2" align="center">Cuarto Año</td>

       <td style="color:black; font-size:200%"colspan="2" align="center">Quinto Año</td>
     </tr> 
     <tr>
       <td style="color:black; font-size:150%"align="center">I</td>
       <td style="color:black; font-size:150%"align="center">II</td>
       <td style="color:black; font-size:150%"align="center">III</td>
       <td style="color:black; font-size:150%"align="center">IV</td>
       <td style="color:black; font-size:150%"align="center">V</td>
       <td style="color:black; font-size:150%"align="center">VI</td>
       <td style="color:black; font-size:150%"align="center">VII</td>
       <td style="color:black; font-size:150%"align="center">VIII</td>
       <td style="color:black; font-size:150%"align="center">XI</td>
       <td style="color:black; font-size:150%"align="center">X</td>
     </tr>                  
     <tr>


      <?php 
      $rut=$_SESSION['cuenta']['user'];

      $query = $this->mod_usuarios->planificacion_histo("au-110",$rut); 
      if($query == TRUE){ ?>
      <th><button  style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-110' " type="button" class="btn btn-default btn-xs btn-block ">Fundamentos</br></br>Contables</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block ">Fundamentos</br></br>Contables</button></th>
      <?php } ?>   

      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-120",$rut); 
      if($query == TRUE){ ?>
      <th><button  style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-120' " type="button" class="btn btn-default btn-xs btn-block ">Practica</br></br>Contable</button></th>   
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block ">Practica</br></br>Contable</button></th>
      <?php } ?>  
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-210",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-210'" type="button" class="btn btn-default btn-xs btn-block">Normativa</br>Contable</br>I</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Normativa</br>Contable</br>I</button></th>
      <?php } ?> 
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-220",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-220'" type="button" class="btn btn-default btn-xs btn-block">Normativa</br>Contable</br>II</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Normativa</br>Contable</br>II</button></th>
      <?php } ?> 
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-310",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-310'" type="button" class="btn btn-default btn-xs btn-block">Estados</br></br>Financieros</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Estados</br></br>Financieros</button></th>
      <?php } ?> 
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-320",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-320'" type="button" class="btn btn-default btn-xs btn-block">Practica</br></br>Temprana</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Practica</br></br>Temprana</button></th>
      <?php } ?> 
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-410",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-410'" type="button" class="btn btn-default btn-xs btn-block">Control</br></br>Interno</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Control</br></br>Interno</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-420",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-420'" type="button" class="btn btn-default btn-xs btn-block">Introduccion </br>a la</br> Auditoria</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Introduccion </br>a la</br> Auditoria</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-510",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-510'" type="button" class="btn btn-default btn-xs btn-block">Auditoria a</br>Estados</br>Financieros</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Auditoria a</br>Estados</br>Financieros</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-520",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-520'" type="button" class="btn btn-default btn-xs btn-block">Auditoria</br>de</br> Gestión</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Auditoria</br>de</br> Gestión</button></th>
      <?php } ?>
    </tr>
    <tr>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-111",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-111'" type="button" class="btn btn-default btn-xs btn-block">Habilidades</br></br>Directivas</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Habilidades</br></br>Directivas</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-121",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;"  onclick="location.href='<?php echo  base_url();?>index.php/administrador/admin_planificacion?cod_asig=au-121'" type="button" class="btn btn-default btn-xs btn-block">Derecho</br></br>Comercial</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Derecho</br></br>Comercial</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-211",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-211'" type="button" class="btn btn-default btn-xs btn-block"></br>Economia</br></br> </button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Economia</br></br> </button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-221",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-221'" type="button" class="btn btn-default btn-xs btn-block"></br>Microeconomia</br></br> </button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Microeconomia</br></br> </button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-311",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-311'" type="button" class="btn btn-default btn-xs btn-block"></br>Macroeconomia</br></br> </button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Macroeconomia</br></br> </button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-321",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-321'" type="button" class="btn btn-default btn-xs btn-block">Codigo</br></br>Tributario</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Codigo</br></br>Tributario</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-411",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-411'" type="button" class="btn btn-default btn-xs btn-block">Impuesto</br>al Valor</br>Agregado</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Impuesto</br>al Valor</br>Agregado</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-421",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-421'" type="button" class="btn btn-default btn-xs btn-block">Impuesto</br>a las</br>Empresas</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Impuesto</br>a las</br>Empresas</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-511",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-511'" type="button" class="btn btn-default btn-xs btn-block">Impuesto</br>a las</br>Personas</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Impuesto</br>a las</br>Personas</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-521",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-521'" type="button" class="btn btn-default btn-xs btn-block">Auditoria</br></br>Tributaria</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Auditoria</br></br>Tributaria</button></th>
      <?php } ?>
    </tr>
    <tr>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-112",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-112'" type="button" class="btn btn-default btn-xs btn-block">Comportamiento</br></br>Organizacional</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Comportamiento</br></br>Organizacional</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-122",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-122'" type="button" class="btn btn-default btn-xs btn-block"></br>Administracion</br></br></button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Administracion</br></br></button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-212",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-212'" type="button" class="btn btn-default btn-xs btn-block">Desarrollo</br>de Sistemas</br>de Informacion</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Desarrollo</br>de Sistemas</br>de Informacion</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-222",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-222'" type="button" class="btn btn-default btn-xs btn-block">Sistema</br>de</br>Costeo</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Sistema</br>de</br>Costeo</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-312",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-312'" type="button" class="btn btn-default btn-xs btn-block">Contabilidad</br></br>Gerencial</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Contabilidad</br></br>Gerencial</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-322",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-322'" type="button" class="btn btn-default btn-xs btn-block">Administracion</br>de</br>Personal</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Administracion</br>de</br>Personal</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-412",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-412'" type="button" class="btn btn-default btn-xs btn-block">Sistemas</br>Informaticos para</br>las Organizaciones</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Sistemas</br>Informaticos para</br>las Organizaciones</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-422",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-422'" type="button" class="btn btn-default btn-xs btn-block">Creacion</br>de</br>Empresas</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Creacion</br>de</br>Empresas</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-512",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-512'" type="button" class="btn btn-default btn-xs btn-block">Auditoria</br></br>Informatica</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Auditoria</br></br>Informatica</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-522",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-522'" type="button" class="btn btn-default btn-xs btn-block">Control</br>de</br>Gestion</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Control</br>de</br>Gestion</button></th>
      <?php } ?>
    </tr>
    <tr>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-113",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-113'" type="button" class="btn btn-default btn-xs btn-block"></br>Matematicas</br></br></button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Matematicas</br></br></button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-123",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-123'" type="button" class="btn btn-default btn-xs btn-block">Metodos</br></br>Decisionales</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Metodos</br></br>Decisionales</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-213",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-213'" type="button" class="btn btn-default btn-xs btn-block"></br>Estadisticas</br></br></button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Estadisticas</br></br></button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-223",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-223'" type="button" class="btn btn-default btn-xs btn-block">Metodos</br>Cuantitativos</br>de Gestión</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Metodos</br>Cuantitativos</br>de Gestión</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-313",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig==au-313'" type="button" class="btn btn-default btn-xs btn-block">Metodología de la</br>Investigacion</br>para la Administracion</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Metodología de la</br>Investigacion</br>para la Administracion</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-323",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig==au-323'" type="button" class="btn btn-default btn-xs btn-block"></br>Marketing</br></br></button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Marketing</br></br></button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-413",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-413'" type="button" class="btn btn-default btn-xs btn-block">Calculo</br>Financiero</br>y Presupuestario</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Calculo</br>Financiero</br>y Presupuestario</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-423",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-423'" type="button" class="btn btn-default btn-xs btn-block">Gestion</br></br>Financiera</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Gestion</br></br>Financiera</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-513",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-513'" type="button" class="btn btn-default btn-xs btn-block">Estrategias</br></br>Financieras</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Estrategias</br></br>Financieras</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-523",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-523'" type="button" class="btn btn-default btn-xs btn-block">Formulacion</br>y Evaluacion</br>de Proyectos</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Formulacion</br>y Evaluacion</br>de Proyectos</button></th>
      <?php } ?>
    </tr>
    <tr>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-114",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-114'" type="button" class="btn btn-default btn-xs btn-block"></br>Ingles I</br></br></button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Ingles I</br></br></button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-124",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-124'" type="button" class="btn btn-default btn-xs btn-block"></br>Ofimatica</br></br></button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Ofimatica</br></br></button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-214",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-214'" type="button" class="btn btn-default btn-xs btn-block"></br>Ingles II</br></br></button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Ingles II</br></br></button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-224",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-224'" type="button" class="btn btn-default btn-xs btn-block"></br>Derecho Laboral</br></br></button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Derecho Laboral</br></br></button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-314",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-314'" type="button" class="btn btn-default btn-xs btn-block">Introduccion</br></br>a la Fe</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Introduccion</br></br>a la Fe</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-324",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-324'" type="button" class="btn btn-default btn-xs btn-block">Etica</br></br>Cristiana</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Etica</br></br>Cristiana</button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-414",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-414'" type="button" class="btn btn-default btn-xs btn-block"></br>Certificacion I</br></br></button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Certificacion I</br></br></button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-424",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-424'" type="button" class="btn btn-default btn-xs btn-block"></br>Certificacion II</br></br></button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Certificacion II</br></br></button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-514",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-514'" type="button" class="btn btn-default btn-xs btn-block"></br>Certificacion III</br></br></button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block"></br>Certificacion III</br></br></button></th>
      <?php } ?>
      <?php 
      $rut=$_SESSION['cuenta']['user'];
      $query = $this->mod_usuarios->planificacion_histo("au-524",$rut); 
      if($query == TRUE){ ?>
      <th><button style="background-color:#2ED5EB;" onclick="location.href='<?php echo  base_url();?>index.php/profesor/editar_planificaciones?cod_asig=au-524'" type="button" class="btn btn-default btn-xs btn-block">Practica</br></br>Final</button></th>
      <?php } 
      else { ?>
      <th><button  type="button" class="btn btn-default btn-xs btn-block">Practica</br></br>Final</button></th>
      <?php } ?>
    </tr>
  </table>
</div>
</div>
      <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>








</body>

</html>
