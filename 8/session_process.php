<?php
	session_start();
	$_SESSION['session_tersimpan1'] = $_POST['kolom_input_session1'];
	$_SESSION['session_tersimpan2'] = $_POST['kolom_input_session2'];
	header("location:session_read.php");
?>