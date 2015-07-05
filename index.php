<!doctype html>
<html class="no-js">

    <head>
        <meta charset="utf-8"/>
        <title>CLUB APNEA - freediving school Milano</title>

        <link rel="stylesheet" media="all" href="css/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

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

    <body lang="it">


        <p>

            <!-- MAIN -->
        <div id="main">
            <div class="wrapper">
                </p>
                <div class="wrapper clearfix">
                    <div style="height:1px;"></div>
                    <div class="demo" style="height:60px; background-color: #003380;">

                        <p style="color:#e5e3e1; padding-left:10px;"></p>
                        <a href="index.php"><img  id="apnea" style="margin-top:-22px; margin-left:4px;" src="img/nomelogo.png" alt="Club Apnea" /></a>
                        <div style="color:#EEE; float:right; text-align:right; font-size:10px; font-family:Arial, Helvetica, sans-serif; padding-right:20px; margin-top:-16px;">

                            <img  id="accademia" src="img/logo_AA_Refl.png"  width="80" alt="apnea accademy" />
                        </div>
                    </div>


                    <!--   MENU' PRINCIPALE -->
                    <?php
                    include 'includes/mainmenu.html';
                    ?>

                </div>



                <div class="wrapper">


                    <!-- slider -->
                    <div class="project-slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="img/slide/01_home.jpg" alt="alt text" />
                                </li>

                                <li>
                                    <img src="img/slide/02_home.jpg" alt="alt text" />
                                </li>

                                <li>
                                    <img src="img/slide/03_home.jpg" alt="alt text" />
                                </li>

                                <li>
                                    <img src="img/slide/04_home.jpg" alt="alt text" />
                                </li>

                                <li>
                                    <img src="img/slide/05_home.jpg" alt="alt text" />
                                </li>

                                <li>
                                    <img src="img/slide/06_home.jpg" alt="alt text" />
                                </li>

                                <li>
                                    <img src="img/slide/07_home.jpg" alt="alt text" />
                                </li>

                                <li>
                                    <img src="img/slide/08_home.jpg" alt="alt text" />
                                </li>

                                <li>
                                    <img src="img/slide/09_home.jpg" alt="alt text" />
                                </li>
                            </ul>
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
                <div class="demo2" style="height:100%; margin-top:-30px; background-color: #003380;">

                    <div class="project-heading">
                        <!-- thumbs -->
                        <div class="portfolio-thumbs clearfix" >

                            <!-- video ----------------------------------------------------------- -->

                            <figure>
                                <figcaption>
                                    <strong>CORSI<BR>
                                        <p style="font-weight:normal; font-size:12px;">Est venture veni tem int, modiatur simus saepuda quia qui, is sa nonsedit que maiorum ressus ium harum et pedipsae ea doluptus.</p></strong>

                                    <span>Continua a leggere</span>
                                </figcaption>

                                <a href="corsi_base.php"><img src="img/alien/avatar/01v.jpg" alt="CLUB APNEA" /></a>
                            </figure>

                            <a href="chi_siamo.html">
                                <figure>
                                    <figcaption>
                                        <strong>CHI SIAMO<BR>
                                            <p style="font-weight:normal; font-size:12px;">Est venture veni tem int, modiatur simus saepuda quia qui, is sa nonsedit que maiorum ressus ium harum et pedipsae ea doluptus.</p></strong>

                                        <span>Continua a leggere</span>
                                    </figcaption>
                                    <a href="chi_siamo.html"><img src="img/alien/avatar/02v.jpg" alt="CLUB APNEA" /></a>
                                </figure>
                            </a>

                            <a href="iscrizione.php">
                                <figure>
                                    <figcaption>
                                        <strong>ISCRIVITI<BR>
                                            <p style="font-weight:normal; font-size:12px;">Est venture veni tem int, modiatur simus saepuda quia qui, is sa nonsedit que maiorum ressus ium harum et pedipsae ea doluptus.</p></strong>

                                        <span>Continua a leggere</span>
                                    </figcaption>
                                    <a href="iscrizione.php"><img src="img/alien/avatar/03v.jpg" alt="CLUB APNEA" /></a>
                                </figure>
                            </a>

                            <!-- foto ----------------------------------------------------------- -->

                            <a href="gallery_base.php">
                                <figure>
                                    <figcaption>
                                        <strong>GALLERY<BR>
                                            <p style="font-weight:normal; font-size:12px;">Est venture veni tem int, modiatur simus saepuda quia qui, is sa nonsedit que maiorum ressus ium harum et pedipsae ea doluptus.</p></strong>

                                        <span>Continua a leggere</span>
                                    </figcaption>
                                    <a href="gallery_base.php"><img src="img/alien/avatar/01.jpg" alt="Human Alienation 01" /></a>
                                </figure>
                            </a>
                            <a href="chi_siamo.html">
                                <figure>
                                    <figcaption>
                                        <strong>CONTATTI<BR>
                                            <p style="font-weight:normal; font-size:12px;">Est venture veni tem int, modiatur simus saepuda quia qui, is sa nonsedit que maiorum ressus ium harum et pedipsae ea doluptus.</p></strong>

                                        <span>Continua a leggere</span>
                                    </figcaption>
                                    <a href="chi_siamo.html"><img src="img/alien/avatar/02.jpg" alt="Human Alienation 02" /></a>
                                </figure>
                            </a>
                            <a href="news.php">
                                <figure>
                                    <figcaption>
                                        <strong>NEWS<BR>
                                            <p style="font-weight:normal; font-size:12px;">Est venture veni tem int, modiatur simus saepuda quia qui, is sa nonsedit que maiorum ressus ium harum et pedipsae ea doluptus.</p></strong>

                                        <span>Continua a leggere</span>
                                    </figcaption>
                                    <a href="news.php"><img src="img/alien/avatar/03.jpg" alt="Human Alienation 03" /></a>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!--  ENDS project content-->


                </div>

            </div>


            <div class="clearfix"></div>

            <!-- ENDS MAIN -->


    </body>

</html>
