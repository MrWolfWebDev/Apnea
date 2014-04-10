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
            <title>Gallery</title>
            <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
            <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" />
            <link href="css/adminstyle.css" rel="stylesheet" />
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="row"><h3>Gallery</h3></div>
                    <div class="row"><hr></hr></div>


                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">Foto</a>
                            </li>
                            <li>
                                <a href="#2" data-toggle="tab">Video</a>
                            </li>            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="1">      
                                <form class="span10 offset1" enctype="multipart/form-data" action="addfoto.php" method="post">
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
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="row">
                                        <legend>Insere le immagini:</legend>
                                        <input id="file" type="file" name = "files[]"  multiple="multiple" />
                                    </div>
                                    <div class="row"><hr></hr></div>
                                    <div class="row"><input class="btn btn-large btn-primary " type="submit" value="Inserisci" name="submit1" /></div>

                                </form>
                            </div>
                            <div class="tab-pane" id="2">
                                <form action="addfoto.php" method="POST"  class="span6 offset2">
                                    <div class="row">
                                        <legend>Link Video:</legend> 
                                        <input class="span6" type="text" class="input-block-level" name="video"/>
                                    </div> 
                                    <div class="row">
                                        <legend>Titolo:</legend> 
                                        <input class="span6" type="text" class="input-block-level" name="titolo"/>
                                        <div class="row"><hr></hr></div>
                                        <div class="row"><input class="btn btn-large btn-primary " type="submit" value="Inserisci"  name="submit2" /></div>   
                                    </div> 
                                </form>
                            </div>            
                        </div>
                    </div>


                </div>


                <script src="http://code.jquery.com/jquery.js"></script>
                <script src="bootstrap/js/bootstrap.min.js"></script>

                <?php
                $galleryDB = new Table("gallery");

                if (isset($_POST['submit1'])) {

                    function hashImage() {
                        $filename = "";
                        $length = 5;
                        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
                        for ($p = 0; $p < $length; $p++) {
                            $filename .= $characters[mt_rand(0, strlen($characters - 1))];
                        }
                        return $filename;
                    }

                    $gallery = filter_var($_POST['galleria'], FILTER_SANITIZE_STRING);

                    $lista = $_FILES['files']['tmp_name'];

                    foreach ($lista as $nome_immagine) {
                        /*
                         * Uploda immagine
                         */
                        $img_info = getimagesize($nome_immagine);

                        // Separate the extension
                        $originalfile = substr($nome_immagine, 0, strripos($nome_immagine, '.'));
                        $ext = $img_info[2];

                        $inviato = file_exists($nome_immagine);

                        $ID = hashImage($originalfile) . $ext;

                        $nuovo_nome = "../images/gallery/$gallery/$ID.jpg";

                        if ($inviato) {
                            // sposto l'immagine nella cartella 
                            move_uploaded_file($nome_immagine, $nuovo_nome);
                        } else {
                            echo "<BR> Errore";
                        }

                        /*
                         * Creo array per inserimento
                         */
                        $array = array(
                            "Path" => substr($nuovo_nome, 3),
                            "Gallery" => $gallery,
                            "Titolo" => "",
                            "DataIns" => date("Y-m-d"),
                        );

                        /*
                         * Metodo per inserimento in db
                         */
                        $galleryDB->insert($array);
                    }
                    header("Location:index.php");
                }

                if (isset($_POST['submit2'])) {

                    $path = filter_var($_POST['video'], FILTER_SANITIZE_STRING);
                    $titolo = filter_var($_POST['titolo'], FILTER_SANITIZE_STRING);

                    /*
                     * Creo array per inserimento
                     */
                    $array = array(
                        "Path" => $path,
                        "Gallery" => 10,
                        "Titolo" => $titolo,
                        "DataIns" => date("Y-m-d"),
                    );

                    /*
                     * Metodo per inserimento in db
                     */
                    $galleryDB->insert($array);

                    header("Location:index.php");
                }
                ?>
        </body>
    </html>
    <?php
else:
    header("location:login.php");
endif;