<!doctype html>
<HTML LANG="fr" > 


<head>
<meta charset="utf-8">
<META HTTP-EQUIV="Content-Language" CONTENT="fr"> 
<title>Module Météo - Nakapeo</title>
<link rel="author" href="https://plus.google.com/+CamillePiombo" />
<meta name="author" content="Camille Piombo" />

<script LANGUAGE="JavaScript" src="Ephemeride.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery.cycle.all.js"></script>
<!--<link rel="stylesheet" href="meteo-b-d.css">-->
<?php 
$color_txt = "ffffff" ;
	if (isset($_GET['color_txt']) && $_GET['color_txt'] != "") { $color_txt = $_GET['color_txt'];}

$tps = "10" ;
	if (isset($_GET['tps_met']) && $_GET['tps_met'] != "") { $tps = $_GET['tps_met'];
	}
	?>

<script language='javascript'>


function affKeyCode(event) // fonction je lance le script après avoir appuyer sur une touche
{
	
	document.getElementById("weather").style.display = "block";
	document.getElementById("weather2").style.display = "block";
	document.getElementById("weather3").style.display = "block";
	//météo astro...
$(document).ready(function(){
	$('#slideshow0') .cycle({
		fx: 'scrollLeft', //'scrollLeft,scrollDown,scrollRight,scrollUp',blindX, blindY, blindZ, cover, curtainX, curtainY, fade, fadeZoom, growX, growY, none, scrollUp,scrollDown,scrollLeft,scrollRight,scrollHorz,scrollVert,shuffle,slideX,slideY,toss,turnUp,turnDown,turnLeft,turnRight,uncover,ipe ,zoom
 		speed : 1000,
   		timeout: <?=$tps?>000,
		
	});
});
}

</script>


<style>
/*
  Docs at http://http://simpleweatherjs.com

  Look inspired by http://www.degreees.com/
  Used for demo purposes.

  Weather icon font from http://fonts.artill.de/collection/artill-weather-icons
*/

@font-face {
    font-family: 'weather';
    src: url('weatherfont/artill_clean_icons-webfont.eot');
    src: url('weatherfont/artill_clean_icons-webfont.eot?#iefix') format('embedded-opentype'),
url('weatherfont/artill_clean_icons-webfont.woff') format('woff'),
url('weatherfont/artill_clean_icons-webfont.ttf') format('truetype'),
url('weatherfont/artill_clean_icons-webfont.svg#artill_clean_weather_iconsRg') format('svg');
    font-weight: normal;
    font-style: normal;
}

html {
  
}

body {
  padding: 0;
  margin:0 ; 
  font: 16px 'Open Sans', "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  color: #<?php echo $color_txt ;?>;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0); !important
  background-size: cover !important;
}



.icon-0:before { content: ":"; }
.icon-1:before { content: "p"; }
.icon-2:before { content: "S"; }
.icon-3:before { content: "Q"; }
.icon-4:before { content: "S"; }
.icon-5:before { content: "W"; }
.icon-6:before { content: "W"; }
.icon-7:before { content: "W"; }
.icon-8:before { content: "W"; }
.icon-9:before { content: "I"; }
.icon-10:before { content: "W"; }
.icon-11:before { content: "I"; }
.icon-12:before { content: "I"; }
.icon-13:before { content: "I"; }
.icon-14:before { content: "I"; }
.icon-15:before { content: "W"; }
.icon-16:before { content: "I"; }
.icon-17:before { content: "W"; }
.icon-18:before { content: "U"; }
.icon-19:before { content: "Z"; }
.icon-20:before { content: "Z"; }
.icon-21:before { content: "Z"; }
.icon-22:before { content: "Z"; }
.icon-23:before { content: "Z"; }
.icon-24:before { content: "E"; }
.icon-25:before { content: "E"; }
.icon-26:before { content: "3"; }
.icon-27:before { content: "a"; }
.icon-28:before { content: "A"; }
.icon-29:before { content: "a"; }
.icon-30:before { content: "A"; }
.icon-31:before { content: "6"; }
.icon-32:before { content: "1"; }
.icon-33:before { content: "6"; }
.icon-34:before { content: "1"; }
.icon-35:before { content: "W"; }
.icon-36:before { content: "1"; }
.icon-37:before { content: "S"; }
.icon-38:before { content: "S"; }
.icon-39:before { content: "S"; }
.icon-40:before { content: "M"; }
.icon-41:before { content: "W"; }
.icon-42:before { content: "I"; }
.icon-43:before { content: "W"; }
.icon-44:before { content: "a"; }
.icon-45:before { content: "S"; }
.icon-46:before { content: "U"; }
.icon-47:before { content: "S"; }
.icon-3200:before { content: ""; }/*azertyuiopqsdfghjklmwxcvbn1234567890QSDFGHJKLMWXCVBN?.;#*"\'*/

