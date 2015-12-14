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
			window.alert('Bạn chưa nhập họ tên');
			document.frmregister.txtname.focus();
			return false;
		}
		if(document.frmregister.txtuser.value=="")
		{
			window.alert('Bạn chưa nhập username');
			document.frmregister.txtuser.focus();
			return false;
		}
		if(document.frmregister.txtpass.value=="")
		{
			window.alert('Bạn chưa nhập password');
			document.frmregister.txtpass.focus();
			return false;
		}
		if(document.frmregister.txtpass1.value=="")
		{
			window.alert('Bạn chưa nhập xác nhận mật khẩu');
			document.frmregister.txtpass1.focus();
			return false;
		}
		if((document.frmregister.txtpass.value!="")&&(document.frmregister.txtpass1.value!=""))
		{
				if((document.frmregister.txtpass.value)!=(document.frmregister.txtpass1.value))
				{
					window.alert('Bạn nhập mật khẩu xác nhận sai');
					document.frmregister.txtpass1.focus();
					return false;
				}
		}
}
function thoat()
{
	window.location="index.php";	
}
function kiemtrauser(str)
{
	if (str.length==0)
	  {
	  document.getElementById("txtCheck").innerHTML="";
	  return;
	  }
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("txtCheck").innerHTML=xmlhttp.responseText;
		}
  	}
	xmlhttp.open("GET","ajaxcheckuser.php?ten="+str,true);
	xmlhttp.send();
}
</script>
<?php
if(isset($_POST['btnregister']))
{		$n=$_POST['txtname'];
		$u=$_POST['txtuser'];
		$p=$_POST['txtpass'];
		$gt=$_POST['cbbgioitinh'];
		$dt=$_POST['txtdt'];
		$c=$_POST['cbbcountry'];
		$d=$_POST['cbbday'];
		$m=$_POST['cbbmonth'];
		$y=$_POST['cbbyear'];
		include('dbconect.php');
		$sql="INSERT INTO thanhvien(username,tentv,ngaysinh,diachi,sodt,anh,password) 			values('$u','$n',CONCAT('$y','-','$m','-','$d'),'$c','$dt','{$_FILES['upload']['name']}',MD5('$p'))";
			$result=mysql_query($sql);
			if($result)
			{
				$filename=$_FILES['upload']['name'];
				if(move_uploaded_file($_FILES['upload']['tmp_name'],"C:/xampp/htdocs/PHP/Do_An/anhtv/$filename"))
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
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>ĐĂNG KÝ THÀNH VIÊN</b></p></td>
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
    <td><select name="cbbcountry">
      <option>-----</option>
      <option>Hà Nội</option>
	  <option>Hải Phòng</option>
      <option>Huế</option>
      <option>Đà Nãng</option>
      <option>TP HCM</option>
      <option>Vũng Tàu</option>
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
    <td colspan="2"><b><font color="#0099FF"> Thông tin tài khoản</font></b></td>
    </tr>
  <tr>
    <td rowspan="2">Username<font color="#FF0000">*</font></td>
    <td><input type="text" name="txtuser" size="30" onblur="kiemtrauser(this.value)"></td>
  </tr>
  <tr>
    <td><span id="txtCheck"></span></td>
  </tr>
  <tr>
    <td>Password<font color="#FF0000">*</font></td>
    <td><input type="password" name="txtpass"  size="45" ></td>
  </tr>
  <tr>
    <td>Xác nhận Password<font color="#FF0000">*</font></td>
    <td><input type="password" name="txtpass1" size="45" ></td>
  </tr>
  <tr>
    <td height="68" colspan="2"><input type="submit" name="btnregister"  value="" class="btndangky" >
      <input type="button" name="btnreset" value="" onClick="thoat();" class="btnthoat" ></td>
    </tr>
  </table>
  </div>
</form>
