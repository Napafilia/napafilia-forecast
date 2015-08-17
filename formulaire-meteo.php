<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formuaire Météo Ipreso</title>

<!------JQuery Mobile------>
	<link rel="stylesheet" href="jquery.mobile-1.4.3/jquery.mobile-1.4.3.min.css">
	<script src="jquery.mobile-1.4.3/jquery.js"></script>
	<script src="jquery.mobile-1.4.3/jquery.mobile-1.4.3.min.js"></script>
    <script type="text/javascript" src="jquery.mobile-1.4.3/bgrins-spectrum-ed52c1c/docs/jquery-1.9.1.js"></script>
    <script  src="js/colpick.js"  type="text/javascript"></script>
	<link rel="stylesheet" href="css/colpick.css" type="text/css"/>
    </script>


</head>

<body>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#color').chromoselector({
				color2str: function (color) {
					return color.getRgbString();
				}
			});
		});
	</script>
    
   	<div data-role="page">
    	<div data-role="header">
        <h2>Paramétrage module météo</h2>
        </div>
        
        <div data-role="content">
        <?php 	
		if (!isset($_POST["submit"])) {
		?>
        	<form  class="form" name="form" method="post" id="form" action="" >
            
                <label for="localisation">Commune :</label>
				<input type="text" name="localisation" id="localisation" value="" required >
  			<br>
            <fieldset data-role="controlgroup"  data-mini="true">
                <legend>Résolution :</legend>
                <input type="radio" name="resolution" id="rez_bas" checked="checked" value="basse"  onClick="desaffiche_met_hor(); desaffiche_img(); affiche_color_fond(); affiche_color_txt(); affiche_met_date(); ">
                <label for="rez_bas">Basse résolution</label>
                <input type="radio" name="resolution" id="rez_haut" value="haute" checked="checked" onClick="affiche_met_hor(); affiche_img(); desaffiche_color_fond(); desaffiche_color_txt(); desaffiche_met_date() ;">
                <label for="rez_haut">Haute Résolution</label>
            </fieldset>
            <br>
			
            <div id="met_date">
            <fieldset data-role="controlgroup"  data-mini="true">
                <legend>Météo/date :</legend>
                <input type="radio" name="met_date" id="meteo_d" checked="checked" value="meteo_d" >
                <label for="meteo_d" >Météo</label>
                <input type="radio"  name="met_date" id="meteo_date_d" value="meteo_date_d">
                <label for="meteo_date_d">Météo et Date</label>
                <input type="radio"  name="met_date" id="date_d" value="date_d" >
                <label for="date_d">Date</label>
                
            </fieldset>
            <br>
			</div>
            
            
            <div id="met_hor">
            <fieldset data-role="controlgroup"  data-mini="true">
                <legend>Météo/Horoscope :</legend>
                <input type="radio" name="met_hor" id="meteo" checked="checked" value="meteo" >
                <label for="meteo" onClick="desaffiche_t_hor()">Météo</label>
                <input type="radio" name="met_hor" id="meteo_horoscope" value="meteo_horoscope" onClick="affiche_t_hor()">
                <label for="meteo_horoscope">Météo et Horoscope</label>
                
            </fieldset>
            <br>
			</div>
            

           <div id="t_hor">
            <fieldset data-role="controlgroup"  data-mini="true">
                <legend>Taille Horoscope:</legend>
                <input type="radio" name="taille_hor" id="taille_petit" checked="checked" value="petit" >
                <label for="taille_petit">Normal</label>
                <input type="radio" name="taille_hor" id="taille_moyen" value="grand">
                <label for="taille_moyen">Grand</label>

            </fieldset>
            <br>
            </div>

                   
			
			<div id="img">
			<label for="image">Image de fond </label>
            <select name="image" id="image" data-role="slider" data-mini="true" onChange="_color_fond()">
                <option value="n" onClick="">non</option>
                <option value="o" selected="">OUI</option>
            </select>
            <br>
            
			</div>
            
            
           <div id="c_fond">
           <label for="color_fond">Couleur du fond:</label>
            <input type="color" name="color_fond" id="color_fond"  class="color-box" data-inline="true" data-mini="true" value="#1192D3"/></label>
            <br>
           	</div>
            
             <div id="c_txt">
            <label for="color_txt">Couleur du Texte :</label>
            <input type="color" name="color_txt" id="color_txt"  class="color-box" data-inline="true" data-mini="true" value="#ffffff"/></label>
            <br>
            <label for="tps_met">Temps pour chaque Météo :</label>
			<input type="range" name="tps_met" id="tps_met" value="10" min="3" max="30" step="1" data-highlight="true"  data-mini="true">
            
            <br>
            </div> 
            
            
			 <script type="text/javascript" >
			 //météo
			document.getElementById("met_hor").style.display = "block";
					   	   
		   	function affiche_met_hor() {
				document.getElementById("met_hor").style.display = "block";
			}
			function desaffiche_met_hor() {
				document.getElementById("met_hor").style.display = "none";
			}
			
			 //img
			document.getElementById("img").style.display = "block";
					   	   
		   	function affiche_img() {
				document.getElementById("img").style.display = "block";
			}
			function desaffiche_img() {
				document.getElementById("img").style.display = "none";
			}
			
			// Taille Horoscope
			document.getElementById("t_hor").style.display = "none";
					   	   
		   	function affiche_t_hor() {
				document.getElementById("t_hor").style.display = "block";
			}
			function desaffiche_t_hor() {
				document.getElementById("t_hor").style.display = "none";
			}
			
			 
			// couleur de fond 	
		   	document.getElementById("c_fond").style.display = "none";
					   	   
		   	function affiche_color_fond() {
				document.getElementById("c_fond").style.display = "block";
			}
			function desaffiche_color_fond() {
				document.getElementById("c_fond").style.display = "none";
			}
					   	   
		   	function _color_fond() {
				if (document.getElementById("c_fond").style.display == "block") {document.getElementById("c_fond").style.display = "none";}
				else {document.getElementById("c_fond").style.display = "block";}
			}
			
			// couleur texte
			document.getElementById("met_date").style.display = "none";
					   	   
		   	function affiche_met_date() {
				document.getElementById("met_date").style.display = "block";
			}
			function desaffiche_met_date() {
				document.getElementById("met_date").style.display = "none";
			}
			
			// couleur texte
			document.getElementById("c_txt").style.display = "none";
					   	   
		   	function affiche_color_txt() {
				document.getElementById("c_txt").style.display = "block";
			}
			function desaffiche_color_txt() {
				document.getElementById("c_txt").style.display = "none";
			}
			
		   </script>
			 <button class="ui-btn ui-mini ui-btn-inline" type="submit" name="submit">Valider</button>
            </form>
            
             <?php 
		}
		else {
		
		$type_meteo = "meteo.php";
		$taille_hor = "" ;
		$date_d = "";
		
		if ($_POST['taille_hor'] == "grand"){
		$taille_hor = "-g";
		}
		
		// météo et horoscope
		if ($_POST['met_hor'] == 'meteo_horoscope'){
			$type_meteo = "meteo-horoscope-o".$taille_hor.".php";
			};
		
		// météo basse résolution
		if ($_POST['resolution'] == 'basse'){
			if ($_POST['met_date'] == 'meteo_date_d') {
				$type_meteo = "meteo-date-b-d.php";
			}
			elseif ($_POST['met_date'] == 'date_d') {
				$type_meteo = "meteo-date-b-d.php";
				$date_d = "&d_date=o";
			}
			elseif ($_POST['met_date'] == 'meteo_d') {
				$type_meteo = "meteo-b-d.php";
			}
			
			};
		
		
		echo '
		<label for="textarea">Code à copier dans Ipreso :</label>
		<textarea cols="40" rows="8" name="textarea" id="textarea">http://meteo.ipreso.com/'.$type_meteo.'?localisation='.$_POST['localisation'].'&img='.$_POST['image'].'&color_fond='.substr($_POST['color_fond'], 1, 7).'&color_txt='.substr($_POST['color_txt'], 1, 7).'&tps_met='.$_POST['tps_met'].$date_d.'</textarea>';

		
		echo '<a rel="external" href="http://meteo.ipreso.com/'.$type_meteo.'?localisation='.$_POST['localisation'].'&img='.$_POST['image'].'&color_fond='.substr($_POST['color_fond'], 1, 7).'&color_txt='.substr($_POST['color_txt'], 1, 7).'&tps_met='.$_POST['tps_met'].$date_d.'">
		meteo</a>';
		
		}?>
        </div>
        
        <div data-role="footer">
        </div>
    </div>
   
</body>
</html>