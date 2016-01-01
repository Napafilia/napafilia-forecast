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

<script LANGUAGE="JavaScript" src="Ephemeride.js"></script>

<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="jquery.cycle.all.js"></script>
<!--<link rel="stylesheet" href="meteo-b-d.css">-->
<?php 
$color_txt = "ffffff" ;
	if (isset($_GET['color_txt']) && $_GET['color_txt'] != "") { $color_txt = $_GET['color_txt'];}

$tps = "10" ;
	if (isset($_GET['tps_met']) && $_GET['tps_met'] != "") { $tps = $_GET['tps_met'];
	}
	?>





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
  font: 16px Arial, sans-serif;
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
  font-size: 120px !important;
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


 ul {
  margin: 0;
  padding: 0;
}



.picto0 { background: url('image/pictos/0d.png') no-repeat scroll -20px 30px transparent; }
.picto1 { background: url('image/pictos/1d.png') no-repeat scroll -20px 30px transparent; }
.picto2 { background: url('image/pictos/2d.png') no-repeat scroll -20px 30px transparent; }
.picto3 { background: url('image/pictos/3d.png') no-repeat scroll -20px 30px transparent; }
.picto4 { background: url('image/pictos/4d.png') no-repeat scroll -20px 30px transparent; }
.picto5 { background: url('image/pictos/5d.png') no-repeat scroll -20px 30px transparent; }
.picto6 { background: url('image/pictos/6d.png') no-repeat scroll -20px 30px transparent; }
.picto7 { background: url('image/pictos/7d.png') no-repeat scroll -20px 30px transparent; }
.picto8 { background: url('image/pictos/8d.png') no-repeat scroll -20px 30px transparent; }
.picto9 { background: url('image/pictos/9d.png') no-repeat scroll -20px 30px transparent; }
.picto10 { background: url('image/pictos/10d.png') no-repeat scroll -20px 30px transparent; }
.picto11 { background: url('image/pictos/11d.png') no-repeat scroll -20px 30px transparent; }
.picto12 { background: url('image/pictos/12d.png') no-repeat scroll -20px 30px transparent; }
.picto13 { background: url('image/pictos/13d.png') no-repeat scroll -20px 30px transparent; }
.picto14 { background: url('image/pictos/14d.png') no-repeat scroll -20px 30px transparent; }
.picto15 { background: url('image/pictos/15d.png') no-repeat scroll -20px 30px transparent; }
.picto16 { background: url('image/pictos/16d.png') no-repeat scroll -20px 30px transparent; }
.picto17 { background: url('image/pictos/17d.png') no-repeat scroll -20px 30px transparent; }
.picto18 { background: url('image/pictos/18d.png') no-repeat scroll -20px 30px transparent; }
.picto19 { background: url('image/pictos/19d.png') no-repeat scroll -20px 30px transparent; }
.picto20 { background: url('image/pictos/20d.png') no-repeat scroll -20px 30px transparent; }
.picto21 { background: url('image/pictos/21d.png') no-repeat scroll -20px 30px transparent; }
.picto22 { background: url('image/pictos/22d.png') no-repeat scroll -20px 30px transparent; }
.picto23 { background: url('image/pictos/23d.png') no-repeat scroll -20px 30px transparent; }
.picto24 { background: url('image/pictos/24d.png') no-repeat scroll -20px 30px transparent; }
.picto25 { background: url('image/pictos/25d.png') no-repeat scroll -20px 30px transparent; }
.picto26 { background: url('image/pictos/26d.png') no-repeat scroll -20px 30px transparent; }
.picto27 { background: url('image/pictos/27d.png') no-repeat scroll -20px 30px transparent; }
.picto28 { background: url('image/pictos/28d.png') no-repeat scroll -20px 30px transparent; }
.picto29 { background: url('image/pictos/29d.png') no-repeat scroll -20px 30px transparent; }
.picto30 { background: url('image/pictos/30d.png') no-repeat scroll -20px 30px transparent; }
.picto31 { background: url('image/pictos/31d.png') no-repeat scroll -20px 30px transparent; }
.picto32 { background: url('image/pictos/32d.png') no-repeat scroll -20px 30px transparent; }
.picto33 { background: url('image/pictos/33d.png') no-repeat scroll -20px 30px transparent; }
.picto34 { background: url('image/pictos/34d.png') no-repeat scroll -20px 30px transparent; }
.picto35 { background: url('image/pictos/35d.png') no-repeat scroll -20px 30px transparent; }
.picto36 { background: url('image/pictos/36d.png') no-repeat scroll -20px 30px transparent; }
.picto37 { background: url('image/pictos/37d.png') no-repeat scroll -20px 30px transparent; }
.picto38 { background: url('image/pictos/38d.png') no-repeat scroll -20px 30px transparent; }
.picto39 { background: url('image/pictos/39d.png') no-repeat scroll -20px 30px transparent; }
.picto40 { background: url('image/pictos/40d.png') no-repeat scroll -20px 30px transparent; }
.picto41 { background: url('image/pictos/41d.png') no-repeat scroll -20px 30px transparent; }
.picto42 { background: url('image/pictos/42d.png') no-repeat scroll -20px 30px transparent; }
.picto43 { background: url('image/pictos/43d.png') no-repeat scroll -20px 30px transparent; }
.picto44 { background: url('image/pictos/44d.png') no-repeat scroll -20px 30px transparent; }
.picto45 { background: url('image/pictos/45d.png') no-repeat scroll -20px 30px transparent; }
.picto46 { background: url('image/pictos/46d.png') no-repeat scroll -20px 30px transparent; }
.picto47 { background: url('image/pictos/47d.png') no-repeat scroll -20px 30px transparent; }



