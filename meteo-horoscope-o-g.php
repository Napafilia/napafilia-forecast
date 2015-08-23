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
<title>Module Météo et Horoscope - Nakapeo</title>
<link rel="author" href="https://plus.google.com/+CamillePiombo" />
<meta name="author" content="Camille Piombo" />

<script LANGUAGE="JavaScript" src="Ephemeride.js"></script>

<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="jquery.cycle.all.js"></script>


<link rel="stylesheet" href="horoscope-meteo-g.css">


<script language="javascript">
//météo astro...
$(document).ready(function(){
	$('#slideshow0') .cycle({
		fx: 'scrollLeft', //'scrollLeft,scrollDown,scrollRight,scrollUp',blindX, blindY, blindZ, cover, curtainX, curtainY, fade, fadeZoom, growX, growY, none, scrollUp,scrollDown,scrollLeft,scrollRight,scrollHorz,scrollVert,shuffle,slideX,slideY,toss,turnUp,turnDown,turnLeft,turnRight,uncover,ipe ,zoom
 		speed : 1000,
   		timeout: 21000,
		
	});
});


//signe astro 
$(document).ready(function(){
	$('#slideshow1') .cycle({
		fx: 'fade', //'scrollLeft,scrollDown,scrollRight,scrollUp',blindX, blindY, blindZ, cover, curtainX, curtainY, fade, fadeZoom, growX, growY, none, scrollUp,scrollDown,scrollLeft,scrollRight,scrollHorz,scrollVert,shuffle,slideX,slideY,toss,turnUp,turnDown,turnLeft,turnRight,uncover,ipe ,zoom
 		speed : 1000,
   		timeout: 21000,
		
	});
});

//amour / travail
$(document).ready(function(){

	$('.slideshow2').cycle({ 
    fx:    'fade',
	speed : 1000, 
    timeout: 10000 
	});

});	


	

</script>


<?php
	require_once("rsslib/rsslib-horoscope-light.php");
	echo RSS_Display("http://www.asiaflash.com/horoscope/rss_quotidien_condense.xml", 2);
	
	//echo $_SESSION["belier"], $_SESSION["taureau"], $_SESSION["gemeaux"],$_SESSION["cancer"], $_SESSION["lion"], $_SESSION["vierge"], $_SESSION["balance"], $_SESSION["scorpion"], $_SESSION["sagittaire"],  $_SESSION["capricorne"], $_SESSION["verseau"], $_SESSION["poissons"];
      
	  ?>


</head>
<body id="met">

