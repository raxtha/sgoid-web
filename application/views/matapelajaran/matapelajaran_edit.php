<script type="text/javascript"> 
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
                    <li><a href="<?php echo site_url('home');?>">Home</a></li>
                    <li><a href="<?php echo site_url('matapelajaran');?>">Matapelajaran</a></li>
                    <li class="active">Edit</li>
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
                        <div class="form">
                            <?php echo form_open($form_aksi, [
                                'id'            => 'commentForm',
                                'method'        => 'post',
                                'class'         => 'cmxform form-horizontal tasi-form',
                                'novalidate'    => 'novalidate',
                                ]);
                            ?>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Nama <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[nama]" value="<?php echo $data->nama; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-lg-2">Status</label>
                                    <div class="col-lg-10">
                                    <input type="hidden" name="data[status]" value="bloking"> 
                                    <input type="checkbox" name="data[status]" value="aktif"> 
                                    </div>
                                </div>
								
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-success waves-effect waves-light" type="submit">Simpan</button>
                                        <button class="btn btn-default waves-effect " type="reset" value="Go Back" onclick="history.back(-1)">Batal</button>
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