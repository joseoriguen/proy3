
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
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="css/nifty.min.css" rel="stylesheet">


    <!--Themify Icons [ OPTIONAL ]-->
    <link href="themify-icons/themify-icons.min.css" rel="stylesheet">

        
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="css/pace.min.css" rel="stylesheet">
    <script src="js/pace.min.js"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="js/jquery-2.2.4.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="js/bootstrap.min.js"></script>

    
    <!--Nifty Admin [ RECOMMENDED ]-->
    <script src="js/nifty.min.js"></script>

    <script src="js/jquery.sparkline.min.js"></script>
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
<?php include("vistas/agregar-modal.php"); ?>
    <div id="container" class="effect mainnav-lg">
    <?php include("vistas/modificar-modal.php");?>
    <?php include("vistas/eliminar-modal.php");?>
    <?php include("vistas/agg-tabla-modal.php");?>
        
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">Nifty</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="ti-view-list icon-lg"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->



                        <!--Notification dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="ti-bell icon-lg"></i>
                                <span class="badge badge-header badge-danger"></span>
                            </a>

                            <!--Notification dropdown menu-->
                            <div class="dropdown-menu dropdown-menu-md">
                                <div class="pad-all bord-btm">
                                    <p class="text-semibold text-main mar-no">You have 3 notifications.</p>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">

                                            <!-- Dropdown list-->
                                            <li>
                                                <a href="#">
                                                    <div class="clearfix">
                                                        <p class="pull-left">Progressbar</p>
                                                        <p class="pull-right">70%</p>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div style="width: 70%;" class="progress-bar">
                                                            <span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
									
									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									                <div class="media-left">
									                    <i class="ti-truck icon-lg"></i>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">With Icon</div>
									                    <small class="text-muted">15 minutes ago</small>
									                </div>
									            </a>
									        </li>
									
									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									                <div class="media-left">
									                    <i class="ti-plug icon-lg"></i>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">With Icon</div>
									                    <small class="text-muted">15 minutes ago</small>
									                </div>
									            </a>
									        </li>
									
									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									                <div class="media-left">
									                    
									<span class="icon-wrap icon-circle bg-primary">
									    <i class="ti-layout icon-lg"></i>
									</span>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">Circle Icon</div>
									                    <small class="text-muted">15 minutes ago</small>
									                </div>
									            </a>
									        </li>
									
									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									        <span class="badge badge-success pull-right">90%</span>
									                <div class="media-left">
									                    
									<span class="icon-wrap icon-circle bg-danger">
									    <i class="ti-crown icon-lg"></i>
									</span>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">Circle icon with badge</div>
									                    <small class="text-muted">50 minutes ago</small>
									                </div>
									            </a>
									        </li>
									
									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									                <div class="media-left">
									                    
									<span class="icon-wrap bg-info">
									    <i class="ti-camera icon-lg"></i>
									</span>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">Square Icon</div>
									                    <small class="text-muted">Last Update 8 hours ago</small>
									                </div>
									            </a>
									        </li>
									
									        <!-- Dropdown list-->
									        <li>
									            <a href="#" class="media">
									        <span class="label label-danger pull-right">New</span>
									                <div class="media-left">
									                    
									<span class="icon-wrap bg-purple">
									    <i class="ti-bolt icon-lg"></i>
									</span>
									                </div>
									                <div class="media-body">
									                    <div class="text-nowrap">Square icon with label</div>
									                    <small class="text-muted">Last Update 8 hours ago</small>
									                </div>
									            </a>
									        </li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Dropdown footer-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-dark box-block">
                                        <i class="ti-angle-right pull-right"></i>Show All Notifications
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End notifications dropdown-->



                        <!--Mega dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="mega-dropdown">
                            <a href="#" class="mega-dropdown-toggle">
                                <i class="ti-view-grid icon-lg"></i>
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu">
                                <div class="clearfix">
                                    <div class="col-sm-12 col-md-3">

                                        <!--Mega menu widget-->
                                        <div class="text-center bg-info pad-all">
                                            <h4 class="text-light mar-no">Weekend shopping</h4>
                                            <div class="pad-ver box-inline">
                                                <span class="icon-wrap icon-wrap-lg icon-circle bg-trans-light">
                                                    <i class="ti-shopping-cart-full icon-4x"></i>
                                                </span>
                                            </div>
                                            <p class="pad-btm">
                                                Members get <span class="text-lg text-bold">50%</span> more points. Lorem ipsum dolor sit amet!
                                            </p>
                                            <a href="#" class="btn btn-info">Learn More...</a>
                                        </div>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header">Pages</li>
									        <li><a href="#">Profile</a></li>
									        <li><a href="#">Search Result</a></li>
									        <li><a href="#">FAQ</a></li>
									        <li><a href="#">Sreen Lock</a></li>
									        <li><a href="#" class="disabled">Disabled</a></li>
									        <li class="divider"></li>
									        <li class="dropdown-header">Icons</li>
									        <li><a href="#"><span class="pull-right badge badge-purple">479</span> Font Awesome</a></li>
									        <li><a href="#">Skycons</a></li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header">Mailbox</li>
									        <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
									        <li><a href="#">Read Message</a></li>
									        <li><a href="#">Compose</a></li>
									        <li class="divider"></li>
									        <li class="dropdown-header">Featured</li>
									        <li><a href="#">Smart navigation</a></li>
									        <li><a href="#"><span class="pull-right badge badge-success">6</span>Exclusive plugins</a></li>
									        <li><a href="#">Lot of themes</a></li>
									        <li><a href="#">Transition effects</a></li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Mega menu list-->
                                        <ul class="list-unstyled">
									        <li class="dropdown-header">Components</li>
									        <li><a href="#">Tables</a></li>
									        <li><a href="#">Charts</a></li>
									        <li><a href="#">Forms</a></li>
									        <li class="divider"></li>
                                            <li>
                                                <form role="form" class="form">
                                                    <div class="form-group">
                                                        <label class="dropdown-header" for="demo-megamenu-input">Newsletter</label>
                                                        <input id="demo-megamenu-input" type="email" placeholder="Enter email" class="form-control">
                                                    </div>
                                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End mega dropdown-->

                    </ul>
                    <ul class="nav navbar-top-links pull-right">

                        <!--Language selector-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a class="lang-selector dropdown-toggle" href="#" data-toggle="dropdown">
                                <span class="lang-selected">
                                    <img class="lang-flag" src="img/flags/spain.png" alt="Espa&ntilde;ol">
                                    <span class="lang-id">EN</span>
                                    <span class="lang-name">Espa&ntilde;ol</span>
                                </span>
                            </a>

                            <!--Language selector menu-->
                            <ul class="head-list dropdown-menu">
						        <li>
						            <!--English-->
						            <a href="#" class="active">
						                <img class="lang-flag" src="img/flags/united-kingdom.png" alt="English">
						                <span class="lang-id">ES</span>
						                <span class="lang-name">English</span>
						            </a>
						        </li>
						        <li>
						            <!--France-->
						            <a href="#">
						                <img class="lang-flag" src="img/flags/france.png" alt="France">
						                <span class="lang-id">FR</span>
						                <span class="lang-name">Fran&ccedil;ais</span>
						            </a>
						        </li>
						        <li>
						            <!--Germany-->
						            <a href="#">
						                <img class="lang-flag" src="img/flags/germany.png" alt="Germany">
						                <span class="lang-id">DE</span>
						                <span class="lang-name">Deutsch</span>
						            </a>
						        </li>
						        <li>
						            <!--Italy-->
						            <a href="#">
						                <img class="lang-flag" src="img/flags/italy.png" alt="Italy">
						                <span class="lang-id">IT</span>
						                <span class="lang-name">Italiano</span>
						            </a>
						        </li>
						        <li>
						            <!--Spain-->
						            <a href="#">
						                <img class="lang-flag" src="img/flags/spain.png" alt="Spain">
						                <span class="lang-id">ES</span>
						                <span class="lang-name">Espa&ntilde;ol</span>
						            </a>
						        </li>
                            </ul>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End language selector-->



                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <!-- You may use image instead of an icon.
                                    <!--<img class="img-circle img-user media-object" src="img/av1.png" alt="Profile Picture">-->
                                    <i class="ti-face-smile ic-user"></i>
                                </span>
                                <div class="username hidden-xs">Jose Origuen</div>
                            </a>


                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">

                                <!-- Dropdown heading  -->
                                <div class="pad-all bord-btm">
                                    <p class="text-main mar-btm"><span class="text-bold">750GB</span> of 1,000GB Used</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" style="width: 70%;">
                                            <span class="sr-only">70%</span>
                                        </div>
                                    </div>
                                </div>


                                <!-- User dropdown menu -->
                                <ul class="head-list">
                                    <li>
                                        <a href="#">
                                            <i class="ti-user icon-fw icon-lg"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge badge-danger pull-right">9</span>
                                            <i class="ti-email icon-fw icon-lg"></i> Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-success pull-right">New</span>
                                            <i class="ti-settings icon-fw icon-lg"></i> Settings
                                        </a>
                                    </li>
                                </ul>

                                <!-- Dropdown footer -->
                                <div class="pad-all text-right">
                                    <a href="pages-login.html" class="btn btn-primary">
                                        <i class="ti-unlock icon-fw"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->

                        <li>
                            <a href="#" class="aside-toggle navbar-aside-icon">
                                <i class="pci-ver-dots"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
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
            
        <script src="js/misfunciones.js"></script>
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
            <nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap">
                                        <div class="pad-btm">
                                            <span class="label label-success pull-right">New</span>
                                            <img class="img-circle img-sm img-border" src="img/profile-photos/1.png" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">Jose Origuen</p>
                                            <span class="mnp-desc">jose.origuen@themeon.net</span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="ti-medall icon-lg icon-fw"></i> Link 1
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="ti-paint-roller icon-lg icon-fw"></i> Link 2
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="ti-heart icon-lg icon-fw"></i> Link 3
                                        </a>
                                    </div>
                                </div>


                                <!--Shortcut buttons-->
                                <!--================================-->
                             <!--   <div id="mainnav-shortcut">
                                    <ul class="list-unstyled">
                                        <li class="col-xs-4" data-content="Shortcut 1">
                                            <a class="shortcut-grid" href="#">
                                                <i class="ti-gallery"></i>
                                            </a>
                                        </li>
                                        <li class="col-xs-4" data-content="Shortcut 2">
                                            <a class="shortcut-grid" href="#">
                                                <i class="ti-headphone"></i>
                                            </a>
                                        </li>
                                        <li class="col-xs-4" data-content="Shortcut 3">
                                            <a class="shortcut-grid" href="#">
                                                <i class="ti-pin-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
 -->                               
                                <!--================================-->
                                <!--End shortcut buttons-->

                                <ul id="mainnav-menu" class="list-group">
						
						            <!--Category name-->
					
						
						            <li class="list-divider"></li>
						
						            <!--Category name-->
						            <li class="list-header">Menu Principal</li>
						
						            <!--Menu list item-->
						            <li class="active-sub">
						                <a href="#">
						                    <i class="ti-user"></i>
						                    <span class="menu-title">Contactos</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse in">
						                    <li><a href="index.php" >Listar</a></li>
                                        
                                            <li><a href="#" data-toggle="modal" data-target="#dataRegister">Agregar Nuevo</a></li>
											
											
						                </ul>
						            </li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="ti-wallet"></i>
						                    <span class="menu-title">
												Tablas	</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="#" data-toggle="modal" data-target="#dataRegTable">Crear Tabla</a></li>
																				
						                </ul>
						            </li>
						
						            
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="ti-bar-chart"></i>
						                    <span class="menu-title">
												Reportes
											</span>
                                            <i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="graficos.php">Grafico 1</a></li>
											
						                </ul>
						            </li>
						
						            <li class="list-divider"></li>
						
						           
                                    

                                </ul>


                            

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->
            
            <!--ASIDE-->
            <!--===================================================-->
            <aside id="aside-container">
                <div id="aside">
                    <div class="nano">
                        <div class="nano-content">
                            
                            <!--Nav tabs-->
                            <!--================================-->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#demo-asd-tab-1" data-toggle="tab">
                                        <i class="ti-comments"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-2" data-toggle="tab">
                                        <i class="ti-info-alt"></i>
                                        Reports
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-3" data-toggle="tab">
                                        <i class="ti-settings"></i>
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            <!--================================-->
                            <!--End nav tabs-->



                            <!-- Tabs Content -->
                            <!--================================-->
                            <div class="tab-content">

                                <!--First tab-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                    <p class="pad-all text-lg">First tab</p>
                                    <div class="pad-hor">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                        ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                        velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                        et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                    </div>
                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--End first tab-->


                                <!--Second tab-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-2">
                                    <p class="pad-all text-lg">Second tab</p>
                                    <div class="pad-hor">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                        ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                        velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                        et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                    </div>
                                </div>
                                <!--End second tab-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                                <!--Third tab-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-3">
                                    <p class="pad-all text-lg">Third tab</p>
                                    <div class="pad-hor">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                        ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                        velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                        et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                    </div>
                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!--===================================================-->
            <!--END ASIDE-->

        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pull-right">
                You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
            </div>



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
                14GB of <strong>512GB</strong> Free.
            </div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2016 Your Company</p>



        </footer>
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

