<script type="text/javascript">
	$(document).ready(function(){

	$('#kelas').change(function(){		
			  var kelas = $('#kelas').val();
      $(".matapelajaran").select2({
         ajax: { 
           url: '<?= base_url() ?>tugas/select2/' + kelas,
           type: "get",
           dataType: 'json',
           delay: 250,
           data: function (params) {
              return {
                searchTerm: params.term // search term
              };
           },
           processResults: function (data) {
              var result = [];

			  $.each(data, function(index, item){
				  result.push({				  
					id:item.id,
					text:item.nama
				});
				});
				return {
                 results: result
              };
           },
           cache: true
         }
     });
	})
 $("#tipe").change(function() {
  var tipe = $('#tipe').val();
  console.log(tipe);
	if(tipe == 'Ganda'){
    $('#Essay').hide();
    $('#File').hide();		
	}else if(tipe == 'Essay'){
    $('#Essay').show();
    $('#File').hide();		
	}else if(tipe == 'File'){
    $('#Essay').hide();
    $('#File').show();		
	}else{
    $('#Essay').hide();
    $('#File').hide();		
	}
	});
	$("#seeAnotherFieldGroup").trigger("change");
});
 
    function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.pdf)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Hanya bisa upload file yang berekstensi .pdf ');
        fileInput.value = '';
        return false;
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
                    <li><a href="<?= site_url('tugas');?>">Tugas</a></li>
                    <li class="active">Tambah Tugas</li>
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
                                'enctype'       => 'multipart/form-data',
                                ]);
                            ?>

                                <div class="form-group">
                                    <label class="control-label col-lg-2">Judul <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="judul" required>
                                    </div>
                                </div>   
								<div class="form-group">
                                    <label class="control-label col-lg-2">Untuk Kelas <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
										<select name="kelas" id="kelas" class="form-control" required>
                                            <option>------ Pilih Kelas ------</option>
										<?php foreach($daftar_kelas as $kelas): ?>
											<option value="<?php echo $kelas->category;?>"><?php echo $kelas->category;?></option>
										<?php endforeach;?>
										</select>
                                    </div>
                                </div>
										
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Matapelajaran <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
										<select name="matapelajaran" class="matapelajaran form-control" required>
										</select>
                                    </div>
                                </div>   
								<div class="form-group">
                                    <label class="control-label col-lg-2">Waktu Mulai<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
										<input type="datetime-local" class="form-control" name="waktu_mulai" required>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="control-label col-lg-2">Waktu Akhir<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
										<input type="datetime-local" class="form-control" name="waktu_akhir" required>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="control-label col-lg-2">Tipe Tugas<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
										<select name="tipe" id="tipe" class="form-control" required>
											<option value="Ganda">Ganda</option>
											<option value="Essay">Essay</option>
											<option value="File">File</option>
										</select>
                                    </div>
                                </div>
								<div id="Essay" hidden>
								<div class="form-group">
                                    <label class="control-label col-lg-2">Soal <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
										<textarea id="id_textarea" class="form-control" name="soal"></textarea>
                                    </div>
                                </div>
                                </div>
								<div id="File" hidden>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">File</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="file" id="file" name="file_soal" onchange="fileValidation()">
										<br>
										<table><td>Ekstensi yang diijinkan hanya <i>.pdf</i>.</table>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-success waves-effect waves-light" id="simpan" type="submit" onclick="saveForm(); return false;">Simpan</button>
                                        <a href="<?= site_url('tugas');?>" class="btn btn-default waves-effect">Batal</a>
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
