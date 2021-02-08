<script type="text/javascript">
	$(document).ready(function(){

	$('#kelas').change(function(){		
			  var kelas = $('#kelas').val();
      $(".matapelajaran").select2({
         ajax: { 
           url: '<?= base_url() ?>materi/select2/' + kelas,
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
                    <li><a href="<?= site_url('materi');?>">Materi</a></li>
                    <li class="active">Tambah Materi Tertulis</li>
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
                                        <input class="form-control" type="text" name="data[judul]" required>
                                    </div>
                                </div>   
								<div class="form-group">
                                    <label class="control-label col-lg-2">Untuk Kelas <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
										<select name="data[kelas]" id="kelas" class="form-control">
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
										<select name="data[matapelajaran]" class="matapelajaran form-control">
										</select>
                                    </div>
                                </div>   
								<div class="form-group">
                                    <label class="control-label col-lg-2">Konten <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
										<textarea id="id_textarea" class="form-control" name="data[konten]"></textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input class="form-control" type="hidden" name="data[tipe]" value="Tertulis">
                                        <input class="form-control" type="hidden" name="data[user]" value="<?php echo $this->session->userdata('id_user'); ?>">
                                        <button class="btn btn-success waves-effect waves-light" id="simpan" type="submit" onclick="saveForm(); return false;">Simpan</button>
                                        <a href="<?= site_url('materi');?>" class="btn btn-default waves-effect">Batal</a>
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
