<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php 
	include ('dbconect.php');
	$sql="select * from tourdulich";
	$result=mysql_query($sql);
?>
<table width="600" border="0" class="tanle" align="center">
  <tr>
    <td class="chu" align="center">Tên tour</td>
    <td class="chu" align="center">Giá</td>
    <td class="chu" align="center">Số Ngày</td>
    <td class="chu" align="center">Sửa</td>
    <td class="chu" align="center">Xóa</td>
  </tr>
  <tr>
	  <td colspan="6"><img src="anh/chuan.jpg"></td>
      </tr>
   <?php
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center"><?php echo $rows['tentour']; ?></td>
    <td align="center"><?php echo $rows['giatien']; ?></td>
    <td align="center"><?php echo $rows['songay']; ?></td>
	<td align="center"><a href="index.php?suatourdulich=<?php echo $rows['matour']; ?>">Sửa</a></td>
	<td align="center"><a href="index.php?xoatourdulich=<?php echo $rows['matour']; ?>">Xóa</a></td>
  </tr>
  <?php
		}
  ?>
  <tr>
	  <td colspan="6"><img src="anh/chuan.jpg"></td>
      </tr>
</table>
