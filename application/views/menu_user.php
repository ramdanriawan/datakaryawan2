<nav class="navbar navbar-default navbar-static-top m-b-0">
	<div class="navbar-header">
		<div class="top-left-part">
			<!-- Logo -->
			<h3 class="text-center">User Panel</h3>
		</div>
		<!-- /Logo -->

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
				<a href="user" class="waves-effect"><span class="glyphicon glyphicon-user"></span> Data User</a>
			</li>
			<li>
				<a class="waves-effect dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list"></span> Data Pegawai <span class="caret"></span></a>
				
				<!--  menu dropdown-->
				<ul class="dropdown-menu">
					<li><a href="data_profile_pegawai_user">Data Profile Pegawai</a></li>
					<li><a href="data_kepegawaian_user">Data Kepegawaian</a></li>
					<li><a href="data_pendidikan_user">Data pendidikan</a></li>
					<li><a href="data_keluarga_user">Data Keluarga</a></li>
					<li><a href="data_sekolah_user">Data Sekolah</a></li>
				</ul>
			</li>
			<li>
				<?php 
				if($this->libraries->toggle_edit("tbl_toggle_edit") === true)
				{
					
					echo '<a class="waves-effect" data-toggle="modal" data-target="#editModal"><span class="glyphicon glyphicon-edit"> Edit Data</span></a>';
				}else 
				{
					echo '<a class="waves-effect" data-toggle="modal" data-target="#editModal" disabled><span class="glyphicon glyphicon-edit"> Edit Data (Disabled by admin)</span></a>';
				}
				
				 ?>
			</li>
			<li>
				<a class="waves-effect dropdown-toggle" data-toggle="dropdown"><span class=""></span></a>
				
			</li>
			<li>
				<a class="waves-effect dropdown-toggle" data-toggle="dropdown"><span class=""></span><span class=""></span></a>
				
			</li>
			<li>
				<div class="center p-20">
					<a href="logout" class="btn btn-danger btn-block waves-effect waves-light " style="color: white;">Logout</a>
				</div>
			</li>
		</ul>
	</div>
	
</div>
