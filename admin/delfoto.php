<?php
ob_start();

session_start();
if ($_SESSION['auth'] == 1):


    include '../php/Table.class.php';
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Elimina Elementi Galleria</title>
            <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
            <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />
            <link href="css/adminstyle.css" rel="stylesheet" />
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <form class="span10 offset1" enctype="multipart/form-data" action="delfoto.php" method="post">
                        <div class="row"><h3>Elimina Elementi Galleria</h3></div>

                        <?php
                        if (!isset($_POST['select'])) {
                            echo '<div class="row"><hr></hr></div>
                    <div class="row">
                            <fieldset>
                                <legend>Selezionare la galleria:</legend>

                                <select name="galleria" >
                                    <option value="1" selected="selected">Apnea Base  </option>
                                    <option value="2">Apnea Avanzato  </option>
                                    <option value="3">Apnea Indoor  </option>
                                    <option value="4">Apnea Rescue  </option>
                                    <option value="5">Apnea Monopinna  </option>
                                    <option value="6">Mantenimento  </option>
                                    <option value="7">Tecniche di Respirazione  </option>
                                    <option value="8">Stage </option>
                                    <option value="9">Eventi  </option>
                                    <option value="0">KAD  </option>
                                    <option value="10">Video  </option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="row"><hr></hr></div>
                        <div class="row"><input class="btn btn-large btn-primary " type="submit" value="Seleziona" name="select" /></div>';
                        }

                        $galleryDB = new Table("gallery");

                        if (isset($_POST['select'])) {

                            $galleria = filter_var($_POST['galleria'], FILTER_SANITIZE_STRING);

                            $result1 = $galleryDB->fetchAll();

                            foreach ($result1 as $foto) {
                                if ($foto->Gallery == $galleria) {
                                    echo '<input type="checkbox"  name="foto[]" value="', $foto->ID, '"/> <img src="../', $foto->Path, '" width="100px">  <b>', $foto->Titolo, "</b>";
                                    echo '<br/>';
                                }
                            }
                            echo '<div class="row"><hr></hr></div>';
                            echo '<div class="row"><input class="btn btn-large btn-primary " type="submit" value="Elimina" name="Delete"/></div> ';
                        }
                        ?>                    
                    </form>
                </div>
            </div>

            <?php
            if (isset($_POST['Delete'])) {

                $deadlist = $_POST['foto'];

                foreach ($deadlist as $kill) {
                    $path = $galleryDB->fetchByID($kill);
                    if ($galleria != 10) {
                        unlink('../' . $path->Path);
                    }
                    $galleryDB->delete($kill);
                }


                header("Location:index.php");
            }
            ?>
        </body>
    </html>
    <?php
else:
    header("location:login.php");
endif;