.icon-wind:before { 
	content: "."; 
	font-size: 60px !important;
	padding-right: 10px;
}

.icon-humidite:before { 
	content: "5"; 
	font-size: 60px !important;
	padding-right: 10px;
}

.icon-lever:before { 
	content: "7"; 
	font-size: 60px !important;
	padding-right: 5px;
}

.icon-coucher:before { 
	content: "8"; 
	font-size: 60px !important;
	padding-left: 10px;
	padding-right: 5px;
}

/*icones supplémentaires
.icon-lever:before { 
	content: "0";
	color : #000 ;
	font-size: 40px;
	position: absolute;
	margin: -90px 0 0 -30px;
	 }

.icon-coucher:before { 
	content: "9";
	color : #000 ;
	font-size: 40px;
	position: absolute;
	margin: -90px 0 0 -30px;
	 }

i {
  color: #fff;
  font-family: weather;
  font-size: 150px;
  font-weight: normal;
  font-style: normal;
  line-height: 1.0;
}*/






i {
  font-size: 120px ;
  margin : -5px 0 -30px 0;
  color: #<?php echo $color_txt ;?>;
  font-family: weather;
  font-weight: normal;
  font-style: normal;
  line-height: 1.0;
}

 h2 {
	  margin: 0 0 -10px 0;
	  color: #<?php echo $color_txt ;?>;
	  font-size: 30px;
	  font-weight: blod;
	  text-align: center;
	  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
	}
	
	 h3 {
	  margin: 10px 0 -20px 0 ;
	  color: #<?php echo $color_txt ;?>;
	  font-size: 25px;
	  font-weight: blod;
	  text-align: center;
	  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
	} 
	 h4 {
	  margin: 10px 0 0 0;
	  color: #<?php echo $color_txt ;?>;
	  font-size: 18px;
	  font-weight: blod;
	  text-align: center;
	  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
	}
		#met_fr {
	  margin: -10px 0 15px 0 !important;
	  
	} 


 h5 {
  margin: 0 0 0 0;
  color: #<?php echo $color_txt ;?>;
  font-size: 20px;
  font-weight: blod;
  text-align: center;
  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
}

.descr {
	position:absolute !important;
	width:200px !important;
}

 ul {
  margin: 0;
  padding: 0;
}

#jour {
	float: left ;

}

#jour li {
	width:245px !important;
	height: 400px !important;
}
 li {
  background: #fff;
  /*background: rgba(255,255,255,0.90);*/
  padding: 20px 30px;
  display: inline-block;
  border-radius: 5px; 
  margin: 10px;
  width:195px ;
height: 170px ;
  background: -webkit-linear-gradient(
        top,
        #78D1DB,
        #38A8CD 30%,
        #38A8CD 50%,
        #38A8CD 70%,
        #78D1DB
    );
    background: -moz-linear-gradient(
        top,
        #78D1DB,
        #38A8CD 30%,
        #38A8CD 50%,
        #38A8CD 70%,
        #78D1DB
    );
    background: -o-linear-gradient(
        top,
        #78D1DB,
        #38A8CD 30%,
        #38A8CD 50%,
        #38A8CD 70%,
        #78D1DB);
    background: linear-gradient(top,
        #78D1DB,
        #38A8CD 30%,
        #38A8CD 50%,
        #38A8CD 70%,
        #78D1DB);

}



#now {
	width: 40%;
	float: left;
	min-width: 250px ;
	margin-top: 80px ;
	
	
}

#now h2, #now h3, #now h1, #now h4 {
	text-shadow: 5px 3px 3px rgba(0, 0, 0, 0.60) !important; 
}





