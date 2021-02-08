<script type="text/javascript">
 function checkAll(ele) {
      var checkboxes = document.getElementsByTagName('input');
      if (ele.checked) {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox' ) {
                  checkboxes[i].checked = true;
              }
          }
      } else {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox') {
                  checkboxes[i].checked = false;
              }
          }
      }
  }
function tambah() {
    $modal = $('#modal_add').modal('show');
}
</script><!-- START CONTENT -->
<div class="content">
    <!-- START CONTAINER -->
    <div class="container">

        <!-- START TITLE -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="pull-left page-title"><?php echo $judul; ?></h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="<?php echo site_url('home');?>">Home</a></li>
                    <li><a href="<?php echo site_url('kelas');?>">Kelas</a></li>
                    <li class="active">Atur</li>
                </ol>
            </div>
        </di
        <!-- END TITLE -->

        <!-- START MAIN -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><button class='btn btn-primary mr-5 pull-right mb-10 rounded' onclick='tambah()'>Tambah Matapelajaran</button>
                        <h3 class="panel-title">Pilih mata pelajaran yang akan dimasukkan pada <?php echo $data->nama;?></h3>
                    </div>
                    <div class="panel-body">
                            <?php
                                $pesanlink = $this->session->flashdata('pesanlink');
                                    if($pesanlink == ""){}
									else if($pesanlink == "Gagal"){
                            ?>
							<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Gagal</strong>, <?php echo "Matapelajaran Sudah Digunakan"; ?> 
                            </div>                        
							<?php } else {
                            ?>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Sukses</strong>, <?php echo $pesanlink; ?> 
                            </div>                        
                            <?php   
                                }
                            ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
										<h4>Daftar Matapelajaran : </h4>
								</div><hr>
									<?php foreach($daftar_matapelajaran as $tes): ?>
								<div class="form-group">
									<div class="col-lg-10">
									<label class="control-label">- <?php echo $tes->daftar; ?></label>
                                    </div>
                                        <a href="<?= site_url('kelas/hapus/'.$this->encrypt->encode($tes->kode, $this->session->userdata('id')).'/'.$this->encrypt->encode($tes->id, $this->session->userdata('id'))) ?>"><i class="fa fa-trash"> Delete </i></a>&nbsp;&nbsp;&nbsp;
								</div>
													<?php endforeach;?> 
                                <div class="form-group">
                                        <a href="<?php echo site_url('kelas');?>" class="btn btn-default waves-effect ">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div> 
        <!-- END MAIN -->

   <div class="modal modal-teal fade in" id="modal_add" role="dialog" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Tambah Matapelajaran</h4>
            </div>
            <div class="modal-body">

                    <div class="panel-body">
                        <div class="form">
                            <?php echo form_open($form_aksi, [
                                'id'            => 'commentForm',
                                'method'        => 'post',
                                'class'         => 'cmxform form-horizontal tasi-form',
                                'novalidate'    => 'novalidate',
                                ]);
                            ?>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<div class="col-lg-12">
												<select name="data[matapelajaran]" class="form-control" required="required">
														<option>------ Pilih Matapelajaran ------</option>
													<?php foreach($matapelajaran as $mapel): ?>
														<option value="<?php echo $mapel->id; ?>"><?php echo $mapel->nama; ?></option>
													<?php endforeach;?> 
												</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-12">
											 <input type="hidden" name="data[kelas]" id="kelas" value="<?php echo $data->id; ?>" />
											<button class="btn btn-success waves-effect waves-light" type="submit">Simpan</button>
											<button type="button" class="btn btn-danger rounded" data-dismiss="modal">BATAL</button>
									</div>
								</div>
							</div>
						</div>
                    <?php echo form_close(); ?> 
            </div>
        </div>
    </div>
</div>
</div>
</div>    </div> 
    <!-- END CONTAINER -->
</div> 
<!-- END CONTENT -->

