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
                    <li class="active">Pengguna</li>
                </ol>
            </div>
        </div>
        <!-- END TITLE -->

        <!-- START MAIN -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">DAFTAR PENGGUNA SISTEM</h3>
                    </div>
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
                                <a href="<?php echo site_url('user/tambah'); ?>" class="btn btn-danger btn-custom waves-effect waves-light m-b-5"><i class="fa fa-plus"> Tambah Data </i></a><br><br>
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Aksi</th>
                                            <th>Level</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Nama Pengguna</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($daftar_user as $data): ?>
                                        <tr>
                                            <td><div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"> A k s i  <span class="caret"></span></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="<?= site_url('user/edit/'.$data->id_user) ?>"><i class="fa fa-edit"> Ubah Data </i></a></li>
                                                    <li><a href="<?= site_url('user/hapus/'.$data->id_user); ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');"><i class="fa fa-trash"> Hapus Data </i></a></li>
                                                </ul>
                                            </div></td>
                                            <td><?php echo $data->level; ?></td>
                                            <td><?php echo $data->username; ?></td>
                                            <td><?php echo $data->password; ?></td>
                                            <td><?php echo $data->nama; ?></td>
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