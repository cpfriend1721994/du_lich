<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php
	if(isset($_GET['tour']))
	{
		$t=$_GET['tour'];
		require_once('dbconect.php');
		$sql="select * from tourdulich where matour='$t'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
	}
?>
<table width="600" border="0">
  <tr>
    <td colspan="2"><font size="5" color="#0033FF"><?php echo $rows['tentour'];?></font></td>
  </tr>
  <tr>
    <td colspan="2"><img src="anh/chuan.jpg"></td>
  </tr>
  <tr>
    <td width="300" rowspan="8"><img src="anhtourdulich/<?php echo $rows['anh'];?>" width="300" height="240"></td>
    <td width="300" height="29" class="chu">Tên tour:</td>
  </tr>
  <tr>
    <td height="25" align="center"><?php echo $rows['tentour'];?></td>
  </tr>
  <tr>
    <td height="31" class="chu">Số ngày:</td>
  </tr>
  <tr>
    <td height="28" align="center"><?php echo $rows['songay'];?></td>
  </tr>
  <tr>
    <td height="28" class="chu">Giá
    </td>
  </tr>
  <tr>
    <td height="26" align="center"><?php echo $rows['giatien'];?>$</td>
  </tr>
  <tr>
    <td height="29" class="chu">Tên hướng dẫn viên:</td>
  </tr>
  <tr>
    <td height="12" align="center">
    	<?php
			require_once('dbconect.php');
			$sql1="select * from huongdanvien where mahdv= '$rows[mahdv]'";
			$result1=mysql_query($sql1);
			$row=mysql_fetch_array($result1);
			echo $row['tenhdv'];
		?>
    </td>
  </tr>
   <?php 
  	if("$rows[maks]"!=0)
	{
 	?>
  <tr>
    <td height="26" align="center" class="chu">Khách Sạn:</td>
    <td align="center">
    	<?php
			require_once('dbconect.php');
			$sql1="select * from khachsan where maks= '$rows[maks]'";
			$result1=mysql_query($sql1);
			$row=mysql_fetch_array($result1);
			echo $row['tenks'];
		?>
    </td>
  </tr>
  <?php
	}
	?>
  <tr>
    <td height="25" colspan="2" class="chu">Hành Trình</td>
  </tr>
  <tr>
    <td height="7" colspan="2" align="justify"><?php echo $rows['hanhtrinh'];?></td>
  </tr>
  <tr>
    <td height="7" align="right"><a href="dattour.php?dattour=<?php echo $rows['matour']; ?>"><img src="anh/cooltext462726315MouseOver.png" style="margin:0px; border-color:#FFF" /></a></td>
    <td height="7" align="left"><a href="index.php"><img src="anh/cooltext462726487.png" style="margin:0px; border-color:#FFF" /></a></td>
  </tr>
  <tr>
    <td colspan="2"><img src="anh/chuan.jpg"></td>
  </tr>
</table>
