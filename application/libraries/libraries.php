<?php 
class Libraries
{
	protected $CI;
	
	public function __construct()
	{
		$this->CI =& get_instance();
	}
	
	function escape_array(&$escape)
	{
		foreach ($escape as $key => $value) {
			$escape["$key"] = $this->CI->db->escape_like_str($escape["$key"]);
			$escape["$key"] = str_replace("!", "", $escape["$key"]);
		}
	}
	
	function escape_str(&$escape)
	{
		$escape = $this->CI->db->escape_like_str($escape);
		$escape = str_replace("!", "", $escape);
	}
	
	function pagination($pagination, $table, $new_query = "", $new_sql = "")
	{
		echo '<div class="col-md-12">
			<ul class="pagination pagination-sm">
				<li ><a style="background: #333; color: white; font-weight: bolder; cursor: default;">Page:: </a></li>';

				$query_row = $this->CI->db->query("select * from $table {$new_sql}");

				if($_GET["page"] > 1)
				{
					$prev = $_GET["page"] - 1;

					echo "<li ><a href='$pagination?page=$prev{$new_query}' style='background: #333; color: white; font-weight: bolder;'>&lArr;</a></li>";
				}

				for($i = 1; $i <= ceil($query_row->num_rows() / 20); $i++)
				{
					if($_GET["page"] == $i)
					{
						echo "<li   class='active'><a href='$pagination?page=$i{$new_query}'>$i</a></li>";
						
					}
					else
					{
						echo "<li><a href='$pagination?page=$i{$new_query}'>$i</a></li>";
					}
				}


				if($_GET["page"] * 20 < $query_row->num_rows())
				{
					$next = $_GET["page"] + 1;
					echo "<li ><a href='$pagination?page=$next{$new_query}' style='background: #333; color: white; font-weight: bolder;'>&rArr;</a></li>";
				}

				echo "<li ><a style='background: #333; color: white; font-weight: bolder; cursor: default;'>Of: " . ceil($query_row->num_rows() / 20) . ", " . "Total {$query_row->num_rows()} Data</a></li>
			</ul>
		 </div>";
	}
	
	function table($table, $limit = 20, $new_sql = "")
	{
		
		echo '<div class="table-responsive">
			<table class="table filter_data">
				<thead>
					<tr>';
					
						$query = $this->CI->db->query("select * from $table limit 1");
						
						foreach ($query->result_array() as $key => $value) 
						{
							foreach ($value as $key2 => $value2) 
							{
								echo "<th>" . ucwords(str_replace("_", " ", $key2)) . "</th>";
							}
						}
						
					echo '</tr>
				</thead>
				<tbody>';
				
					if($_GET["page"])
					{
						$mulai = ($_GET["page"] * $limit) - $limit;
					}else 
					{
						$mulai = 0;
					}
					
					$query = $this->CI->db->query("select * from $table {$new_sql} limit $mulai,$limit");
					
					foreach ($query->result() as $key => $value)
					{
						echo "<tr>";
						foreach ($value as $key2 => $value2)
						{
							echo "<td>$value2</td>";
						}
						echo "</tr>";
					}
					
			echo	'</tbody>
			</table>
		</div>';
	}
	
	function toggle_edit($toggle_edit)
	{
		$query = $this->CI->db->query("select * from tbl_toggle_edit order by id desc limit 1");
		
		return $query->result()[0]->toggle_edit == "true";
	}
	
	function console_log($console_log)
	{
		echo "<script>console.log($console_log);</script>";
	}
	
}


 ?>