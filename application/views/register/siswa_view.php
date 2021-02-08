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
                    <li class="active">Siswa</li>
                </ol>
            </div>
        </div>
        <!-- END TITLE -->

        <!-- START MAIN -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

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
                                <?php foreach($daftar_pengaturan as $pengaturan): ?>
								<?php if($pengaturan->registrasi_pengajar == 'Tampilkan'){ ?>
                                <a href="<?php echo site_url('siswa/tambah'); ?>" class="btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-plus"> Tambah Siswa </i></a>
                                <?php } else{ ?>
								<label class="btn btn-danger waves-effect waves-light m-b-5"><i class="fa fa-times"> Registrasi Siswa Ditutup </i></label>	
								<?php } ?>
                                 <?php endforeach;?> 
								<a href="<?php echo site_url('siswa/status/Alumni'); ?>" class="pull-right btn btn-<?php if($status == "Alumni"){echo "success";}else{echo "default";} ?> waves-effect waves-light m-b-5">Alumni</a>
								<a href="<?php echo site_url('siswa/status/Bloking'); ?>" class="pull-right btn btn-<?php if($status == "Bloking"){echo "success";}else{echo "default";} ?> waves-effect waves-light m-b-5">Bloking</a>
                                <a href="<?php echo site_url('siswa/status/Pending'); ?>" class="pull-right btn btn-<?php if($status == "Pending"){echo "success";}else{echo "default";} ?> waves-effect waves-light m-b-5">Pending</a>
                                <a href="<?php echo site_url('siswa/status/Aktif'); ?>" class="pull-right btn btn-<?php if($status == "Aktif"){echo "success";}else{echo "default";} ?> waves-effect waves-light m-b-5">Aktif</a>
								
								<table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Informasi Siswa</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($daftar_siswa as $data): ?>
                                        <tr>
                                            <td class="text-center"><?php echo $data->id; ?></td>
                                            <td><img src="<?php echo $data->foto; ?>" style="float:left;width:50px;height:50px;border-radius:100%;" />
												<b><?php echo $data->nama; ?></b>
												<?php echo " (".$data->nis.")"; ?>
												<label class='btn-info'><font style="text-transform: capitalize;"><?php echo $data->level; ?></font></label><br>
												<b>Alamat :</b> <?php echo $data->alamat; ?>
											</td>
                                            <td class="text-center">
                                                    <a href="<?= site_url('siswa/detail/'.$this->encrypt->encode($data->id, $this->session->userdata('id_user'))) ?>"><i class="fa fa-eye"> Detail </i></a>&nbsp;&nbsp;&nbsp;
                                                    <a href="<?= site_url('siswa/edit/'.$this->encrypt->encode($data->id, $this->session->userdata('id_user'))) ?>"><i class="fa fa-edit"> Ubah Data </i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?> 
                                    </tbody>
                                </table>
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