.marge {
	margin : 0px 20px ;
}

/*Température*/
.temp_max {
	color: #FFEE66 ;
}

.temp_min {
	color:#CFF ;
}

.temp {
	text-align: left !important;
	margin: 10px 0 0 150px !important;
}



#jour1 .temp {
	text-align: left !important;
	margin: 05px 0 10px 180px !important;
	font-size: 40px ;
}

/*Vent*/
.petit {
	font-size:20px ;
}

.vent {
	margin-top: -50px !important;
	margin-bottom: -20px !important;
}

/*Humidité */
.humid {
	margin-top: -110px !important;
	margin-bottom: -20px !important;
}


 ul li img {
	width: 200px ;
}

.spasse {
	margin-bottom: 150px ; }
	
	
.imgpetite {background-size: 200px 144px !important; background-position: 0px 30px !important; }
.imggrand {background-position: 0px 40px !important; }


	#slideshow0 {
	margin:auto !important;
	width: 100% !important;
	height:286px !important;
	background: tranparent !important;
	}


/*Calendrier*/
div #calendar {
  width: 250px;
  margin: 20px auto;
}

div #header_cal {
  background-image:linear-gradient(#c00, #F00) !important;
  background: #c00;
  padding: 10px;
  border-radius: 10px 10px 0px 0px;
  /*border: 2px solid black;*/
  border-bottom: none;
  }
  
div #header_cal h3 {
  margin: 0;
  text-shadow: none;
}

div#content_cal {
  background-image:linear-gradient(#ccc, #ccc, #aaa) !important;
  background: #ccc; 
  margin: 0px;
  padding: 20px 0;
  border-radius: 0px 0px 10px 10px;
  /*border: 2px solid black;*/
  border-top: none;
}

 div #content_cal h3 {
  margin: 0px;
  color: black;
  text-shadow: none;
}

  #day_cal {

  }
  
  #date_cal {
    font-size: 60px;
    font-weight: bold;
  }

@media screen and (max-width: 340px) and (max-height: 245px){
	

	 h2 {
	  margin: 0 0 -15px 0;
	  color: #<?php echo $color_txt ;?>;
	  font-size: 30px;
	  font-weight: blod;
	  text-align: center;
	  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
	}
	
	 h3 {
	  margin: 10px 0 -20px 0 ;
	  color: #<?php echo $color_txt ;?>;
	  font-size: 25px;
	  font-weight: blod;
	  text-align: center;
	  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
	} 
	 h4 {
	  margin: 10px 0 0 0;
	  color: #<?php echo $color_txt ;?>;
	  font-size: 18px;
	  font-weight: blod;
	  text-align: center;
	  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
	}

	i {
	  font-size: 120px ;
	  margin : -5px 0 -30px 0;
	  }
	  
	.temp1{
	}
	#met_fr {
	  margin: -10px 0 15px 0 !important;
	  
	} 
	
	#slideshow0 {
	margin:auto !important;
	height:238px !important;
	background: tranparent !important;
  
}
}


@media screen and (max-height: 230px){
	

	 h2 {
	  margin: 0 0 -15px 0;
	  font-size: 30px;
	}
	
	 h3 {
	  margin: 15px 0 -20px 0 ;
	  font-size: 25px;
	} 
	 h4 {
	  margin: -5px 0 0 0;
	  font-size: 18px;
	}

	i {
	  font-size: 120px ;
	  margin : -5px 0 -30px 0;
	  }
	  
	.temp1{
	}
	#met_fr {
	  margin: -15px 0 10px 0 !important;
	  
	} 
	
	#slideshow0 {
	margin:auto !important;
	height:222px ;
	background: tranparent !important;
  
}

div #meteo {
  margin: 10px auto;
  zoom : 95%;
}

	/*Calendrier*/
div #calendar {
  width: 240px;
  margin: 10px auto;
  zoom : 95%;
}
  
div #header_cal h3 {
  margin: 0;
  text-shadow: none;
}

div#content_cal {
  padding: 10px 0;
}

}

@media screen and (max-width: 270px) and (max-height: 290px){

div #meteo {
  margin: 0px auto;
  zoom : 90%;
}
	
		/*Calendrier*/
