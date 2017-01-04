<!DOCTYPE html>
<html>
<head>
	<title>para pruebas </title>
	<!--Open Sans Font [ OPTIONAL ] -->
     <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="../css/nifty.min.css" rel="stylesheet">


    <!--Themify Icons [ OPTIONAL ]-->
    <link href="../themify-icons/themify-icons.min.css" rel="stylesheet">

        
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="../css/pace.min.css" rel="stylesheet">
    <script src="../js/pace.min.js"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="../js/jquery-2.2.4.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="../js/bootstrap.min.js"></script>

    
    <!--Nifty Admin [ RECOMMENDED ]-->
    <script src="../js/nifty.min.js"></script>

    <script src="../js/jquery.sparkline.min.js"></script>
    <!--=================================================

</head>
<body>

 <div id="page-content">
                    
					
					<!-- QUICK TIPS -->
					<!-- ==================================================================== -->
					            <div class='col-xs-6'>  
    <h3> Mantencion Consulta Cedentes</h3>
    </div>
        <br>
			<?php 
        require "../modelos/cedentes.php";

        $cedente = new Cedente();
        $array_Cedentes = $cedente->listarCedentes();
        
     ?>		
					
             <div class="panel panel-default ">
                 
             <form>
              <div class="form-group">
              <br><br>
                <label for="cedente">Cedente:</label>
                 <select name="tipocedente">
                    <?php foreach($array_Cedentes as $item): ?>
                    <option value="<?php echo $item['idcedente'];?>"><?php echo $item['nom_cede'];?></option>
                    
                    <?php endforeach;   ?>
                 </select>
           
              </div>
              <div class="form-group" id="DivSel">
                <label for="Tablas">Tablas:</label>
                 <select name="tablasSel" id="tablasSel">
                 <option value="seleccion">Seleccione una Tabla</option> 
                    <option value="personas">Personas</option> 
                    <option value="deudas">Deudas</option> 
                 </select>

              </div>
              <div class="checkbox" id="resTablas">
                    
                
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>        

            </div>
            
 <script src="../js/misfunciones.js"></script>

					        
       

</body>
</html>