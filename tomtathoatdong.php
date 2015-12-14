<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php
	if(isset($_GET['top']))
	{
		$t=$_GET['top'];
		if($t==12)
		{
			$t='2';	
		}
		if($t==13)
		{
			$t='1';	
		}
	include('dbconect.php');
	$sql="select * from cthoatdong where mahd='$t'";
	$result=mysql_query($sql);
	$sql1="select * from hoatdong where mahd='$t'";
	$result1=mysql_query($sql1);
	$row=mysql_fetch_array($result1);
?>
<table width="600" border="0" bordercolor="#3333FF" align="center" class="lechotable">
	<tr>
    	<td height="29" colspan="3"><font color="#FF0000" size="4">Các hoạt động du lịch &gt; <?php echo $row['tenhd']; ?></font></td>
  </tr>
	<tr>
	  <td height="6" colspan="3"><img src="anh/chuan.jpg"></td>
  </tr>
  <br>
  <?php 
  		while($rows=@mysql_fetch_array($result))
		{
  ?>
  <tr>
    <td align="center" width="100"><img src="anhhoatdong/<?php echo $rows['anh'];?>" width="100" height="100" /></td>
    <td align="center" width="150"><font size="3"><?php echo $rows['ten1hd']; ?></font></td>
    <td align="justify" width="350"><font size="3"><?php echo substr($rows['chitiet'],0,210).'...'; ?></font>
    <a href="index.php?chitiethoatdong=<?php echo $rows['id_hd'];?>">&raquo;</a><br />
  </tr>
  <?php
	}
	?>
    <tr>
	  <td height="6" colspan="3"><img src="anh/chuan.jpg"></td>
  </tr>
</table>
<?php
	}
	?>