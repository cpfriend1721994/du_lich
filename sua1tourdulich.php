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
		if(document.frmregister.txthtrinh.value=="")
		{
			window.alert('Bạn chưa nhập hanhtrinh');
			document.frmregister.txthtrinh.focus();
			return false;
		}
		if(document.frmregister.txtgia.value=="")
		{
			window.alert('Bạn chưa nhập giá tour');
			document.frmregister.txtgia.focus();
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
	if(isset($_GET['suatourdulich']))
	{
		include('dbconect.php');
		$matour=$_GET['suatourdulich'];
		$sql="select * from tourdulich where matour='$matour'";
		$result=mysql_query($sql);
		$rows=@mysql_fetch_array($result);
?>
<form action="thucthisuatourdulich.php" method="post" name="frmregister" onSubmit="return checkInput();"  enctype="multipart/form-data">
  <div align="center"><table width="600" height="455" border="0" class="vitricenter">
  <tr>
  	<input name="txtmatour" type="hidden" value="<?php echo $rows['matour']; ?>" />
    <td height="31" colspan="2" bgcolor="#66FFFF"><p class="dangky"><b>SỬA TOUR DU LỊCH</b></p></td>
    </tr>
  <tr>
    <td height="23" colspan="2"><p class="thongtin">Những thông tin có đánh dấu <font color="#FF0000">*</font>là bắt buộc</p></td>
  </tr>
  <tr>
    <td height="28" colspan="2"><b><font color="#0099FF">Thông Tin về tour du lịch</font></b></td>
  </tr>
  <tr>
    <td width="201" height="30" class="chu">Tên tour<font color="#FF0000">*</font></td>
    <td width="389"><input type="text" name="txtname" id="textfield" size="45" value="<?php echo $rows['tentour']; ?>"></td>
  </tr>
  <tr>
   <td height="35" class="chu">Tên Khách Sạn</td>
    <td>
    	<select name="cbbkhachsan">
        <option value="">[Chọn Tên khách sạn]</option>
        <?php
		require_once('dbconect.php');
		$sql1="select * from khachsan";
		$result1=mysql_query($sql1);
		while($rows1=@mysql_fetch_array($result1))
		{
		?>
          <option value="<?php echo $rows1['maks']; ?>"><?php echo $rows1['tenks']; ?></option>
          <?php
		}
		  ?>
        </select>
    </td>
  </tr>
  <tr>
    <td height="36" class="chu">Hình Ảnh</td>
    <input name="MAX_FILE_SIZE" type="hidden" value="524288" />
    <td><input name="upload" type="file"/></td>
  </tr>
  <tr>
    <td height="37" class="chu">Giá<font color="#FF0000">*</font></td>
    <td><input name="txtgiatien" type="text" value="<?php $rows['giatien'];?>" /></td>
  </tr>
  <tr>
    <td height="33" class="chu">Số ngày</td>
    <td><input name="txtsongay" type="text" value="<?php $rows['songay'];?>" /></td>
  </tr>
  <tr>
    <td height="29" class="chu">Tên hướng dẫn viên</td>
    <td>
      <select name="cbbhdv">
        <?php
		require_once('dbconect.php');
		$sql3="select * from huongdanvien";
		$result3=mysql_query($sql3);
		while($rows3=@mysql_fetch_array($result3))
		{
		?>
        <option value="<?php echo $rows3['mahdv']; ?>"><?php echo $rows3['tenhdv']; ?></option>
        <?php
		}
		  ?>
        </select>
      </td>
  </tr>
  <tr>
    <td height="31" class="chu">Tên loại tour</td>
    <td>
    	<select name="cbbloaitour">
        <?php
		require_once('dbconect.php');
		$sql4="select * from loaitourdulich";
		$result4=mysql_query($sql4);
		while($rows4=@mysql_fetch_array($result4))
		{
		?>
          <option value="<?php echo $rows4['maloaitour']; ?>"><?php echo $rows4['tenloaitour']; ?></option>
          <?php
		}
		  ?>
        </select>
    </td>
  </tr>
  <tr>
    <td height="31" class="chu">Hành trình<font color="#FF0000">*</font></td>
    <td><textarea name="txthtrinh" cols="40" rows="5" ><?php echo $rows['hanhtrinh']; ?></textarea></td>
  </tr>
  <tr>
    <td height="85" colspan="2">  <div align="center">
             <input name="btnregister" type="submit"  value="" class="btncapnhat">
             <input type="button" name="btnthoat" class="btnexit" value="" onClick="thoat();" />
           </div></td>
    </tr>
 </table>
  </div>
</form>
<?php
	}
?>