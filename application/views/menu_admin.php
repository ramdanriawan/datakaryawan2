<nav class="navbar navbar-default navbar-static-top m-b-0">
	<div class="navbar-header">
		<div class="top-left-part">
			<!-- Logo -->
			<h3 class="text-center">Admin Panel</h3>
		</div>
		<!-- /Logo -->
		<ul class="nav navbar-top-links navbar-right pull-right">
			<li>
				<form role="search" class="app-search hidden-sm hidden-xs m-r-10" action="cari">
					<input type="text" name="cari" placeholder="Cari Data User..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
			</li>
		</ul>
	</div>
	<!-- /.navbar-header -->
	<!-- /.navbar-top-links -->
	<!-- /.navbar-static-side -->
</nav>
<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav slimscrollsidebar">
		<div class="sidebar-head">
			<h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
		</div>
		<ul class="nav" id="side-menu">
			<li style="padding: 70px 0 0;">
				<a href="admin" class="waves-effect"><span class="glyphicon glyphicon-user"></span> Data User</a>
			</li>
			<li>
				<a href="rekapitulasi" class="waves-effect"><span class="glyphicon glyphicon-record"></span> Rekapitulasi Data</a>
			</li>
			<li>
				<a class="waves-effect dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list"></span> Data Pegawai <span class="caret"></span></a>
				
				<!--  menu dropdown-->
				<ul class="dropdown-menu">
					<li><a href="data_profile_pegawai">Data Profile Pegawai</a></li>
					<li><a href="data_pegawai">Data Kepegawaian</a></li>
					<li><a href="data_pendidikan">Data pendidikan</a></li>
					<li><a href="data_keluarga">Data Keluarga</a></li>
				</ul>
			</li>
			
			
			<li >
				<a href="sekolah" class="waves-effect"><span class="glyphicon glyphicon-th-list"></span> Data Sekolah</a>
			</li>
			<li >
				<?php 
					if($this->libraries->toggle_edit() == true)
					{
						echo '<a href="admin?toggle_edit=false" class="waves-effect"><span class="glyphicon glyphicon-off"></span> Nonaktifkan Fiture Edit Data Pegawai</a>';
					}else 
					{
						echo '<a href="admin?toggle_edit=true" class="waves-effect"><span class="glyphicon glyphicon-edit"></span> Aktifkan Fiture Edit Data Pegawai</a>';
						
					}
				
				 ?>
			</li>
			<li>
				<a class="waves-effect" data-toggle="modal" data-target="#registerModal"><span class="glyphicon glyphicon-plus"></span> Tambah Karyawan  </a>
			</li>
		</ul>
		<div class="center p-20">
			 <a href="logout" class="btn btn-danger btn-block waves-effect waves-light">Logout</a>
		 </div>
	</div>
	
</div>