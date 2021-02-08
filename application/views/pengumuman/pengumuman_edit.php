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
                    <li class="active">Pengumuman</li>
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
                                    <label class="control-label col-lg-2">Judul <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[judul]" value="<?php echo $data->judul ?>" required>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="control-label col-lg-2">Tgl. Tampil <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="date" name="data[tgl_tampil]" required>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="control-label col-lg-2">Tgl. Tutup <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="date" name="data[tgl_tutup]" required>
                                    </div>
                                </div>
								<div class="form-group">
                                    <label class="control-label col-lg-2">Konten <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
										<textarea id="id_textarea" class="form-control" name="data[konten]"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-lg-2">Tampil Disiswa</label>
                                    <div class="col-lg-10">
                                        <input type="radio" value="Y" name="data[tampil_siswa]" required> Ya &nbsp;&nbsp;
                                        <input type="radio" value="T" name="data[tampil_siswa]" required> Tidak
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-lg-2">Tampil Dipengajar</label>
                                    <div class="col-lg-10">
                                        <input type="radio" value="Y" name="data[tampil_pengajar]" required> Ya &nbsp;&nbsp;
                                        <input type="radio" value="T" name="data[tampil_pengajar]" required> Tidak
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input class="form-control" type="hidden" name="data[user]" value="<?php echo $this->session->userdata('id_user'); ?>">
                                        <button class="btn btn-success waves-effect waves-light" id="simpan" type="submit" onclick="saveForm(); return false;">Simpan</button>
                                        <a href="<?= site_url('pengumuman');?>" class="btn btn-default waves-effect">Batal</a>
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
