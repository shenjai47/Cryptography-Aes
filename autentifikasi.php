<?php
session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
if($username == '')
{
    $_SESSION['pesan'] = 'Login Gagal.. User  & Password Salah..';
    header('location:login.php');
}
else if ($password == '')
{
    $_SESSION['pesan'] = 'Login Gagal.. User  & Password Salah..';
    header('location:login.php');
}
else
{
$data = mysqli_query($koneksi,"select * from users where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);
if($cek > 0){
                $_SESSION['username'] = $username;
                $_SESSION['status'] = "login";
                header('location:index.php');
               
            }
            else
            {
           
                $_SESSION['pesan'] = 'Login Gagal.. User  & Password Salah..';
                header('location:login.php');
               
            }
}
?>