<!-- Docs at http://http://simpleweatherjs.com -->
<div id="weather" style="height:100%">
	
    <div id="slideshow0">
        <!-- Météo du moment -->
        <ul id="weather2" style="width:100%"></ul>
        
            <!-- Météo/Horoscope-->
   
            
            <!--horoscope 1 -->	
            <ul id="slideshow1" style="position: absolute;left: 600px;overflow: hidden;">
                <li class="horoscope">
                 <?php echo $_SESSION["belier"]; ?>
                </li>
                <li class="horoscope">
                 <?php echo $_SESSION["belier"]; ?>
                </li>
            </ul>
            
            <!--horoscope 2 -->	
            <ul id="slideshow1" style="position: absolute;left: 600px;overflow: hidden;">
                
                <li class="horoscope">
                 <?php echo $_SESSION["taureau"]; ?>
                </li>
                <li class="horoscope">
                 <?php echo $_SESSION["taureau"]; ?>
                </li>
            </ul>
            
            <!--horoscope 3 -->	
            <ul id="slideshow1" style="position: absolute;left: 600px;overflow: hidden;">
                
                <li class="horoscope">
                 <?php echo $_SESSION["gemeaux"]; ?>
                </li>
                <li class="horoscope">
                 <?php echo $_SESSION["gemeaux"]; ?>
                </li>
            </ul>
            
            <!--Météo Jours suivants -->
            <ul id="weather4"></ul>
            
            <!--horoscope 4 -->	
            <ul id="slideshow1" style="position: absolute;left: 600px;overflow: hidden;">
                <li class="horoscope">
                 <?php echo $_SESSION["cancer"]; ?>
                </li>
                <li class="horoscope">
                 <?php echo $_SESSION["cancer"]; ?>
                </li>
            </ul>
            
            <!--horoscope 5 -->	
            <ul id="slideshow1" style="position: absolute;left: 600px;overflow: hidden;">
                <li class="horoscope">
                 <?php echo $_SESSION["lion"]; ?>
                </li>
                <li class="horoscope">
                 <?php echo $_SESSION["lion"]; ?>
                </li>
            </ul>
            
            <!--horoscope 6 -->	
            <ul id="slideshow1" style="position: absolute;left: 600px;overflow: hidden;">
               <li class="horoscope">
                 <?php echo $_SESSION["vierge"]; ?>
                </li>
                <li class="horoscope">
                 <?php echo $_SESSION["vierge"]; ?>
                </li>
            </ul>
            
            <!--Météo Jours suivants -->
            <ul id="weather5"></ul>
            
            <!--horoscope 7 -->	
            <ul id="slideshow1" style="position: absolute;left: 600px;overflow: hidden;">
                <li class="horoscope">
                 <?php echo $_SESSION["balance"]; ?>
                </li>
                <li class="horoscope">
                 <?php echo $_SESSION["balance"]; ?>
                </li>
            </ul>
            
            <!--horoscope 8 -->	
            <ul id="slideshow1" style="position: absolute;left: 600px;overflow: hidden;">
                <li class="horoscope">
                 <?php echo $_SESSION["scorpion"]; ?>
                </li>
                <li class="horoscope">
                 <?php echo $_SESSION["scorpion"]; ?>
                </li>
            </ul>
            
            <!--horoscope 9 -->	
            <ul id="slideshow1" style="position: absolute;left: 600px;overflow: hidden;">
                <li class="horoscope">
                 <?php echo $_SESSION["sagittaire"]; ?>
                </li>
                <li class="horoscope">
                 <?php echo $_SESSION["sagittaire"]; ?>
                </li>
            </ul>
            
            <!--Météo Jours suivants -->
            <ul id="weather6"></ul>
            
            <!--horoscope 10 -->	
            <ul id="slideshow1" style="position: absolute;left: 600px;overflow: hidden;">
                <li class="horoscope">
                 <?php echo $_SESSION["capricorne"]; ?>
                </li>
                <li class="horoscope">
                 <?php echo $_SESSION["capricorne"]; ?>
                </li>
            </ul>
            
            <!--horoscope 11 -->	
            <ul id="slideshow1" style="position: absolute;left: 600px;overflow: hidden;">
                <li class="horoscope">
                 <?php echo $_SESSION["verseau"]; ?>
                </li>
                <li class="horoscope">
                 <?php echo $_SESSION["verseau"]; ?>
                </li>
            </ul>
            
            <!--horoscope 12 -->	
            <ul id="slideshow1" style="position: absolute;left: 600px;overflow: hidden;">
                <li class="horoscope">
                 <?php echo $_SESSION["poissons"]; ?>
                </li>
                </li><li class="horoscope">
                 <?php echo $_SESSION["poissons"]; ?>
                </li>
            </ul>
        </div>
    </div>
</div>
        
<!-- Récupération parametre url-->
<?php 
	$localize = "paris";
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
	
	
	//heure Francais
	var heure = new Date();
	//heure_fr.setTime(date4.getTime() + 4* 24 * 3600 * 1000);
	var heure_fr = heure.getHours()+'h'+heure.getMinutes();
	
	
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


