<!-- START CONTENT -->
<div class="content">
    <!-- START CONTAINER -->
    <div class="container">

        <!-- START TITLE -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title"><?php echo $judul; ?></h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="<?php echo site_url('login');?>">Login</a></li>
                    <li class="active">Lupa Password</li>
                </ol>
            </div>
        </div>
        <!-- END TITLE -->

        <!-- START MAIN -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
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
                            <?php echo form_open($form_aksi, [
                                'id'            => 'commentForm',
                                'method'        => 'post',
                                'class'         => 'cmxform form-horizontal tasi-form',
                                'novalidate'    => 'novalidate',
                                ]);
                            ?>
								
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Username</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="username" maxlength="50" value="">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Nama</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="nama" maxlength="50" value="">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Kata Kunci</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="kunci" maxlength="30" value="">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-success waves-effect waves-light" type="submit">Simpan</button>
                                        <button class="btn btn-default waves-effect" type="reset"><a href="<?php echo site_url('login'); ?>">Batal</a></button>
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