<!doctype html>
<HTML LANG="fr" > 
<!--

  GGGGGG  EEEEEEE  RRRRRR   EEEEEEE      TTTTTTT    OOO    NN    N      W    W  EEEEEEE  BBBBBB
 G        E        R     R  E               T      O   O   N N   N      W    W  E        B     B
G         EEEEE    RRRRRR   EEEEE           T     O     O  N  N  N      W    W  EEEEE    BBBBBB
G    GGG  E        R R      E               T     O     O  N   N N      W WW W  E        B     B
 G     G  E        R   R    E               T      O   O   N    NN      WW  WW  E        B     B
  GGGGGG  EEEEEEE  R     R  EEEEEEE         T       OOO    N     N      W    W  EEEEEEE  BBBBBB

-->
<head>
<meta charset="utf-8">
<META HTTP-EQUIV="Content-Language" CONTENT="fr"> 
<title>Module Météo - Nakapeo</title>
<link rel="author" href="https://plus.google.com/+CamillePiombo" />
<meta name="author" content="Camille Piombo" />

<script LANGUAGE="JavaScript" src="../Ephemeride.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

<style>
/*
  Docs at http://http://simpleweatherjs.com

  Look inspired by http://www.degreees.com/
  Used for demo purposes.

  Weather icon font from http://fonts.artill.de/collection/artill-weather-icons
*/

@font-face {
    font-family: 'weather';
    src: url('../weatherfont/artill_clean_icons-webfont.eot');
    src: url('../weatherfont/artill_clean_icons-webfont.eot?#iefix') format('embedded-opentype'),
         url('../weatherfont/artill_clean_icons-webfont.woff') format('woff'),
         url('../weatherfont/artill_clean_icons-webfont.ttf') format('truetype'),
         url('../weatherfont/artill_clean_icons-webfont.svg#artill_clean_weather_iconsRg') format('svg');
    font-weight: normal;
    font-style: normal;
}

html {
  
}

body {
  padding: 0;
  margin : 2px 2px;
  font: 16px 'Open Sans', "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  color: #fff;
  width: 100%;
  height: 100%;
  background: #1192d3 url() no-repeat bottom right;
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


	
.icon-wind:before { 
	content: "."; 
	font-size: 90px !important;
	padding-right: 10px;
}

.icon-humidite:before { 
	content: "5"; 
	font-size: 90px !important;
	padding-right: 10px;
}

.icon-lever:before { 
	content: "7"; 
	font-size: 90px !important;
	padding-right: 10px;
}

.icon-coucher:before { 
	content: "8"; 
	font-size: 90px !important;
	padding-left: 10px;
	padding-right: 10px;
}

#weather {
  vertical-align:middle;
    width: 334px;


}

i {
  color: #fff;
  font-family: weather;
  font-size: 90px;
  font-weight: normal;
  font-style: normal;
  text-align: center;
  display: block;
  margin: -5px 0;
}

#weather h2 {
  margin: 0;
  color: #fff;
  font-size: 60px;
  font-weight: blod;
  text-align: center;
  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
}

#weather h3 {
  margin: 0;
  color: #fff;
  font-size: 12px;
  font-weight: blod;
  text-align: center;
  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
}

#weather h4 {
  font-size:11px ;
  margin: -3px 0 0 0;
  color: #fff;
  font-weight: 100;
  text-align: center;
  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
}

#weather h5 {
  margin: 5px 0 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: blod;
  text-align: center;
  text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.15);
}

.descr {
	position:absolute !important;
	width:200px !important;
}


#weather ul {
  margin: 0 -5px 15px 5px;
  padding: 0;
  display: inline;
  float: left;
  
}

