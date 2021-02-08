<html>
<head>
<script type="text/javascript" src="<?php echo base_url(); ?>template/highcharts/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>template/highcharts/new_js/highcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>template/highcharts/new_js/highcharts-3d.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>template/highcharts/new_js/grid-light.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>template/highcharts/new_js/exporting.js"></script>
</head>
<body>

<!-- START CONTENT -->
<div class="content">
    <!-- START CONTAINER -->
    <div class="container">

        <!-- START TITLE -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title"><?php echo $judul; ?></h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="<?php echo site_url('home');?>">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- END TITLE -->

        <!-- Kolom Chart Stok Frozen food -->
        <div class="col-lg-12">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading"> 
                    <h3 class="panel-title"></h3> 
                </div> 
                <div class="panel-body"> 
                    <div id="welcome">
						Selamat Datang di E-Learning
					</div>	
                </div> 
            </div>
        </div> <!-- end kolom snack -->
		
    </div> 
    <!-- END CONTAINER -->
</div> 
<!-- END CONTENT -->

</body>
</html>
