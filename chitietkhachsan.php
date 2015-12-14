<?php
	if(isset($_GET['khachsan']))
	{
		$n=$_GET['khachsan'];
		include('dbconect.php');
		$sql="select * from khachsan where maks='$n'";
		$result=mysql_query($sql);
		$rows=mysql_fetch_array($result);
		?>
        <font color="#0033FF" size="5"><?php echo $rows['tenks']; ?></font>
<table width="590" border="0" align="center">
  <tr>
    <td colspan="2"><img src="anh/eb.jpg"></td>
  </tr>
  <tr>
    <td width="300" rowspan="10"><img src="anhkhachsan/<?php echo $rows['anh']; ?>" width="300"></td>
    <td width="300" height="20" class="chu">Tên Khách Sạn:</td>
  </tr>
  <tr>
    <td height="20" align="center"><?php echo $rows['tenks']; ?></td>
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
    <td height="20" align="center"><?php echo $rows['dienthoai']; ?></td>
  </tr>
  <tr>
   	<td height="16" class="chu">Số Phòng</td>
  </tr>
  <tr>
    <td height="17" align="center"><?php echo $rows['sophong']; ?></td>
  </tr>
  <tr>
    <td class="chu">Website</td>
  </tr>
  <tr>
    <td align="center"><?php echo $rows['website']; ?></td>
  </tr>
  <tr>
    <td colspan="2"><img src="anh/<?php echo $rows['hangsao'];?>sao.jpg" /></td>
  </tr>
</table>
<?php
	}
?>