#jour {
	float: left ;
	/*margin-bottom: 400px !important;*/
}

 li#jour1 {
	  width:100px !important;
}
#weather li {
  background: #fff;
  /*background: rgba(255,255,255,0.90);*/
  padding:0 ;
  display:  inline-block ;
  border-radius: 2px; 
  border : 1px solid #ffff00; 
  margin: 0 5px 0 0;;
  width:107px ;
  height:143px !important;
  background: -webkit-linear-gradient( top, #00AEF5, #006EA3 );
  background: -moz-linear-gradient( top, #00AEF5, #006EA3 );
  background: -o-linear-gradient( top, #00AEF5, #006EA3 );
  background: linear-gradient( top, #00AEF5, #006EA3 );
}

#jour2 li {
	background: #fff;
  /*background: rgba(255,255,255,0.90);*/
  margin: 0;
  padding:0 ;
  display:  inline-block ;
  border-radius: 1px; 
  border : none; 
  margin: 0px;
  background: -webkit-linear-gradient( top, #57A2C1, #28739A );
  background: -moz-linear-gradient( top, #57A2C1, #28739A );
  background: -o-linear-gradient( top, #57A2C1, #28739A );
  background: linear-gradient( top, #57A2C1, #28739A );
}
#now {
	width: 33%;
	float: left;
	min-width: 250px ;
	margin-top: 50px ;
	/*margin-bottom: 400px;*/
	height:600px; 
	padding: auto;
	
	
}

#now h2, #now h3, #now h1, #now h4 {
	text-shadow: 5px 3px 3px rgba(0, 0, 0, 0.60) !important; 
}

#date_fr {
	margin : 25px 0 100px 0 !important;
	/*padding: auto;*/
	
	}




.marge {
	margin : 0px 40px ;
}

/*Température*/
.temp_max {
	color: #FFEE66 ;
}

.temp_min {
	color:#CFF ;
}





.temp {

  text-align: center !important;
  margin: 0px !important;
  font-size: 16px !important;
  font-weight: bold !important;
}

.low {
	/*display: inline !important;*/
  margin: 0 5px !important;
  padding: 0 5px !important;
  border-right: 1px solid #fff !important;
  text-align: left ;
  position:absolute;
}

.high {
	 margin-left: 40px !important;
}
.centre {
	text-align: center;
	padding-top: 5px;
  border-top: 1px solid #fff;
  width: 90px;
  margin: -10px auto 0 auto;
	}



.temp1{
	margin-top : -20px !important;

}


/*Vent*/
.petit {
	font-size:20px ;
}

.vent {
	margin-top: -80px !important;
	margin-bottom: -40px !important;
}

/*Humidité */
.humid {
	margin-top: -120px !important;
	margin-bottom: -40px !important;
	font-size: 26px !important;
}




.spasse {
	margin-bottom: 30px !important;
	margin-top: 0px !important;  }

.imgpetite {background-size: 250px !important; background-position: 0px 50px !important; }

.imggrand {background-size: 350px !important; background-position: 0px 60px !important; }
	




	

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



/*#weather .currently {
  margin: 0 20px;
}*/

</style>




</head>
<body id="met" style="background:-webkit-linear-gradient(top, #04243D,  #0B2C73) !important; /*width:100%;*/">
<table align="center" style="  border: none;  margin: 0; height:100%; width:100%;">
<tr valign="center" style="width:100%">
<td align="center" valign="center" style="padding-bottom: 50px;">
<div>
	<img src="../image/logo-meteo.png" width="160px" style="margin-right:20px;"/>
    <img src="logo.png" />
</div>
<div id="weather"></div>
</td>
</tr>
</table>

<!-- Récupération parametre url-->
<?php 
	$localize = "besancon";
	if (isset($_GET['localisation']) && $_GET['localisation'] != "" ) { $localize = $_GET['localisation'];}
		
	$img = "o";
	if (isset($_GET['img']) && $_GET['img'] != "") { $img = $_GET['img'];}

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
	var date_fr = Jour[date.getDay()]+' '+date.getDate()+' '+Mois[date.getMonth()];
	
	// Date de J + 1
	var date1 = new Date(); 
	date1.setTime(date1.getTime() + 24 * 3600 * 1000);
	var date_fr_1 = Jour[date1.getDay()]+' '+date1.getDate()+' '+Mois[date1.getMonth()];
	
	// Date de J + 2
	var date2 = new Date(); 
	date2.setTime(date2.getTime() + 2* 24 * 3600 * 1000);
	var date4 = new Date(); 
	date4.setTime(date4.getTime() + 4* 24 * 3600 * 1000);
	var date_fr_2 = date2.getDate()+' au '+date4.getDate()+' '+Mois[date4.getMonth()];
	
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
var img = "<?=$img?>";
var color_fond = "<?=$color_fond?>";
if (img == "o") {
	$("#met").css('background', 'url(image/ville/'+weather.city.toLowerCase()+'.jpg) center center no-repeat fixed rgb(17, 146, 211)');
	}
	else {
		$("#met").css('background', '#'+color_fond);
	}	

		 html = '';
	 /* html += '<div id="meteo"><div id="now"><h2 id=date_fr>'+date_fr+'</h2>';
	  html += '<h3>'+weather.city+'</h3>';
      html += '<h2><i class="icon-'+weather.code+'"></i><span class=temp1> '+weather.temp+'&deg;'+weather.units.temp+'</span></h2>' ;
	  html += '<h4>'+FR[weather.code]+'</h4></div>';*/
     
	 
	  html += '<ul id=jour>'
	  html += '<li id=jour1><h3>Aujourd\'hui</h3>';
	  html += '<h4>'+date_fr+'</h4>';
	  html += '<i class="icon-'+weather.code+'"></i>' ;
	  html += '<div class="centre"><div class="low"><h4 class=temp>'+weather.low+'&deg;</h4><h4>Matin</h4></div>' ;
	  html += '<div class="high"><h4 class=temp>'+weather.high+'&deg;</h4><h4>A-M</h4></div></div>' ;
	  html += '</li></ul>' ;
	  
	  
	  // Jour + 1
	  
	   html += '<ul id=jour2>'
	  html += '<li class=jour1><h3>Demain</h3>';
	  html += '<h4>'+date_fr_1+'</h4>';
	  html += '<i class="icon-'+weather.tomorrow.code+'"></i>' ;
	  html += '<div class="centre"><div class="low"><h4 class=temp>'+weather.tomorrow.low+'&deg;</h4><h4>Matin</h4></div>' ;
	  html += '<div class="high"><h4 class=temp>'+weather.tomorrow.high+'&deg;</h4><h4>A-M</h4></div></div>' ;
	  html += '</li>' ;

	  
	   // Jour + 2
	  html += '<li class=jour1><h3>Jours Suivants</h3>';
	  html += '<h4>'+date_fr_2+'</h4>';
	  html += '<i class="icon-'+weather.forecasts.two.code+'"></i>' ;
	  html += '<div class="centre"><div class="low"><h4 class=temp>'+weather.forecasts.two.low+'&deg;</h4><h4>Matin</h4></div>' ;
	  html += '<div class="high"><h4 class=temp>'+weather.forecasts.two.high+'&deg;</h4><h4>A-M</h4></div></div>' ;
	  html += '</li></ul>' ;
	  
	
	 //html += '<i class="icon-1"></i><i class="icon-2"></i><i class="icon-3"></i><i class="icon-4"></i><i class="icon-5"></i><i class="icon-6"></i><i class="icon-7"></i><i class="icon-8"></i><i class="icon-1"></i><i class="icon-9"></i><i class="icon-10"></i><i class="icon-11"></i><i class="icon-12"></i><i class="icon-13"></i><i class="icon-14"></i><i class="icon-15"></i><i class="icon-16"></i><i class="icon-17"></i><i class="icon-18"></i><i class="icon-19"></i><i class="icon-21"></i><i class="icon-22"></i><i class="icon-23"></i><i class="icon-24"></i><i class="icon-25"></i><i class="icon-26"></i><i class="icon-27"></i><i class="icon-28"></i><i class="icon-29"></i><i class="icon-30"></i><i class="icon-32"></i><i class="icon-33"></i><i class="icon-34"></i><i class="icon-35"></i><i class="icon-36"></i><i class="icon-37"></i><i class="icon-38"></i><i class="icon-39"></i><i class="icon-40"></i><i class="icon-41"></i><i class="icon-42"></i><i class="icon-43"></i><i class="icon-44"></i><i class="icon-45"></i><i class="icon-46"></i><i class="icon-47"></i>';
	  

	

      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
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
</body>
</html>
