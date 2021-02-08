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
            <div class="col-sm-12">
                <div class="panel panel-default">
<!--                    <div class="panel-heading"><h3 class="panel-title">Form Ubah Data Siswa</h3></div>
-->                    <div class="panel-body">                        
                        <div class="form">
                            <?php echo form_open($form_aksi, [
                                'id'            => 'commentForm',
                                'method'        => 'post',
                                'class'         => 'cmxform form-horizontal tasi-form',
                                'novalidate'    => 'novalidate',
                                ]);
                            ?>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">NIS </label>
                                    <div class="col-lg-10">
										<label class="form-control"><?php echo $data->nis; ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Nama </label>
                                    <div class="col-lg-10">
                                    	<label class="form-control"><?php echo $data->nama; ?></label>
                                    </div>
                                </div>                                   
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Jenis Kelamin </label>
                                    <div class="col-lg-10">
                                        <label class="form-control"><?php echo $data->jenis_kelamin ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Tahun Masuk </label>
                                    <div class="col-lg-10">
                                    	<label class="form-control"><?php echo $data->tahun_masuk?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Kelas </label>
                                    <div class="col-lg-10">
                                        <label class="form-control"><?php echo $data->namakelas ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Tempat Lahir</label>
                                    <div class="col-lg-10">
                                    	<label class="form-control"><?php echo $data->tempat_lahir; ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Tanggal Lahir</label>
                                    <div class="col-lg-10">
                                    	<label class="form-control"><?php echo date('d F Y', strtotime($data->tanggal_lahir)); ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Agama</label>
                                    <div class="col-lg-10">
                                    	<label class="form-control"><?php echo $data->agama ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Alamat</label>
                                    <div class="col-lg-10">
                                        <label class="form-control"><?php echo $data->alamat; ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Foto</label>
                                    <div class="col-lg-10">
                                        <embed width='200' height='200' src='<?php echo $data->foto ?>'>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Username</label>
                                    <div class="col-lg-10">
										<label class="form-control"><?php echo $data->username ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
									<label class="control-label col-lg-2">Status</label>
										<div class="col-lg-10">
											<label class="form-control"><?php echo $data->status ?></label>
										</div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-default waves-effect " type="reset" value="Go Back" onclick="history.back(-1)">Kembali</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?> 

                            </form>
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