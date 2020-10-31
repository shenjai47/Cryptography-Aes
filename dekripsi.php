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
    <script type="text/javascript">
      function validasi_input(form){
        if (form.ciphertext.value == "" || form.key.value == ""){
          alert("Tidak boleh ada yang kosong!");
          form.ciphertext.focus();
          form.key.focus();
          return (false);
        }
        return (true);
      }
    </script>

    <title>Dekripsi</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include("include/css.php");
    include("include/header.php");
    ?>

  </head>
  <link rel="stylesheet" href="bootstrap.css">

  <body>

    <?php 
    require_once("cipher.php");

    if(isset($_POST['hitung'])){
	$cypertext = $_POST["cypertext"];
	$inputkey = $_POST["inputkey"];
	$blocksize = $_POST["blocksize"];
	$aes = new AES($cypertext, $inputkey, $blocksize);
	$dec=$aes->decrypt();
    }
    ?>

    <div class='container' style='margin-top:70px'>
      <div class='row' style='min-height:520px'>
        <div class='col-md-12'>
          <div class="jumbotron">
            <center>
              <div class="container">
                <div class="starter-template" style="text-align:left;">
                  <form method="post" action="Dekripsi.php" onsubmit="return validasi_input(this)">
                    <table class="table table-hover" style="width:100%; padding:100px;">
                      <tr>
                        <td colspan="3">
                          <h2 style="text-align:center;">DEKRIPSI</h2>
                        </td>
                      </tr>
                      <tr>
                        <td><b>CipherText</b></td>
                        <td>:</td>
                        <td>
                          <textarea class="form-control" name="cypertext" rows="4" cols="50" type="text"></textarea>

                        </td>
                      </tr>
                      <tr>
                        <td><b>Keyword</b></td>
                        <td>:</td>
                        <td>
                          <input class="form-control" name="inputkey" size="10" type="text"> 
                        </td>
                      </tr>
					  <tr>
                        <td><b>Methode</b></td>
                        <td>:</td>
                        <td>
							<select class="form-control" name="blocksize">
							<?php $options = array('128', '192', '256');
							foreach ($options as $blocksize) {
								$selected = @$_POST['blocksize'] == $blocksize ? ' selected="selected"' : '';
								echo '<option value="' . $blocksize . '"' . $selected . '>' . $blocksize . '</option>';
							}?>
							</select> 
                        </td>
						<tr align="center">
                        <td colspan="3">
                          <input name="hitung" class="btn btn-success" value="Decrypt" type="submit">
                          <button class="btn btn-warning" type="reset">Reset</button>
                        </td>
                      </tr>
                      <tr>
                        <td><b>PlainText</b></td>
                        <td>:</td>
                        <td>
                          <?php if(isset($_POST['hitung'])){ ?>
                            <input class="form-control" type="text" size="10" type="text" value="<?php echo $dec; ?>">
                          <?php }else{ ?>
                            <input class="form-control" type="text" size="10" type="text">
                          <?php } ?> 
                        </td>
                      </tr> 
                    </table>
                  </form>
                </div>
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