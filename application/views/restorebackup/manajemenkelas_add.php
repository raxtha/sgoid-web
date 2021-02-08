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
                    <li class="active">Matapelajaran</li>
                </ol>
            </div>
        </di
        <!-- END TITLE -->

        <!-- START MAIN -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">DATA MATAPELAJARAN</h3>
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
                                <a href="<?php echo site_url('matapelajaran/tambah'); ?>" class="btn btn-danger btn-custom waves-effect waves-light m-b-5"><i class="fa fa-plus"> Tambah Data </i></a><br><br>
                                
<!--								<a href="<?php echo site_url('provinsi/cetak'); ?>" class="btn btn-primary btn-custom waves-effect waves-light m-b-5" TARGET="_BLANK"><i class="fa fa-print"> Cetak Seluruh Data </i></a><br><br>
-->								
								<table id="datatable" class="table table-striped table-bordered">
                                    <tbody>
										<tr>
                                            <td><input type="checkbox" onchange="checkAll(this)" name="stat[]" ></td>
                                            <td>Pilih semua</td>
											
                                        <?php foreach($daftar_matapelajaran as $data): ?>
                                        <tr>
<!--                                        <td class="text-left">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-striped dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-list"></i></button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="<?= site_url('pengajar/edit/'.$data->user) ?>"><i class="fa fa-edit"> Ubah Data </i></a>
                                                            </li>
                                                        <li>
                                                                <a href="<?= site_url('pengajar/hapus/'.$data->id) ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?');"><i class="fa fa-trash"> Hapus Data </i></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?= site_url('pengajar/cetakBy/'.$data->id) ?>"><i class="fa fa-print"> Cetak Data </i></a>
                                                            </li>
                                                    </ul>
                                                </div>
                                            </td>-->
                                            <td><input type="checkbox" name="status[]" value="Aktif"></td>
                                            <td><?php echo $data->nama; ?></td>
                                        </tr>
                                        <?php endforeach;?> 
										<tr>
                                            <td><input type="checkbox" onchange="checkAll(this)" name="stat[]" ></td>
                                            <td>Pilih semua</td>
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