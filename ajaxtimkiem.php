<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php 
	$q=$_GET["q"];
	include('dbconect.php');
	$sql="select * from tourdulich where tentour like '%$q%'";
	$result=mysql_query($sql);
?>
<table width="600" border="0" align="center">
  <tr>
    <td width="107" class="chu" align="center">Ảnh</td>
    <td width="154" class="chu" align="center">Tên tour</td>
    <td width="62" class="chu" align="center">Giá</td>
    <td width="80" class="chu" align="center">Số ngày</td>
    <td width="175" class="chu" align="center">Chi Tiết</td>
  </tr>
  <?php
  	while($rows=mysql_fetch_array($result))
	{
  ?>
  <tr>
    <td align="center"><img src="anhtourdulich/<?php echo $rows['anh'];?>" width="100" height="100"></td>
    <td align="center"><?php echo $rows['tentour'];?></td>
    <td align="center"><?php echo $rows['giatien'];?>$</td>
    <td align="center"><?php echo $rows['songay'];?></td>
    <td align="center"><a href="index.php?tour=<?php echo $rows['matour'];?>">Chi tiết</a></td>
  </tr>
  <?php
	}
	?>
</table>