div #calendar {
  width: 180px;
  height: 100%;
  margin: 50px auto;
  vertical-align:central;
  zoom : 90%;
}
  
div #header_cal h3 {
  margin: 0;
  text-shadow: none;
}

div#content_cal {
  padding: 5px 0;
}

	
}

@media screen and (max-width: 269px) and (max-height: 230px){

div #meteo {
  margin: 0px auto;
  zoom : 89%;
}
	
		/*Calendrier*/
div #calendar {
  margin: 10px auto;
  zoom : 89%;
}
  
div #header_cal h3 {
  margin: 0;
  text-shadow: none;
}

div#content_cal {
  padding: 5px 0;
}

	
}

@media screen and (max-height: 200px){
#slideshow0 {
	height:200px ;
  
}

	
		/*Calendrier*/
div #calendar {
  margin: 0px auto;
  zoom : 80%;
}
  
div #header_cal h3 {
  margin: 0;
  text-shadow: none;
}

div#content_cal {
  padding: 5px 0;
}

div #meteo {
  margin: 10px auto;
  zoom : 89%;
}
	
}

@media screen and (max-height: 150px){
h2 {
  margin: 5px 0 -25px 0;
}
h1, h2, h3, h4 {
	text-shadow: none ;
}

#slideshow0 {
	height:150px ;
	width: 192px;
  
}
	i {
	  font-size: 80px ;
	  margin : 5px 0 5px 0;
	  }

div #meteo {
  margin: 0px auto;
  zoom : 60%;
}

		/*Calendrier*/
div #calendar {
  margin: 10px auto;
  zoom : 80%;
}

#met_fr {
  margin: 10px 0 10px 0 !important;
}
  
div #header_cal h3 {
  margin: 0;
  text-shadow: none;
}

div#content_cal {
  padding: 5px 0;
}

	
}
	
	
	#weather, #weather2, #weather3{
		background: transparent !important;
		width: 100%;
		height: 100%;
	}

.picto0 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/0d.png') no-repeat scroll -20px 30px transparent; }
.picto1 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/1d.png') no-repeat scroll -20px 30px transparent; }
.picto2 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/2d.png') no-repeat scroll -20px 30px transparent; }
.picto3 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/3d.png') no-repeat scroll -20px 30px transparent; }
.picto4 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/4d.png') no-repeat scroll -20px 30px transparent; }
.picto5 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/5d.png') no-repeat scroll -20px 30px transparent; }
.picto6 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/6d.png') no-repeat scroll -20px 30px transparent; }
.picto7 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/7d.png') no-repeat scroll -20px 30px transparent; }
.picto8 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/8d.png') no-repeat scroll -20px 30px transparent; }
.picto9 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/9d.png') no-repeat scroll -20px 30px transparent; }
.picto10 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/10d.png') no-repeat scroll -20px 30px transparent; }
.picto11 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/11d.png') no-repeat scroll -20px 30px transparent; }
.picto12 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/12d.png') no-repeat scroll -20px 30px transparent; }
.picto13 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/13d.png') no-repeat scroll -20px 30px transparent; }
.picto14 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/14d.png') no-repeat scroll -20px 30px transparent; }
.picto15 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/15d.png') no-repeat scroll -20px 30px transparent; }
.picto16 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/16d.png') no-repeat scroll -20px 30px transparent; }
.picto17 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/17d.png') no-repeat scroll -20px 30px transparent; }
.picto18 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/18d.png') no-repeat scroll -20px 30px transparent; }
.picto19 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/19d.png') no-repeat scroll -20px 30px transparent; }
.picto20 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/20d.png') no-repeat scroll -20px 30px transparent; }
.picto21 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/21d.png') no-repeat scroll -20px 30px transparent; }
.picto22 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/22d.png') no-repeat scroll -20px 30px transparent; }
.picto23 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/23d.png') no-repeat scroll -20px 30px transparent; }
.picto24 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/24d.png') no-repeat scroll -20px 30px transparent; }
.picto25 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/25d.png') no-repeat scroll -20px 30px transparent; }
.picto26 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/26d.png') no-repeat scroll -20px 30px transparent; }
.picto27 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/27d.png') no-repeat scroll -20px 30px transparent; }
.picto28 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/28d.png') no-repeat scroll -20px 30px transparent; }
.picto29 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/29d.png') no-repeat scroll -20px 30px transparent; }
.picto30 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/30d.png') no-repeat scroll -20px 30px transparent; }
.picto31 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/31d.png') no-repeat scroll -20px 30px transparent; }
.picto32 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/32d.png') no-repeat scroll -20px 30px transparent; }
.picto33 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/33d.png') no-repeat scroll -20px 30px transparent; }
.picto34 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/34d.png') no-repeat scroll -20px 30px transparent; }
.picto35 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/35d.png') no-repeat scroll -20px 30px transparent; }
.picto36 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/36d.png') no-repeat scroll -20px 30px transparent; }
.picto37 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/37d.png') no-repeat scroll -20px 30px transparent; }
.picto38 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/38d.png') no-repeat scroll -20px 30px transparent; }
.picto39 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/39d.png') no-repeat scroll -20px 30px transparent; }
.picto40 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/40d.png') no-repeat scroll -20px 30px transparent; }
.picto41 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/41d.png') no-repeat scroll -20px 30px transparent; }
.picto42 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/42d.png') no-repeat scroll -20px 30px transparent; }
.picto43 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/43d.png') no-repeat scroll -20px 30px transparent; }
.picto44 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/44d.png') no-repeat scroll -20px 30px transparent; }
.picto45 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/45d.png') no-repeat scroll -20px 30px transparent; }
.picto46 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/46d.png') no-repeat scroll -20px 30px transparent; }
.picto47 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/47d.png') no-repeat scroll -20px 30px transparent; }
.picto0 { background: url('http://l.yimg.com/a/i/us/nws/weather/gr/0d.png') no-repeat scroll -20px 30px transparent; }



