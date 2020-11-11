<!-- AJENG FITRIA / 18104027 -->
<!DOCTYPE html>
<html>
<head>
	<title>PHP String</title>
</head>
<body>
<?php  
	echo "Hasil fungsi strlen dari kata 'Hello mas Reno!' : ".strlen("Hello mas Reno!"); //menampilkan panjang / length string
	echo "<br>";
	echo "Jumlah karakter string dari 'Ajeng Fitria Rahmawati' : ".str_word_count("Ajeng Fitria Rahmawati"); //menampilkan jumlah kata

	echo "<br>";
	echo "Belajar PHP di balik : ".strrev("Belajar PHP"); //mereverse kata

	echo "<br>";
	echo "Kata 'via' pada kalimat 'Belajar di rumah via zoom' terletak di string ke : ".strpos("Belajar di rumah via zoom", "via"); //mencari lokasi kata "via" dari string

	echo "<br>";
	echo str_replace("bambang", "budi", "hai bambang"); //mereplacae kata bambang dengan budi
?>
</body>
</html>