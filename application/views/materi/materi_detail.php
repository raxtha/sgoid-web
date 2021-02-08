<script type="text/javascript">
    $( document ).ready(function() {

        var tipe = "<?php echo $data->tipe; ?>";

          if (tipe == "Tertulis") {
            $("#materitulis").show();
            $("#materifile").hide();
          } else {
            $("#materifile").show();
            $("#materitulis").hide();
          }

    });
</script>

<!-- START CONTENT -->
<div class="content">
    <!-- START CONTAINER -->
    <div class="container">

        <!-- START TITLE -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title"><?php echo $judul; ?></h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="<?= site_url('home');?>">Home</a></li>
                    <li class="active">Detail Materi</li>
                </ol>
            </div>
        </div>
        <!-- END TITLE -->

        <!-- START MAIN -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Materi Tertulis</h3></div>
                    <div class="panel-body">
                        <?php
                                $pesanlink = $this->session->flashdata('pesanlink');
                                    if($pesanlink == ""){
                                } else {
                            ?>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Gagal</strong>, <?php echo $pesanlink; ?> 
                            </div>                        
                            <?php   
                                }
                        ?>
                        <div class="form">
                            <?php echo form_open($formdetail, [
                                'id'            => 'commentForm',
                                'method'        => 'post',
                                'class'         => 'cmxform form-horizontal tasi-form',
                                'novalidate'    => 'novalidate',
                                'enctype'       => 'multipart/form-data',
                                ]);
                            ?>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Judul <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <label><?php echo $data->judul; ?></label>
                                    </div>
                                </div>   

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Mata Pelajaran <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <label><?php echo $data->mapel; ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Untuk Kelas <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <label><?php echo $data->kelas; ?></label>
                                    </div>
                                </div>

                                <div class="form-group" id="materitulis">
                                    <label class="control-label col-lg-2">Konten <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <?php echo $data->konten; ?>
                                    </div>
                                </div>

                                <div class="form-group" id="materifile">
                                    <label class="control-label col-lg-2">File <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <embed width='600' height='450' src='<?php echo $data->konten ?>' >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <a href="<?= site_url('materi');?>" class="btn btn-danger waves-effect">Kembali</a>
                                    </div>
                                </div>
                            <?php echo form_close(); ?> 
                            </form>
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
        <!-- END MAIN -->

    </div> 
    <!-- END CONTAINER -->
</div> 
<!-- END CONTENT -->
