<script type="text/javascript">
	function fileValidation(){
		var fileInput = document.getElementById('file');
		var filePath = fileInput.value;
		var allowedExtensions = /(\.sql)$/i;
		if(!allowedExtensions.exec(filePath)){
			alert('Hanya bisa upload file yang berekstensi .sql ');
			fileInput.value = '';
			return false;
		}else{
			//Image preview
			if (fileInput.files && fileInput.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
				};
				reader.readAsDataURL(fileInput.files[0]);
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
        </div>
        <!-- END TITLE -->

        <!-- START MAIN -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
<!--                        <h3 class="panel-title">DATA MATAPELAJARAN</h3>-->
                             </div>
                    <div class="panel-body">
								<table id="datatable" class="table">
						<th class="col-lg-5 text-center"><br><br>
                                    <div >
						<a href="<?php echo site_url('restorebackup/backup'); ?>" class="btn btn-danger btn-custom waves-effect waves-light m-b-5"><i class="fa fa-weather"> Backup </i></a><br><br>
                                    </div>
					    <th>   <div class="form">
							<form class="form-horizontal m-t-20" action="<?php echo site_url('restorebackup/restoredb');?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
                                    <div class="col-lg-5">
										Upload file sql
                                        <input class="form-control" type="file" name="file" onchange="fileValidation()" required><br>
											<button class="btn-success" name="upload" id="simpan" type="submit" onclick="saveForm(); return false;">Restore</button>
                                    </div>
                                </div>
                            </form>
						</table>
                    </div>                    
                </div>
            </div>
        </div> 
        <!-- END MAIN -->

    </div> 
    <!-- END CONTAINER -->
</div> 
<!-- END CONTENT -->