<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript">
{
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<script language="javascript"> 
function checkInput()
{
		if(document.frmregister.txtname.value=="")
		{
			window.alert('Bạn chưa nhập tên hướng dẫn viên');
			document.frmregister.txtname.focus();
			return false;
		}
		if(document.frmregister.txtuser.value=="")
		{
			window.alert('Bạn chưa nhập username');
			document.frmregister.txtuser.focus();
			return false;
		}
		
}
function thoat()
{
	window.location="index.php";	
}
</script>
<?php
if(isset($_POST['btnregister']))
{		$n=$_POST['txtname'];
		$dc=$_POST['txtdc'];
		$gt=$_POST['cbbgioitinh'];
		$dt=$_POST['txtdt'];
		$d=$_POST['cbbday'];
		$m=$_POST['cbbmonth'];
		$y=$_POST['cbbyear'];
		include('dbconect.php');
		$sql="INSERT INTO huongdanvien(tenhdv,ngaysinh,diachi,sodt,anh,gioitinh) 			values('$n',CONCAT('$y','-','$m','-','$d'),'$dc','$dt','{$_FILES['upload']['name']}','$gt')";
			$result=mysql_query($sql);
			if($result)
			{
				$filename=$_FILES['upload']['name'];
				if(move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/PHP/Do_An/anhhuongdanvien/$filename"))
				{
				?>
                <script language="javascript">
					window.alert('Bạn đã đăng kí thành công');
					window.location="index.php";
                </script>
                <?php
				}
				?>
				<script language="javascript">
					window.alert('Bạn đã đăng kí thành công');
					window.location="index.php";
                </script>
			<?php
			}
		else
			echo' Bạn ko đăng ký được vì lỗi hệ thống'.mysql_error();
}
?>
<form action="" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="425" border="0">
  <tr>
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>Cập nhật hướng dẫn viên</b></p></td>
    </tr>
  <tr>
    <td height="23" colspan="2"><p class="thongtin">Những thông tin có đánh dấu <font color="#FF0000">*</font>là bắt buộc</p></td>
  </tr>
  <tr>
    <td colspan="2"><b><font color="#0099FF">Thông Tin Cá Nhân</font></b></td>
  </tr>
  <tr>
    <td width="138">Họ Tên<font color="#FF0000">*</font></td>
    <td width="417"><input type="text" name="txtname" id="textfield" size="45"></td>
  </tr>
  <tr>
    <td>Ngày Sinh<font color="#FF0000">*</font></td>
    <td><select name="cbbday">
    		<option>[Ngày]</option>
    			<?php for($day=1;$day<=31;$day++)
				{?>
            		<option><?php echo "$day \n"; ?></option>
            	<?php } ?>
         </select>
         <select name="cbbmonth">
    		<option>[Tháng]</option>
    			<?php for($month=1;$month<=12;$month++)
				{?>
            		<option><?php echo "$month \n"; ?></option>
            	<?php } ?>
         </select>
          <select name="cbbyear">
    		<option>[Năm]</option>
    			<?php for($year=1980;$year<=2010;$year++)
				{?>
            		<option><?php echo "$year \n"; ?></option>
            	<?php } ?>
         </select>
    </td>
  </tr>
  <tr>
    <td>Dịa Chỉ</td>
    <td><input name="txtdc" type="text"></td>
  </tr>
  <tr>
    <td>Giới tính</td>
    <td><select name="cbbgioitinh">
    <option value="Nam">Nam</option>
    <option value="Nữ">Nữ</option>
    </select></td>
  </tr>
  <tr>
    <td>Số điện thoại</td>
    <td><input name="txtdt" type="text" maxlength="12" /></td>
  </tr>
  <tr>
    <td>Ảnh cá nhân</td>
    <input name="MAX_FILE_SIZE" type="hidden" value="524288" />
    <td><input name="upload" type="file" /></td>
  </tr>
  <tr>
    <td height="68" colspan="2"><input type="submit" name="btnregister"  value="" class="btndangky" >
      <input type="button" name="btnreset" onClick="thoat();" value="" class="btnthoat" ></td>
    </tr>
  </table>
  </div>
</form>
