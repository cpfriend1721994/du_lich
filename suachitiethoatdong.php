<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php 
include('dbconect.php');
$sql="select * from cthoatdong";
$result=mysql_query($sql);
?>
<div align="center">
  <form name="form1" method="post" action="">
    <table width="600" border="0">
      <tr>
        <td width="150" align="center" class="chu">Tên hoạt động</td>
        <td width="60" align="center" class="chu">Sửa</td>
        <td width="60" align="center" class="chu">Xóa</td>
      </tr>
      <tr>
	  <td colspan="3"><img src="anh/chuan.jpg"></td>
      </tr>
<?php
	while($rows=(mysql_fetch_array($result)))
	{
?>
      <tr>
        <td align="center"><?php echo $rows['ten1hd'];?></td>
        <td align="center"><a href="index.php?suahoatdong=<?php echo $rows['id_hd'];?>">Sửa</a></td>
        <td align="center"><a href="index.php?xoahoatdong=<?php echo $rows['id_hd'];?>">Xóa</a></td>
      </tr>
      <?php
	}
		?>
        <tr>
	  <td colspan="3"><img src="anh/chuan.jpg"></td>
      </tr>
    </table>
  </form>
</div>
