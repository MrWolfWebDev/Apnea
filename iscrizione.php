<!doctype html>
<html class="no-js">

    <head>
        <meta charset="utf-8"/>
        <title>CLUB APNEA - Stage</title>

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" media="all" href="css/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->


        <!-- JS -->
        <script src="js/jquery-1.6.4.min.js"></script>
        <script src="js/css3-mediaqueries.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/tabs.js"></script>
        <script src="js/jquery.corner.js"></script>

        <!-- Tweet -->
        <link rel="stylesheet" href="css/jquery.tweet.css" media="all"  /> 
        <script src="js/tweet/jquery.tweet.js" ></script> 
        <!-- ENDS Tweet -->

        <!-- superfish -->
        <link rel="stylesheet" media="screen" href="css/superfish.css" /> 
        <script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
        <script  src="js/superfish-1.4.8/js/superfish.js"></script>
        <script  src="js/superfish-1.4.8/js/supersubs.js"></script>
        <!-- ENDS superfish -->

        <!-- prettyPhoto -->
        <script  src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
        <!-- ENDS prettyPhoto -->

        <!-- poshytip -->
        <link rel="stylesheet" href="js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
        <link rel="stylesheet" href="js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
        <script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
        <!-- ENDS poshytip -->

        <!-- GOOGLE FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>

        <!-- Flex Slider -->
        <link rel="stylesheet" href="css/flexslider2.css" >
        <script src="js/jquery.flexslider-min.js"></script>
        <!-- ENDS Flex Slider -->

        <!-- Less framework -->
        <link rel="stylesheet" media="all" href="css/lessframework.css"/>

        <!-- modernizr -->
        <script src="js/modernizr.js"></script>

        <!-- SKIN -->
        <link rel="stylesheet" media="all" href="css/skin.css"/>


        <script type="text/javascript">
            // test auto-ready logic - call corner before DOM is ready
            $('#readyTest').corner();

            $(function () {
                $('#dynCorner').click(function () {
                    $('#dynamic').corner();
                });
                $('#dynUncorner').click(function () {
                    $('#dynamic').uncorner();
                });

                $('div.inner').wrap('<div class="outer"></div>');
                $('p').wrap("<code></code>");

                $('div.demo, div.inner').each(function () {
                    var t = $('p', this).text();
                    eval(t);
                });

                // fixed/fluid tests
                $("div.box, div.plain").corner();
                $("#abs").corner("cc:#08e");

                $('.myCorner').corner();
            });
        </script>

        <script type="text/javascript">

            /* angoli box sopra */
            $('.demo').corner("top 10px");

            /* angoli box chiusura */
            $('.demo2').corner("bottom 10px");

            $('.portfolio-thumbs figure').corner("top 10px");

        </script>


    </head>

    <body lang="en">

        <!-- js per bottone FaceBook -->

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <!-- END js per bottone FaceBook -->



        <p>

            <!-- MAIN -->
        <div id="main">
            <div class="wrapper">
                </p>
                <div class="wrapper clearfix">
                    <div style="height:1px;"></div>
                    <div class="demo" style="height:60px; background-color: #003380;">

                        <p style="color:#e5e3e1; padding-left:10px;"></p>
                        <a href="/"><img  id="apnea" style="margin-top:-22px; margin-left:4px;" src="img/nomelogo.png" alt="Club Apnea" /></a>
                        <div style="color:#EEE; float:right; text-align:right; font-size:10px; font-family:Arial, Helvetica, sans-serif; padding-right:20px; margin-top:-16px;">

                            <img  id="accademia" src="img/logo_AA_Refl.png"  width="80" alt="apnea accademy" />
                        </div>
                    </div>	

                    <!--   MENU' PRINCIPALE -->
                    <div id="combo-holder"></div>
                    <nav style="height: 30px;">
                        <ul id="nav" class="sf-menu">
                            <li><a href="corsi_base.html" style="font-size: 12px; letter-spacing: 2px; padding-left: 10px; padding-right: 10px; ">CORSI</a></li>
                            <li><a href="chi_siamo.html" style="font-size: 12px; letter-spacing: 2px; padding-left: 10px; padding-right: 10px;">CHI SIAMO / CONTATTI</a></li>
                            <li><a href="iscrizione.php" style="font-size: 12px; letter-spacing: 2px; padding-left: 10px; padding-right: 10px;">ISCRIVITI</a></li>
                            <li><a href="gallery_base.php" style="font-size: 12px; letter-spacing: 2px; padding-left: 10px; padding-right: 10px;">GALLERY</a></li>	                    	
                            <li><a href="video.php" style="font-size: 12px; letter-spacing: 2px; padding-left: 10px; padding-right: 10px;">VIDEO</a></li>
                            <li><a href="news.php" style="border-right: 0px solid; font-size: 12px; letter-spacing: 2px; padding-left: 10px; padding-right: 10px;">NEWS</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- ENDS slider holder -->


            </div>
        </div>
        <!-- ENDS home-block -->
        <!-- ENDS warper -->
        <div class="wrapper clearfix">

            <!-- blocco blu sotto -->
            <div class="demo2" style="height:100%; margin-top:-60px; 
                 background-color: #003380;">

                <div class="project-heading">

                    <div class="portfolio-thumbs clearfix" >


                        <!-- area testo --> 


                        <div id="corsitesto">
                            <span style="color:#FFF; font-weight: bold; font-size: 60px; width: 100%; text-align: center; margin-bottom: 20px; margin-top: 20px;">ISCRIZIONE</span><br>

                            <span style="color:#39F; font-weight: bold;">CONTATTI:</span><br>

                            <p>tel.  349 6648914 – email: <a href="mailto:segreteria@clubapnea.org">segreteria@clubapnea.org</a></p>

														<p> 
