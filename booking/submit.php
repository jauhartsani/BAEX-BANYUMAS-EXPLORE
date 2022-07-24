<?php
include('database.inc.php');
$msg="";
if(isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['nomorhp']) && isset($_POST['tanggal']) && isset($_POST['jumlah']) && isset($_POST['wisata'])){
	$nama=mysqli_real_escape_string($con,$_POST['nama']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$nomorhp=mysqli_real_escape_string($con,$_POST['nomorhp']);
	$tanggal=mysqli_real_escape_string($con,$_POST['tanggal']);
	$jumlah=mysqli_real_escape_string($con,$_POST['jumlah']);
	$wisata=mysqli_real_escape_string($con,$_POST['wisata']);
	
	mysqli_query($con,"insert into baex(nama,email,nomorhp,tanggal,jumlah,wisata) values('$nama','$email','$nomorhp','$tanggal','$jumlah','$wisata')");
	$msg="Tiket Berhasil Dipesan,   KLIK DISINI  ";
	
	$html="<table><tr><td>Nama</td><td>$nama</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Nomorhp</td><td>$nomorhp</td></tr><tr><td>Tanggal</td><td>$tanggal</td></tr><tr><td>Jumlah</td><td>$jumlah</td></tr><tr><td>Wisata</td><td>$wisata</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="banyumasexplore01@gmail.com";
	$mail->Password="baex12345";
	$mail->SetFrom("banyumasexplore01@gmail.com");
	$mail->addAddress("banyumasexplore01@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="Pesanan Baru Tiket BAEX ";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	echo $msg;
}
?>