<?php

include("koneksi.php");
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$cek_db = mysqli_query($koneksi, "SELECT * FROM loginadmin where username='$username' and password='$password'");
$row = mysqli_fetch_array($cek_db);
    $db_user = $row['username'];
    $db_pass = $row['password'];

    if($username == $db_user && $password == $db_pass){
        echo '<p><b>Anda berhasil Login!</b></p>';
        // masukkan script lainnya disini
        // seperti Session atau redirect ke halaman admin
    }else{
        echo '<p>Username dan Password tidak cocok!</p>';
    }


?>