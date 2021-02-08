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
                    <li class="active">Materi</li>
                </ol>
            </div>
        </di
        <!-- END TITLE -->

        <!-- START MAIN -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
<!--                <div class="panel-heading">
                        <h3 class="panel-title">DATA PENGAJAR</h3>
                    </div>-->
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
								<?php if($this->session->userdata('level') =='pengajar' or $this->session->userdata('level') =='admin'){ ?>
                                <a href="<?php echo site_url('materi/tambahtertulis'); ?>" class="pull-left btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-plus"> Tambah Materi Tertulis </i></a>
                                <a href="<?php echo site_url('materi/tambahfile'); ?>" class="pull-left btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-plus"> Tambah Materi File</i></a>
                                <?php } else{} ?>
                                <a href="<?php echo site_url('materi/tipe/File'); ?>" class="pull-right btn btn-<?php if($tipe == "File"){echo "success";}else{echo "default";} ?> waves-effect waves-light m-b-5">Materi File</a>
								<a href="<?php echo site_url('materi/tipe/Tertulis'); ?>" class="pull-right btn btn-<?php if($tipe == "Tertulis"){echo "success";}else{echo "default";} ?> waves-effect waves-light m-b-5">Materi Tertulis</a>
								<br>
								<br>
								<table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Judul Materi</th>
											<th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($daftar_materi as $data): ?>
                                        <tr>
                                            <td class="text-center"><?php echo $data->id; ?></td>
                                            <td><?php echo $data->judul; ?>
											</td>
                                            <td>
													<a href="<?= site_url('materi/detail/'.$this->encrypt->encode($data->id, $this->session->userdata('id_user'))) ?>"><i class="fa fa-eye"> Detail </i></a>&nbsp;&nbsp;&nbsp;
												<div class="pull-right">
													posted by <?php echo $data->nama; ?><br>
													<?php echo date('d F Y h:i:s', strtotime($data->posted)); ?>
												</div>
											<?php if($this->session->userdata('level') =='pengajar' or $this->session->userdata('level') =='admin'){ ?>
<!--                                                                <a href="<?= site_url('materi/edit/'.$this->encrypt->encode($data->id, $this->session->userdata('id_user'))) ?>"><i class="fa fa-edit"> Edit </i></a>-->
											<?php } else{} ?>
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