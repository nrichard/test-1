<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Script-Type" content="text/javascript"> 
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
    <meta name="title" content="Zeschool"> 
    <meta name="description" content="Apprendre autrement"> 
    
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

    <link href="/css/main.css" rel="stylesheet" type="text/css">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        
  </head>
  <body>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
		$('#rotator').cycle({
			cleartype: false,
		    speed:  800,
		    timeout:  4550,
		    pager:  '#pager',
			random:  0
		});
	});
</script>

      <div id="top-header">

          <div class="topmenu">
              <div class="nombre_connectes_inscrits">
                  <span>265 connectés - 222 080 Membres inscrits</span>
              </div>

              <div class="submenu">
                  <span><a href="#">Forum</a></span>
                  <span><a href="#">orientation</a></span>
                  <span><a href="#">FAQ</a></span>
                  <span><a href="#">Matières</a></span>
                  <span><a href="#">Webicours</a></span>
                  <span><a href="#">Bacs</a></span>
                  <span><a href="#">Concours</a></span>
              </div>
          </div>
      </div>



      <div id="header">
          <div class="header_menu">

              <div style="float:right">
                  <div class="connexion">
                      <?php
                      if(!isset($_SESSION['pseudo'])){
                      ?>
                      <span><a href="">Créer un compte</a> -</span>

                      <span><a href="">S'identifier</a></span>
                      <?php
                      }
                      else{
                      ?>
                      <a href="">Se déconnecter</a>
                      <?php
                      }
                      ?>
                      <a href="#"><img style="margin-left:15px" src="/images/rss.png" alt="rss"/></a>
                      <a href="#"><img src="/images/twitter.png" alt="rss"/></a>
                      <a href="#"><img src="/images/fb.png" alt="rss"/></a>
                  </div>
              </div>

          </div>
      </div>
      
		<div id="page">



		</div>

    <div id="footer">

          	<a href="">Accueil du site</a>
		<a href="">Inscription</a>
		<a href="">Ajouter une matière</a>
		<a href="">Se déconnecter</a>
    </div>

  </body>
</html>
