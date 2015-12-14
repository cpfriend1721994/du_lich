<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php
	if(isset($_GET['top']))
	{
		$t=$_GET['top'];
		if($t==14)
		{
			$t='1';	
		}
		if($t==15)
		{
			$t='2';	
		}
		if($t==16)
		{
			$t='3';	
		}
		if($t==10)
		{
			$t='5';	
		}
		if($t==11)
		{
			$t='4';	
		}
	include('dbconect.php');
	$sql="select * from tainguyendulich where malh='$t'";
	$result=mysql_query($sql);
	$sql1="select * from loaihinhdulich where malh='$t'";
	$result1=mysql_query($sql1);
	$row=mysql_fetch_array($result1);
?>
<table width="600" border="0" bordercolor="#3333FF" align="center" class="lechotable">
	<tr>
    	<td height="29" colspan="3"><font color="#FF0000" size="4">Các tài nguyên du lịch &gt; <?php echo $row['tenlh']; ?></font></td>
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
    <td align="center" width="100"><img src="anhtainguyen/<?php echo $rows['anh'];?>" width="100" height="100" /></td>
    <td align="center" width="150"><font size="3"><?php echo $rows['tentn']; ?></font></td>
    <td align="justify" width="350"><font size="3"><?php echo substr($rows['chitiet'],0,210).'...'; ?></font>
    <a href="index.php?chitiettainguyen=<?php echo $rows['matn'];?>">&raquo;</a><br />
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