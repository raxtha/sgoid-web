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
                    <li><a href="<?= site_url('home');?>">Home</a></li>
                    <li><a href="<?= site_url('kelas');?>">Kelas</a></li>
                    <li class="active">Tambah Kelas</li>
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
                                    <label class="control-label col-lg-2">Category <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <select class="form-control" name="data[category]" required>
											<option value="KELAS X">KELAS X</option>
											<option value="KELAS XI">KELAS XI</option>
											<option value="KELAS XII">KELAS XII</option>
										</select>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="control-label col-lg-2">Nama Kelas<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[nama]" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-success waves-effect waves-light" id="simpan" type="submit" onclick="saveForm(); return false;">Simpan</button>
                                        <a href="<?= site_url('kelas');?>" class="btn btn-default waves-effect">Batal</a>
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
