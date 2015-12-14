<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php
include('dbconect.php');
?>
<font color="#00CCFF" face="Georgia, Times New Roman, Times, serif" size="6">Thông Tin Các Tài Nguyên Du Lịch</font>
<?php
$sql1="select * from loaihinhdulich";
$result1=mysql_query($sql1);
$a=@mysql_num_rows($result1);
for($i=1;$i<=$a;$i++)
{
    $sql="SELECT * from tainguyendulich where malh='$i'";
	$result=mysql_query($sql);
	?>
    <table  width="600" border="0">
    <tr>
	  <td><img src="anh/chuan.jpg"></td>
  	</tr>
        <tr>
        	<td>
            <?php
				$sql2="select * from loaihinhdulich where malh='$i'";
				$result2=mysql_query($sql2);
				$rows2=@mysql_fetch_array($result2);
				echo $rows2['tenlh'];
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
			<a href="index.php?chitiettainguyen=<?php echo $rows['matn'];?>">&diams; <?php echo $rows['tentn'];?></a>	
     		</div>
        <?php } ?>
     		</td>
       </tr>
	</table>
<?php
}
?>
   
  
  