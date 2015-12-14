<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php 
include('dbconect.php');
$sql="select * from nhahang ";
$result=mysql_query($sql);
?>
  <div align="center">
    <table width="622" border="0">
      <tr>
        <td width="200" class="chu"><div align="center">Tên nhà hàng</div></td>
        <td width="200" class="chu"><div align="center">Địa chỉ</div></td>
        <td width="98" class="chu"><div align="center">Sửa</div></td>
        <td width="100" class="chu"><div align="center">Xóa</div></td>
      </tr>
      <tr>
	  <td colspan="4"><img src="anh/chuan.jpg"></td>
      </tr>
       <?php
	  while($rows=mysql_fetch_array($result))
	  {
	   ?>
      <tr>
        <td align="center"><?php echo $rows['tennhahang'];?></td>
        <td align="center"><?php echo $rows['diachi'];?></td>
        <td align="center"><a href="index.php?suanhahang=<?php echo $rows['manh'];?>">Sửa</a></td>
        <td align="center"><a href="index.php?xoanhahang=<?php echo $rows['manh'];?>">Xóa</a></td>
      </tr>
      <?php
	  }
	  ?>
      <tr>
	  <td colspan="4"><img src="anh/chuan.jpg"></td>
      </tr>
    </table>
  </div>