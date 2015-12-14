<?php
	include('dbconect.php');
	$role=0;
	if(isset($_SESSION['username']))
	{
		$u=$_SESSION['username'];
			$sql="select * from thanhvien where username='$u'";
			$result=mysql_query($sql);
			$rows=mysql_fetch_array($result);
			$role=$rows['quyen'];
	}
?>
<div align="center">
<form action=""> 
<table width="950" border="0" cellpadding="0" cellspacing="0" class="mainmenu">
   <tr>
   <td width="950" align="center" valign="middle" style="background-color:#06C">
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
           	<td>
			<div class="menu">
			<ul>
            	<li><a href="index.php" title="Trang Chủ">Trang Chủ</a></li>
				<li><a href="index.php?top=35" title="Giới thiệu về Hà Nội">Giới thiệu về Hà Nội &nabla;</a>
					<ul>
						<li><a class="drop" href="index.php?top=1">Truyền Thống Văn Hóa</a></li>
                        <li><a class="drop" href="index.php?top=2">Lịch sử</a></li>
						<li><a class="drop" href="index.php?top=3">Các vùng của Hà Nội</a></li>
						<li><a class="drop" href="index.php?top=4">Tổng Quan</a></li>
						<li><a class="drop" href="index.php?top=5">Thời Tiết</a></li>
						<li><a class="drop" href="index.php?top=6">Kinh Tế</a></li>
					</ul>
				</li>
                <li><a href="" title="Thông tin hữu ích">Dịch vụ du lich &nabla; </a>
					<ul>
						<li><a class="drop" href="index.php?top=7">Các tour du lịch</a></li>
                        <li><a class="drop" href="index.php?top=8" >Nhà Hàng</a></li>
						<li><a class="drop" href="index.php?top=9">Khách Sạn</a></li>
                    </ul>
				</li>
                <li><a href="index.php?top=33" title="Các hoạt động du lịch">Các hoạt động du lịch &nabla; </a>
					<ul>
						<li><a class="drop" href="index.php?top=12">Ẩm Thực</a></li>
						<li><a class="drop" href="index.php?top=13">Lễ Hội</a></li>
                    </ul>
				</li>
                <li><a href="index.php?top=34" title="Thông tin hữu ích">Tài Nguyên Du Lịch &nabla; </a>
					<ul>
                        <li><a class="drop" href="index.php?top=14">Di Tích Lịch Sử</a></li>
                        <li><a class="drop" href="index.php?top=15">Du Lịch Tôn Giáo</a></li>
                        <li><a class="drop" href="index.php?top=16">Du lịch thiên nhiên</a></li>
                        <li><a class="drop" href="index.php?top=10">Bảo Tàng Hà Nội</a></li>
                        <li><a class="drop" href="index.php?top=11">Du Lịch Làng Nghề</a></li>
                    </ul>
				</li>
                 <?php
				if(($role=='1') or ($role=='2'))
				{
				?>
             	<li><a href="" title="Cập nhật thông tin">Cập nhật thông tin &nabla; </a>
					<ul>
                    	<li><a class="drop" href="index.php?top=21">Cập nhật loại hoạt động</a></li>
						<li><a class="drop" href="index.php?top=17">Cập nhật hoạt động</a></li>
                        <li><a class="drop" href="index.php?top=22">Cập nhật loại hình du lịch</a></li>
						<li><a class="drop" href="index.php?top=20">Cập nhật tài nguyên</a></li>
                        <li><a class="drop" href="index.php?top=19">Cập Nhật Khách Sạn</a></li>
                        <li><a class="drop" href="index.php?top=27">Cập nhật loại nhà hàng</a></li>
                        <li><a class="drop" href="index.php?top=25">Cập nhật nhà hàng</a></li>
                        <li><a class="drop" href="index.php?top=26">Cập nhật hướng dẫn viên</a></li>
                        <li><a class="drop" href="index.php?top=24">cập nhật loại tour du lịch</a></li>
                        <li><a class="drop" href="index.php?top=18">Cập nhật tour du lịch</a></li>
                    </ul>
				</li>
                  <?php
				}
				?>
                 <?php
				if($role=='2')
				{
				?>
				<li><a href="" title="Cập nhật thông tin">Sửa thông tin &nabla; </a>
					<ul>
                        <li><a class="drop" href="index.php?top=23">Sửa thông tin khách sạn</a></li>
                        <li><a class="drop" href="index.php?top=28">Sửa tour du lịch</a></li>
                         <li><a class="drop" href="index.php?top=29">Sửa Xóa nhà Hàng</a></li>
                         <li><a class="drop" href="index.php?top=30">Sửa xóa chi tiết hoạt động</a></li>
                         <li><a class="drop" href="index.php?top=31">Sửa thông tin hd viên</a></li>
                         <li><a class="drop" href="index.php?top=32">Sửa tài nguyên du lịch</a></li>
           			</ul>
				</li>
              	   <?php
				}
				?>
			</ul>
     	</div>
     	</td>
   		</tr>
	</table>
	</td>
    </tr>
</table>
</form>
</div>