
<?php

foreach($rs as $r)
{
	$gia = number_format($r['GiaBan']);
	$isNew = $r['New'];
	$isGiamGia = $r['GiamGia'];
	$newhtml="";
	$giamgiahtml="";
	if($isNew)
		$newhtml="<div class=\"hh-box-new\"></div>";
	if($isGiamGia)
		$giamgiahtml="<div class=\"hh-box-promo\"></div>";
	$chuoixuat = <<<EOD
<!--Một hàng hóa-->
<li>


<div class="hh-box">	
	<div class="hh-box-name">{$r['TenSP']}</div>
    
	<a href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}">
		<img class="hh-box-image" src="hinhsp/{$r['Hinh']}" width="160" height="160">
	</a>

	{$newhtml}
	{$giamgiahtml}
    <div class="hh-box-price">{$gia} đ</div>
	<div class="hover">
		<ul>
			<li>HĐH: {$r['OS']}</li>
			<li>Màn hình: {$r['ManHinh']}</li>
			<li>CPU: {$r['CPU']}</li>
			<li>RAM: {$r['RAM']} GB</li>
			<li>Pin: {$r['Pin']} mAh</li>
		</ul>
		<span class="detail"><a href="?mod=Product&act=ChiTiet&MaSP={$r['MaSP']}">Xem chi tiết</a></span>
	</div>

	
</div>
</li>




<!--End Một hàng hóa-->
EOD;
	echo $chuoixuat;

}

if(isset($MaLoai))
	$idCate="&MaLoai=".$MaLoai;
else
	$idCate="";
if(isset($MaNSX))
	$idNSX="&MaNSX=".$MaNSX;
else
	$idNSX="";
if(isset($numpages))
{
echo "<div style='background:#ccc; width:100%'> Page: ";
if(isset($sell))
	$s="BySell";
else
	$s="";
for($i=1;$i<=$numpages;$i++)
{	
if($Trang == $i)
		echo "<a href=\"index.php?mod=Product&act=DanhSach$s$idCate$idNSX&page=$i\" style=\"color:red; font-weight:bold;\">$i</a> ";
	else
		echo "<a href=\"index.php?mod=Product&act=DanhSach$s$idCate$idNSX&page=$i\" style=\"color:#000\">$i</a> ";
		
		

}
echo "</div>";

}
?>

