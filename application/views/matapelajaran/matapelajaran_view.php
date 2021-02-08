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
<!--                        <h3 class="panel-title">DATA MATAPELAJARAN</h3>-->
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
                                <a href="<?php echo site_url('matapelajaran/tambah'); ?>" class="btn btn-danger btn-custom waves-effect waves-light m-b-5"><i class="fa fa-plus"> Tambah Mapel </i></a><br><br>
                                
<!--								<a href="<?php echo site_url('provinsi/cetak'); ?>" class="btn btn-primary btn-custom waves-effect waves-light m-b-5" TARGET="_BLANK"><i class="fa fa-print"> Cetak Seluruh Data </i></a><br><br>
-->								
								<table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Matapelajaran</th>
                                            <th class="text-center">Aktif</th>
											<th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; foreach($daftar_matapelajaran as $data): ?>
                                        <tr>
<!--                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-striped dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-list"></i></button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
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
                                            <td class="text-center"><?php echo $no."."; ?></td>
                                            <td><?php echo $data->nama; ?></td>
                                            <td class="text-center"><?php if($data->status == "Aktif"){echo "<i class='fa fa-check'></i>";}else{}?></td>
                                            <td class="text-center"><a href="<?= site_url('matapelajaran/edit/'.$this->encrypt->encode($data->id, $this->session->userdata('id_user'))) ?>"><i class="fa fa-edit"> Edit </i></a></td>
                                        </tr>
                                        <?php $no++; endforeach;?> 
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