/* .currently {
  margin: 0 20px;
}*/

</style>
</head>
<body id="met">

<!-- Docs at http://http://simpleweatherjs.com -->

	<div id="weather" style="background:rgb(0,0,0);"></div>



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
	var loc = "Chartres";

	
	
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
	var Jour = ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven","Sam"];
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

// réglage nom ville
ville = weather.city ;
if (weather.city.toLowerCase() == 'nismes') { ville = 'Nîmes' ; };
if (loc.toLowerCase() == 'cornebarrieu') { ville = 'Cornebarrieu' ; };


var color_fond = "<?=$color_fond?>";
$("#met").css('background', '#'+color_fond);
$("#weather").css('background', '#'+color_fond);


var met_jj = weather.code ;
if (met_jj == "3200") { met_jj = weather.todayCode };


	  html = '';

	  

	  html += '<table CELLSPACING=0 width=336 height=241>';
	  	html += '<tr>';
			html += '<td style="background:rgb(16,118,167); text-align:center;text-transform:uppercase; font-weight:bold; font-size:20px; height:30px;">';
				html += 'aujourd\'hui';
			html += '</td>';
			
			html += '<td style="background:rgb(87,151,189); text-align:center;text-transform:uppercase; font-weight:bold;font-size:20px; height:30px;">';
				html += date_fr_1;
			html += '</td>';
			
			html += '<td style="background:rgb(145,185,211); text-align:center;text-transform:uppercase; font-weight:bold;font-size:20px; height:30px;">';
				html += date_fr_2;
			html += '</td>';
		html += '</tr>';
		
		html += '<tr>';
			html += '<td style="background:rgb(13,174,246); text-align:center; text-transform:uppercase;" valign="top">';
				html += '<h2 id="city" style="margin-top:5px;">'+ville+'</h2>';
				html += '<h2><span class=temp1 style=" font-size:70px;"> '+weather.temp+'</span>';
				html += '<div style="display: inline-block;margin-top: 20px;position: absolute;font-size: 40px;">&deg;</div>';
				html += '<i class="icon-'+met_jj+'"></i></h2>';
				html += '<hr style="margin: 10px 20px;border: solid 2px rgb(16,118,167); ">';
				html += '<strong style="font-size:30px;margin-right: -10px;"> '+weather.low+'&deg;</strong><div style="-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);-ms-transform: rotate(270deg); transform: rotate(270deg); display: inline-block;font-size:14px;">&nbsp;&nbsp;MIN</div>';
				html += '<strong style="font-size:30px;margin-right: -10px;"> '+weather.high+'&deg;</strong><div style="-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);-ms-transform: rotate(270deg); transform: rotate(270deg); display: inline-block;font-size:14px;">&nbsp;&nbsp;MAX</div>';
				///html += '<strong style="font-size:30px"> '+Math.round(weather.wind.speed)+'</strong>' ;
				//html += '<div style="-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-o-transform: rotate(270deg);-ms-transform: rotate(270deg); transform: rotate(270deg); text-transform:lowercase; display: inline-block;;"><span style="text-transform:uppercase; font-size:14px;">VENT</span><br><span style=" font-size:12px;">'+weather.units.speed+'</span></div>';
			html += '</td>';
			
			html += '<td style="background:rgb(96,193,246); text-align:center;text-transform:uppercase;" valign="top">';
				html += '<i class="icon-'+weather.tomorrow.code+'" style="font-size: 80px !important;"></i>';
				html += '<h2 style="margin: 20px 0;font-size:22px;"> '+weather.tomorrow.low+'&deg;</h2>';
				html += '<h2>'+weather.tomorrow.high+'&deg;</h2>';
				
			html += '</td>';
			
			html += '<td style="background:rgb(151,213,250); text-align:center;text-transform:uppercase;" valign="top">';
				html += '<i class="icon-'+weather.forecasts.two.code+'" style="font-size: 80px !important;"></i>';
				html += '<h2 style="margin: 20px 0;font-size:22px;"> '+weather.forecasts.two.low+'&deg;</h2>';
				html += '<h2>'+weather.forecasts.two.high+'&deg;</h2>';
			html += '</td>';
		html += '</tr>';

      

	 
	

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
!function(e){"use strict";e.extend({simpleWeather:function(t){t=e.extend({location:"",woeid:"2357536",unit:"c",success:function(){},error:function(){}},t);var o=new Date,i="//<?echo $_SERVER[HTTP_HOST];?>/yql?language=fr-fr&format=json&rnd="+o.getFullYear()+o.getMonth()+o.getDay()+o.getHours()+"&diagnostics=true&callback=?&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&q=";if(""!==t.location)i+='select * from weather.forecast where woeid in (select woeid from geo.placefinder where text="'+t.location+'" and gflags="R") and u="'+t.unit+'"';else{if(""===t.woeid)return t.error("Could not retrieve weather due to an invalid location."),!1;i+="select * from weather.forecast where woeid="+t.woeid+' and u="'+t.unit+'"'}return e.getJSON(encodeURI(i),function(o){null!==o&&null!==o.query&&null!==o.query.results&&"Yahoo! Weather Error"!==o.query.results.channel.description?e.each(o.query.results,function(e,o){-1!==o.constructor.toString().indexOf("Array")&&(o=o[0]);var i,a=[],r=[],s=["N","NNE","NE","ENE","E","ESE","SE","SSE","S","SSW","SW","WSW","W","WNW","NW","NNW","N"],c=s[Math.round(o.wind.direction/22.5)];i=o.item.condition.temp<80&&o.atmosphere.humidity<40?-42.379+2.04901523*o.item.condition.temp+10.14333127*o.atmosphere.humidity-.22475541*o.item.condition.temp*o.atmosphere.humidity-6.83783*Math.pow(10,-3)*Math.pow(o.item.condition.temp,2)-5.481717*Math.pow(10,-2)*Math.pow(o.atmosphere.humidity,2)+1.22874*Math.pow(10,-3)*Math.pow(o.item.condition.temp,2)*o.atmosphere.humidity+8.5282*Math.pow(10,-4)*o.item.condition.temp*Math.pow(o.atmosphere.humidity,2)-1.99*Math.pow(10,-6)*Math.pow(o.item.condition.temp,2)*Math.pow(o.atmosphere.humidity,2):o.item.condition.temp,"f"===t.unit?(a.unit="c",a.temp=Math.round(5/9*(o.item.condition.temp-32)),a.high=Math.round(5/9*(o.item.forecast[0].high-32)),a.low=Math.round(5/9*(o.item.forecast[0].low-32)),a.forecastOneHigh=Math.round(5/9*(o.item.forecast[1].high-32)),a.forecastOneLow=Math.round(5/9*(o.item.forecast[1].low-32)),a.forecastTwoHigh=Math.round(5/9*(o.item.forecast[2].high-32)),a.forecastTwoLow=Math.round(5/9*(o.item.forecast[2].low-32)),a.forecastThreeHigh=Math.round(5/9*(o.item.forecast[3].high-32)),a.forecastThreeLow=Math.round(5/9*(o.item.forecast[3].low-32)),a.forecastFourHigh=Math.round(5/9*(o.item.forecast[4].high-32)),a.forecastFourLow=Math.round(5/9*(o.item.forecast[4].low-32))):(a.unit="f",a.temp=Math.round(1.8*o.item.condition.temp+32),a.high=Math.round(1.8*o.item.forecast[0].high+32),a.low=Math.round(1.8*o.item.forecast[0].low+32),a.forecastOneHigh=Math.round(1.8*(o.item.forecast[1].high+32)),a.forecastOneLow=Math.round(1.8*(o.item.forecast[1].low+32)),a.forecastTwoHigh=Math.round(1.8*(o.item.forecast[2].high+32)),a.forecastTwoLow=Math.round(1.8*(o.item.forecast[2].low+32)),a.forecastThreeHigh=Math.round(1.8*(o.item.forecast[3].high+32)),a.forecastThreeLow=Math.round(1.8*(o.item.forecast[3].low+32)),a.forecastFourHigh=Math.round(1.8*(o.item.forecast[4].high+32)),a.forecastFourLow=Math.round(1.8*(o.item.forecast[4].low+32))),"3200"==o.item.condition.code?(r.thumbnail="//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png",r.image="//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png"):(r.thumbnail="//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.condition.code+"ds.png",r.image="//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.condition.code+"d.png"),r.forecastOne="3200"==o.item.forecast[1].code?"//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png":"//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.forecast[1].code+"d.png",r.forecastTwo="3200"==o.item.forecast[2].code?"//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png":"//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.forecast[2].code+"d.png",r.forecastThree="3200"==o.item.forecast[3].code?"//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png":"//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.forecast[3].code+"d.png",r.forecastFour="3200"==o.item.forecast[4].code?"//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png":"//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.forecast[4].code+"d.png";var m={title:o.item.title,temp:o.item.condition.temp,tempAlt:a.temp,code:o.item.condition.code,todayCode:o.item.forecast[0].code,units:{temp:o.units.temperature,distance:o.units.distance,pressure:o.units.pressure,speed:o.units.speed,tempAlt:a.unit},currently:o.item.condition.text,high:o.item.forecast[0].high,highAlt:a.high,low:o.item.forecast[0].low,lowAlt:a.low,forecast:o.item.forecast[0].text,wind:{chill:o.wind.chill,direction:c,speed:o.wind.speed},humidity:o.atmosphere.humidity,heatindex:i,pressure:o.atmosphere.pressure,rising:o.atmosphere.rising,visibility:o.atmosphere.visibility,sunrise:o.astronomy.sunrise,sunset:o.astronomy.sunset,description:o.item.description,thumbnail:r.thumbnail,image:r.image,tomorrow:{high:o.item.forecast[1].high,highAlt:a.forecastOneHigh,low:o.item.forecast[1].low,lowAlt:a.forecastOneLow,forecast:o.item.forecast[1].text,code:o.item.forecast[1].code,date:o.item.forecast[1].date,day:o.item.forecast[1].day,image:r.forecastOne},forecasts:{one:{high:o.item.forecast[1].high,highAlt:a.forecastOneHigh,low:o.item.forecast[1].low,lowAlt:a.forecastOneLow,forecast:o.item.forecast[1].text,code:o.item.forecast[1].code,date:o.item.forecast[1].date,day:o.item.forecast[1].day,image:r.forecastOne},two:{high:o.item.forecast[2].high,highAlt:a.forecastTwoHigh,low:o.item.forecast[2].low,lowAlt:a.forecastTwoLow,forecast:o.item.forecast[2].text,code:o.item.forecast[2].code,date:o.item.forecast[2].date,day:o.item.forecast[2].day,image:r.forecastTwo},three:{high:o.item.forecast[3].high,highAlt:a.forecastThreeHigh,low:o.item.forecast[3].low,lowAlt:a.forecastThreeLow,forecast:o.item.forecast[3].text,code:o.item.forecast[3].code,date:o.item.forecast[3].date,day:o.item.forecast[3].day,image:r.forecastThree},four:{high:o.item.forecast[4].high,highAlt:a.forecastFourHigh,low:o.item.forecast[4].low,lowAlt:a.forecastFourLow,forecast:o.item.forecast[4].text,code:o.item.forecast[4].code,date:o.item.forecast[4].date,day:o.item.forecast[4].day,image:r.forecastFour}},city:o.location.city,country:o.location.country,region:o.location.region,updated:o.item.pubDate,link:o.item.link};t.success(m)}):t.error(null===o.query.results?"An invalid WOEID or location was provided.":"There was an error retrieving the latest weather information. Please try again.")}),this}})}(jQuery);



</script>

</body>
</html>
