<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php 
	include ('dbconect.php');
	$sql="select * from khachsan";
	$result=mysql_query($sql);
?>
<table width="600" border="0" class="tanle">
  <tr>
    <td class="chu">Hạng Sao</td>
    <td class="chu">Tên Khách Sạn</td>
    <td class="chu">Điện Thoại</td>
    <td class="chu">Số Phòng</td>
    <td class="chu">Sửa</td>
    <td class="chu">Xóa</td>
  </tr>
  <tr>
	  <td colspan="6"><img src="anh/chuan.jpg"></td>
      </tr>
   <?php
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['hangsao']; ?></td>
    <td align="center"><?php echo $rows['tenks']; ?></td>
    <td align="center"><?php echo $rows['dienthoai']; ?></td>
    <td align="center"><?php echo $rows['sophong']; ?></td>
    <td align="center"><a href="index.php?sua=<?php echo $rows['maks']; ?>">Sửa</a></td>
    <td align="center"><a href="index.php?xoa=<?php echo $rows['maks']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>
  <tr>
	  <td colspan="6"><img src="anh/chuan.jpg"></td>
      </tr>
</table>
