<?php
 include "../booking/database.inc.php";
 include "../booking/create_message.php";

$conn = mysqli_connect('localhost','kelasmmx','84y79Dp@WFvWb-','kelasmmx_Dewa-Kipas');
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

 $sql = "DELETE from baex where id=".$_GET['id'];
 if ($conn->query($sql) === TRUE) {
 $conn->close();
 create_message("Hapus Data Berhasil","success","check");
 header("location: ../booking/databooking-admin.php");
 exit();
 } else {
 $conn->close();
 create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
 header("location: ../booking/databooking-admin.php");
 exit();
 }
?>