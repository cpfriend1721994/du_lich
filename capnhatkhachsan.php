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
			window.alert('Bạn chưa nhập tên tour du lịch');
			document.frmregister.txtname.focus();
			return false;
		}
		if(document.frmregister.txtdt.value=="")
		{
			window.alert('Bạn chưa nhập số điện thoại');
			document.frmregister.txtdt.focus();
			return false;
		}
		if(document.frmregister.txtsp.value=="")
		{
			window.alert('Bạn chưa nhập số phòng của khách sạn');
			document.frmregister.txtsp.focus();
			return false;
		}
		if(document.frmregister.txtgia.value=="")
		{
			window.alert('Bạn chưa nhập giá phòng');
			document.frmregister.txtgia.focus();
			return false;
		}
		if(document.frmregister.txtdiachi.value=="")
		{
			window.alert('Bạn chưa nhập địa chỉ khách sạn');
			document.frmregister.txtdiachi.focus();
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
		$hs=$_POST['cbbhs'];
		$dt=$_POST['txtdt'];
		$sp=$_POST['txtsp'];
		$gia=$_POST['txtgia'];
		$dc=$_POST['txtdiachi'];
		$w=$_POST['txtweb'];
		include('dbconect.php');
		$sql="INSERT INTO khachsan(hangsao,tenks,diachi,dienthoai,sophong,website,giaphong,anh) 
		values('$hs','$n','$dc','$dt','$sp','$w','$gia','{$_FILES['upload']['name']}')";
			$result=mysql_query($sql);
			if($result)
			{
				$filename=$_FILES['upload']['name'];
				if(move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/PHP/Do_An/anhkhachsan/$filename"))
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?top=9";
                </script>
                <?php
				}
				?>
                <script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?top=9";
                </script>
                <?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
<form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="513" border="0" class="vitricenter">
  <tr>
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>CẬP NHẬT KHÁCH SẠN</b></p></td>
    </tr>
  <tr>
    <td height="23" colspan="2"><p class="thongtin">Những thông tin có đánh dấu <font color="#FF0000">*</font>là bắt buộc</p></td>
  </tr>
  <tr>
    <td colspan="2"><b><font color="#0099FF">Thông Tin về khách sạn</font></b></td>
  </tr>
  <tr>
    <td width="138" height="30" class="chu">Tên Khách Sạn<font color="#FF0000">*</font></td>
    <td width="417"><input type="text" name="txtname" id="textfield" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Hạng Sao<font color="#FF0000">*</font></td>
    <td>
    <select name="cbbhs">
      <option value="1">1 sao</option>
	  <option value="2">2 sao</option>
      <option value="3">3 sao</option>
      <option value="4">4 sao</option>
      <option value="5">5 sao</option>
     </select>
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Điện Thoại</td>
    <td><input name="txtdt" type="text" /></td>
  </tr>
  <tr>
    <td height="31" class="chu">Số Phòng</td>
    <td><input name="txtsp" type="text" /></td>
  </tr>
  <tr>
    <td height="35" class="chu">Giá Phòng</td>
    <td><input name="txtgia" type="text" maxlength="12" /></td>
  </tr>
  <tr>
    <td height="29" class="chu">Địa chỉ</td>
    <td><input name="txtdiachi" type="text" / size="40"></td>
  </tr>
  <tr>
    <td height="36" class="chu">Hình Ảnh</td>
    <input name="MAX_FILE_SIZE" type="hidden" value="524288" />
    <td><input name="upload" type="file" /></td>
  </tr>
  <tr>
    <td height="50" class="chu">Website<font color="#FF0000"></font></td>
    <td><input name="txtweb" type="text" size="40" /></td>
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