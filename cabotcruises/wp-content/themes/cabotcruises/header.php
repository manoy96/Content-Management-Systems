<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Cabot Cruises<?php wp_title();?></title>



   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/solid.css" integrity="sha384-+0VIRx+yz1WBcCTXBkVQYIBVNEFH1eP6Zknm16roZCyeNg2maWEpk/l/KsyFKs7G"
      crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/brands.css" integrity="sha384-1KLgFVb/gHrlDGLFPgMbeedi6tQBLcWvyNUN+YKXbD7ZFbjX6BLpMDf0PJ32XJfX"
      crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/fontawesome.css" integrity="sha384-jLuaxTTBR42U2qJ/pm4JRouHkEDHkVqH0T1nyQXn1mZ7Snycpf6Rl25VBNthU4z0"
      crossorigin="anonymous">
   <link href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" rel="stylesheet">
   <link href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
</head>

<body>



   <div class="headwrap">

      <header>
         <div class="brand">
         <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" srcset="<?php echo get_template_directory_uri(); ?>/img/logo1x.png 1x, <?php echo get_template_directory_uri(); ?>/img/logo2x.png 2x, <?php echo get_template_directory_uri(); ?>/img/logo3x.png 3x" alt="logo">
         <div class="bName">
            <h1>Cabot Cruises</h1>
            <h2>Plan Your Next Adventure</h2>
         </div>
         
         </div>
         <div class="myLinks">
            <div class="phone">
               <a href="tel:8017241381">801-724-1381</a>
            </div>
            <div class="mySocial">
               <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
               <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
               <a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
            </div>
         </div>


      </header>
   </div>

<!-- NAV STARTS HERE -->
<div id="navWrapper">
	<nav class="clearfix">
  		<button id="hamburgerBtn"></button>
        <?php wp_nav_menu(array('menu_id' => 'primaryNav'));?>
           

		<div id="search">
		<form method="get" action="/">
			<input class="sfield" type="search" name="s" placeholder="search...">
			<!-- <input class="sbtn" type="submit" value=""> -->
         <button class="sbtn" type="submit" value=""><i class="fas fa-search"></i></button>
		</form>
	</div>
	</nav>
</div>
         <div class="search">
            <input type="search" name="search" id="search" placeholder="Search...">
            <button><i class="fas fa-search fa-2x"></i></button>
         </div>
      </div>
   </div>



   <main>