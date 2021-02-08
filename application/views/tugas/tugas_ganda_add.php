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
    function ambiljawaban(){
       var a = $('#a').val()
       var b = $('#b').val()
       var c = $('#c').val()
       var d = $('#d').val()
       var jawaban = $('#jawaban').val()
			if(jawaban == 'a'){
				document.getElementById('jawabanfix').value = a					
			}
			else if(jawaban == 'b'){
				document.getElementById('jawabanfix').value = b				
			}
			else if(jawaban == 'c'){
				document.getElementById('jawabanfix').value = c				
			}
			else if(jawaban == 'd'){
				document.getElementById('jawabanfix').value = d				
			}
            ;
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
                                    <label class="control-label col-lg-2">Soal <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[soal]" required>
                                    </div>
                                </div>   
								<div class="form-group">
                                    <label class="control-label col-lg-2">a. <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[a]" id="a" required>
                                    </div>
                                </div>
										
                                <div class="form-group">
                                    <label class="control-label col-lg-2">b. <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[b]" id="b" required>
                                    </div>
                                </div>   
								<div class="form-group">
                                    <label class="control-label col-lg-2">c.<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[c]" id="c" required>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="control-label col-lg-2">d. <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[d]" id="d" required>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="control-label col-lg-2">Jawaban<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
										<select id="jawaban" class="form-control" onchange="ambiljawaban()" required>
											<option>------ Pilih Jawaban ------</option>
											<option value="a">A</option>
											<option value="b">B</option>
											<option value="c">C</option>
											<option value="d">D</option>
										</select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input class="form-control" type="hidden" name="data[jawaban]" id="jawabanfix" required>
                                        <input class="form-control" type="hidden" name="data[judul]" value="<?php echo $id; ?>">
                                        <input class="form-control" type="hidden" name="tipe" value="<?php echo $tipe; ?>">
                                        <button class="btn btn-success waves-effect waves-light" id="simpan" type="submit" onclick="saveForm(); return false;">Simpan</button>
                                        <a href="<?= site_url('tugas/detail/'.$this->encrypt->encode($id, $this->session->userdata('id_user')).'/'.$tipe) ?>" class="btn btn-default waves-effect">Batal</a>
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
