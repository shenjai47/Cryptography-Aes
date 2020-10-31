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

    <title>Tentang</title>

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
              <div class="container">
                <div class="starter-template" style="text-align:left;">
                  <table class="table table-borderless" style="width:100%; padding:100px;">
                    <tr>
                      <td colspan="3">
                        <h2 style="text-align:center;">ANGGOTA KELOMPOK</h2>
                      </td>
                    </tr>
                    <tr>
                      <td><p>1. Muhamad Asep Saepulloh (2016141830)<br>
                        <p>2. Guntur Pratama (2016141464)<br>
                          <p>3. Imas Zamiah (2016142245)<br>
                            <p>4. Lifia Amanda (2016141765)<br>
                              <p>5. Revry Azmi Mahesta Restu (2016141110)
								<p>6. Rivaldo Asrul (2016140853)
                              </td>
                              <tr>
                                <td></td>
                              </tr>
                            </table>
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