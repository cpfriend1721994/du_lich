<?php 
	/*session_start();*/
	if(isset($_SESSION["tour"]))
	{
		$tong=0;
		?>
		<form action='tourcapnhat.php' method='post'>
    		<table width='500' border='0' align='center'>
            <tr>
            	<td colspan="5"><font size="4" color="#0000FF">Tour bạn đặt</font></td>
            </tr>
            <tr>
            	<td colspan="5"><img src="anh/chuan.jpg"></td>
            </tr>
  			<tr>
    			<td width='150' class="chu">Tên tour</td>
    			<td width='70' class="chu">Số Người</td>
    			<td width='100' class="chu">Giá</td>
    			<td width='100' class="chu">Thành tiền</td>
				<td class="chu">Hủy bỏ</td>
  			</tr>
		<?php
		include('dbconect.php');
	 	foreach($_SESSION["tour"] as $key => $value)
	 	{
    		$qty = $value;
			$sql ="select * from tourdulich where matour='$key'";
			$result = mysql_query($sql);
			$rows =@mysql_fetch_array($result);
			$total=$qty*$rows['giatien'];
			?>
			<tr>
    			<td><?php echo $rows['tentour']; ?></td>
    			<td><input type=text value="<?php echo "$qty";?>" name="<?php echo "qty[{$rows['matour']}]";?>" /></td>
    			<td><?php echo $rows['giatien']; ?>$</td>
    			<td><?php echo "$total" ?>$</td>
				<td><a href="huybo1tour.php?huybotour=<?php echo $rows['matour'];?>">xóa</a></td>
  			</tr><?php 
			$tong+=$total;
		}?>
        
  			<tr>
            	<td colspan='3' align="right">Tổng tiền</td>
    			<td colspan='3' align="center"><?php echo "$tong" ;?>$</td>
    		</tr>
  			<tr>
    			<td colspan='3'><input name="submit" type="submit" value="Cập nhật hàng" /></td>
    			<td colspan='3'></td>
    		</tr>
            <?php 
	}
	else
	{
		echo 'Bạn chưa đặt tour';	
	}
	?>
    </table>
</form>
