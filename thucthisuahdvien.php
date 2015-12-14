<?php
$n=$_POST['txtname'];
$ngay=$_POST['cbbday'];
$thang=$_POST['cbbmonth'];
$nam=$_POST['cbbyear'];
$dc=$_POST['txtdc'];
$gt=$_POST['cbbgioitinh'];
$dt=$_POST['txtdt'];
$mahdv=$_POST['txtmahdv'];
include('dbconect.php');
$sql="update huongdanvien set tenhdv='$n',ngaysinh=concat('$ngay','-','$thang','-','$nam'),diachi='$dc',sodt='$dt',gioitinh='$gt',anh ='{$_FILES['upload']['name']}' where mahdv='$mahdv'";
$result=mysql_query($sql);
	$filename=$_FILES['upload']['name'];
	$result=mysql_query($sql);
	if($result)
	{
		$filename=$_FILES['upload']['name'];
		if(move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/PHP/Do_An/anhhuongdanvien/$filename"))
		{
		?>  
              	<script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?top=31";
                </script>
                <?php
		}
				?>
				<script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?top=31";
                </script>
                <?php
	}
	else
	{
			?>
   				 <script language="javascript">
					window.alert("Sửa thông tin không thành công");
					window.location="index.php?top=31";
				</script>
                <?php
	}
?>