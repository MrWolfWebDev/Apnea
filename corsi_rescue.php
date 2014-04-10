<!doctype html>
<html class="no-js">

    <head>
        <meta charset="utf-8"/>
        <title>CLUB APNEA - Corso Rescue</title>

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

            $(function() {
                $('#dynCorner').click(function() {
                    $('#dynamic').corner();
                });
                $('#dynUncorner').click(function() {
                    $('#dynamic').uncorner();
                });

                $('div.inner').wrap('<div class="outer"></div>');
                $('p').wrap("<code></code>");

                $('div.demo, div.inner').each(function() {
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
        <script>(function(d, s, id) {
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
                        <a href="index.html"><img  id="apnea" style="margin-top:-22px; margin-left:4px;" src="img/nomelogo.png" alt="Club Apnea" /></a>
                        <div style="color:#EEE; float:right; text-align:right; font-size:10px; font-family:Arial, Helvetica, sans-serif; padding-right:20px; margin-top:-16px;">

                            <img  id="accademia" src="img/logo_AA_Refl.png"  width="80" alt="apnea accademy" />
                        </div>
                    </div>	

                    <!--   MENU' PRINCIPALE -->
                    <?php
                    include 'includes/mainmenu.html';
                    ?>

                    <!--   MENU' ADULTI -->
                    <?php
                    include 'includes/corsimenu.html';
                    ?>
                </div>
            </div>



            <div class="wrapper">

                <!-- slider -->
                <div class="project-slider" style= "margin-bottom:-30px;">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="img/corsi/rescue/01.jpg" alt="corsi apnea" />
                            </li>

                        </ul>
                        <div style="background-color: #000; height:30px;"> </div>
                    </div>
                    <!-- ENDS slider -->

                    <div class="home-slider-clearfix "></div>




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

                        <!-- area foto ----------------------------------------------------------- -->
                        <div style="width:28%; height:100%; float:right; padding-right: 20px; margin-bottom:20px;">
                            <img id="fotoa" src="img/corsi/rescue/02.jpg" width="100%" alt="foto"/>
                        </div>

                        <!-- area testo ----------------------------------------------------------- --> 
                        <div id="corsitesto">


                            <p style="font-family:Arial, Helvetica, sans-serif"><span style="color:#39F; font-weight: bold;">DOVE:</span><br>
                                <span class="bold">Piscina MURAT</span>, via Dino Villani, n. 2 Milano.<br><br>


                                <span style="color:#39F; font-weight: bold;">QUANDO:</span><br>
                                Vedi calendario nella pagina delle <span class="bold">NEWS.</span><br><br>


                                <span style="color:#39F; font-weight: bold;">CONTENUTI:</span><br>
                                L’obiettivo del corso <span class="bold">RESCUE</span> è di implementare la sicurezza dell’immersione in apnea, per se e per gli altri, attraverso la formazione e l’allenamento di apneisti che hanno già una buona tecnica, capaci quindi, di interpretare l’apnea subacquea in modo corretto, in sicurezza e con divertimento.<br> 
                                La parte in piscina consta di circa 6 ore di lezione teorica che verteranno su stress, prevenzione ed emergenza, potenziali rischi dell’apnea, gestione dell’emergenza, BLS-DAN (Basic Life Support) e 9 ore di pratica tra cui: elementi di salvamento, nuoto di salvamento, vestizione-entrata-avvicinamento, prese e protezione del soccorritore, recupero e trasporti dell’infortunato con respirazione, simulazione completa di emergenza.<br>
                                La parte in mare, emergenza in superficie, i recuperi dal fondo, trasporti in superficie, simulazione completa dell’emergenza.<br>
                                Al termine del corso verrà rilasciata <span class="bold">certificazione di primo soccorso BLS - DAN.</span><br><br>


                                <span style="color:#39F; font-weight: bold;">REQUISITI:</span><br>
                                Per iscriversi è necessario <span class="bold">avere 16 anni</span>, avere conseguito almeno il brevetto di apnea base da (almeno) 6 mesi e presentare un certificato medico di idoneità all’attività sportiva agonistica (rilasciabile da un centro di medicina sportiva, presente anche presso la piscina Cozzi).<br> 
                                <span class="bold">Non sono validi certificati non agonistici.</span>
                                <br><br>


                                <span style="color:#39F; font-weight: bold;">ATTREZZATURA:</span><br>
                                Per la parte in acqua occorrono maschera, aeratore, pinne, calzari e muta da apnea, cintura con zavorra. L’attrezzatura non è fornita dall’organizzazione; ogni allievo dovrà avere la propria.<br><br>


                                <span style="color:#39F; font-weight: bold;">ACQUE LIBERE:</span><br>
                                Le uscite in mare saranno comunicate durante il corso e sono organizzate da Clubapnea. Informazioni dettagliate sulle uscite verranno date durante il corso dagli istruttori di apnea.<br>
                                Se l’allievo porta a termine la parte in piscina e non quella in mare, potrà farlo entro 1 anno. Decorso l’anno dovrà versare il 50% della quota di iscrizione del corso e ripetere le prove teorico-pratica in piscina. <br><br>


                                <span style="color:#39F; font-weight: bold;">ISCRIZIONE, COSTI:</span><br>
                                L’intero corso (teoria e pratica in piscina, in acque libere, kit Apnea Rescue e brevetto Apnea Rescue, kit e brevetto BLS-DAN), costa <span class="bold">339,00 €</span>.
                                Puoi iscriverti on line o contattando la nostra segreteria. L’iscrizione si completa consegnando alla Segreteria di Clubapnea l’originale del certificato medico, una fototessera e la quota di iscrizione. <span class="bold">In nessun caso saranno ammessi iscritti privi di certificato medico.</span><br><br>
                            </p>


                        </div>

                        <!-- area foto 2 ----------------------------------------------------------- -->
                        <div style="width:28%; height:100%; float:right; padding-right: 20px; margin-bottom:20px;">
                            <img id="fotob" src="img/corsi/rescue/03.jpg" width="100%"alt="foto" />
                        </div>


                        <div style="width:100%; height:100%; float:left; margin-left: 14px; margin-right:15px; margin-bottom:15px; color:#FFF; text-align: left; font-size:11px; margin-top:-10px;">
                            <p><a href="#"><span style="color:#39F; font-weight: bold;">SCARICA IL PDF CON IL PROGRAMMA DEL CORSO COMPLETO</span></a></p>

                            <div style="margin-top:-60px; margin-left:360px;"><a href="#"><img id="pdf" src="img/pdf.png" width="55"/></a></div><BR>
                            <p style="font-size:9px; margin-top:80px"> CLUB APNEA© 2013</p>
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