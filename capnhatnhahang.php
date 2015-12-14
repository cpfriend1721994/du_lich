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
			window.alert('Bạn chưa nhập tên nhà hàng');
			document.frmregister.txtname.focus();
			return false;
		}
		if(document.frmregister.txtdt.value=="")
		{
			window.alert('Bạn chưa nhập số điện thoại');
			document.frmregister.txtdt.focus();
			return false;
		}
		if(document.frmregister.txtdc.value=="")
		{
			window.alert('Bạn chưa nhập địa chỉ nhà hàng');
			document.frmregister.txtdc.focus();
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
		$dt=$_POST['txtdt'];
		$dc=$_POST['txtdc'];
		$gt=$_POST['txtgt'];
		$loainh=$_POST['cbbloainhahang'];
		include('dbconect.php');
		$sql="INSERT INTO nhahang(tennhahang,diachi,sodt,anh,gioithieu,maloai) 
		values('$n','$dc','$dt','{$_FILES['upload']['name']}','$gt','$loainh')";
			$result=mysql_query($sql);
			if($result)
			{
				$filename=$_FILES['upload']['name'];
				if(move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/PHP/Do_An/anhnhahang/$filename"))
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?top=8";
                </script>
                <?php
				}
				?>
                <script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?top=8";
                </script>
                <?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
<form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="445" border="0" class="vitricenter">
  <tr>
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>CẬP NHẬT NHÀ HÀNG</b></p></td>
    </tr>
  <tr>
    <td height="23" colspan="2"><p class="thongtin">Những thông tin có đánh dấu <font color="#FF0000">*</font>là bắt buộc</p></td>
  </tr>
  <tr>
    <td height="35" colspan="2"><b><font color="#0099FF">Thông tin về nhà hàng</font></b></td>
  </tr>
  <tr>
    <td width="138" height="33" class="chu">Tên nhà hàng<font color="#FF0000">*</font></td>
    <td width="417"><input type="text" name="txtname" id="textfield" size="45"></td>
  </tr>
  <tr>
    <td height="33" class="chu">Nhà Hàng</td>
    <td width="417">
    	<select name="cbbloainhahang">
        <?php
		require_once('dbconect.php');
		$sql3="select * from loainhahang";
		$result3=mysql_query($sql3);
		while($rows=@mysql_fetch_array($result3))
		{
		?>
          <option value="<?php echo $rows['maloai']; ?>"><?php echo $rows['tenloai']; ?></option>
          <?php
		}
		  ?>
        </select>
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Địa Chỉ<font color="#FF0000">*</font></td>
    <td><input name="txtdc" type="text"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Điện Thoại</td>
    <td><input name="txtdt" type="text" /></td>
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