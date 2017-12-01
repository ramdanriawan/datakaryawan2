<?php error_reporting(0);
	header("Content-type: application/ms-excel");
	header("Content-Disposition: attachment; filename=$_GET[filename].xls");
	
	$new_sql = $_GET["new_sql"];
	
	if($_GET["page"] && $_GET["limit"])
	{
		$mulai = ($_GET["page"] * $_GET["limit"]) - $_GET["limit"];
		$query = $this->db->query("select * from $_GET[table] {$new_sql} limit $mulai,$_GET[limit]");
	}else 
	{
		$query = $this->db->query("select * from $_GET[table] {$new_sql}");
	}
    
    $query_header = $this->db->query("select * from $_GET[table] limit 1");
	
	$data_excel = "";							
	foreach ($query_header->result_array() as $key => $value) 
	{
		foreach ($value as $key2 => $value2) 
		{
			$data_excel .= ucwords(str_replace("_", " ", $key2)) . "\t";
		}
			$data_excel .= "\n";
	}
	
	foreach ($query->result_array() as $key => $value) {
		foreach ($value as $key2 => $value2) {
			$data_excel .= "$value2\t"; 
		}
			$data_excel .= "\n";
	}
	
	echo $data_excel;
     ?>