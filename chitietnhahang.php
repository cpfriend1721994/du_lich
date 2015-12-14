<?php
	if(isset($_GET['nhahang']))
	{
		$n=$_GET['nhahang'];
		include('dbconect.php');
		$sql="select * from nhahang where manh='$n'";
		$result=mysql_query($sql);
		$rows=mysql_fetch_array($result);
		?>
        <font color="#0033FF" size="5"><?php echo $rows['tennhahang']; ?></font>
<table width="590" border="0" align="center">
  <tr>
    <td colspan="2"><img src="anh/eb.jpg"></td>
  </tr>
  <tr>
    <td width="300" rowspan="8"><img src="anhnhahang/<?php echo $rows['anh']; ?>" width="300"></td>
    <td width="300" height="20" class="chu">Tên Khách Sạn:</td>
  </tr>
  <tr>
    <td height="20" align="center"><?php echo $rows['tennhahang']; ?></td>
  </tr>
  <tr>
    <td height="20" class="chu">Địa Chỉ</td>
  </tr>
  <tr>
    <td height="20" align="center"><?php echo $rows['diachi']; ?></td>
  </tr>
  <tr>
    <td height="20" class="chu">Điện Thoại</td>
  </tr>
  <tr>
    <td height="20" align="center"><?php echo $rows['sodt']; ?></td>
  </tr>
  <tr>
   	<td height="16" class="chu">Giới Thiệu</td>
  </tr>
  <tr>
    <td align="justify"><?php echo $rows['gioithieu']; ?></td>
  </tr>
  <tr>
    <td colspan="2"><img src="anh/duongnhahang.jpg" /></td>
  </tr>
</table>
<?php
	}
?>