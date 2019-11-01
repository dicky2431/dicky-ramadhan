<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

	
</head>
<body>
	<link rel="stylesheet" href="master.css" media="screen" title="no title" charset="utf-8">
	<?php 
	if (isset($_POST['kalkulator'])) {
		$angka1 = $_POST['angka1'];
		$angka2 = $_POST['angka2'];
		$proses = $_POST['proses'];

	
	?>
	<?php
	switch ($proses) {
		case 'tambah':
			$hasil = $angka1+$angka2;
			break;
		case 'kurang':
			$hasil = $angka1-$angka2;
			break;
			case 'kali':
			$hasil = $angka1*$angka2;
			break;
			case 'bagi':
			$hasil = $angka1/$angka2;
			break;
		
	}
}
?>

<div class="bentuk">
	<h2>KALKULATOR</h2>
	<form class="" action="" method="post">
		<input type="text" name="angka1" value="" class="angka">
		<input type="text" name="angka2" value="" class="angka">
		<select class="proses" name="proses">
			<option value="tambah">+</option>
			<option value="kurang">-</option>
			<option value="kali">x</option>
			<option value="bagi">/</option>
		</select>
		<input type="submit" name="kalkulator" value="=" class="tombol">
	</form>


<?php 
if (isset($_POST['kalkulator'])) {

	?>
	<input type="text" value="<?php echo $hasil; ?>" class="angka" >
	<?php}else{
	?>
		
<?php }?>
</div>
</body>
</html>