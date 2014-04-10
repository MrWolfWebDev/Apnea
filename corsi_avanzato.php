<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>CLUB APNEA - Corso Avanzato</title>
		
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
    
    $(function(){
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
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
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
						      <img src="img/corsi/avanzato/01.jpg" alt="corsi apnea" />
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
	  <img id="fotoa" src="img/corsi/avanzato/02.jpg" width="100%" alt="foto"/>
  </div>
  
               
   <!-- area testo ----------------------------------------------------------- --> 
     
<div id="corsitesto">

<p style="font-family:Arial, Helvetica, sans-serif"><span style="color:#39F; font-weight: bold;">DOVE:</span><br>
<span class="bold">Piscina MURAT</span>, via Dino Villani, n. 2 Milano.<br><br>


<span style="color:#39F; font-weight: bold;">QUANDO:</span><br>
Vedi calendario nella pagina delle <span class="bold">NEWS.</span><br><br>


<span style="color:#39F; font-weight: bold;">CONTENUTI:</span><br>
La parte in piscina prevede <span class="bold">45 ore di lezione</span> (teoria e pratica) incentrate sull’affinamento, fino alla perfetta esecuzione, delle tecniche di immersione in apnea già apprese nel livello precedente; su tecniche di allenamento dell’apneista ad alto livello (i parametri da raggiungere sono importanti e richiedono una preparazione fisica mirata); su tecniche di salvamento, allo scopo di gestire correttamente situazioni di emergenza; su tecniche avanzate di rilassamento e respirazione. <span class="bold">Sono previste videoriprese subacquee e prove dei massimali con assistenza</span>. la parte in mare prevede 6 sessioni in assetto costante (vedere sotto nella parte “acque libere”) per il raggiungimento della quota prevista <span class="bold">fino a -25 mt</span>. 
<br><br>


<span style="color:#39F; font-weight: bold;">REQUISITI:</span><br>
Per iscriversi è necessario <span class="bold">aver compiuto 16 anni</span>, aver conseguito il brevetto di apnea BASE - Apnea Academy e presentare un certificato medico di idoneità all’attività sportiva agonistica (originale+1copia). Il certificato è rilasciabile da qualunque centro di medicina sportiva, anche direttamente presso il centro di fisiologia sportiva presso la piscina Cozzi (tel. 0229003302 – 026552124). Si consiglia di prenotare per tempo la visita. <span class="bold">I certificati medici non agonistici non sono validi ai fini dell’iscrizione</span>.<br><br>


<span style="color:#39F; font-weight: bold;">ATTREZZATURA:</span><br>
Per la parte in acqua occorre: maschera, aeratore, pinne, calzari e muta da apnea, cintura con zavorra. Per le sedute di respirazione e rilassamento a secco occorre abbigliamento comodo. L’attrezzatura non è fornita dall’organizzazione; ogni allievo dovrà avere la propria.<br><br>


<span style="color:#39F; font-weight: bold;">ACQUE LIBERE:</span><br>
Le sessioni in acque libere, per il <span class="bold">conseguimento del brevetto di apneista avanzato Apnea Academy</span>, sono 6 e si terranno in 3 giorni, definiti durante il corso. Ulteriori informazioni dettagliate verranno date dagli istruttori Apnea Academy. Nel caso in cui l’allievo porti a termine la parte in piscina e non quella in mare, potrà farla entro 1 anno. Decorso l’anno, dovrà versare nuovamente una quota di 180,00 € e ripetere la prova teorico-pratica in piscina.<br><br>


<span style="color:#39F; font-weight: bold;">ISCRIZIONE, COSTI:</span><br>
L’intero corso (lezioni di teoria e pratica in piscina, lezioni in acque libere, e brevetto) costa <span class="bold">740,00 €. Chi lo desidera può dilazionare il pagamento in due tranche, la prima di 518 €, al momento dell’iscrizione, e la restante, di 222€, entro il 4 dicembre 2013.</span><br>
Puoi iscriverti on line o contattando la nostra segreteria. L’iscrizione si completa consegnando alla Segreteria di Clubapnea l’originale del certificato medico, una fototessera e la quota di iscrizione. In nessun caso saranno ammessi iscritti privi di certificato medico.<br><br>
</p>


</div>

  <!-- area foto 2 ----------------------------------------------------------- -->
<div style="width:28%; height:100%; float:right; padding-right: 20px; margin-bottom:20px;">
	  <img id="fotob" src="img/corsi/avanzato/03.jpg" width="100%"alt="foto" />
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