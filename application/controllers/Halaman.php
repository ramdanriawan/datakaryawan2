<?php 

 class Halaman extends CI_Controller
 {
 	
 	function index()
 	{
 		header("location: halaman/login");
 	}

 	function login()
 	{
        $this->load->library("libraries");
 		$this->load->view("login");
 	}

 	function logout()
 	{
 		$this->load->view("logout");
 	}

 	function insert()
 	{
 		$this->load->view("insert");
 	}

 	function update()
 	{
 		$this->load->view("update");
 	}

 	function delete()
 	{
 		$this->load->view("delete");
 	}

 	function select()
 	{
        $this->load->library("libraries");
 		$this->load->view("select");
 	}

 	function admin()
 	{
 		$this->load->view("admin");
 	}
    
    function user()
    {
        $this->load->view("user");
    }
    
    function cari()
    {
        $this->load->view("cari");
    }

 	function test()
 	{
        $this->load->view("test");
 	}
    
    function rekapitulasi()
    {
        $this->load->view("rekapitulasi");
    }
    
    function pegawai()
    {
        $this->load->view("pegawai");
    }
    
    function data_profile_pegawai()
    {
        $this->load->view("data_profile_pegawai");
    }
    
    function data_kepegawaian()
    {
        $this->load->view("data_kepegawaian");
    }
    
    function data_pendidikan()
    {
        $this->load->view("data_pendidikan");
    }
    
    function data_keluarga()
    {
        $this->load->view("data_keluarga");
    }
    
    function sekolah()
    {
        $this->load->view("sekolah");
    }
    
    function download_excel()
    {
        $this->load->view("download_excel");
    }
    
    function data_pegawai()
    {
        $this->load->view("data_pegawai");
    }
    
    function data_keluarga_user()
    {
        $this->load->view("data_keluarga_user");
    }
    
    function data_profile_pegawai_user()
    {
        $this->load->view("data_profile_pegawai_user");
    }
    
    function data_pendidikan_user()
    {
        $this->load->view("data_pendidikan_user");
    }
    
    function data_kepegawaian_user()
    {
        $this->load->view("data_kepegawaian_user");
    }
    
    function edit_user()
    {
        $this->load->view("edit_user");
    }
    
    function data_sekolah_user()
    {
        $this->load->view("data_sekolah_user");
    }
    
    function edit_admin()
    {
        $this->load->view("edit_admin");
    }

 }

 ?>