/* .currently {
  margin: 0 20px;
}*/

/*display none avant touche*/
#weather, #weather2, #weather3 {
	display:none;
}
</style>
</head>
<body id="met" onkeydown="affKeyCode(event)">

<?php
// différence entre date et date+météo



?>

<!-- Docs at http://http://simpleweatherjs.com -->
<div id="slideshow0">
	<div id="weather3" ></div>
    
	<?php if (!isset($_GET['d_date'])) { echo '<div id="weather" ></div><div id="weather2"></div>'; }; ?>
    
    
</div>

<?php 
	$localize = "paris";
	if (isset($_GET['localisation']) && $_GET['localisation'] != "" ) { $localize = $_GET['localisation'];}
		
	//$img = "o";
	//if (isset($_GET['img']) && $_GET['img'] != "") { $img = $_GET['img'];}

	$color_fond = "1192D3" ;
	if (isset($_GET['color_fond']) && $_GET['color_fond'] != "") { $color_fond = $_GET['color_fond'];}
	
	
?>

<script type="text/javascript">
	//Affichage ephéméride
	//fete du jour j+1
	adate1 = new Date();
	adate1.setTime(adate1.getTime() + 24 * 3600 * 1000);
	
	date1 = adate1.getDate()-1;
  	amois1 = adate1.getMonth();
	var fete1 = getFonc(amois1,date1);
	
	//fete du jour
	adate = new Date();
	date = adate.getDate()-1;
  	amois = adate.getMonth();
	var fete = getFonc(amois,date);
//récupération variables get
	var loc = "<?= $localize?>";

	
	
