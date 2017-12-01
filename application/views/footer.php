    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="../js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../js/custom.min.js"></script>
    <script src="../js/dashboard1.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>

<?php 

if($_GET["toggle_edit"])
{
    $this->db->update("tbl_toggle_edit", array("toggle_edit" => $_GET["toggle_edit"]));
    alert("Berhasil Melakukan Toggle Edit");
    location($this->uri->segment(2));
}

if($_GET["media"] == "delete")
{
    $tables = array("tbl_profile_pegawai", "tbl_pegawai", "tbl_keluarga", "tbl_login", "tbl_sekolah", "tbl_pendidikan");
    $this->db->where("username", $_GET["username"]);
    
    if($this->db->delete($tables))
    {
        alert("Berhasil Mendelete Semua Data Table Dengan username $_GET[username]");
        location($this->uri->segment(2));
    }
}


 ?>