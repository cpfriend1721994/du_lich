<link rel="stylesheet" type="text/css" href="css/style.css" />
<script>
function thoat()
{
	window.location="index.php";	
}
</script>
<?php
	include('dbconect.php');
	 $sql="select * from thanhvien";
	 $result=mysql_query($sql);
?>
<form action="thucthiphanquyen.php" method="post" name="formphanquyen">
	<table width="580" border="0">
 	<tr>
    	<td colspan="2"><font size="5" color="#0066FF">Phân quyền cho thành viên</font></td>
      </tr>
     <tr>
	  <td colspan="2"><img src="anh/chuan.jpg"></td>
  	</tr>
  <tr>
    <td height="42" class="chu">Tên Thành Viên</td>
    <td>
    	<select name="cbbtentv">
 			<?php
	 			while($rows=mysql_fetch_array($result))
	 			{
					?>
				 	<option value="<?php echo $rows['username'];?>"><?php echo $rows['tentv'];?></option>
                    <?php
	 			}
			?>       	
        </select>
    </td>
  </tr>
  <tr>
    <td height="44" class="chu">Quyền</td>
    <td>
    	<select name="cbbquyen">
        	<option value="0">Xem</option>
        	<option value="1">Cập nhật</option>
            <option value="2">Cập nhật-Sửa Xóa-Trao Quyền</option>
        </select>
    </td>
  </tr>
  <tr>
  	<td colspan="2" align="center"><input name="btnphanquyen" type="submit" value="" class="btncapnhat">
    	<input name="btnthoat" type="button" value="" onClick="return thoat();" class="btnexit">
    </td>
    </tr>
</table>
</form>
