<script type="text/javascript"> 
    function saveForm(){  
        var passworda = $('#passworda').val();
        var passwordb = $('#passwordb').val();

        if(document.getElementById('username').value == ''){  
            alert('Username tidak boleh kosong');  
            document.getElementById('username').focus();  
            return false;  
        }

        if (passworda != passwordb) {
            alert('password tidak sama');
            $('#passwordb').focus();
            return false;
        }
        document.getElementById('commentForm').submit();
    } 

	function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
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
                    <li><a href="<?= site_url('home');?>">Home</a></li>
                    <li class="active">Register</li>
                </ol>
            </div>
        </div>
        <!-- END TITLE -->

        <!-- START MAIN -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
<!--                    <div class="panel-heading"><h3 class="panel-title">Form Siswa</h3></div>
-->                    <div class="panel-body">
						<?php
                                $pesanlink = $this->session->flashdata('pesanlink');
                                    if($pesanlink == ""){
                                } else {
                            ?>
                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <strong>Gagal</strong>, <?php echo $pesanlink; ?> 
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
                                'enctype'       => 'multipart/form-data',
                                ]);
                            ?>

								<div class="form-group">
                                    <label class="control-label col-lg-2">Username <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" id="username" name="username" required>
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
                                    <label class="control-label col-lg-2">Email <i style="color: red";>*</i></label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" id="email" name="email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
<!--										<input type="hidden" name="status" value="<?php echo $pengaturan->status_reg_siswa; ?>">-->
                                        <button class="btn btn-success waves-effect waves-light" id="simpan" type="submit" onclick="saveForm(); return false;">Daftar</button>
                                        <a href="<?= site_url('home');?>" class="btn btn-default waves-effect">Batal</a>
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
