<?php
ob_start();

session_start();
if ( $_SESSION['auth'] == 1 ):
  ?>
  <html>
    <head>
      <title>Pannello di Amministrazione</title>
      <link href="bootstrap/css/bootstrap.css" rel="stylesheet" />
      <link href="bootstrap/css/bootstrap-responsive.css" rel='stylesheet' />
      <link href="css/adminstyle.css" rel="stylesheet" />
    </head>

    <body>
      <div class='container'>
        <div class="row">
          <div class="accordion span4 offset4" id="accordion2">

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                  <i class="icon-bullhorn"></i> News
                </a>
              </div>
              <div id="collapse2" class="accordion-body collapse" style="height: 0px; ">
                <div class="accordion-inner">
                  <ul class="unstyled">
                    <li><a href="addnews.php"><i class="icon-plus"></i> Aggiungi News</a></li>
                    <li><a href="delnews.php"><i class="icon-minus"></i> Elimina News</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                  <i class="icon-picture"></i> Gallery
                </a>
              </div>
              <div id="collapse3" class="accordion-body collapse" style="height: 0px; ">
                <div class="accordion-inner">
                  <ul class="unstyled">
                    <li><a href="addfoto.php"><i class="icon-plus"></i> Aggiungi Elemento</a></li>
                    <li><a href="delfoto.php"><i class="icon-minus"></i> Elimina Elemento</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse5">
                  <i class="icon-remove-circle"></i> Utenti
                </a>
              </div>
              <div id="collapse5" class="accordion-body collapse">
                <div class="accordion-inner">
                  <ul class="unstyled">
                    <li><a href="downloadCvs.php"><i class="icon-download"></i> Scarica i dati degli utenti</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse6">
                  <i class="icon-remove-circle"></i> Logout
                </a>
              </div>
              <div id="collapse6" class="accordion-body collapse">
                <div class="accordion-inner">
                  <ul class="unstyled">
                    <li><a href="logout.php"><i class="icon-remove"></i> Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <script src="http://code.jquery.com/jquery.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
  </html>
  <?php
else:
  header( "location:login.php" );
endif;