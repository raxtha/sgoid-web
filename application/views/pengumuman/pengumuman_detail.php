<script type="text/javascript"> 
</script>

<!-- START CONTENT -->
<div class="content">
    <!-- START CONTAINER -->
    <div class="container">

        <!-- START TITLE -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title"><?php echo $data->judul; ?></h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="<?= site_url('home');?>">Home</a></li>
                    <li><a href="<?= site_url('pengumuman');?>">Pengumuman</a></li>
                    <li class="active">Detail</li>
                </ol>
            </div>
        </div>
        <!-- END TITLE -->

        <!-- START MAIN -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
<!--                    <div class="panel-heading"><h3 class="panel-title">Form Matapelajaran</h3></div>-->
                    <div class="panel-body">
						<?php echo $data->konten; ?>
						<div class="pull-right"><i>posted by <?php echo $data->nama; ?><br><?php echo date('d F Y h:i:s', strtotime($data->waktu)); ?></i></div>
                    </div>
                </div> 
            </div> 
        </div> 
        <!-- END MAIN -->

    </div> 
    <!-- END CONTAINER -->
</div> 
<!-- END CONTENT -->
