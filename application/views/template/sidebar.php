<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
<!--        <div class="user-details">
            <!-- <div class="pull-left">
                <img src="<?php echo base_url('');?>template/images/users/febby.jpg" alt="" class="thumb-md img-circle">
            </div> 

            <div class="user-info">
                <div class="dropdown">
                    <h5>Selamat Datang</h5>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $this->session->userdata('nama');?></a>
                </div>
                <p class="text-muted m-0"><?php echo $this->session->userdata('level');?></p>
            </div>

        </div> 

        <!--- Divider -->
        <div id="sidebar-menu">
            <ul> 
		<?php if ($this->session->userdata('logged_in') =='Sudah Login'){ ?>
                <?php 
                if ($this->session->userdata('level') =='admin'){ ?>
                    <li>
                        <a href="<?php echo site_url('pengumuman');?>" class="waves-effect"><i class="fa fa-bullhorn"></i><span> Pengumuman </span></a>
                    </li>
                     <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="md md-now-widgets"></i><span> Manajemen </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">
							<li><a href="<?php echo site_url('siswa');?>" class="waves-effect"><i class="fa fa-male"></i><span> Siswa </span></a></li>
							<li><a href="<?php echo site_url('pengajar');?>" class="waves-effect"><i class="fa fa-user"></i><span> Pengajar </span></a></li>
                            <li><a href="<?php echo site_url('kelas');?>"><i class="fa fa-credit-card"></i><span> Kelas</span></a></li>
                            <li><a href="<?php echo site_url('matapelajaran');?>"><i class="fa fa-book"></i><span> Matapelajaran</span></a></li>
                        </ul>
                    </li>
                     <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="fa fa-folder"></i><span> Tugas/Materi </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('Tugas');?>"><i class="fa fa-folder"></i><span> Tugas</span></a></li>
                            <li><a href="<?php echo site_url('materi');?>"><i class="fa fa-book"></i><span> Materi</span></a></li>
<!--                            <li><a href="<?php echo site_url('komentar');?>"><i class="fa fa-comments"></i><span> Komentar Materi</span></a></li>-->
                        </ul>
                    </li>
                     <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="fa fa-wrench"></i><span> Pengaturan </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('pengaturan');?>"><i class="fa fa-wrench"></i><span> Pengaturan</span></a></li>
<!--                            <li><a href="<?php echo site_url('email');?>"><i class="fa fa-envelope"></i><span> Email Template</span></a></li>-->
                            <li><a href="<?php echo site_url('restorebackup');?>"><i class="fa fa-cloud"></i><span> Backup & Restore</span></a></li>
                            <li><a href="<?php echo site_url('home/hapus');?>"><i class="fa fa-trash"></i><span> Hapus Data</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url('login/logout');?>" class="waves-effect"><i class="md md-settings-power"></i><span> Logout </span></a>
                    </li>
                <?php }  
                
                 else if ($this->session->userdata('level') =='pengajar'){ ?>
                    <li>
                        <a href="<?php echo site_url('pengumuman');?>" class="waves-effect"><i class="fa fa-bullhorn"></i><span> Pengumuman </span></a>
                    </li>
                     <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="fa fa-folder"></i><span> Tugas/Materi </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('Tugas');?>"><i class="fa fa-folder"></i><span> Tugas</span></a></li>
                            <li><a href="<?php echo site_url('materi');?>"><i class="fa fa-book"></i><span> Materi</span></a></li>
<!--                            <li><a href="<?php echo site_url('komentar');?>"><i class="fa fa-comments"></i><span> Komentar Materi</span></a></li>-->
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url('login/logout');?>" class="waves-effect"><i class="md md-settings-power"></i><span> Logout </span></a>
                    </li>
				<?php }
				      else { ?>
                    <li>
                        <a href="<?php echo site_url('pengumuman');?>" class="waves-effect"><i class="fa fa-bullhorn"></i><span> Pengumuman </span></a>
                    </li>
                     <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="fa fa-folder"></i><span> Tugas/Materi </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('Tugas');?>"><i class="fa fa-folder"></i><span> Tugas</span></a></li>
                            <li><a href="<?php echo site_url('materi');?>"><i class="fa fa-book"></i><span> Materi</span></a></li>
<!--                            <li><a href="<?php echo site_url('komentar');?>"><i class="fa fa-comments"></i><span> Komentar Materi</span></a></li>-->
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url('login/logout');?>" class="waves-effect"><i class="md md-settings-power"></i><span> Logout </span></a>
                    </li>
					<?php } } else{ ?>
		            <li>
                        <a href="<?php echo site_url('register');?>" class="waves-effect"><i class=""></i><span> Register </span></a>
                    </li>
                     <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="fa fa-folder"></i><span> Info </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo site_url('equipment');?>"><i class="fa fa-book"></i><span> List Equipment</span></a></li>
                            <li><a href="<?php echo site_url('monster');?>"><i class="fa fa-book"></i><span> List Monster</span></a></li>
                            <li><a href="<?php echo site_url('misi');?>"><i class="fa fa-book"></i><span> List Misi</span></a></li>
<!--                            <li><a href="<?php echo site_url('komentar');?>"><i class="fa fa-comments"></i><span> Komentar Materi</span></a></li>-->
                        </ul>
                    </li>
		<?php }?>
			</ul>
					</div>
    </div>
</div>