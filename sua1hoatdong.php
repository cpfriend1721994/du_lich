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
<?php
include('dbconect.php');
$id_hd=$_GET['suahoatdong'];
$sql="select * from cthoatdong where id_hd='$id_hd'";
$result=mysql_query($sql);
$rows=@mysql_fetch_array($result);
?>
<form action="thucthisuahoatdong.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="513" border="0" class="vitricenter">
  <tr>
  	<td height="31" colspan="3" bgcolor="#00FFFF">
	  <b>SỬA HOẠT ĐỘNG</b></p>
    </tr>
  <tr>
    <td height="23" colspan="2"><p class="thongtin">Những thông tin có đánh dấu <font color="#FF0000">*</font>là bắt buộc</p></td>
  </tr>
  <tr>
    <td colspan="2"><b><font color="#0099FF">Thông Tin về các hoạt động</font></b></td>
    <input name="txtid_hd" type="hidden" value="<?php echo $rows['id_hd'];?>">
  </tr>
  <tr>
    <td width="173" height="30" class="chu">Tên hoạt động<font color="#FF0000">*</font></td>
    <td width="417"><input type="text" name="txthd" id="textfield" size="45" value="<?php echo $rows['ten1hd'];?>"></td>
  </tr>
  <tr>
    <td height="31" class="chu">Loại<font color="#FF0000">*</font></td>
    <td>
        <select name="cbbloai">
        <?php
		require_once('dbconect.php');
		$sql1="select * from hoatdong";
		$result1=mysql_query($sql1);
		while($row=@mysql_fetch_array($result1))
		{
		?>
          <option value="<?php echo $row['mahd']; ?>"><?php echo $row['tenhd']; ?></option>
          <?php
		}
		  ?>
        </select>
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Chi Tiết</td>
    <td><textarea name="txtct" cols="60" rows="10"><?php echo $rows['chitiet']; ?></textarea></td>
  </tr>
  <tr>
    <td height="36" class="chu">Hình Ảnh</td>
    <input name="MAX_FILE_SIZE" type="hidden" value="524288" />
    <td><input name="upload" type="file" /></td>
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