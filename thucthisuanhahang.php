<?php
$n=$_POST['txtname'];
$dc=$_POST['txtdc'];
$dt=$_POST['txtdt'];
$gt=$_POST['txtgt'];
$lnh=$_POST['cbbnhahang'];
$manh=$_POST['txtmanh'];
include('dbconect.php');
$sql="update nhahang set tennhahang='$n' ,diachi='$dc' ,sodt='$dt' ,gioithieu='$gt' ,anh='{$_FILES['upload']['name']}',maloai='$lnh' where manh='$manh'";
	$result=mysql_query($sql);
	$filename=$_FILES['upload']['name'];
	$result=mysql_query($sql);
	if($result)
	{
		$filename=$_FILES['upload']['name'];
		if(move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/PHP/Do_An/anhnhahang/$filename"))
		{
		?>
              	<script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?nhahang=<?php echo "$manh";?>";
                </script>
                <?php
		}
				?>
				<script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?nhahang=<?php echo "$manh";?>";
                </script>
                <?php
	}
	else
	{
			?>
   				 <script language="javascript">
					window.alert("Sửa thông tin không thành công");
					window.location="index.php?nhahang=<?php echo "$manh";?>";
				</script>
                <?php
	}
?>
