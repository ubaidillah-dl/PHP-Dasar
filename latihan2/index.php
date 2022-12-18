<?php 
	// KOMENTAR
	// ini komentas
	/*
	ini komentar
	ini komentar
	*/
	// SINTAKS PHP

	// Standar output
	// echo, print
	// print_r
	// var_dump (digunakan untuk melihat tipe data dan banyaknya karakter)
	// Note : bisa menggunakan "" atau ''
	// penggunaan "" bisa menampilkan isi variabel

	echo "echo,";
	print " print,";
	print_r (" print_r,");
	//var_dump(" var_dump")

	// Penulisan sintaks PHP
	// 1. PHP di dalam html (ini lebih disarankan)
	// 2. html di dalam PHP

	// variabel dan tipe data
	// variabel
	$nama = " Variabel";
	echo $nama;

	// Operator
	// aritmatika
	// + - * / %
	$x=10;
	$y=20;

	echo $x+$y," ";
	echo $x-$y," ";
	echo $x*$y," ";
	echo $x/$y," ";
	echo $x%2," ";

	// Penggabung string / concatenation / concat
	// .

	$nama_depan = " Ubaidillah";
	$nama_belakang = "Dl";
	echo $nama_depan ." ". $nama_belakang;

	// Assignment
	// =, +=, -=, *=, %=, .=
	$x1 = 1;
	$x1 += 2;
	echo " ",$x1;

	// perbandingan
	// <, >, <=, >=, ==, != (cuma ngecek datanya saja)
	var_dump(1=="1");

	// identitas
	// ===, !== (ngecek tipe datanya juga)
	var_dump(1==="1");

	// logika
	// &&, ||, !
	$x2 = 10;
	var_dump($x2 > 20 && $x2 % 2 == 0);
	var_dump($x2 < 20 || $x2 % 2 == 0);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>PHP di dalam html sebaliknya</title>
 </head>
 <body>
 	<h1>PHP di dalam <?php echo "HTML"; ?></h1>
 	<?php 
 	echo "<h1>HTML di dalam PHP</h1>"; 
 	?>
 </body>
 </html>