<?php 
$masp = $_GET['id'];
// 1. tao ket noi den csdl
$ketnoi = new PDO(
			"mysql:host=127.0.0.1;dbname=free-t6;charset=utf8",
			"root",
			"123456" // phan nay neu cai xampp thi de trong => ""
		);
// 2.chuan bi cau query
$query = "select * from products where masp = $masp";

// 3.nap cau sql vao trong ket noi
$phatbieu = $ketnoi->prepare($query); 

// 4.thuc thi phat bieu
$phatbieu->execute();

// 5. gom ket qua dau tien gap duoc
$ketqua = $phatbieu->fetch();
 ?>
<!-- Hien thi form voi du lieu co san -->
<form action="luu-capnhat.php" method="post">
	<input type="hidden" name="masp" value="<?php echo $ketqua['masp'] ?>">
	<div>
		Tên sản phẩm 
		<input type="text" name="tensp" value="<?php echo $ketqua['tensp'] ?>">
	</div>
	<div>
		Gía sản phẩm 
		<input type="text" name="giasp" value="<?php echo $ketqua['giasp'] ?>">
	</div>
	<div>
		
		<img src="<?php echo $ketqua['anhsp'] ?>" width="150">
		<br>
		Ảnh sản phẩm 
		<input type="text" name="anhsp" value="<?php echo $ketqua['anhsp'] ?>">
	</div>

	<div>
		Mô tả
		<textarea name="mota"><?php echo $ketqua['mota'] ?></textarea>
	</div>
	<div>
		<button type="submit">Cap nhat</button>
	</div>
</form>



