<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?php echo base_url('');?>template/images/favicon.jpg">

    <title>E-Learning</title>
        
    <!--MAIN CSS -->
    <link href="<?php echo base_url('');?>template/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('');?>template/css/core.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('');?>template/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('');?>template/css/components.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('');?>template/css/pages.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('');?>template/css/menu.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('');?>template/css/responsive.css" rel="stylesheet" type="text/css">

    <script src="<?php echo base_url('');?>template/js/modernizr.min.js"></script>
	<script>
		function tambah() {
		$modal = $('#modal_add').modal('show');
		}
	</script>
</head>

<body>

    <div class="wrapper-page">
        <div class="panel panel-color panel-primary panel-pages">
            <?php foreach ($data as $d) { ?>
            <div class="panel-heading bg-img"> 
                <h3 class="text-center m-t-10 text-white"><strong> E-Learning</strong>
                </h3>
            </div> 
            <?php } ?>
            <div class="panel-body">
                <form class="form-horizontal m-t-20" action="<?php echo site_url('login/cek_validasi');?>" method="post">
                        
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="text" placeholder="Username" name="username" id="username">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="password" placeholder="Password" name="password" id="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">Remember me</label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="checkbox checkbox-primary">
								<a href="<?php echo site_url('profil');?>" class="waves-effect"><span> Lupa Password ?</span></a>
                            </div>
                        </div>
                    </div>
                        
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-danger btn-block waves-effect waves-light" type="submit">L O G I N</button>
                        </div>
                    </div>

                </form> 
            </div>   
        </div>
    </div>

    <script>
        var resizefunc = [];
    </script>

    <!-- MAIN JS -->
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

    <script src="<?php echo base_url('');?>template/js/jquery.app.js"></script>
</body>
</html>