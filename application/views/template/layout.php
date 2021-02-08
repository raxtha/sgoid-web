<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url('');?>template/images/favicon.jpg">

        <title>Stargate Online Reborn</title>
        
        <!-- DATATABLES -->
        <link href="<?php echo base_url('');?>template/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('');?>template/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <!-- MODAL-EFFECT -->
        <link href="<?php echo base_url('');?>template/plugins/modal-effect/css/component.css" rel="stylesheet">

        <!-- DATEPICKER -->
        <link href="<?php echo base_url('');?>template/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <!-- TOOGLES -->
        <link href="<?php echo base_url('');?>template/plugins/toggles/toggles.css" rel="stylesheet">
        
        <!-- MORRIS CHART -->
        <link rel="stylesheet" href="<?php echo base_url('');?>template/plugins/morris.js/morris.css">

        <!-- CUSTOM FILES -->
        <link href="<?php echo base_url('');?>template/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('');?>template/css/core.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('');?>template/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('');?>template/css/components.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('');?>template/css/pages.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('');?>template/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('');?>template/css/responsive.css" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url('');?>template/js/modernizr.min.js"></script>

        <link href="<?php echo base_url('');?>template/jqueryui/jquery-ui-1.10.1.custom.css" rel="stylesheet"/>
        <script src="<?php echo base_url('');?>template/jqueryui/jquery-2.0.2.js" type="text/javascript"></script>
        <script src="<?php echo base_url('');?>template/jqueryui/jquery-ui-1.10.1.custom.js" type="text/javascript"></script>

        

</head>


    <body class="fixed-left">

        <!-- ========== Wrapper Start ========== -->
        <div id="wrapper">

            <!-- ========== Top Start ========== -->
            <div class="topbar">
				
                <!-- ========== Logo Start ========== -->
                <div class="topbar-left">
                    <div class="text-center">
							<?php if ($this->session->userdata('logged_in') =='Sudah Login'){ ?>
                        <a href="<?php echo site_url('home');?>" class="logo md md-home"> <!-- <i class="md md-terrain"></i> --> <span> Menu </span></a>
							<?php }else{ ?>
                        <a href="<?php echo site_url('login');?>" class="logo md md-home"> <!-- <i class="md md-terrain"></i> --> <span> Login </span></a>
							<?php } ?>
                    </div>
                </div>
                <!-- ========== Logo End ========== -->

                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
					
                        <div class="">
							<?php if ($this->session->userdata('logged_in') =='Sudah Login'){ ?>
							<a href="<?php echo site_url('home');?>" class="logo"> <!-- <i class="md md-terrain"></i> --> <span><img src="<?php echo base_url('');?>template/images/sgo.png" alt="" ></span></a>
							<?php }else{ ?>
							<a href="<?php echo site_url('login');?>" class="logo"> <!-- <i class="md md-terrain"></i> --> <span> <img src="<?php echo base_url('');?>template/images/sgo.png" alt="" ></span></a>	
							<?php } ?>
                            
							<div class="pull-left">
                                <button class="button-menu-mobile open-left" style="color:black;">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

						  <ul class="nav navbar-nav navbar-right pull-right">
							  <li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="http://sgo.idsosial.net/">Forum</a>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  Guide
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <a class="dropdown-item" href="#">Action</a>
								  <a class="dropdown-item" href="#">Another action</a>
								  <div class="dropdown-divider"></div>
								  <a class="dropdown-item" href="#">Something else here</a>
								</div>
							  </li>
								<li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect"><i class="md md-crop-free"></i></a>
                                </li>
                                <li>
<!--								<div id="sidebar-menu">
									<ul>
										<li class="has_sub">
											<a href="#" class="waves-effect"> <?php echo $this->session->userdata('nama'); ?></a>
											<ul>
												<li>
													<a href="<?php echo site_url('login/logout');?>"><i class="md md-settings-power"></i> Logout</a>
												</li>
												<li>
													ts
												</li>
											</ul>
										</li>
									</ul>
								</div>-->
									<a href="<?php echo site_url('profil/edit/'.$this->encrypt->encode($this->session->userdata('id_user'), $this->session->userdata('id_user')));?>"><?php echo $this->session->userdata('nama'); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== Top End ========== -->


            <!-- ========== Sidebar Start ========== -->
							<?php 
                 $this->load->view('template/sidebar');
 ?>
            <!-- ========== Sidebar End ========== -->

            <!-- ========== Content Start ========== -->
            <div class="content-page">
                
                <?php $this->load->view($main);?>

                <footer class="footer text-center">
                     © Stargate Online Reborn 2021
                </footer>

            </div>
            <!-- ========== Content End ========== -->

        </div>
        <!-- ========== Wrapper End ========== -->

        <script>
            var resizefunc = [];
        </script>
        
        <!-- jQuery  -->
        <script src="<?php echo base_url('');?>template/js/jquery.min.js"></script>
        <script src="<?php echo base_url('');?>template/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('');?>template/js/detect.js"></script>
        <script src="<?php echo base_url('');?>template/js/fastclick.js"></script>
        <script src="<?php echo base_url('');?>template/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url('');?>template/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url('');?>template/js/waves.js"></script>
        <script src="<?php echo base_url('');?>template/js/wow.min.js"></script>
        <script src="<?php echo base_url('');?>template/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url('');?>template/js/jquery.scrollTo.min.js"></script>

        <!-- DATATABLES -->
        <script src="<?php echo base_url('');?>template/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('');?>template/plugins/datatables/dataTables.bootstrap.js"></script>

        <!-- DATATABLE INIT JS -->
        <script src="<?php echo base_url('');?>template/pages/datatables.init.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
            TableManageButtons.init();
        </script>

        <!-- MODAL EFFECT -->
        <script src="<?php echo base_url('');?>template/plugins/modal-effect/js/classie.js"></script>
        <script src="<?php echo base_url('');?>template/plugins/modal-effect/js/modalEffects.js"></script>

        <!-- CK EDITOR -->
		<script type='text/javascript' src='<?php echo base_url(); ?>template/plugins/ckeditor/ckeditor.js'></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>template/select2/js/select2.min.js"></script>        
		<!-- DATEPICKER -->
        <script type="text/javascript" src="<?php echo base_url('');?>template/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
       
        <script>
            jQuery(document).ready(function() {
                // Date Picker
                jQuery('#tgl_from').datepicker();
                jQuery('#tgl_to').datepicker();

                // Form Toggles
                jQuery('.toggle').toggles({on: true});
             });
			var ckeditor = CKEDITOR.replace('id_textarea',{
				height:'600px'});
        </script>

        <!-- TOOGLES-->
        <script src="<?php echo base_url('');?>template/plugins/toggles/toggles.min.js"></script>

        <!-- MORRIS CHART -->
        <script src="<?php echo base_url('');?>template/plugins/morris.js/morris.min.js"></script>
        <script src="<?php echo base_url('');?>template/plugins/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url('');?>template/pages/morris.init.js"></script>

        <script src="<?php echo base_url('');?>template/js/jquery.app.js"></script>
    </body>
</html>