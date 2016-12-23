
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Proyecto | Nifty - Admin Template</title>


    <!--STYLESHEET-->
    <!--=================================================-->

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

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    Detailed information and more samples can be found in the document.

    =================================================-->
        



    
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
<?php include("agregar-modal.php"); ?>
    <div id="container" class="effect mainnav-lg">
    <?php include("modificar-modal.php");?>
    <?php include("eliminar-modal.php");?>
    <?php include("agg-tabla-modal.php");?>
        
        <!--NAVBAR-->
        <!--===================================================-->
        <?php include("navbar.php");?>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                
                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    

                    <!--Searchbox-->
                    <div class="searchbox">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="text-muted" type="button"><i class="ti-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->


                <!--Breadcrumb-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--<ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
                -->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End breadcrumb-->


        

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
					
					<!-- QUICK TIPS -->
					<!-- ==================================================================== -->
					            <div class='col-xs-6'>  
                <h3> Listado de Contactos</h3>
            </div>
					<br>
					
					
            <div class="container-fluid">
             
                
            <div class="row">
                <div class="col-xs-12">
                    <div id="loader" class="text-center"> <img src="loader.gif"></div>
                    <div class="datos_ajax_delete"></div><!-- Datos ajax Final -->
                    <div class="outer_div"></div><!-- Datos ajax Final -->
                </div>
            </div>
        </div>
            
        <script src="../js/misfunciones.js"></script>
        <script>
            $(document).ready(function(){
                load(1);
            });
        </script>

					        
                </div>
                <!--===================================================-->
                <!--End page content-->


            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <?php include("main-menu.php");?>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->
            
            <!--ASIDE-->
            <!--===================================================-->
             <?php include("aside.php");?>
            <!--===================================================-->
            <!--END ASIDE-->

        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        <?php include("footer.php");?>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    
    </body>
</html>

