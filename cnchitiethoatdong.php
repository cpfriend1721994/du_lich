<link rel="stylesheet" type="text/css" href="css/style.css" />
<script language="javascript">
function thoat()
{
	window.location="index.php";	
}
function checkInput()
{
		if(document.frmregister.txthd.value=="")
		{
			window.alert('Bạn chưa nhập tên hoạt động');
			document.frmregister.txthd.focus();
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
{		$n=$_POST['txthd'];
		$l=$_POST['cbbloai'];
		$ct=$_POST['txtct'];
		include('dbconect.php');
		$sql="INSERT INTO cthoatdong(mahd,ten1hd,anh,chitiet) 
		values('$l','$n','{$_FILES['upload']['name']}','$ct')";
			$result=mysql_query($sql);
			if($result)
			{
				$filename=$_FILES['upload']['name'];
				if(move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/PHP/Do_An/anhhoatdong/$filename"))
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?top=17";
                </script>
                <?php
				}
				?>
                <script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?top=17";
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
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>CẬP NHẬT HOẠT ĐỘNG</b></p></td>
    </tr>
  <tr>
    <td height="23" colspan="2"><p class="thongtin">Những thông tin có đánh dấu <font color="#FF0000">*</font>là bắt buộc</p></td>
  </tr>
  <tr>
    <td colspan="2"><b><font color="#0099FF">Thông Tin về các hoạt động</font></b></td>
  </tr>
  <tr>
    <td width="173" height="30" class="chu">Tên hoạt động<font color="#FF0000">*</font></td>
    <td width="417"><input type="text" name="txthd" id="textfield" size="45"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Loại<font color="#FF0000">*</font></td>
    <td>
        <select name="cbbloai">
        <?php
		require_once('dbconect.php');
		$sql1="select * from hoatdong";
		$result1=mysql_query($sql1);
		while($rows=@mysql_fetch_array($result1))
		{
		?>
          <option value="<?php echo $rows['mahd']; ?>"><?php echo $rows['tenhd']; ?></option>
          <?php
		}
		  ?>
        </select>
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Chi Tiết</td>
    <td><textarea name="txtct" cols="60" rows="10"></textarea></td>
  </tr>
  <tr>
    <td height="36" class="chu">Hình Ảnh</td>
    <input name="MAX_FILE_SIZE" type="hidden" value="524288" />
    <td><input name="upload" type="file"/></td>
  </tr>
  <tr>
    <td height="85" colspan="2"><div align="center">
      <input type="submit" name="btnregister" value="" class="btncapnhat" >
      <input type="reset" name="btnreset" class="btnexit" value="" onClick="thoat();">
    </div></td>
    </tr>
  </table>
  </div>
</form>

</body>
</html>