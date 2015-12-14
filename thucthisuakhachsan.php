<?php 
	$n=$_POST['txtname'];
	$hs=$_POST['cbbhs'];
	$dt=$_POST['txtdt'];
	$sp=$_POST['txtsp'];
	$gia=$_POST['txtgia'];
	$dc=$_POST['txtdiachi'];
	$web=$_POST['txtweb'];
	$mks=$_POST['txtmaks'];
	include("dbconect.php");
	$sql="UPDATE khachsan SET tenks='$n', hangsao='$hs', diachi='$dc', dienthoai='$dt', sophong='$sp', giaphong='$gia' ,website='$web',anh='{$_FILES['upload']['name']}' where maks='$mks'";
	$result=mysql_query($sql);
	$filename=$_FILES['upload']['name'];
	$result=mysql_query($sql);
	if($result)
	{
		$filename=$_FILES['upload']['name'];
		if(move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/PHP/Do_An/anhkhachsan/$filename"))
		{
		?>
              	<script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?khachsan=<?php echo "$mks"; ?>";
                </script>
                <?php
		}
				?>
				<script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?khachsan=<?php echo "$mks"; ?>";
                </script>
                <?php
	}
	else
	{
			?>
   				 <script language="javascript">
					window.alert("Sửa thông tin không thành công");
					window.location="index.php?khachsan=<?php echo $rows['maks'];?>";
				</script>
                <?php
	}
?>