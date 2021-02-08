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
                    <li class="active">Pengajar</li>
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
                                <?php if($this->session->userdata('level') =='admin'){ ?>
                                <a href="<?php echo site_url('pengumuman/tambah'); ?>" class="btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-pencil"> Buat </i></a>
                                <?php } else{} ?>
								<table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Judul</th>
                                            <th class="text-center">Tgl. Tampil</th>
                                            <th class="text-center">Tgl. Tutup</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($daftar_pengumuman as $data): ?>
                                        <tr>
                                            <td class="text-center"><?php echo $data->id; ?></td>
                                            <td class="text-left"><a href="<?php echo site_url('pengumuman/detail/'.$this->encrypt->encode($data->id, $this->session->userdata('id_user'))); ?>"><?php echo $data->judul; ?></td>
                                            <td class="text-center"><?php echo date('d F Y', strtotime($data->tgl_tampil)); ?></td>
                                            <td class="text-center"><?php echo date('d F Y', strtotime($data->tgl_tutup)); ?></td>
                                            
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