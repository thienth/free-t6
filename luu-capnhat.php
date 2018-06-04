<?php 
$masp = $_POST['masp'];
$tensp = $_POST['tensp'];
$anhsp = $_POST['anhsp'];
$giasp = $_POST['giasp'];
$mota = $_POST['mota'];


// 1. tao ket noi den csdl
$ketnoi = new PDO(
			"mysql:host=127.0.0.1;dbname=free-t6;charset=utf8",
			"root",
			"123456" // phan nay neu cai xampp thi de trong => ""
		);
// 2.chuan bi cau query
$query = "
	update products
	set
		tensp = '$tensp',
		anhsp = '$anhsp',
		giasp = '$giasp',
		mota = '$mota'
	where masp = $masp
";

// 3.nap cau sql vao trong ket noi
$phatbieu = $ketnoi->prepare($query); 

// 4.thuc thi phat bieu
$phatbieu->execute();

header('location: index.php');
 ?>