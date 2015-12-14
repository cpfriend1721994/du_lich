<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php
	if(isset($_GET['chitiethoatdong']))
	{
		$m=$_GET['chitiethoatdong'];
		include('dbconect.php');
		$sql="select * from cthoatdong where id_hd='$m'";
		$result=@mysql_query($sql);
		$rows=@mysql_fetch_array($result);
	}
?>
<table width="500" border="0" align="center" class="lechotable">
	<tr>
    	<td height="27" colspan="3"><font color="#FF0000" size="4" style="font-weight:bold;"><?php echo $rows['ten1hd']; ?></font></td>
  </tr>
	<tr>
	  <td height="9" colspan="3"><img src="anh/chuan.jpg"></td>
  </tr>
  <tr>
    <td>
    <br>
   	  <div class="anh"><img src="anhhoatdong/<?php echo $rows['anh'];?>" width="300" height="300"></div>
      <font color="#0066FF" size="3" style="font-weight:bold;"><?php echo $rows['ten1hd']; ?></font><br>
		<div style="font-size:17px;" align="justify"><?php echo $rows['chitiet'];?></div>
    </td>
  </tr>
  <tr>
	  <td height="9" colspan="3"><img src="anh/chuan.jpg"></td>
  </tr>
</table>


