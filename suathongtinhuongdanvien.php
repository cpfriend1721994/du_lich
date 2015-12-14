<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php 
	include('dbconect.php');
	$sql="select * from huongdanvien";
	$result=mysql_query($sql);
?>
 <div align="center">
    <table width="622" border="0">
      <tr>
        <td width="200" class="chu"><div align="center">Tên hướng dẫn viên</div></td>
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
        <td align="center"><?php echo $rows['tenhdv'];?></td>
        <td align="center"><?php echo $rows['diachi'];?></td>
        <td align="center"><a href="index.php?suahdv=<?php echo $rows['mahdv'];?>">Sửa</a></td>
        <td align="center"><a href="index.php?xoahdv=<?php echo $rows['mahdv'];?>">Xóa</a></td>
      </tr>
      <?php
	  }
	  ?>
      <tr>
	  <td colspan="4"><img src="anh/chuan.jpg"></td>
      </tr>
    </table>
  </div>