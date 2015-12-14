<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript">
function thoat()
{
	window.location="index.php";	
}
function checkInput()
{
		if(document.frmregister.txtname.value=="")
		{
			window.alert('Bạn chưa nhập tên ');
			document.frmregister.txtname.focus();
			return false;
		}
}
function MM_jumpMenu(targ,selObj,restore)
{ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<body>
<?php
if(isset($_POST['btnregister']))
{		$n=$_POST['txtname'];
		$soluoc=$_POST['txtsoluoc'];
		$gt=$_POST['txtgt'];
		include('dbconect.php');
		$sql="INSERT INTO hanoi(ten,gioithieu,anh,soluoc) 
		values('$n','$gt','{$_FILES['upload']['name']}','$soluoc')";
			$result=mysql_query($sql);
			if($result)
			{
				$filename=$_FILES['upload']['name'];
				if(move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/PHP/Do_An/anhhanoi/$filename"))
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php";
                </script>
                <?php
				}
				?>
                <script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php";
                </script>
                <?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
<form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="327" border="0" class="vitricenter">
  <tr>
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>CẬP NHẬT HÀ NỘI</b></p></td>
    </tr>
  <tr>
    <td height="23" colspan="2"><p class="thongtin">Những thông tin có đánh dấu <font color="#FF0000">*</font>là bắt buộc</p></td>
  </tr>
  <tr>
    <td height="35" colspan="2"><b><font color="#0099FF">Thông tin về Hà Nội</font></b></td>
  </tr>
  <tr>
    <td width="138" height="33" class="chu">Tên<font color="#FF0000">*</font></td>
    <td width="417"><input type="text" name="txtname" id="textfield" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Sơ Lươc<font color="#FF0000">*</font></td>
    <td><textarea name="txtsoluoc" cols="34" rows="5"></textarea></td>
  </tr>
  <tr>
    <td height="36" class="chu">Hình Ảnh</td>
    <input name="MAX_FILE_SIZE" type="hidden" value="524288" />
    <td><input name="upload" type="file" /></td>
  </tr>
  <tr>
    <td height="35" class="chu">Giới Thiệu</td>
    <td><textarea name="txtgt" cols="34" rows="5"></textarea></td>
  </tr>
  <tr>
    <td height="85" colspan="2"><div align="center">
             <input name="btnregister" type="submit"  value="" class="btncapnhat">
             <input type="button" name="btnthoat" class="btnexit" value="" onClick="thoat();" />
           </div></td>
    </tr>
  </table>
  </div>
</form>

</body>
</html>