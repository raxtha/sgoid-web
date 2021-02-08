<script type="text/javascript"> 
    function saveForm(){  
        if(document.getElementById('username').value == ''){  
            alert('Username tidak boleh kosong');  
            document.getElementById('username').focus();  
            return false;  
        } 
        if(document.getElementById('password').value == ''){  
            alert('Password tidak boleh kosong');  
            document.getElementById('password').focus();  
            return false;  
        } 
        if(document.getElementById('nama').value == ''){  
            alert('Nama Pengguna tidak boleh kosong');  
            document.getElementById('nama').focus();  
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
                    <div class="panel-heading"><h3 class="panel-title">Form Pengguna Sistem</h3></div>
                    <div class="panel-body">
                        <div class="form">
                            <?php echo form_open($form_aksi, [
                                'id'            => 'commentForm',
                                'method'        => 'post',
                                'class'         => 'cmxform form-horizontal tasi-form',
                                'novalidate'    => 'novalidate',
                                ]);
                            ?>
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Level Pengguna</label>
                                    <div class="col-lg-10">
                                        <input type="radio" name="data[level]" id="level" value="admin"> Admin </input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="data[level]" id="level" value="user"> User </input>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Username</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" id="username" name="data[username]">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Password</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" id="password" name="data[password]">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="control-label col-lg-2">Nama Pengguna</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="text" id="nama" name="data[nama]">
                                    </div>
                                </div>   
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-success waves-effect waves-light" type="submit" onclick="saveForm(); return false;">Simpan</button>
                                        <button class="btn btn-default waves-effect" type="reset"><a href="<?php echo site_url('user'); ?>">Batal</a></button>
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