var met_jj = weather.code ;
if (met_jj == "3200") { met_jj = weather.todayCode };

		
	 html = '';
	  html += '<div id="now"><h2 id=date_fr>'+date_fr+'</h2>'
	  //html += '<h3 style="margin-top: -40px; margin-bottom: 10px">'+heure_fr+'</h3>';
	  html += '<h3>'+weather.city+'</h3>';
      html += '<h2><i class="icon-'+met_jj+'"></i><span class=temp1> '+weather.temp+'&deg;'+weather.units.temp+'</span></h2>' ;
	  html += '<h4>'+FR[met_jj]+'</h4></div>';
     
	 
	  html += '<ul id=jour>'
	  html += '<li id=jour1><div class="picto'+weather.todayCode+' imggrand"><h4 class=spasse>Aujourd\'hui</h4>' ;
	 /* html += '<img src="http://l.yimg.com/a/i/us/nws/weather/gr/'+weather.todayCode+'d.png" /><br>' ;*/
	  html += '<h4 class=temp><span class="temp_min">'+weather.low+'&deg;</span><br>' ;
	  html += '<span class="temp_max">'+weather.high+'&deg;</span></h4><br>' ;
	  html += '<h5>'+FR[weather.todayCode]+'</h5><br>' ;
	  html += '<h5 class=vent><i class="icon-wind"></i>'+weather.wind.direction+'. '+Math.round(weather.wind.speed)+' <span class=petit>'+weather.units.speed+'</span></h5>'; 
	 /* html += 'Pression Atmosphérique : '+Math.round(weather.pressure)+'hPa<br><br>';*/  
	 /* html += '<h5 class=humid><i class="icon-humidite"></i> '+Math.round(weather.humidity)+' <span class=petit>%</span></h5>';  */
	  html += '<h5 class=humid><i class="icon-lever"></i>'+h_sunrise+'h'+m_sunrise+'  <i class="icon-coucher"></i>'+h_sunset+'h'+m_sunset+'</h5><br>' ; 
	  html += '<h5>Fête : '+fete+'</h5></div></li></ul>' ;
	  
	  
	  // Jour + 1
	  html += '<ul><li id=j1><div class="picto'+weather.tomorrow.code+'  imgpetite" ><h4>Demain</h4>' ;
	   html += '<h4 class=temp><span class="temp_min">'+weather.tomorrow.low+'&deg;</span><br>' ;
	  html += '<span class="temp_max">'+weather.tomorrow.high+'&deg;</span></h4>' ;
	  html += '<h5 class=descr>'+FR[weather.tomorrow.code]+'</h5></div></li>' ;
	  //html += '<h5>Fete : '+fete1+'</h5>' ;
	  
	   // Jour + 2
	  html += '<li  id=j2><div class="picto'+weather.forecasts.two.code+'  imgpetite" ><h4>'+date_fr_2+'</h4>' ;
	   html += '<h4 class=temp><span class="temp_min">'+weather.forecasts.two.low+'&deg;</span><br>' ;
	  html += '<span class="temp_max">'+weather.forecasts.two.high+'&deg;</span></h4>' ;
	  html += '<h5 class=descr>'+FR[weather.forecasts.two.code]+'</h5></div></li>';
	  	  
	   // Jour + 3
	   html += '<li  id=j3><div class="picto'+weather.forecasts.three.code+'  imgpetite" ><h4>'+date_fr_3+'</h4>' ;
	   html += '<h4 class=temp><span class="temp_min">'+weather.forecasts.three.low+'&deg;</span><br>' ;
	  html += '<span class="temp_max">'+weather.forecasts.three.high+'&deg;</span></h4>' ;
	  html += '<h5 class=descr>'+FR[weather.forecasts.three.code]+'</h5></div></li>';
	 
	    // Jour + 4
	  html += '<li  id=j4><div class="picto'+weather.forecasts.four.code+'  imgpetite" ><h4>'+date_fr_4+'</h4>' ;
	  html += '<h4 class=temp><span class="temp_min">'+weather.forecasts.four.low+'&deg;</span><br>' ;
	  html += '<span class="temp_max">'+weather.forecasts.four.high+'&deg;</span></h4>' ;
	  html += '<h5 class=descr>'+FR[weather.forecasts.four.code]+'</h5></div></li></ul>';
		 
		 
		 /*html = '';
	  html += '<div id="meteo"><div id="now"><h2 id=date_fr>'+date_fr+'</h2>';
	  html += '<h3>'+weather.city+'</h3>';
      html += '<h2><i class="icon-'+weather.code+'"></i><span class=temp1> '+weather.temp+'&deg;'+weather.units.temp+'</span></h2>' ;
	  html += '<h4>'+FR[weather.code]+'</h4>';
	   
	  html += '<br><h5>Fête : '+fete+'</h5></div>' ;*/
     
	 
	  



      $("#weather2").html(html);
	  //$("#weather3").html(html2);
	  $("#weather4").html(html);
	  $("#weather5").html(html);
	  $("#weather6").html(html);
    },
	
	

    error: function(error) {
      $("#weather2").html('<p>'+error+'</p>');
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
!function(e){"use strict";e.extend({simpleWeather:function(t){t=e.extend({location:"",woeid:"2357536",unit:"c",success:function(){},error:function(){}},t);var o=new Date,i="//<?echo $_SERVER[HTTP_HOST];?>/yql.php?language=fr-fr&format=json&rnd="+o.getFullYear()+o.getMonth()+o.getDay()+o.getHours()+"&diagnostics=true&callback=?&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&q=";if(""!==t.location)i+='select * from weather.forecast where woeid in (select woeid from geo.placefinder where text="'+t.location+'" and gflags="R") and u="'+t.unit+'"';else{if(""===t.woeid)return t.error("Could not retrieve weather due to an invalid location."),!1;i+="select * from weather.forecast where woeid="+t.woeid+' and u="'+t.unit+'"'}return e.getJSON(encodeURI(i),function(o){null!==o&&null!==o.query&&null!==o.query.results&&"Yahoo! Weather Error"!==o.query.results.channel.description?e.each(o.query.results,function(e,o){-1!==o.constructor.toString().indexOf("Array")&&(o=o[0]);var i,a=[],r=[],s=["N","NNE","NE","ENE","E","ESE","SE","SSE","S","SSW","SW","WSW","W","WNW","NW","NNW","N"],c=s[Math.round(o.wind.direction/22.5)];i=o.item.condition.temp<80&&o.atmosphere.humidity<40?-42.379+2.04901523*o.item.condition.temp+10.14333127*o.atmosphere.humidity-.22475541*o.item.condition.temp*o.atmosphere.humidity-6.83783*Math.pow(10,-3)*Math.pow(o.item.condition.temp,2)-5.481717*Math.pow(10,-2)*Math.pow(o.atmosphere.humidity,2)+1.22874*Math.pow(10,-3)*Math.pow(o.item.condition.temp,2)*o.atmosphere.humidity+8.5282*Math.pow(10,-4)*o.item.condition.temp*Math.pow(o.atmosphere.humidity,2)-1.99*Math.pow(10,-6)*Math.pow(o.item.condition.temp,2)*Math.pow(o.atmosphere.humidity,2):o.item.condition.temp,"f"===t.unit?(a.unit="c",a.temp=Math.round(5/9*(o.item.condition.temp-32)),a.high=Math.round(5/9*(o.item.forecast[0].high-32)),a.low=Math.round(5/9*(o.item.forecast[0].low-32)),a.forecastOneHigh=Math.round(5/9*(o.item.forecast[1].high-32)),a.forecastOneLow=Math.round(5/9*(o.item.forecast[1].low-32)),a.forecastTwoHigh=Math.round(5/9*(o.item.forecast[2].high-32)),a.forecastTwoLow=Math.round(5/9*(o.item.forecast[2].low-32)),a.forecastThreeHigh=Math.round(5/9*(o.item.forecast[3].high-32)),a.forecastThreeLow=Math.round(5/9*(o.item.forecast[3].low-32)),a.forecastFourHigh=Math.round(5/9*(o.item.forecast[4].high-32)),a.forecastFourLow=Math.round(5/9*(o.item.forecast[4].low-32))):(a.unit="f",a.temp=Math.round(1.8*o.item.condition.temp+32),a.high=Math.round(1.8*o.item.forecast[0].high+32),a.low=Math.round(1.8*o.item.forecast[0].low+32),a.forecastOneHigh=Math.round(1.8*(o.item.forecast[1].high+32)),a.forecastOneLow=Math.round(1.8*(o.item.forecast[1].low+32)),a.forecastTwoHigh=Math.round(1.8*(o.item.forecast[2].high+32)),a.forecastTwoLow=Math.round(1.8*(o.item.forecast[2].low+32)),a.forecastThreeHigh=Math.round(1.8*(o.item.forecast[3].high+32)),a.forecastThreeLow=Math.round(1.8*(o.item.forecast[3].low+32)),a.forecastFourHigh=Math.round(1.8*(o.item.forecast[4].high+32)),a.forecastFourLow=Math.round(1.8*(o.item.forecast[4].low+32))),"3200"==o.item.condition.code?(r.thumbnail="//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png",r.image="//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png"):(r.thumbnail="//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.condition.code+"ds.png",r.image="//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.condition.code+"d.png"),r.forecastOne="3200"==o.item.forecast[1].code?"//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png":"//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.forecast[1].code+"d.png",r.forecastTwo="3200"==o.item.forecast[2].code?"//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png":"//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.forecast[2].code+"d.png",r.forecastThree="3200"==o.item.forecast[3].code?"//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png":"//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.forecast[3].code+"d.png",r.forecastFour="3200"==o.item.forecast[4].code?"//s.yimg.com/os/mit/media/m/weather/images/icons/l/44d-100567.png":"//l.yimg.com/a/i/us/nws/weather/gr/"+o.item.forecast[4].code+"d.png";var m={title:o.item.title,temp:o.item.condition.temp,tempAlt:a.temp,code:o.item.condition.code,todayCode:o.item.forecast[0].code,units:{temp:o.units.temperature,distance:o.units.distance,pressure:o.units.pressure,speed:o.units.speed,tempAlt:a.unit},currently:o.item.condition.text,high:o.item.forecast[0].high,highAlt:a.high,low:o.item.forecast[0].low,lowAlt:a.low,forecast:o.item.forecast[0].text,wind:{chill:o.wind.chill,direction:c,speed:o.wind.speed},humidity:o.atmosphere.humidity,heatindex:i,pressure:o.atmosphere.pressure,rising:o.atmosphere.rising,visibility:o.atmosphere.visibility,sunrise:o.astronomy.sunrise,sunset:o.astronomy.sunset,description:o.item.description,thumbnail:r.thumbnail,image:r.image,tomorrow:{high:o.item.forecast[1].high,highAlt:a.forecastOneHigh,low:o.item.forecast[1].low,lowAlt:a.forecastOneLow,forecast:o.item.forecast[1].text,code:o.item.forecast[1].code,date:o.item.forecast[1].date,day:o.item.forecast[1].day,image:r.forecastOne},forecasts:{one:{high:o.item.forecast[1].high,highAlt:a.forecastOneHigh,low:o.item.forecast[1].low,lowAlt:a.forecastOneLow,forecast:o.item.forecast[1].text,code:o.item.forecast[1].code,date:o.item.forecast[1].date,day:o.item.forecast[1].day,image:r.forecastOne},two:{high:o.item.forecast[2].high,highAlt:a.forecastTwoHigh,low:o.item.forecast[2].low,lowAlt:a.forecastTwoLow,forecast:o.item.forecast[2].text,code:o.item.forecast[2].code,date:o.item.forecast[2].date,day:o.item.forecast[2].day,image:r.forecastTwo},three:{high:o.item.forecast[3].high,highAlt:a.forecastThreeHigh,low:o.item.forecast[3].low,lowAlt:a.forecastThreeLow,forecast:o.item.forecast[3].text,code:o.item.forecast[3].code,date:o.item.forecast[3].date,day:o.item.forecast[3].day,image:r.forecastThree},four:{high:o.item.forecast[4].high,highAlt:a.forecastFourHigh,low:o.item.forecast[4].low,lowAlt:a.forecastFourLow,forecast:o.item.forecast[4].text,code:o.item.forecast[4].code,date:o.item.forecast[4].date,day:o.item.forecast[4].day,image:r.forecastFour}},city:o.location.city,country:o.location.country,region:o.location.region,updated:o.item.pubDate,link:o.item.link};t.success(m)}):t.error(null===o.query.results?"An invalid WOEID or location was provided.":"There was an error retrieving the latest weather information. Please try again.")}),this}})}(jQuery);



</script>


</body>
</html>
