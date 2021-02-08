<script type="text/javascript">
    function saveForm(){  
        var passworda = $('#passworda').val();
        var passwordb = $('#passwordb').val();

        if (passworda != passwordb) {
            alert('password tidak sama');
            $('#passwordb').focus();
            return false;
        }
        document.getElementById('commentForm').submit();
    } 
</script>
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
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body">
						<?php
                                $pesanlink = $this->session->flashdata('pesanlink');
                                    if($pesanlink == ""){}
									else if($pesanlink == "gagal"){ ?>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Gagal</strong>, Data tidak berhasil disimpan
                            </div>                        
                               <?php } else {
                            ?>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Sukses</strong>, <?php echo $pesanlink; ?> 
                            </div>                        
                            <?php   
                                }
                        ?>

                        <div class="form">
                            <?php echo form_open($form_aksi, [
                                'id'            => 'commentForm',
                                'method'        => 'post',
                                'class'         => 'cmxform form-horizontal tasi-form',
                                'novalidate'    => 'novalidate',
                                ]);
                            ?>
								
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Username</label>
                                    <div class="col-lg-10">
                                        <label class="form-control"><?php echo $data->username; ?></label>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Password<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="password" id="passworda" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Ulangi Password<i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="password" id="passwordb" name="password" required>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Kata Kunci</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" name="data[kunci]" maxlength="30" value="<?php echo $data->kunci; ?>">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input class="form-control" type="hidden" name="passwordlama" maxlength="50" value="<?php echo $this->encrypt->encode($data->password, $this->session->userdata('id_user'));?>">
                                        <button class="btn btn-success waves-effect waves-light" type="submit" onclick="return saveForm()">Simpan</button>
                                        <button class="btn btn-default waves-effect" type="reset"><a href="<?php echo site_url('home'); ?>">Batal</a></button>
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