// Docs at http://simpleweatherjs.com
$(document).ready(function() {
  $.simpleWeather({
    location: loc,
    woeid: '',
    unit: 'c',
    success: function(weather) {
		
		
		if (weather.sunrise.indexOf("am") >= 0) { var heure= '21';}

	//Traduction française du code météo
	var FR = ["Tornade", "Tempête tropicale ", "Ouragan ", "Orages violents ", "Orages ", "Pluie et neige mêlées", "Neige et grésil mêlés", "Pluie et grésil mêlés", "Bruine verglaçante ", "Bruine ", "Pluie verglaçante ", "Averses", "Averses", "Averses de neige ", "Légères averses de neige ", "Rafales de neige", "Neige ", "Grêle ", "Neige fondue ", "Ciel voilé", "Brumeux ", "Brume ", "Brouillard", "Vent Violent", "Venteux ", "Froid ", "Nuageux ", "Nuageux ", "Nuageux ", "Partiellement nuageux", "Partiellement nuageux", "Clair", "Ensoleillé ", "Beau temps", "Beau temps", "Pluie et grêle mêlées", "Chaud ", "Orages ", "Orages épars", "Orages épars", "Averses éparses", "Neige ", "Averses de neige éparses ", "Neige ", "Partiellement nuageux ", "Orages ", "Averses de neige ", "Orages localisés"];
	FR[3200] = "Indisponible" ;
	
	// dates
	var Jour = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi","Samedi"];
 	var Mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
	
	var date = new Date();
	var date_fr = Jour[date.getDay()]+' '+date.getDate()+' '+Mois[date.getMonth()]+' '+date.getFullYear();
	
	// Date de J + 1
	var date1 = new Date(); 
	date1.setTime(date1.getTime() + 24 * 3600 * 1000);
	var date_fr_1 = Jour[date1.getDay()];
	
	// Date de J + 2
	var date2 = new Date(); 
	date2.setTime(date2.getTime() + 2* 24 * 3600 * 1000);
	var date_fr_2 = Jour[date2.getDay()];
	
	// Date de J + 3
	var date3 = new Date(); 
	date3.setTime(date3.getTime() + 3* 24 * 3600 * 1000);
	var date_fr_3 = Jour[date3.getDay()];
	
	// Date de J + 4
	var date4 = new Date(); 
	date4.setTime(date4.getTime() + 4* 24 * 3600 * 1000);
	var date_fr_4 = Jour[date4.getDay()];

// Manipulation des dates et heures	
	// lever du soleil
	var myString = weather.sunrise ;
	var h_sunrise = myString.substring(0, myString.indexOf(':'));
	var m_sunrise = myString.substring(myString.indexOf(':') + 1,  myString.indexOf(' '));
	
	//coucher du soleil
	var myString = weather.sunset ;
	var h_sunset = myString.substring(0, myString.indexOf(':'));
	var m_sunset = myString.substring(myString.indexOf(':') + 1,  myString.indexOf(' '));
	h_sunset =(Number(h_sunset)+Number("12"));

var color_fond = "<?=$color_fond?>";
$("#met").css('background', '#'+color_fond);

var met_jj = weather.code ;
if (met_jj == "3200") { met_jj = weather.todayCode };

	  html = '';
	  html2 = '';
	  html3 = '';
	  
	  // jour J
	  html += '<div id="meteo"><div class="now" id="j"><h2 id="city">'+weather.city+'</h2>';
	  html += '<h3 id="date_fr">'+date_fr+'</h3>';
      html += '<h2><i class="icon-'+met_jj+'"></i><span class=temp1> '+weather.temp+'&deg;'+weather.units.temp+'</span></h2>' ;
	  html += '<h3 id="met_fr">'+FR[met_jj]+'</h3>';
	  html += '<h4 id="eph">Fête : '+fete+'</h4></div>' ;
	  html += '</div>' ;
      
	  // Jour J+1
	  html2 += '<div id="meteo"><div class="now" id="j"><h2 id="city">'+weather.city+'</h2>';
	  html2 += '<h3 id="date_fr">Demain</h3>';
      html2 += '<h2><i class="icon-'+weather.tomorrow.code+'"></i><span class="temp1"> '+weather.tomorrow.high+'&deg;'+weather.units.temp+'</span></h2>' ;
	  html2+= '<h3 id="met_fr">'+FR[weather.tomorrow.code]+'</h3>';
	  html2 += '<h4 id="eph">Fête : '+fete1+'</h4></div>' ;
	  html2 += '</div>' ;
	  
	  // date 
	  html3 += '<div id="meteo">';
	  html3 += 		'<div id="calendar">';
	  html3 += 			'<div id="header_cal">';
	  html3 += 				'<h3>'+Mois[date.getMonth()]+'</h3>';
	  html3 += 			'</div>';
	  html3 += 			'<div id="content_cal">';
	  html3 += 				'<h3 id="day_cal">'+Jour[date.getDay()]+'</h3>';
      html3 += 				'<h3 id="date_cal">'+date.getDate()+'</h3>' ;
	  html3 += 			'</div>';
	  html3 += 		'</div>' ;
	  html3 += 	'</div>' ;
	 
	

      $("#weather").html(html);
	  $("#weather2").html(html2);
	  $("#weather3").html(html3);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
	  $("#weather2").html('<p>'+error+'</p>');
	  $("#weather3").html('<p>'+error+'</p>');
    }
  });
});



