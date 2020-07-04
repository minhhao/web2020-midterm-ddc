<script src="lib/jquery.min.js"></script>
<script>
$(document).ready(function() {
	function runajax()
	{	
    		 $.ajax({
				url : "Controller/Product/XulyTimNangCao.php",
				type: "POST",
				data: {"TenSP" : $("#txttensp").val(),"MaNSX" : $("#cbbnsx").val(),"MaLoai" : $("#cbbmaloai").val(),
						 "Tu" : $("#txtTu").val(), "Den" : $("#txtDen").val()},
				dataType: 'html',
				success: function(data){
					$("#dsSanPham").html(data);
				}
			});
		
	}
	//su kien textbox change
	$('#txttensp').on('input', function() {
		if($('#txttensp').val!="")
		{
			runajax();
		}
	});
	$("#txtTu").change(function(e) {
		runajax()
    });
	$("#txtDen").change(function(e) {
		runajax()
    });
    $("#cbbmaloai").change(function(e) {
		runajax()
    });
	$("#cbbnsx").change(function(e) {
		runajax()
    });
});
</script>
<?php
include_once("Model/Category.php");
include_once("Model/NhaSanXuat.php");
$da = new Category();
$rs = $da->GetCategories();
$da = new NhaSanXuat();
$rs1 = $da->GetNSX();;
include_once("View/Product/AdvanceSearch.php");
?>

