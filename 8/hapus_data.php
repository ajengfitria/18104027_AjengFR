<?php
    include "koneksi.php";
    include "create_message.php";

    $sql = "DELETE from data where id=".$_GET['id'];
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        create_message('Hapus data berhasil','success','check');
        header("location:index.php");
        exit();
    } else {
        $conn->close();
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
        header("location:index.php");
        exit();
    }
?>