/*
 * simpleWeather
 * http://simpleweatherjs.com
 *
 * A simple jQuery plugin to display current weather data
 * for any location and doesn't get in your way.
 *
 * Developed by James Fleeting <@fleetingftw> <http://iwasasuperhero.com>
 * Another project from monkeeCreate <http://monkeecreate.com>
 *
 * Version 2.7.0 - Last updated: April 17 2014
 */
!function(e){"use strict";e.extend({simpleWeather:function(t){t=e.extend({location:"",woeid:"2357536",unit:"c",success:function(){},error:function(){}},t);var o=new Date,i="//query.yahooapis.com/v1/public/yql?language=fr-fr&format=json&rnd="+o.getFullYear()+o.getMonth()+o.getDay()+o.getHours()+"&diagnostics=true&callback=?&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&q=";if(""!==t.location)i+='select * from weather.forecast where woeid in (select woeid from geo.placefinder where text="'+t.location+'" and gflags="R") and u="'+t.unit+'"';else{if(""===t.woeid)return t.error("Could not retrieve weather due to an invalid location."),!1;i+="select * from weather.forecast where woeid="+t.woeid+' and u="'+t.unit+'"'}return e.getJSON(encodeURI(i),function(o){null!==o&&null!==o.query&&null!==o.query.results&&"Yahoo! Weather Error"!==o.query.results.channel.description?e.each(o.query.results,function(e,o){-1!==o.constructor.toString().indexOf("Array")&&(o=o[0]);var i,a=[],r=[],s=["N","NNE","NE","ENE","E","ESE","SE","SSE","S","SSW","SW","WSW","W","WNW","NW","NNW","N"],c=s[Math.round(o.wind.direction/22.5)];i=o.item.condition.temp<80&&o.atmosphere.humidity<40?-42.379+2.04901523*o.item.condition.temp+10.14333127*o.atmosphere.humidity-.22475541*o.item.condition.temp*o.atmosphere.humidity-6.83783*Math.pow(10,-3)*Math.pow(o.item.condition.temp,2)-5.481717*Math.pow(10,-2)*Math.pow(o.atmosphere.humidity,2)+1.22874*Math.pow(10,-3)*Math.pow(o.item.condition.temp,2)*o.atmosphere.humidity+8.5282*Math.pow(10,-4)*o.item.condition.temp*Math.pow(o.atmosphere.humidity,2)-1.99*Math.pow(10,-6)*Math.pow(o.item.condition.temp,2)*Math.pow(o.atmosphere.humidity,2):o.item.condition.temp,"f"===t.unit?(a.unit="c",a.temp=Math.round(5/9*(o.item.condition.temp-32)),a.high=Math.round(5/9*(o.item.forecast[0].high-32)),a.low=Math.round(5/9*(o.item.forecast[0].low-32)),a.forecastOneHigh=Math.round(5/9*(o.item.forecast[1].high-32)),a.forecastOneLow=Math.round(5/9*(o.item.forecast[1].low-32)),a.forecastTwoHigh=Math.round(5/9*(o.item.forecast[2].high-32)),a.forecastTwoLow=Math.round(5/9*(o.item.forecast[2].low-32)),a.forecastThreeHigh=Math.round(5/9*(o.item.forecast[3].high-32)),a.forecastThreeLow=Math.round(5/9*(o.item.forecast[3].low-32)),a.forecastFourHigh=Math.round(5/9*(o.item.forecast[4].high-32)),a.forecastFourLow=Math.round(5/9*(o.item.forecast[4].low-32))):(a.unit="f",a.temp=Math.round(1.8*o.item.condition.temp+32),a.high=Math.round(1.8*o.item.forecast[0].high+32),a.low=Math.round(1.8*o.item.forecast[0].low+32),a.forecastOneHigh=Math.round(1.8*(o.item.forecast[1].high+32)),a.forecastOneLow=Math.round(1.8*(o.item.forecast[1].low+32)),a.forecastTwoHigh=Math.round(1.8*(o.item.forecast[2].high+32)),a.forecastTwoLow=Math.round(1.8*(o.item.forecast[2].low+32)),a.forecastThreeHigh=Math.round(1.8*(o.item.forecast[3].high+32)),a.forecastThreeLow=Math.round(1.8*(o.item.forecast[3].low+32)),a.forecastFourHigh=Math.round(1.8*(o.item.forecast[4].high+32)),a.forecastFourLow=Math.round(1.8*(o.item.forecast[4].low+32))),"3200"==o.item.condition.code?(r.thumbnail="//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png",r.image="//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png"):(r.thumbnail="//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.condition.code+"ds.png",r.image="//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.condition.code+"d.png"),r.forecastOne="3200"==o.item.forecast[1].code?"//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png":"//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.forecast[1].code+"d.png",r.forecastTwo="3200"==o.item.forecast[2].code?"//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png":"//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.forecast[2].code+"d.png",r.forecastThree="3200"==o.item.forecast[3].code?"//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png":"//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.forecast[3].code+"d.png",r.forecastFour="3200"==o.item.forecast[4].code?"//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png":"//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.forecast[4].code+"d.png";var m={title:o.item.title,temp:o.item.condition.temp,tempAlt:a.temp,code:o.item.condition.code,todayCode:o.item.forecast[0].code,units:{temp:o.units.temperature,distance:o.units.distance,pressure:o.units.pressure,speed:o.units.speed,tempAlt:a.unit},currently:o.item.condition.text,high:o.item.forecast[0].high,highAlt:a.high,low:o.item.forecast[0].low,lowAlt:a.low,forecast:o.item.forecast[0].text,wind:{chill:o.wind.chill,direction:c,speed:o.wind.speed},humidity:o.atmosphere.humidity,heatindex:i,pressure:o.atmosphere.pressure,rising:o.atmosphere.rising,visibility:o.atmosphere.visibility,sunrise:o.astronomy.sunrise,sunset:o.astronomy.sunset,description:o.item.description,thumbnail:r.thumbnail,image:r.image,tomorrow:{high:o.item.forecast[1].high,highAlt:a.forecastOneHigh,low:o.item.forecast[1].low,lowAlt:a.forecastOneLow,forecast:o.item.forecast[1].text,code:o.item.forecast[1].code,date:o.item.forecast[1].date,day:o.item.forecast[1].day,image:r.forecastOne},forecasts:{one:{high:o.item.forecast[1].high,highAlt:a.forecastOneHigh,low:o.item.forecast[1].low,lowAlt:a.forecastOneLow,forecast:o.item.forecast[1].text,code:o.item.forecast[1].code,date:o.item.forecast[1].date,day:o.item.forecast[1].day,image:r.forecastOne},two:{high:o.item.forecast[2].high,highAlt:a.forecastTwoHigh,low:o.item.forecast[2].low,lowAlt:a.forecastTwoLow,forecast:o.item.forecast[2].text,code:o.item.forecast[2].code,date:o.item.forecast[2].date,day:o.item.forecast[2].day,image:r.forecastTwo},three:{high:o.item.forecast[3].high,highAlt:a.forecastThreeHigh,low:o.item.forecast[3].low,lowAlt:a.forecastThreeLow,forecast:o.item.forecast[3].text,code:o.item.forecast[3].code,date:o.item.forecast[3].date,day:o.item.forecast[3].day,image:r.forecastThree},four:{high:o.item.forecast[4].high,highAlt:a.forecastFourHigh,low:o.item.forecast[4].low,lowAlt:a.forecastFourLow,forecast:o.item.forecast[4].text,code:o.item.forecast[4].code,date:o.item.forecast[4].date,day:o.item.forecast[4].day,image:r.forecastFour}},city:o.location.city,country:o.location.country,region:o.location.region,updated:o.item.pubDate,link:o.item.link};t.success(m)}):t.error(null===o.query.results?"An invalid WOEID or location was provided.":"There was an error retrieving the latest weather information. Please try again.")}),this}})}(jQuery);



</script>


<script>


</script>

</body>
</html>
