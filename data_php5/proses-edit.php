<?php
include "config.php";

if(isset($_POST['edit'])){
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$sekolah_asal = $_POST['sekolah_asal'];

$sql = "UPDATE data_casis SET nama = '$nama', nisn = '$nisn', jk = '$jk', sekolah = '$sekolah_asal' WHERE id = $id";
$query= mysqli_query($db,$sql);

if($query){
    header("location: data-casis.php");
}else{
    header("location: data-casis.php");
}

}


else{
    die("Access Denied..");
}

?>

