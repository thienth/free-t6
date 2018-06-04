<?php 
$masp = $_GET['id'];
// 1. tao ket noi den csdl
$ketnoi = new PDO(
			"mysql:host=127.0.0.1;dbname=free-t6;charset=utf8",
			"root",
			"123456" // phan nay neu cai xampp thi de trong => ""
		);
// 2.chuan bi cau query
$query = "delete from products where masp = $masp";

// 3.nap cau sql vao trong ket noi
$phatbieu = $ketnoi->prepare($query); 

// 4.thuc thi phat bieu
$phatbieu->execute();

header('location: index.php');


 ?>