Benvenuto, benvenuta! 
<br/>
Per partecipare alle nostre attività: 

<br/>
1) inserisci i dati richiesti qui sotto per l’adesione a  ClubApnea ASD (siamo un’associazione sportiva, per 

fare uno dei nostri corsi è necessario associarsi) e per l’iscrizione al corso; 

<br/>
2) fai/prenota il CERTIFICATO MEDICO: per tutti i corsi (tranne per quello di respirazione per cui occorre il 

certificato medico di buona salute) serve il certificato SPORTIVO AGONISTICO. Può essere rilasciato solo dal 

medico sportivo. Quando prenoti la visita per il certificato sportivo agonistico, devi specificare che è per 

l’attività di apnea e che va bene in carta libera. Il certificato sportivo agonistico infatti può essere rilasciato 

anche su carta intestata della Regione Lombardia. A noi non serve su carta intestata e per ottenerlo è 

necessaria una richiesta dell’associazione, non necessaria invece per averlo su carta libera (in ogni caso, se 

tu volessi farlo su carta intestata, possiamo farti avere tale richiesta). Ricorda che è obbligatorio avere il 

certificato medico non al momento dell’iscrizione ma al momento dell’inizio del corso, per cui puoi iscriverti 

anche prima di averlo, ma è necessario organizzarsi per consegnarlo alla prima lezione. 

<br/>
3) una volta inseriti i dati richiesti, si genera una scheda di iscrizione (in pdf), stampala e firmala in originale, 

poi procedi a PERFEZIONARE LA TUA ISCRIZIONE contattando la segreteria di ClubApnea all’email 

<a href="mailto:segreteria@clubapnea.org">segreteria@clubapnea.org</a> o al telefono 3496648914: ti indicheremo le MODALITÀ DI PAGAMENTO della 

quota di adesione e ti daremo indicazioni per CONSEGNARE la scheda di iscrizione e il certificato medico 

(anch’esso in originale). 
<br/>
Per ogni informazione, dubbio o curiosità, contattaci al 3496648194. 
<br/>
A presto 
<br/>
ClubApnea
 </p>


                            <form action="pdf.php" method="post">
                                <p>Io sottoscritto <input type="text" placeholder="Cognome" name="cognome">  <input type="text" placeholder="Nome" name="nome">,</p>
																<p>(Codice fiscale: <input type="text" name="codicefiscale"/>)</p>
																<p>nato a <input type="text" placeholder="città" name="cittanascita">il <input type="text" placeholder="data di nascita" name="datanascita">,</p>
																<p>residente in <input type="text" placeholder="Città" name="cittaresidenza">, <input type="text" placeholder="CAP" name="capresidenza"/>,</p>
																<p>via/piazza <input type="text" name="viaresidenza"/></p>
																<p><input type="text" placeholder="email" name="email"><input type="text" placeholder="cellulare" name="cellulare">
                                <p>chiedo di frequentare il corso di <input type="text" placeholder="Nome Corso" name="corso"></p>
                                <p>che si terrà presso <input type="text" placeholder="Luogo" name="luogo"></p>
                                <p>nel periodo dal/al <input type="text" placeholder="Periodo" name="periodo"></p>
																<p>per l'anno sportivo <input type="text" name="annosportivo"></p>
                                <input type="submit" value="Invia Richiesta">
                            </form>
                        </div>


                        <div style="width:100%; height:100%; float:left; margin-left: 14px; margin-right:15px; margin-bottom:15px; color:#FFF; text-align: left; font-size:11px; margin-top:-10px;"><!--
                               <p><a href="#"><span style="color:#39F; font-weight: bold;">SCARICA IL PDF CON IL PROGRAMMA DEL CORSO COMPLETO</span></a></p>
                           
                           <div style="margin-top:-60px; margin-left:360px;"><a href="#"><img id="pdf" src="img/pdf.png" width="55"/></a></div><BR>
                           <p style="font-size:9px; margin-top:80px"> CLUB APNEA© 2013</p>-->
                        </div>

                        <div class="fb-like" style="margin-right:58px; margin-bottom:30px; margin-top:-30px; float:right;" data-href="https://www.facebook.com/beppe.volpini" data-send="false" data-layout="button_count" data-width="350" data-show-faces="false" data-font="arial" data-colorscheme="dark"></div>



                    </div>
                </div>  

                <!--  ENDS project content-->


            </div>  
        </div>


        <div class="clearfix"></div>

        <!-- ENDS MAIN -->


    </body>

</html>
