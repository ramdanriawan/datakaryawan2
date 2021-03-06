<?php 

function mantap()
{
	echo "mantap";
}

function alert($alert)
{
	echo "<script>alert('$alert');</script>";
}

function filter()
{
	echo <<<EOD
	        <div class="row">
	            <div class="col-md-3">
	                <form class="form-inline pull-right">
	                    <div class="form-group">
	                        <input class="filter form-control pull-right" type="text" placeholder="Filter Table Data" >
	                    </div>
	                </form>
	            </div>
	        </div>
EOD;
}

function download_excel($download_excel, $filename = "data_excel.xls", $new_query = "", $new_sql = "")
{
	echo '<div class="col-md-9">
		<div class="btn-group btn-group-sm">';
		
			if($_GET["page"])
			{
				$page = $_GET["page"];
			}else 
			{
				$page = 1;
			}
			
			if($_GET["limit"])
			{
				$limit = $_GET["limit"];
			}else 
			{
				$limit = 20;
			}
			
			echo <<<EOD
			<a href="download_excel?table=$download_excel&filename=$filename&page=$page&limit=$limit{$new_query}{$new_sql}" class="btn btn-primary" type="button" id="download_table" title="Proses Lebih Cepat" target="_blank">
				<span class="glyphicon glyphicon-download"> Download Semua Data Table Ini (xls)</span>
			</a>
			<a href="download_excel?table=$download_excel&filename=$filename{$new_query}{$new_sql}" class="btn btn-danger" type="button" id="download_table" title="Proses sangat berat dan lebih lama" target="_blank">
				<span class="glyphicon glyphicon-download"> Download Semua Data Sekolah (xls)</span>
			</a>
		</div>
	</div>
EOD;
}

function location($location)
{
	echo "<script>location.href = '$location'; </script>";
}

function input($label, $class = "form-control", $name, $type = "text", $required = "", $value="", $placeholder = "", $maxlength = "", $min = "", $max = "")
{
	
	echo <<<EOD
	<div class="form-group">
	<label>
		$label
		<input class="$class" name="$name" type="$type" $required value="$value" placeholder="$placeholder" maxlength="$maxlength" min="$min" max="$max">
	</label>
	</div>

EOD;
}

function console_log($console_log)
{
	echo "<script>console.log('$console_log');</script>";
}

function select($class, $name, $required, $label, $selected = "")
{
	echo "<select class='$class' name='$name' $required>";
	echo "<option value=''>--$label--</option>";
	
	foreach ($select as $key => $value)
	{
		if($selected == $value)
		{
			$selected = "selected";
		}else 
		{
			$selected = "";
		}
		
		echo "<option value='$value' $selected>$value</option>";
	}
	
	echo "</select>";
}
 ?>