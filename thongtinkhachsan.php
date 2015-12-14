<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php
include('dbconect.php');
?>
<font color="#FF0000" face="Georgia, Times New Roman, Times, serif" size="6">Khách Sạn</font>
<?php
for($i=5;$i>0;$i--)
{
    $sql="select * from khachsan where hangsao='$i'";
	$result=mysql_query($sql);
	?>
    <table  width="600" border="0">
        <tr>
        	<td height="50"><img src="anh/<?php echo "$i";?>sao.jpg" />
            </td>
        </tr>
        <tr>
           	<td align="center">
            <?php
			while($rows=mysql_fetch_array($result))
			{
			?>
			<div class="table">
			<a href="index.php?khachsan=<?php echo $rows['maks'];?>">&diams; <?php echo $rows['tenks'];?></a>	
     		</div>
        <?php } ?>
     		</td>
       </tr>
	</table>
<?php
}
?>
   
  
  