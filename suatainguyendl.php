<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php 
	include('dbconect.php');
	$sql="select * from tainguyendulich";
	$result=mysql_query($sql);
?>
 <div align="center">
    <table width="600" border="0">
      <tr>
        <td width="200" class="chu"><div align="center">Tên tài nguyên</div></td>
        <td width="98" class="chu"><div align="center">Sửa</div></td>
        <td width="100" class="chu"><div align="center">Xóa</div></td>
      </tr>
      <tr>
	  <td colspan="3"><img src="anh/chuan.jpg"></td>
      </tr>
       <?php
	  while($rows=mysql_fetch_array($result))
	  {
	   ?>
      <tr>
        <td align="center"><?php echo $rows['tentn'];?></td>
        <td align="center"><a href="index.php?suatainguyen=<?php echo $rows['matn'];?>">Sửa</a></td>
        <td align="center"><a href="index.php?xoatainguyen=<?php echo $rows['matn'];?>">Xóa</a></td>
      </tr>
      <?php
	  }
	  ?>
       <tr>
	  <td colspan="3"><img src="anh/chuan.jpg"></td>
      </tr>
    </table>
  </div>