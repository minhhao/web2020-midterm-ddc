<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">M-Store Xin Chào Khách Hàng : <?php echo "<strong>{$_SESSION['hoten']}</strong>"; ?></h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-12 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="infouser" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Your Info</span></li>
										<?php 
										if (!isset($_SESSION["MustNotLogin"]))
										{
											echo "<li class=\"resp-tab-item\" aria-controls=\"tab_item-2\"><span>Change Password</span></li>";
										}
										?>
										<!-- <li class="resp-tab-item" aria-controls="tab_item-2"><span>Change Password</span></li> -->
										<li class="resp-tab-item" aria-controls="tab_item-3"><span>Change Info</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-4"><span>History</span></li>
									</ul>	

									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											
										<table class="table table-bordered">
										<tbody>
											<tr>
											<td>Mã Khách Hàng : </td>
											<td><?php echo "{$_SESSION["MaKH"]}"?></td>
											</tr>
											<tr>
											<td>Họ Và Tên : </td>
											<td><?php echo "{$_SESSION["hoten"]}"?></td>
											</tr>
											<tr>
											<td>Email Đăng Nhập : </td>
											<td><?php echo "{$_SESSION["email"]}"?></td>
											<tr>
											<tr>
											<td>Địa Chỉ : </td>
											<td><?php echo "{$_SESSION["diachi"]}"?></td>
											</tr>
											<tr>
											<td>Điện Thoại</td>
											<td><?php echo "{$_SESSION["sdt"]}"?></td>
										</tbody>
										</table>

										</div> 
									</div>	 
									
									<?php 
										if (!isset($_SESSION["MustNotLogin"]))
										{
											$chuoi = <<<EDO
											<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-2">
											<div class="facts">
														<form action ="index.php?mod=User&act=ChangePass" method="post">
														<table class="table table-bordered">
														<tbody>
														<tr>
														<td>Email đăng nhập : </td>
														<td><?php echo "{$_SESSION["email"]}"?></td>
														</tr>
														<tr>
														<td>Mật khẩu cũ : </td>
														<td><input name="pw_old" type="password" id="pw_old" style="width:220px"/></td>
														</tr>	
														<tr>
														<td>Mật khẩu mới :</td>
														<td><input name="pw" type="password" id="pw" style="width:220px"/></td>
														</tr>
														<tr>	
														<td>Xác nhận mật khẩu mới : </td>
														<td><input name="cpw" type="password" id="cpw" style="width:220px"/></td>
														</tr>	
														<tr>
														<td height="35" colspan="2" align="center" style="background:#E4E4E4; padding:5px;">
														<input type="submit" value="Đồng ý" class="button1">
														<input type="reset" value="Nhập lại" class="button1">
														<a href="index.php"><input type="button" value="Thoát" class="button1"></a>
														<input name="change_pw" type="hidden" value="act" /></td>
														
														</td>
														</tr>
														</tbody>
														</table>
														
														</form>
												
											</div>
										</div> 		
EDO;										
											echo $chuoi;
										}
										?>
									

									<div class="tab-3 resp-tab-content" aria-labelledby="tab_item-3">
										<div class="facts">
										<form action ="index.php?mod=User&act=ChangeProfile" method="post">
													<table class="table table-bordered">
																									
														<tr style="background:#F9F9F9">  
															<td height="50" style="padding-left:70px"><div align="left" style="width:120px">Email đăng nhập:</div></td>
															<td width="405" style="padding-left:15px" align="left">
															<?php echo "{$_SESSION["email"]}"?>
																<div id="kqkiemtra"></div>
															</td>            
														</tr>		  
														<tr style="background:#FFFFFF">            
															<td height="30" style="padding-left:70px"><div align="left" style="width:120px">Họ tên:</div></td>
															<td width="405" style="padding-left:15px">
															<div align="left">
																<input type="text" name="ten" style="width:220px" value="<?php echo "{$_SESSION["hoten"]}"?>"/>
															<font color="#FF0000">*</font></div></td>            
														</tr>
														
														<tr style="background:#F9F9F9">   
															<td height="30" style="padding-left:70px"><div align="left" style="width:120px">Địa chỉ:</div></td>
															<td width="405" style="padding-left:15px" valign="top" align="left">              
																<textarea name="diachi" rows="6" style="width:220px"><?php echo "{$_SESSION["diachi"]}"?></textarea>
															<font color="#FF0000">*</font></td>            
														</tr>       
														<tr style="background:#FFFFFF">            
															<td height="30" style="padding-left:70px"><div align="left" style="width:120px">Điện thoại:</div></td>
															<td width="405" style="padding-left:15px">
															<div align="left">
																<input type="text" name="dienthoai" style="width:220px" value="<?php echo "{$_SESSION["sdt"]}"?>" onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')"/>
															<font color="#FF0000">*</font></div></td>            
														</tr>
														
														<tr>
															<td height="35" colspan="2" align="center" style="background:#E4E4E4; padding:5px;">
															<div align="center">
																<input type="submit" value="Sửa" class="button1">
																<input type="reset" value="Nhập lại" class="button1">
																<a href="index.php"><input type="button" value="Thoát" class="button1"></a>
															<input type="hidden" name="change"/>
															</div></td>
														</tr>
													</table>
													
													</form>
										</div>
									</div> 		

									
									<div class="tab-4 resp-tab-content" aria-labelledby="tab_item-4">
										<div class="facts">

										
										<table class="table table-bordered">

							
												<tr height="30" bgcolor="">
													<td align="center" width="91" ><strong>Ngày đặt</strong></td>
													<td align="center" width="83" ><strong>Nơi giao</strong></td>
													<td align="center" width="75" ><strong>Tình trạng</strong></td>
													<td align="center" width="51" ><strong>Tổng tiền</strong></td>
													<td align="center" width="53" ><strong>Xem Chi Tiết</strong></td>  
												</tr>  

												<?php
												include_once "Controller/Cart/LichSuMuaHang.php";	
												foreach($rs as $row)
												{
													echo "<tr bgcolor=\"\"><td align=\"center\" >";
													echo $row['NgayDat']."</td><td align=\"center\" >";
													echo $row['NoiGiao']."</td><td align=\"center\" >";
													echo $row['TinhTrang']."</td><td align=\"center\" >";
													echo $row['TongTien']."</td><td align=\"center\" >";
													echo "<a href=\"index.php?mod=Cart&act=ChiTietLichSu&id=$row[MaHD]&LS=1\"><img src=\"Images/details.png\" /></a></td>";
													echo "</tr>";
												}
												echo "<tr><td colspan=\"5\" align=\"center\" > Page: ";
												for($i=1;$i<=$numpages;$i++)
												{	
													echo "<a href=\"index.php?mod=Cart&act=LichSuMuaHang&page=$i\" style=\"color:#C03\"><strong>$i</strong></a> ";
												}
												echo "</td></tr>";
												?>

											</table>


										</div>
									</div> 	

								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#infouser').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <script>
		$('#myModal88').modal('show');
	</script>   -->