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
	if($_GET['suanhahang'])
	{
		include('dbconect.php');
		$manh=$_GET['suanhahang'];
		$sql="select * from  nhahang where manh=$manh";
		$result=mysql_query($sql);
		$rows=mysql_fetch_array($result);
	}
?>
<form action="thucthisuanhahang.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="448" border="0" class="vitricenter">
  <tr>
  	<input name="txtmanh" type="hidden" value="<?php echo $rows['manh']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA NHÀ HÀNG</b></p></td>
    </tr>
  <tr>
    <td height="23" colspan="2"><p class="thongtin">Những thông tin có đánh dấu <font color="#FF0000">*</font>là bắt buộc</p></td>
  </tr>
  <tr>
    <td height="35" colspan="2"><b><font color="#0099FF">Thông tin về nhà hàng</font></b></td>
  </tr>
  <tr>
    <td width="138" height="30" class="chu">Tên nhà hàng<font color="#FF0000">*</font></td>
    <td width="417"><input type="text" name="txtname" id="textfield" size="45" value="<?php echo $rows['tennhahang'];?>"/></td>
  </tr>
  <tr>
    <td height="37" class="chu">Địa Chỉ<font color="#FF0000">*</font></td>
    <td><input name="txtdc" type="text" value="<?php echo $rows['diachi'];?>"/></td>
  </tr>
  <tr>
    <td height="33" class="chu">Nhà Hàng</td>
    <td>
    	<select name="cbbnhahang">
        <option value="">-------</option>
        <?php
		require_once('dbconect.php');
		$sql2="select * from loainhahang";
		$result2=mysql_query($sql2);
		while($row=@mysql_fetch_array($result2))
		{
		?>
          <option value="<?php echo $row['maloai']; ?>"><?php echo $row['tenloai']; ?></option>
          <?php
		}
		  ?>
        </select>
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Điện Thoại</td>
    <td><input name="txtdt" type="text" value="<?php echo $rows['sodt'];?>" /></td>
  </tr>
  <tr>
    <td height="36" class="chu">Hình Ảnh</td>
    <input name="MAX_FILE_SIZE" type="hidden" value="524288" />
    <td><input name="upload" type="file" /></td>
  </tr>
  <tr>
    <td height="35" class="chu">Giới Thiệu</td>
    <td><textarea name="txtgt" cols="34" rows="5"><?php echo $rows['gioithieu'];?></textarea></td>
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