<script type="text/javascript"> 
    function ambilnip(){
            var nip = parseInt($('#nip').val())
            nip =  isNaN(parseInt(nip)) ? 0 : parseInt(nip)

            var user = nip;
            document.getElementById('user').value = user + "pengajar";
            var user1 = nip;
            document.getElementById('user1').value = user1 + "pengajar";
    }
	function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
    function saveForm(){  
		function proses(){
		  var harga=document.getElementById("nip").value;
		  document.getElementById("harga").value=harga;
		 }	

        if(document.getElementById('nama').value == ''){  
            alert('Nama tidak boleh kosong');  
            document.getElementById('nama').focus();  
            return false;  
        }  

        var passworda = $('#passworda').val();
        var passwordb = $('#passwordb').val();
        if (passworda != passwordb) {
            alert('password tidak sama');
            $('#passwordb').focus();
            return false;
        }
        document.getElementById('commentForm').submit();  
    }
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
                    <li><a href="<?= site_url('home');?>">Home</a></li>
                    <li class="active">Tambah Pengajar</li>
                </ol>
            </div>
        </div>
        <!-- END TITLE -->

        <!-- START MAIN -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
<!--                    <div class="panel-heading"><h3 class="panel-title">Form Pengajar</h3></div>-->
                    <div class="panel-body">
						<?php
                                $pesanlink = $this->session->flashdata('pesanlink');
                                    if($pesanlink == ""){
                                } else {
                            ?>
                            <div class="alert alert-danger alert-dismissable">
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
                                'enctype'       => 'multipart/form-data',
                                ]);
                            ?>

								<div class="form-group">
                                    <label class="control-label col-lg-2">NIP <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="numeric" name="data[nip]" id="nip" onkeypress="return hanyaAngka(event)" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Nama <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="nama" id="nama" required>
                                    </div>
                                </div>   
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Jenis Kelamin <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input type="radio" value="Laki-laki" name="data[jenis_kelamin]" required> Laki - laki &nbsp;&nbsp;
                                        <input type="radio" value="Perempuan" name="data[jenis_kelamin]" required> Perempuan
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Tempat Lahir</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[tempat_lahir]">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Tanggal Lahir</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="date" name="data[tanggal_lahir]">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Alamat</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[alamat]">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Foto</label>
                                    <div class="col-lg-10">
                                        <div class="fileinput-preview thumbnail" id="imagePreview" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        </div>
                                        <input class="form-control" type="file" id="file" name="foto" onchange="fileValidation()">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Username<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="username" maxlength="50" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Password<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="password" id="passworda" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Ulangi Password<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="password" id="passwordb" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-lg-2">Opsi</label>
                                    <div class="col-lg-10">
                                    <input type="hidden" name="level" value="pengajar"> 
                                    <input type="checkbox" name="level" value="admin"> 
									<font style="color:brown;">Jadikan pengajar admin website</font>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
										<input type="hidden" name="status" value="<?php echo $pengaturan->status_reg_pengajar; ?>">
                                        <button class="btn btn-success waves-effect waves-light" id="simpan" type="submit" onclick="saveForm(); return false;">Simpan</button>
                                        <a href="<?= site_url('pengajar');?>" class="btn btn-default waves-effect">Batal</a>
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
