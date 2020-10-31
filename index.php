<?php
include("config.php");

session_start();

if (empty($_SESSION['username'])){

  header('location:./login.php');
}
else
{
  ?>

  <!DOCTYPE html>

  <html>

  <head>

    <title>Beranda</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include("include/css.php"); ?>

  </head>

  <body>

    <header>

      <?php include("include/header.php"); ?>

    </header>

    <div class='container' style='margin-top:70px'>

      <div class='row' style='min-height:520px'>

        <div class='col-md-12'>

          <div class="jumbotron">

            <center>
              <h1 style='margin-top:-15px'>Algoritma Kriptografi AES</h1><br>

              <p align="justify" style="text-indent: 0.5in;">
			  <p align="center"> <img align="justify" src="aes.jpg"><br><br>
			  
                Advanced Encryption Standard (AES) merupakan algoritma cryptographic yang dapat digunkan untuk mengamakan data. Algoritma AES adalah blok chipertext simetrik yang dapat mengenkripsi (encipher) dan dekripsi (decipher) informasi. Enkripsi merubah data yang tidak dapat lagi dibaca disebut ciphertext; sebaliknya dekripsi adalah merubah ciphertext data menjadi bentuk semula yang kita kenal sebagai plaintext. Algoritma AES menggunakan kunci kriptografi 128, 192, dan 256 bits untuk mengenkripsi dan dekripsi data pada blok 128 bits.</p>
              <p>

                <a class='btn btn-danger' href='enkripsi.php'>Enkripsi</a>

                <a class='btn btn-warning' href='dekripsi.php'>Dekripsi</a>

                <a class='btn btn-success' href='tentang.php'>Tentang</a>

              </center>

            </div>

          </div>

        </div>

      </div>

      <?php include("include/footer.php"); ?>

    </body>

    <?php include("include/js.php"); ?>

    </html>

    <?php
  }
  ?>