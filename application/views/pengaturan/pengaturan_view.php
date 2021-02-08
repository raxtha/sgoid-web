<script type="text/javascript">
    function fileValidation(){
        var fileInput = document.getElementById('file');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if(!allowedExtensions.exec(filePath)){
            alert('Hanya bisa upload file yang berekstensi .jpeg/.jpg/.png ');
            fileInput.value = '';
            return false;
        }else{
            //Image preview
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }
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
                    <li class="active">Pengaturan</li>
                </ol>
            </div>
        </div>
        <!-- END TITLE -->

        <!-- START MAIN -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pengaturan</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?php
                                $pesanlink = $this->session->flashdata('pesanlink');
                                    if($pesanlink == ""){
                                } else {
                            ?>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Sukses</strong>, <?php echo $pesanlink; ?> 
                            </div>                        
                            <?php   
                                }
                            ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="form">
                            <?php echo form_open($form_aksi, [
                                'id'            => 'commentForm',
                                'method'        => 'post',
                                'class'         => 'cmxform form-horizontal tasi-form',
                                'novalidate'    => 'novalidate',
                                'enctype'       => 'multipart/form-data',
                                ]);
                            ?>  
                            
                            <?php foreach ($data as $d) { ?>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Logo Sekolah</label>
                                    <div class="col-lg-10">
                                        <embed width='500' height='125' src='<?php echo $d->logo_sekolah ?>'>
                                        <div class="fileinput-preview thumbnail" id="imagePreview" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        </div>
                                        <input class="form-control" type="file" id="file" name="logo_sekolah" onchange="fileValidation()">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Nama Sekolah<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="nama_sekolah" value="<?php echo $d->nama_sekolah?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Alamat Sekolah<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="alamat_sekolah" value="<?php echo $d->alamat_sekolah?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Telepon</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="telepon" value="<?php echo $d->telepon?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Registrasi Siswa</label>
                                    <div class="col-lg-10">
                                        <input type="radio" value="Tampilkan" name="registrasi_siswa" required
                                        <?php 
                                            if ($d->registrasi_siswa == 'Tampilkan') {
                                                echo 'checked';
                                            } else{

                                            }
                                        ?>> Tampilkan &nbsp;&nbsp;
                                        <input type="radio" value="Sembunyikan" name="registrasi_siswa" required
                                        <?php 
                                            if ($d->registrasi_siswa == 'Sembunyikan') {
                                                echo 'checked';
                                            } else{

                                            }
                                        ?>> Sembunyikan
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Status Registrasi Siswa</label>
                                    <div class="col-lg-10">
                                        <input type="radio" value="Pending" name="status_reg_siswa" required
                                        <?php 
                                            if ($d->status_reg_siswa == 'Pending') {
                                                echo 'checked';
                                            } else{

                                            }
                                        ?>> Pending &nbsp;&nbsp;
                                        <input type="radio" value="Aktif" name="status_reg_siswa" required
                                        <?php 
                                            if ($d->status_reg_siswa == 'Aktif') {
                                                echo 'checked';
                                            } else{

                                            }
                                        ?>> Aktif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Registrasi Pengajar</label>
                                    <div class="col-lg-10">
                                        <input type="radio" value="Tampilkan" name="registrasi_pengajar" required
                                        <?php 
                                            if ($d->registrasi_pengajar == 'Tampilkan') {
                                                echo 'checked';
                                            } else{

                                            }
                                        ?>> Tampilkan &nbsp;&nbsp;
                                        <input type="radio" value="Sembunyikan" name="registrasi_pengajar" required
                                        <?php 
                                            if ($d->registrasi_pengajar == 'Sembunyikan') {
                                                echo 'checked';
                                            } else{

                                            }
                                        ?>> Sembunyikan
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Status Registrasi Pengajar</label>
                                    <div class="col-lg-10">
                                        <input type="radio" value="Pending" name="status_reg_pengajar" required
                                        <?php 
                                            if ($d->status_reg_pengajar == 'Pending') {
                                                echo 'checked';
                                            } else{

                                            }
                                        ?>> Pending &nbsp;&nbsp;
                                        <input type="radio" value="Aktif" name="status_reg_pengajar" required
                                        <?php 
                                            if ($d->status_reg_pengajar == 'Aktif') {
                                                echo 'checked';
                                            } else{

                                            }
                                        ?>> Aktif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-success waves-effect waves-light" id="simpan" type="submit" onclick="saveForm(); return false;">Simpan</button>
                                        <a href="<?= site_url('pengaturan');?>" class="btn btn-default waves-effect">Batal</a>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php echo form_close(); ?> 
                            </form>
                        </div> 
                    </div>
                            </div>
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