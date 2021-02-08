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
<!--                    <div class="panel-heading">
                        <h3 class="panel-title">DATA MATAPELAJARAN</h3>
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
                            <a href="<?php echo site_url('kelas/tambah'); ?>" class="btn btn-success waves-effect waves-light m-b-5"><i class="fa fa-plus"> Tambah Kelas </i></a>
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<th colspan="2">KELAS X</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($daftar_kelasX as $kelasX): ?>
                                        <tr>
                                            <td><?php echo $kelasX->nama; ?></td>
                                            <td class="text-center"><a href="<?= site_url('kelas/atur/'.$this->encrypt->encode($kelasX->id, $this->session->userdata('id'))) ?>" class="btn btn-primary"><i class="fa fa-wrench"> Atur Matapelajaran </i></a></td>
                                        </tr>
                                        <?php endforeach;?> 
                                    </tbody>
                                </table>
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<th colspan="2">KELAS XI</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($daftar_kelasXI as $kelasXI): ?>
                                        <tr>
                                            <td><?php echo $kelasXI->nama; ?></td>
                                            <td class="text-center"><a href="<?= site_url('kelas/atur/'.$this->encrypt->encode($kelasXI->id, $this->session->userdata('id'))) ?>" class="btn btn-primary"><i class="fa fa-wrench"> Atur Matapelajaran </i></a></td>
                                        </tr>
                                        <?php endforeach;?> 
                                    </tbody>
                                </table>
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
										<th colspan="2">KELAS XII</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($daftar_kelasXII as $kelasXII): ?>
                                        <tr>
                                            <td><?php echo $kelasXII->nama; ?></td>
                                            <td class="text-center"><a href="<?= site_url('kelas/atur/'.$this->encrypt->encode($kelasXII->id, $this->session->userdata('id'))) ?>" class="btn btn-primary"><i class="fa fa-wrench"> Atur Matapelajaran </i></a></td>
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