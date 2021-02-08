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
                    <li class="active">Tugas</li>
                </ol>
            </div>
        </div>
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
								<div class="pull-right">
								<?php if($this->session->userdata('level') == 'siswa'){ ?>
								<?php } else{ ?>
								<a href="<?php echo site_url('tugas/tambah'); ?>" class="btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-plus"> Tambah Tugas </i></a>
                                <?php } ?>
								</div>
								<br>
								<br>
								<table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Informasi Tugas</th>
                                            <th class="text-center">Tipe Tugas</th>
										</tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($daftar_tugas as $data): ?>
                                        <tr>
                                            <td class="text-center"><?php echo $data->id; ?></td>
                                            <td><a href="<?= site_url('tugas/detail/'.$this->encrypt->encode($data->id, $this->session->userdata('id_user')).'/'.$data->tipe) ?>">
                                            <?php echo $data->judul; ?></a>
                                            <td><?php echo $data->tipe; ?>
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