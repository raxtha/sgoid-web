<script type="text/javascript"> 
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
                    <li><a href="<?php echo site_url('home');?>">Home</a></li>
                    <li><a href="<?php echo site_url('pengajar');?>">Pengajar</a></li>
                    <li class="active">Edit</li>
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
                        <div class="form">
                            <?php echo form_open($form_aksi, [
                                'id'            => 'commentForm',
                                'method'        => 'post',
                                'class'         => 'cmxform form-horizontal tasi-form',
                                'novalidate'    => 'novalidate',
                                ]);
                            ?>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">NIP <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[nis]" value="<?php echo $data->nip; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Nama <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="datas[nama]" value="<?php echo $data->nama; ?>">
                                    </div>
                                </div>                                   
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Jenis Kelamin <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
										<input type="radio" value="Laki-laki" name="data[jenis_kelamin]"
                                        <?php 
                                            if ($data->jenis_kelamin == 'Laki-laki') {
                                                echo 'checked';
                                            } else{

                                            }
                                        ?>> Laki - laki &nbsp;&nbsp;
                                        <input type="radio" value="Perempuan" name="data[jenis_kelamin]" required <?php 
                                            if ($data->jenis_kelamin == 'Perempuan') {
                                                echo 'checked';
                                            } else{
                                                
                                            }
                                        ?>> Perempuan
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Tempat Lahir</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[tempat_lahir]" value="<?php echo $data->tempat_lahir; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Tanggal Lahir</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="date" name="data[tanggal_lahir]" value="<?php echo $data->tanggal_lahir; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Alamat</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[alamat]" value="<?php echo $data->alamat; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Foto</label>
                                    <div class="col-lg-10">
                                        <div class="fileinput-preview thumbnail" id="imagePreview" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                        </div>
                                        <input class="form-control" type="file" id="file" name="datas[foto]" onchange="fileValidation()">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Username<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="datas[username]" value="<?php echo $data->username; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Password<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="password" name="datas[password]" value="<?php echo $data->password; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Ulangi Password<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="password" name="datas[password]" value="<?php echo $data->password; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-lg-2">Status</label>
										<div class="col-lg-10">
											<select name="datas[status]" class="form-control">
												<option value="Aktif" <?php if($data->status == "Aktif"){echo "selected";}else{} ?>>Aktif</option>
												<option value="Pending" <?php if($data->status == "Pending"){echo "selected";}else{} ?>>Pending</option>
												<option value="Bloking" <?php if($data->status == "Bloking"){echo "selected";}else{} ?>>Bloking</option>
											</select>
										</div>
                                </div>
                                <div class="form-group">
									<label class="control-label col-lg-2">Opsi</label>
                                    <div class="col-lg-10">
                                    <input type="hidden" name="datas[level]" value="pengajar"> 
                                    <input type="checkbox" name="datas[level]" value="admin"> 
									<font style="color:brown;">Jadikan pengajar admin website</font>
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