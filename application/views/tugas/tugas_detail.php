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
                    <li class="active"><?php echo $active; ?></li>
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
                                <strong>Sukses</strong>, <?php echo $pesanlink; ?> 
                            </div>                        
                            <?php   
                                }
                        ?>
								<?php if($this->session->userdata('level') == 'siswa'){ ?>
								<?php } else{ ?>
                                <?php } ?>
								<?php if($this->session->userdata('id_user') == $data->user and $data->kunci == ""){ 
									if($data->tipe == "Ganda"){ ?>
								<a href="<?php echo site_url('tugas/tambahganda/'.$this->encrypt->encode($data->id, $this->session->userdata('id_user')).'/'.$data->tipe); ?>" class="btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-plus"> Tambah Tugas </i></a>
									<?php }else{} ?>									
								<div class="form">
                            <?php echo form_open($form_aksi, [
                                'id'            => 'commentForm',
                                'method'        => 'post',
                                'class'         => 'cmxform form-horizontal tasi-form',
                                'novalidate'    => 'novalidate',
                                'enctype'       => 'multipart/form-data',
                                ]); } else{
									echo "<div class=\"form\">";
								}
                            ?>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Judul <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <label class="form-control"><?php echo $data->judul; ?></label>
                                    </div>
                                </div>   
								<div class="form-group">
                                    <label class="control-label col-lg-2">Untuk Kelas <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <label class="form-control"><?php echo $data->kelas; ?></label>
                                    </div>
                                </div>
										
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Matapelajaran <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <label class="form-control"><?php echo $data->namamatapelajaran; ?></label>
                                    </div>
                                </div>   
								<div class="form-group">
                                    <label class="control-label col-lg-2">Waktu Mulai<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <label class="form-control"><?php echo date('d F Y H:i:s', strtotime($data->waktu_mulai)); ?></label>
                                    </div>
                                </div>

								<div class="form-group">
                                    <label class="control-label col-lg-2">Waktu Akhir<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <label class="form-control"><?php echo date('d F Y H:i:s', strtotime($data->waktu_akhir)); ?></label>
                                    </div>
                                </div>
								<?php if($this->session->userdata('id_user') == $data->user and $data->tipe == "Ganda" and $data->kunci == ""){ ?>
                                <div class="form-group">
                                    <div class="pull-right">
                                        <input class="form-control" type="hidden" name="data[kunci]" value="Y">
                                        <button class="btn btn-success waves-effect waves-light" id="simpan" type="submit" onclick="saveForm(); return false;">Tutup Soal</button>
                                    </div>
                                </div>
								<?php echo form_close(); } else{}?> 
                            </form>
								<?php if($data->tipe == "Ganda"){ 
								$no=1;  foreach($daftar_soal as $soal): ?>
                        <div class="form">

                                <div class="form-group">
                                    <label class="control-label col-lg-12"><?php echo $no; ?>. <?php echo $soal->soal; ?></label>
                                </div>   
								<div class="form-group">
                                    <label class="control-label col-lg-5" style="margin-left:50px;">a. <?php echo $soal->a; ?></label>
                                </div>
										
                                <div class="form-group">
                                    <label class="control-label col-lg-6">b. <?php echo $soal->b; ?></label>
                                </div>   
								<div class="form-group">
                                    <label class="control-label col-lg-5" style="margin-left:50px;">c. <?php echo $soal->c; ?></label>
                                </div>

								<div class="form-group">
                                    <label class="control-label col-lg-6">d. <?php echo $soal->d; ?></label>
                                </div>
                            </form>								
								<?php $no++; endforeach; }else if($data->tipe == "Essay"){ 
								 echo $data->soal; } else { ?>
                                    <div class="form-group">
                                    <label class="control-label col-lg-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;File<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <embed width='600' height='450' src='<?php echo $data->soal; ?>'>
                                    </div>
                                </div>
								<?php } ?>
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
