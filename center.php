<?php
$left = isset($_GET["left"])?$_GET["left"]:"";

	switch($left) 
	{
		case 1:
			include "dangkytv.php";
			break;
		case 2:
			include "dangnhap.php";
			break;
		case 3:
			include "thongtinthanhvien.php";
			break;
		case 4:
			include "thoat.php";
			break;
		case 5:
			include "phanquyen.php";
			break;
		case 6:
			include "tourdadat.php";
			break;
		case 7:
			include "timkiem.php";
			break;
	}
	$top = isset($_GET["top"])?$_GET["top"]:"";
	switch($top) 
	{
		case 1:
			include "thongtintourdulich.php";
			break;
		case 2:
			include "thongtintourdulich.php";
			break;
		case 3:
			include "thongtintourdulich.php";
			break;
		case 4:
			include "thongtintourdulich.php";
			break;
		case 5:
			include "thongtintourdulich.php";
			break;
		case 6:
			include "thongtintourdulich.php";
			break;
		case 7:
			include "thongtintourdulich.php";
			break;
		case 8:
			include "thongtinnhahang.php";
			break;
		case 9:
			include "thongtinkhachsan.php";
			break;
		case 10:
			include "tomtattainguyendulich.php";
			break;
		case 11:
			include "tomtattainguyendulich.php";
			break;	
		case 12:
			include "tomtathoatdong.php";
			break;
		case 13:
			include "tomtathoatdong.php";
			break;
		case 14:
			include "tomtattainguyendulich.php";
			break;
		case 15:
			include "tomtattainguyendulich.php";
			break;
		case 16:
			include "tomtattainguyendulich.php";
			break;
		case 17:
			include "cnchitiethoatdong.php";
			break;
		case 18:
			include "cntourdulich.php";
			break;
		case 19:
			include "capnhatkhachsan.php";
			break;
		case 20:
			include "capnhattainguyen.php";
			break;
		case 21:
			include "cnloaihd.php";
			break;
		case 22:
			include "cnlhdulich.php";
			break;
		case 23:
			include ('suathongtinkhachsan.php');
			break;
		case 24:
			include ('capnhatloaitourdulich.php');
			break;
		case 25:
			include ('capnhatnhahang.php');
			break;
		case 26:
			include ('capnhathuongdanvien.php');
			break;
		case 27:
			include ('capnhatloainhahang.php');
			break;
		case 28:
			include ('suatourdulich.php');
			break;
		case 29:
			include ('suaxoanhahang.php');
			break;
		case 30:
			include ('suachitiethoatdong.php');
			break;
		case 31:
			include ('suathongtinhuongdanvien.php');
			break;
		case 32:
			include ('suatainguyendl.php');
			break;
		case 33:
			include ('thongtinhoatdong.php');
			break;
		case 34:
			include ('thongtintainguyen.php');
			break;
		case 35:
			include ('thongtintourdulich.php');
			break;
	}
	if(isset($_GET['sua']))
		include ('sua1khachsan.php');
	if(isset($_GET['khachsan']))
		include ('chitietkhachsan.php');
	if(isset($_GET['nhahang']))
		include ('chitietnhahang.php');
	if(isset($_GET['suatourdulich']))
		include ('sua1tourdulich.php');
	if(isset($_GET['suanhahang']))
		include ('sua1nhahang.php');
	if(isset($_GET['suahoatdong']))
		include ('sua1hoatdong.php');
	if(isset($_GET['suahdv']))
		include ('sua1huongdanvien.php');
	if(isset($_GET['suatainguyen']))
		include ('sua1tainguyendl.php');
	if(isset($_GET['xoa']))
		include ('thucthixoakhachsan.php');
	if(isset($_GET['xoanhahang']))
		include ('thucthixoanhahang.php');
	if(isset($_GET['xoahdv']))
		include ('thucthixoahuongdanvien.php');
	if(isset($_GET['xoahoatdong']))
		include ('thucthixoahoatdong.php');
	if(isset($_GET['xoatainguyen']))
		include ('thucthixoatainguyen.php');
	if(isset($_GET['xoatourdulich']))
		include ('thucthixoatourdulich.php');
	if(isset($_GET['suathanhvien']))
		include ('sua1thanhvien.php');
	if(isset($_GET['chitiethoatdong']))
		include ('chitiethoatdong.php');
	if(isset($_GET['chitiettainguyen']))
		include ('chitiettainguyendulich.php');
	if(isset($_GET['tour']))
		include ('chitiettourdulich.php');
	if(isset($_GET['dattour']))
		include ('dattour.php');
	if(isset($_GET['thamgiatour']))
		include ('thamgiatour.php');
	if((!isset($_GET['left'])) & (!isset($_GET['nhahang'])) & (!isset($_GET['sua'])) & (!isset($_GET['khachsan'])) & (!isset($_GET['suatourdulich'])) & (!isset($_GET['suanhahang'])) & (!isset($_GET['suahdv'])) & (!isset($_GET['suatainguyen'])) & (!isset($_GET['xoa'])) & (!isset($_GET['xoanhahang'])) & (!isset($_GET['xoahdv'])) & (!isset($_GET['xoahoatdong'])) & (!isset($_GET['xoatainguyen'])) & (!isset($_GET['xoatourdulich'])) & (!isset($_GET['suathanhvien'])) & (!isset($_GET['chitiethoatdong'])) & (!isset($_GET['chitiettainguyen'])) & (!isset($_GET['tour'])) & (!isset($_GET['dattour'])) & (!isset($_GET['top'])) & (!isset($_GET['left'])) & (!isset($_GET['thamgiatour'])) & (!isset($_GET['suahoatdong'])) )
		{
			include "thongtintourdulich.php";	
		}
			
?>
