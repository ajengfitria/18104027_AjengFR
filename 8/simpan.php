<?php
include 'koneksi.php';
include 'create_message.php';

	//untuk upload foto
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$error = false;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$foto = basename($_FILES["foto"]["name"]);

if(isset($_POST['id'])) {
	$check = getimagesize($_FILES["foto"]["tmp_name"]);
	if($check !== false) {
		create_message('File is an image.','danger','warning');
		header("location:".$_SERVER['HTTP_REFERER']);
		$error = false; 
		exit(); 
	} else {
		create_message('File is not an image.','danger','warning');
		header("location:".$_SERVER['HTTP_REFERER']);
		$error = false; 
		exit(); 
	}

	if (file_exists($target_file)) {
		create_message('Sorry, image already exists.','danger','warning');
		header("location:".$_SERVER['HTTP_REFERER']);
		$error = true; 
		exit();
	}

	if ($_FILES["foto"]["size"] > 500000) {
		create_message('Sorry, your image is too large.','danger','warning');
		header("location:".$_SERVER['HTTP_REFERER']);
		$error = true; 
		exit();
	}

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
		create_message('Sorry, only JPG, JPEG, PNG & GIF files are allowed.','danger','warning');
		header("location:".$_SERVER['HTTP_REFERER']);
		$error = true; 
		exit();
	}

	if ($error == true) {
		create_message('Your image is not uploaded','danger','warning');
		header("location:".$_SERVER['HTTP_REFERER']);
		exit();
	} else {
		if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
			$sql = "UPDATE data SET nama='$nama', kelas='$kelas', alamat='$alamat', foto='$foto' WHERE id=".$_POST['id'];
			$edit = $conn->query($sql);

			if($edit) {
				$conn->close();
				create_message('Ubah data berhasil','success','check');
				header("location:".$_SERVER['HTTP_REFERER']);
				exit();
			} else {
				$conn->close();
				create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
				header("location:".$_SERVER['HTTP_REFERER']);
				exit();
			}
		} else {
			create_message('Your image is not uploaded','danger','warning');
			header("location:".$_SERVER['HTTP_REFERER']);
			exit();
		} 
	}
} else {
	if($check !== false) {
		create_message('File is an image.','danger','warning');
		header("location:".$_SERVER['HTTP_REFERER']);
		$error = false; 
		exit(); 
	} else {
		create_message('File is not an image.','danger','warning');
		header("location:".$_SERVER['HTTP_REFERER']);
		$error = false; 
		exit(); 
	}

	if (file_exists($target_file)) {
		create_message('Sorry, image already exists.','danger','warning');
		header("location:".$_SERVER['HTTP_REFERER']);
		$error = true; 
		exit();
	}

	if ($_FILES["foto"]["size"] > 500000) {
		create_message('Sorry, your image is too large.','danger','warning');
		header("location:".$_SERVER['HTTP_REFERER']);
		$error = true; 
		exit();
	}

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
		create_message('Sorry, only JPG, JPEG, PNG & GIF files are allowed.','danger','warning');
		header("location:".$_SERVER['HTTP_REFERER']);
		$error = true; 
		exit();
	}

	if ($error == true) {
		create_message('Your image is not uploaded','danger','warning');
		header("location:".$_SERVER['HTTP_REFERER']);
		exit();
	} else {
		if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
			$sql = "INSERT into data(nama, kelas, alamat,foto) VALUES('$nama','$kelas','$alamat','$foto')";
			$add = $conn->query($sql);

			if($add) {
				$conn->close();
				create_message('Simpan data berhasil','success','check');
				header("location:".$_SERVER['HTTP_REFERER']);
				exit();
			} else {
				$conn->close();
				create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
				header("location:".$_SERVER['HTTP_REFERER']);
				exit();
			}
		} else {
			create_message('Your image is not uploaded','danger','warning');
			header("location:".$_SERVER['HTTP_REFERER']);
			exit();
		} 
	}
}
?>