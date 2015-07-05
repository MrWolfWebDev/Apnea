<!doctype html>
<html class="no-js">

    <head>
        <meta charset="utf-8"/>
        <title>CLUB APNEA</title>

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

    <body lang="it" id="News">

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





        <!-- MAIN -->
        <div id="main">
            <div class="wrapper">

                <div class="wrapper clearfix">
                    <div style="height:30px;"></div>
                    <div class="demo" style="height:60px; background-color: #036;">

                        <p style="color:#e5e3e1; padding-left:10px;"></p>
                        <a href="/"><img  style="margin-top:-22px; margin-left:4px;" src="img/nomelogo.png" alt="Club Apnea" /></a>
                        <div style="color:#EEE; float:right; text-align:right; font-size:10px; font-family:Arial, Helvetica, sans-serif; padding-right:20px; margin-top:-16px;"><img  style="margin-top:23px; margin-left:0px;" src="img/logo_AA_Refl.png"  width="80" alt="apnea accademy" /></div>
                    </div>

                    <!--   MENU' PRINCIPALE -->
                    <?php
                    include 'includes/mainmenu.html';
                    ?>


                </div>
            </div>

            <div class="home-slider-clearfix "></div>




        </div>

        <!-- ENDS slider holder -->
        <!-- ENDS home-block -->
        <!-- ENDS warper -->
        <div class="wrapper clearfix">

            <!-- blocco blu sotto -->
            <div class="demo2" style="height:100%; margin-top:-60px;
                 background-color: #036;">

                <div class="project-heading">

                    <div class="portfolio-thumbs clearfix" >

                        <!-- area testo -->


                        <div style="width:66%; height:100%; float:left; margin-left: 14px; margin-right:15px; margin-bottom:15px; color:#FFF; text-align:justify; font-size:11px; line-height:15px;">
                            <?php
                            require_once 'lib/Twig/Autoloader.php';
                            Twig_Autoloader::register();

                            $loader = new Twig_Loader_Filesystem('templates');
                            $twig = new Twig_Environment($loader, array(
                                //'debug' => TRUE,
                                'cache' => 'compilation_cache',
                                'auto_reload' => TRUE
                                    ));

                            $template = $twig->loadTemplate('listview.html');

                            include 'php/Table.class.php';

                            $news = new Table("news");

                            $docdata = $news->fetchArray();

                            $template->display(array(
                                'docs' => $docdata
                            ));
                            ?>

                        </div>




                        <!-- area foto -->
                        <div style="width:28%; height:100%; float:right; padding-right: 20px; margin-bottom:20px;">
                            <img src="img/corsi/respirazione/02.jpg" style="width: 100%" alt="foto"/>
                        </div>

                        <div style="width:100%; height:100%; float:left; margin-left: 14px; margin-right:15px; margin-bottom:15px; color:#FFF; text-align: left; font-size:11px; margin-top:-10px;">

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