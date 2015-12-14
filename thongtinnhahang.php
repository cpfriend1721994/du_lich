<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php
include('dbconect.php');
?>
<font color="#00CCFF" face="Georgia, Times New Roman, Times, serif" size="6">Nhà Hàng</font>
<?php
$sql1="select * from loainhahang";
$result1=mysql_query($sql1);
$a=@mysql_num_rows($result1);
for($i=1;$i<=$a;$i++)
{
    $sql="SELECT manh, tennhahang, lnh.tenloai
		FROM nhahang AS nh
		JOIN loainhahang AS lnh ON nh.maloai = lnh.maloai
		WHERE lnh.maloai = '$i'";
	$result=mysql_query($sql);
	?>
    <table  width="600" border="0">
        <tr>
        	<td>
            <?php
				$sql2="select * from loainhahang where maloai='$i'";
				$result2=mysql_query($sql2);
				$rows2=mysql_fetch_array($result2);
				echo $rows2['tenloai'];
			?>
            </td>
        </tr>
        <tr>
           	<td align="center">
            <?php
			while($rows=@mysql_fetch_array($result))
			{
			?>
			<div class="table">
			<a href="index.php?nhahang=<?php echo $rows['manh'];?>">&diams; <?php echo $rows['tennhahang'];?></a>	
     		</div>
        <?php } ?>
     		</td>
       </tr>

	</table>
<?php
}
?>
<table  width="600" border="0">
   <tr>
	  <td><img src="anh/chuan.jpg"></td>
  	</tr>
</table>
  
  