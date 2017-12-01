$(document).ready(function() {
	//untuk togle input jika memilih kepala sekolah
	$(".data_sekolah input, .data_sekolah select").attr("disabled", "disabled");
	$(".sk_pengangkatan_jabatan_fungsional_tertentu").change(function(event) {

		value = $(this).val();

		if(value == "Kepala Sekolah")
		{
			$(".data_sekolah input, .data_sekolah select").removeAttr('disabled');
		}else{
			$(".data_sekolah input, .data_sekolah select").attr("disabled", "disabled");
		}
	});
	
	//untuk mengecek jika sebelumnya telah submit kepala sekolah maka tidak perlu didisabled lagi
	if($(".sk_pengangkatan_jabatan_fungsional_tertentu").val() == "Kepala Sekolah")
	{
		$(".data_sekolah input, .data_sekolah select").removeAttr('disabled');
	}else{
		$(".data_sekolah input, .data_sekolah select").attr("disabled", "disabled");
	}
	
	//untuk otomatis menghitung dari masa kerja pengangkatan
	$(".tmt_pengangkatan_awal").datepicker({
		dateFormat: "dd-MM-yy",
		changeYear: true,
		changeMonth: true,
		yearRange: "c:+10"
	})

	$(".masa_kerja_pengangkatan").datepicker({
		dateFormat: "dd-MM-yy"
	});

	//untuk mengatur tanggal lahir dan masa pensiun
	$(".tanggal_lahir").datepicker({
		dateFormat : "dd-MM-yy",
		changeMonth: true,
		changeYear : true,
		yearRange  : "-60y:c",
		onSelect   : function(selectedDate)
		{
			var date = $(this).datepicker("getDate");
			year = date.getFullYear() + 60;

			$(".tahun_pensiun").val(year).attr("readonly", "readonly");
		}
	})

	//untuk memformat gaji terakhir
	$(".gaji_terakhir").blur(function(){
		var angka = $(this).number($(this).val(), 0, ",", ".");

		$(this).val("Rp." + angka[0].textContent + ",-");
	})

	//untuk memformat penghasilan suami istri
	$(".penghasilan_suami_istri").blur(function(){
		var angka = $(this).number($(this).val(), 0, ",", ".");

		$(this).val("Rp." + angka[0].textContent + ",-");
	})

	//untuk mereset semua file
	$(".reset").click(function (e) {
		$(".form_register *").not('option').val("");
		$(".form_register option").removeAttr('selected');
		$(".data_sekolah input, .data_sekolah select").attr("disabled", "disabled");
	});
});