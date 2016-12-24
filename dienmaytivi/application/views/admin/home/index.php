<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Bảng điều khiển</h5>
			<span>Trang quản lý hệ thống</span>
		</div>
		
		<div class="clear"></div>
	</div>
</div>

<div class="line"></div>

<div class="wrapper">
	
	<div class="widgets">
	     <!-- Stats -->
		
<!-- Amount -->
<div class="oneTwo">
	<div class="widget">
		<div class="title">
			<img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/money.png">
			<h6>Doanh số</h6>
		</div>
		
		<table width="100%" cellspacing="0" cellpadding="0" class="sTable myTable">
			<tbody>
				
					<tr>
							<td class="fontB blue f13">Tổng doanh số</td>
							<td style="width:120px;" class="textR webStatsLink red">123,456,789 đ</td>
					</tr>
				    
				    <tr>
							<td class="fontB blue f13">Doanh số hôm nay</td>
							<td style="width:120px;" class="textR webStatsLink red">123,456 đ</td>
					</tr>
					
				    <tr>
							<td class="fontB blue f13">Doanh số theo tháng</td>
							<td style="width:120px;" class="textR webStatsLink red">
							10,000,000
							</td>
					</tr>
				    
			</tbody>
		</table>
	</div>
</div>


<!-- User -->
<div class="oneTwo">
	<div class="widget">
		<div class="title">
			<img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/users.png">
			<h6>Thống kê dữ liệu</h6>
		</div>
		
		<table width="100%" cellspacing="0" cellpadding="0" class="sTable myTable">
			<tbody>
				
				<tr>
					<td>
						<div class="left">Tổng số giao dịch</div>
						
					</td>
					
					<td class="textC webStatsLink">
						///				</td>
				</tr>
				
				<tr>
					<td>
						<div class="left">Tổng số sản phẩm</div>
						
					</td>
					
					<td class="textC webStatsLink">
						///				</td>
				</tr>
			
				
				<tr>
					<td>
						<div class="left">Tổng số thành viên</div>
						
					</td>
					
					<td class="textC webStatsLink">
						///				</td>
				</tr>
				
			</tbody>
		</table>
	</div>
</div>

		<div class="clear"></div>
		
		<!-- Giao dich thanh cong gan day nhat -->
		
	<div class="widget">
		<div class="title">
			<span class="titleIcon"><div class="checker" id="uniform-titleCheck"><span><input type="checkbox" name="titleCheck" id="titleCheck" style="opacity: 0;"></span></div></span>
			<h6>Danh sách Giao dịch</h6>
		</div>
		
		<table width="100%" cellspacing="0" cellpadding="0" id="checkAll" class="sTable mTable myTable">
			
			
			<thead>
				<tr>
					<td style="width:10px;"><img src="<?php echo public_url('admin')?>/images/icons/tableArrows.png"></td>
					<td style="width:60px;">Mã số</td>
					<td style="width:75px;">Thành viên</td>
					<td style="width:90px;">Số tiền</td>
					<td>Hình thức</td>
					<td style="width:100px;">Giao dịch</td>
					<td style="width:75px;">Ngày tạo</td>
					<td style="width:55px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="8">
						 <div class="list_action itemActions">
								<a url="admin/tran/del_all.html" class="button blueB" id="submit" href="#submit">
									<span style="color:white;">Xóa hết</span>
								</a>
						 </div>
					</td>
				</tr>
			</tfoot>
			
			
		</table>
	</div>

        	</div>
	
</div>


<div class="clear mt30"></div>

