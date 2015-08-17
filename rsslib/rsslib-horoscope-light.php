<?php

/*
	RSS Extractor and Displayer
	(c) 2007-2010  Scriptol.com - Licence Mozilla 1.1.
	rsslib.php
	
	Requirements:
	- PHP 5.
	- A RSS feed.
	
	Using the library:
	Insert this code into the page that displays the RSS feed:
	
	<?php
	require_once("rsslib.php");
	echo RSS_Display("http://www.xul.fr/rss.xml", 15);
	? >
	
*/

$RSS_Content = array();

function RSS_Tags($item, $type)
{
		$y = array();
		$tnl = $item->getElementsByTagName("title");
		$tnl = $tnl->item(0);
		$title = $tnl->firstChild->textContent;

		$tnl = $item->getElementsByTagName("link");
		$tnl = $tnl->item(0);
		$link = $tnl->firstChild->textContent;
		
		$tnl = $item->getElementsByTagName("pubDate");
		$tnl = $tnl->item(0);
		$date = $tnl->firstChild->textContent;		

		$tnl = $item->getElementsByTagName("description");
		$tnl = $tnl->item(0);
		$description = $tnl->firstChild->textContent;

		$y["title"] = $title;
		$y["link"] = $link;
		$y["date"] = $date;		
		$y["description"] = $description;
		$y["type"] = $type;
		
		
		
		$article2 = "";

		//belier
			$belier = '';
			$belier2 = '';
			
			$belier_titre = '';
			
			$belier_amour = '';
			$belier_amour1 = '';
			$belier_amour2 = '';
			$belier_amour3 = '';
	
			$belier_travail = '';
			$belier_travail1 = '';
			$belier_travail2 = '';
			$belier_travail3 = '';
		
		//taureau
			$taureau = '';
			$taureau2 = '';
			
			$taureau_titre = '';
			
			$taureau_amour = '';
			$taureau_amour1 = '';
			$taureau_amour2 = '';
			$taureau_amour3 = '';
			
			$taureau_travail = '';
			$taureau_travail1 = '';
			$taureau_travail2 = '';
			$taureau_travail3 = '';
		
		//gemeaux
			$gemeaux = '';
			$gemeaux2 = '';
			
			$gemeaux_titre = '';
			
			$gemeaux_amour = '';
			$gemeaux_amour1 = '';
			$gemeaux_amour2 = '';
			$gemeaux_amour3 = '';
	
			$gemeaux_travail = '';
			$gemeaux_travail1 = '';
			$gemeaux_travail2 = '';
			$gemeaux_travail3 = '';
			
		//cancer
			$cancer = '';
			$cancer2 = '';
			
			$cancer_titre = '';
			
			$cancer_amour = '';
			$cancer_amour1 = '';
			$cancer_amour2 = '';
			$cancer_amour3 = '';
	
			$cancer_travail = '';
			$cancer_travail1 = '';
			$cancer_travail2 = '';
			$cancer_travail3 = '';
		
		//lion
			$lion = '';
			$lion2 = '';
			
			$lion_titre = '';
			
			$lion_amour = '';
			$lion_amour1 = '';
			$lion_amour2 = '';
			$lion_amour3 = '';
	
			$lion_travail = '';
			$lion_travail1 = '';
			$lion_travail2 = '';
			$lion_travail3 = '';
		
		//vierge
			$vierge = '';
			$vierge2 = '';
			
			$vierge_titre = '';
			
			$vierge_amour = '';
			$vierge_amour1 = '';
			$vierge_amour2 = '';
			$vierge_amour3 = '';
	
			$vierge_travail = '';
			$vierge_travail1 = '';
			$vierge_travail2 = '';
			$vierge_travail3 = '';
		
		//balance
			$balance = '';
			$balance2 = '';
			
			$balance_titre = '';
			
			$balance_amour = '';
			$balance_amour1 = '';
			$balance_amour2 = '';
			$balance_amour3 = '';
	
			$balance_travail = '';
			$balance_travail1 = '';
			$balance_travail2 = '';
			$balance_travail3 = '';
		
		//scorpion
			$scorpion = '';
			$scorpion2 = '';
			
			$scorpion_titre = '';
			
			$scorpion_amour = '';
			$scorpion_amour1 = '';
			$scorpion_amour2 = '';
			$scorpion_amour3 = '';
	
			$scorpion_travail = '';
			$scorpion_travail1 = '';
			$scorpion_travail2 = '';
			$scorpion_travail3 = '';
			
		//sagittaire
			$sagittaire = '';
			$sagittaire2 = '';
			
			$sagittaire_titre = '';
			
			$sagittaire_amour = '';
			$sagittaire_amour1 = '';
			$sagittaire_amour2 = '';
			$sagittaire_amour3 = '';
	
			$sagittaire_travail = '';
			$sagittaire_travail1 = '';
			$sagittaire_travail2 = '';
			$sagittaire_travail3 = '';
		
		//capricorne
			$capricorne = '';
			$capricorne2 = '';
			
			$capricorne_titre = '';
			
			$capricorne_amour = '';
			$capricorne_amour1 = '';
			$capricorne_amour2 = '';
			$capricorne_amour3 = '';
	
			$capricorne_travail = '';
			$capricorne_travail1 = '';
			$capricorne_travail2 = '';
			$capricorne_travail3 = '';
		
		//verseau
			$verseau = '';
			$verseau2 = '';
			
			$verseau_titre = '';
			
			$verseau_amour = '';
			$verseau_amour1 = '';
			$verseau_amour2 = '';
			$verseau_amour3 = '';
	
			$verseau_travail = '';
			$verseau_travail1 = '';
			$verseau_travail2 = '';
			$verseau_travail3 = '';
			
		//poissons
			$poissons = '';
			$poissons2 = '';
			
			$poissons_titre = '';
			
			$poissons_amour = '';
			$poissons_amour1 = '';
			$poissons_amour2 = '';
			$poissons_amour3 = '';
	
			$poissons_travail = '';
			$poissons_travail1 = '';
			$poissons_travail2 = '';
			$poissons_travail3 = '';

	
				//Découpage
				$phrase = explode("<br>", $description);
				
					//bélier
					if (isset($phrase[3])) {$belier_titre .= $phrase[2];}
					if (isset($phrase[3])) {$belier_amour .= $phrase[3];}
					if (isset($phrase[5])) {$belier_travail .= $phrase[5];}
					
						
						//amour 
							// !
							$ponct_belier_amour1 = explode("!", $belier_amour);
							if (isset($ponct_belier_amour1[0])) {$belier_amour1 .= $ponct_belier_amour1[0].'.';}
							if (isset($ponct_belier_amour1[1])) {$belier_amour1 .= $ponct_belier_amour1[1].'.';}
							
							// .
							$ponct_belier_amour2 = explode('.', $belier_amour1);
							if (isset($ponct_belier_amour2[0])) {$belier_amour2 .= $ponct_belier_amour2[0].'.';}
							if (isset($ponct_belier_amour2[1])) {$belier_amour2 .= $ponct_belier_amour2[1].'.';}
							if (strlen($belier_amour2) < 256) {$belier_amour3 = $belier_amour2; } else {$belier_amour3 = $ponct_belier_amour2[0].'.' ;}
					 
					
						//travail
							// !
							$ponct_belier_travail1 = explode("!", $belier_travail);
							if (isset($ponct_belier_travail1[0])) {$belier_travail1 .= $ponct_belier_travail1[0].'.';}
							if (isset($ponct_belier_travail1[1])) {$belier_travail1 .= $ponct_belier_travail1[1].'.';}
							
							// .
							$ponct_belier_travail2 = explode('.', $belier_travail1);
							if (isset($ponct_belier_travail2[0])) {$belier_travail2 .= $ponct_belier_travail2[0].'.';}
							if (isset($ponct_belier_travail2[1])) {$belier_travail2 .= $ponct_belier_travail2[1].'.';}
							if (strlen($belier_travail2) < 256) {$belier_travail3 = $belier_travail2; } else {$belier_travail3 = $ponct_belier_travail2[0].'.' ;}
						
						//chaine caractère
						$belier .= '<div id="belier"><h1 class="sign"><strong>&#9800;</strong></strong></h1>
						<h3 class="t_sign">'.$belier_titre.'</h3><div class="slideshow2">
						<span class="amour"><p class="titre"><strong>Amour</strong></strong></p>
						<p class="hors_detail"><strong>'.$belier_amour3.'</strong></p></span>
						<span class="travail"><p class="titre"><strong>Travail</strong></strong></p><p class="hors_detail"><strong>'.$belier_travail3.'</strong></p></span></div></div>';
						
						$phrase2 = explode("<li>", $belier);
						$belier2 .= $phrase2[0]; // phrase1
						if (isset($phrase2[1])) {$belier2 .= $phrase2[1];}
						if (isset($phrase2[2])) {$belier2 .= $phrase2[2];}
		

				
					//taureau
					if (isset($phrase[7])) {$taureau_titre .= $phrase[7];}
					if (isset($phrase[8])) {$taureau_amour .= $phrase[8];}
					if (isset($phrase[10])) {$taureau_travail .= $phrase[10];}
					
						
						//amour 
							// !
							$ponct_taureau_amour1 = explode("!", $taureau_amour);
							if (isset($ponct_taureau_amour1[0])) {$taureau_amour1 .= $ponct_taureau_amour1[0].'.';}
							if (isset($ponct_taureau_amour1[1])) {$taureau_amour1 .= $ponct_taureau_amour1[1].'.';}
							
							// .
							$ponct_taureau_amour2 = explode('.', $taureau_amour1);
							if (isset($ponct_taureau_amour2[0])) {$taureau_amour2 .= $ponct_taureau_amour2[0].'.';}
							if (isset($ponct_taureau_amour2[1])) {$taureau_amour2 .= $ponct_taureau_amour2[1].'.';}
							if (strlen($taureau_amour2) < 256) {$taureau_amour3 = $taureau_amour2; } else {$taureau_amour3 = $ponct_taureau_amour2[0].'.' ;}
					
						//travail
							// !
							$ponct_taureau_travail1 = explode("!", $taureau_travail);
							if (isset($ponct_taureau_travail1[0])) {$taureau_travail1 .= $ponct_taureau_travail1[0].'.';}
							if (isset($ponct_taureau_travail1[1])) {$taureau_travail1 .= $ponct_taureau_travail1[1].'.';}
							
							// .
							$ponct_taureau_travail2 = explode('.', $taureau_travail1);
							if (isset($ponct_taureau_travail2[0])) {$taureau_travail2 .= $ponct_taureau_travail2[0].'.';}
							if (isset($ponct_taureau_travail2[1])) {$taureau_travail2 .= $ponct_taureau_travail2[1].'.';}
							if (strlen($taureau_travail2) < 256) {$taureau_travail3 = $taureau_travail2; } else {$taureau_travail3 = $ponct_belier_travail2[0].'.' ;}
						
						//chaine caractère
						$taureau .= '<div id="taureau"><h1 class="sign"><strong>&#9801;</strong></h1>
						<h3 class="t_sign">'.$taureau_titre.'</h3><div class="slideshow2">
						<span class="amour"><p class="titre"><strong>Amour</strong></strong></p>
						<p class="hors_detail"><strong>'.$taureau_amour3.'</strong></p></span>
						<span class="travail"><p class="titre"><strong>Travail</strong></strong></p><p class="hors_detail"><strong>'.$taureau_travail3.'</strong></p></span></div></div>';
						
						$phrase2 = explode("<li>", $taureau);
						$taureau2 .= $phrase2[0]; // phrase1
						if (isset($phrase2[1])) {$taureau2 .= $phrase2[1];}
						if (isset($phrase2[2])) {$taureau2 .= $phrase2[2];}
					
					//gemeaux
					if (isset($phrase[12])) {$gemeaux_titre .= $phrase[12];}
					if (isset($phrase[13])) {$gemeaux_amour .= $phrase[13];}
					if (isset($phrase[15])) {$gemeaux_travail .= $phrase[15];}
					
						
						//amour 
							// !
							$ponct_gemeaux_amour1 = explode("!", $gemeaux_amour);
							if (isset($ponct_gemeaux_amour1[0])) {$gemeaux_amour1 .= $ponct_gemeaux_amour1[0].'.';}
							if (isset($ponct_gemeaux_amour1[1])) {$gemeaux_amour1 .= $ponct_gemeaux_amour1[1].'.';}
							
							// .
							$ponct_gemeaux_amour2 = explode('.', $gemeaux_amour1);
							if (isset($ponct_gemeaux_amour2[0])) {$gemeaux_amour2 .= $ponct_gemeaux_amour2[0].'.';}
							if (isset($ponct_gemeaux_amour2[1])) {$gemeaux_amour2 .= $ponct_gemeaux_amour2[1].'.';}
							if (strlen($gemeaux_amour2) < 256) {$gemeaux_amour3 = $gemeaux_amour2; } else {$gemeaux_amour3 = $ponct_gemeaux_amour2[0].'.' ;}
					
						//travail
							// !
							$ponct_gemeaux_travail1 = explode("!", $gemeaux_travail);
							if (isset($ponct_gemeaux_travail1[0])) {$gemeaux_travail1 .= $ponct_gemeaux_travail1[0].'.';}
							if (isset($ponct_gemeaux_travail1[1])) {$gemeaux_travail1 .= $ponct_gemeaux_travail1[1].'.';}
							
							// .
							$ponct_gemeaux_travail2 = explode('.', $gemeaux_travail1);
							if (isset($ponct_gemeaux_travail2[0])) {$gemeaux_travail2 .= $ponct_gemeaux_travail2[0].'.';}
							if (isset($ponct_gemeaux_travail2[1])) {$gemeaux_travail2 .= $ponct_gemeaux_travail2[1].'.';}
							if (strlen($gemeaux_travail2) < 256) {$gemeaux_travail3 = $gemeaux_travail2; } else {$gemeaux_travail3 = $ponct_gemeaux_travail2[0].'.' ;}
						
						//chaine caractère
						$gemeaux .= '<div id="gemeaux"><h1 class="sign"><strong>&#9802;</strong></h1>
						<h3 class="t_sign">'.$gemeaux_titre.'</h3><div class="slideshow2">
						<span class="amour"><p class="titre"><strong>Amour</strong></strong></p>
						<p class="hors_detail"><strong>'.$gemeaux_amour3.'</strong></p></span>
						<span class="travail"><p class="titre"><strong>Travail</strong></strong></p><p class="hors_detail"><strong>'.$gemeaux_travail3.'</strong></p></span></div></div>';
						
						$phrase2 = explode("<li>", $gemeaux);
						$gemeaux2 .= $phrase2[0]; // phrase1
						if (isset($phrase2[1])) {$gemeaux2 .= $phrase2[1];}
						if (isset($phrase2[2])) {$gemeaux2 .= $phrase2[2];}
					
					//cancer
					if (isset($phrase[17])) {$cancer_titre .= $phrase[17];}
					if (isset($phrase[18])) {$cancer_amour .= $phrase[18];}
					if (isset($phrase[20])) {$cancer_travail .= $phrase[20];}
					
						
						//amour 
							// !
							$ponct_cancer_amour1 = explode("!", $cancer_amour);
							if (isset($ponct_cancer_amour1[0])) {$cancer_amour1 .= $ponct_cancer_amour1[0].'.';}
							if (isset($ponct_cancer_amour1[1])) {$cancer_amour1 .= $ponct_cancer_amour1[1].'.';}
							
							// .
							$ponct_cancer_amour2 = explode('.', $cancer_amour1);
							if (isset($ponct_cancer_amour2[0])) {$cancer_amour2 .= $ponct_cancer_amour2[0].'.';}
							if (isset($ponct_cancer_amour2[1])) {$cancer_amour2 .= $ponct_cancer_amour2[1].'.';}
							if (strlen($cancer_amour2) < 256) {$cancer_amour3 = $cancer_amour2; } else {$cancer_amour3 = $ponct_cancer_amour2[0].'.' ;}
					
						//travail
							// !
							$ponct_cancer_travail1 = explode("!", $cancer_travail);
							if (isset($ponct_cancer_travail1[0])) {$cancer_travail1 .= $ponct_cancer_travail1[0].'.';}
							if (isset($ponct_cancer_travail1[1])) {$cancer_travail1 .= $ponct_cancer_travail1[1].'.';}
							
							// .
							$ponct_cancer_travail2 = explode('.', $cancer_travail1);
							if (isset($ponct_cancer_travail2[0])) {$cancer_travail2 .= $ponct_cancer_travail2[0].'.';}
							if (isset($ponct_cancer_travail2[1])) {$cancer_travail2 .= $ponct_cancer_travail2[1].'.';}
							if (strlen($cancer_travail2) < 256) {$cancer_travail3 = $cancer_travail2; } else {$cancer_travail3 = $ponct_cancer_travail2[0].'.' ;}
						
						//chaine caractère
						$cancer .= '<div id="cancer"><h1 class="sign"><strong>&#9803;</strong></h1>
						<h3 class="t_sign">'.$cancer_titre.'</h3><div class="slideshow2">
						<span class="amour"><p class="titre"><strong>Amour</strong></strong></p>
						<p class="hors_detail"><strong>'.$cancer_amour3.'</strong></p></span>
						<span class="travail"><p class="titre"><strong>Travail</strong></strong></p><p class="hors_detail"><strong>'.$cancer_travail3.'</strong></p></span></div></div>';
						
						$phrase2 = explode("<li>", $cancer);
						$cancer2 .= $phrase2[0]; // phrase1
						if (isset($phrase2[1])) {$cancer2 .= $phrase2[1];}
						if (isset($phrase2[2])) {$cancer2 .= $phrase2[2];}
					
					//lion
					if (isset($phrase[22])) {$lion_titre .= $phrase[22];}
					if (isset($phrase[23])) {$lion_amour .= $phrase[23];}
					if (isset($phrase[25])) {$lion_travail .= $phrase[25];}
					
						
						//amour 
							// !
							$ponct_lion_amour1 = explode("!", $lion_amour);
							if (isset($ponct_lion_amour1[0])) {$lion_amour1 .= $ponct_lion_amour1[0].'.';}
							if (isset($ponct_lion_amour1[1])) {$lion_amour1 .= $ponct_lion_amour1[1].'.';}
							
							// .
							$ponct_lion_amour2 = explode('.', $lion_amour1);
							if (isset($ponct_lion_amour2[0])) {$lion_amour2 .= $ponct_lion_amour2[0].'.';}
							if (isset($ponct_lion_amour2[1])) {$lion_amour2 .= $ponct_lion_amour2[1].'.';}
							if (strlen($lion_amour2) < 256) {$lion_amour3 = $lion_amour2; } else {$lion_amour3 = $ponct_lion_amour2[0].'.' ;}
					
						//travail
							// !
							$ponct_lion_travail1 = explode("!", $lion_travail);
							if (isset($ponct_lion_travail1[0])) {$lion_travail1 .= $ponct_lion_travail1[0].'.';}
							if (isset($ponct_lion_travail1[1])) {$lion_travail1 .= $ponct_lion_travail1[1].'.';}
							
							// .
							$ponct_lion_travail2 = explode('.', $lion_travail1);
							if (isset($ponct_lion_travail2[0])) {$lion_travail2 .= $ponct_lion_travail2[0].'.';}
							if (isset($ponct_lion_travail2[1])) {$lion_travail2 .= $ponct_lion_travail2[1].'.';}
							if (strlen($lion_travail2) < 256) {$lion_travail3 = $lion_travail2; } else {$lion_travail3 = $ponct_lion_travail2[0].'.' ;}
						
						//chaine caractère
						$lion .= '<div id="lion"><h1 class="sign"><strong>&#9804;</strong></h1>
						<h3 class="t_sign">'.$lion_titre.'</h3><div class="slideshow2">
						<span class="amour"><p class="titre"><strong>Amour</strong></strong></p>
						<p class="hors_detail"><strong>'.$lion_amour3.'</strong></p></span>
						<span class="travail"><p class="titre"><strong>Travail</strong></strong></p><p class="hors_detail"><strong>'.$lion_travail3.'</strong></p></span></div></div>';
						
						$phrase2 = explode("<li>", $lion);
						$lion2 .= $phrase2[0]; // phrase1
						if (isset($phrase2[1])) {$lion2 .= $phrase2[1];}
						if (isset($phrase2[2])) {$lion2 .= $phrase2[2];}
						
					//vierge
					if (isset($phrase[27])) {$vierge_titre .= $phrase[27];}
					if (isset($phrase[28])) {$vierge_amour .= $phrase[28];}
					if (isset($phrase[30])) {$vierge_travail .= $phrase[30];}
					
						
						//amour 
							// !
							$ponct_vierge_amour1 = explode("!", $vierge_amour);
							if (isset($ponct_vierge_amour1[0])) {$vierge_amour1 .= $ponct_vierge_amour1[0].'.';}
							if (isset($ponct_vierge_amour1[1])) {$vierge_amour1 .= $ponct_vierge_amour1[1].'.';}
							
							// .
							$ponct_vierge_amour2 = explode('.', $vierge_amour1);
							if (isset($ponct_vierge_amour2[0])) {$vierge_amour2 .= $ponct_vierge_amour2[0].'.';}
							if (isset($ponct_vierge_amour2[1])) {$vierge_amour2 .= $ponct_vierge_amour2[1].'.';}
							if (strlen($vierge_amour2) < 256) {$vierge_amour3 = $vierge_amour2; } else {$vierge_amour3 = $ponct_vierge_amour2[0].'.' ;}
					
						//travail
							// !
							$ponct_vierge_travail1 = explode("!", $vierge_travail);
							if (isset($ponct_vierge_travail1[0])) {$vierge_travail1 .= $ponct_vierge_travail1[0].'.';}
							if (isset($ponct_vierge_travail1[1])) {$vierge_travail1 .= $ponct_vierge_travail1[1].'.';}
							
							// .
							$ponct_vierge_travail2 = explode('.', $vierge_travail1);
							if (isset($ponct_vierge_travail2[0])) {$vierge_travail2 .= $ponct_vierge_travail2[0].'.';}
							if (isset($ponct_vierge_travail2[1])) {$vierge_travail2 .= $ponct_vierge_travail2[1].'.';}
							if (strlen($vierge_travail2) < 256) {$vierge_travail3 = $vierge_travail2; } else {$vierge_travail3 = $ponct_vierge_travail2[0].'.' ;}
						
						//chaine caractère
						$vierge .= '<div id="vierge"><h1 class="sign"><strong>&#9805;</strong></h1>
						<h3 class="t_sign">'.$vierge_titre.'</h3><div class="slideshow2">
						<span class="amour"><p class="titre"><strong>Amour</strong></strong></p>
						<p class="hors_detail"><strong>'.$vierge_amour3.'</strong></p></span>
						<span class="travail"><p class="titre"><strong>Travail</strong></strong></p><p class="hors_detail"><strong>'.$vierge_travail3.'</strong></p></span></div></div>';
						
						$phrase2 = explode("<li>", $vierge);
						$vierge2 .= $phrase2[0]; // phrase1
						if (isset($phrase2[1])) {$vierge2 .= $phrase2[1];}
						if (isset($phrase2[2])) {$vierge2 .= $phrase2[2];}
					
					//balance
					if (isset($phrase[32])) {$balance_titre .= $phrase[32];}
					if (isset($phrase[33])) {$balance_amour .= $phrase[33];}
					if (isset($phrase[34])) {$balance_travail .= $phrase[30];}
					
						
						//amour 
							// !
							$ponct_balance_amour1 = explode("!", $balance_amour);
							if (isset($ponct_balance_amour1[0])) {$balance_amour1 .= $ponct_balance_amour1[0].'.';}
							if (isset($ponct_balance_amour1[1])) {$balance_amour1 .= $ponct_balance_amour1[1].'.';}
							
							
							// .
							$ponct_balance_amour2 = explode('.', $balance_amour1);
							if (isset($ponct_balance_amour2[0])) {$balance_amour2 .= $ponct_balance_amour2[0].'.';}
							if (isset($ponct_balance_amour2[1])) {$balance_amour2 .= $ponct_balance_amour2[1].'.';}
							if (strlen($balance_amour2) < 256) {$balance_amour3 = $balance_amour2; } else {$balance_amour3 = $ponct_balance_amour2[0].'.' ;}
					
						//travail
							// !
							$ponct_balance_travail1 = explode("!", $balance_travail);
							if (isset($ponct_balance_travail1[0])) {$balance_travail1 .= $ponct_balance_travail1[0].'.';}
							if (isset($ponct_balance_travail1[1])) {$balance_travail1 .= $ponct_balance_travail1[1].'.';}
													
							// .
							$ponct_balance_travail2 = explode('.', $balance_travail1);
							if (isset($ponct_balance_travail2[0])) {$balance_travail2 .= $ponct_balance_travail2[0].'.';}
							if (isset($ponct_balance_travail2[1])) {$balance_travail2 .= $ponct_balance_travail2[1].'.';}
							if (strlen($balance_travail2) < 256) {$balance_travail3 = $balance_travail2; } else {$balance_travail3 = $ponct_balance_travail2[0].'.' ;}
						
						//chaine caractère
						$balance .= '<div id="balance"><h1 class="sign"><strong>&#9806;</strong></h1>
						<h3 class="t_sign">'.$balance_titre.'</h3><div class="slideshow2">
						<span class="amour"><p class="titre"><strong>Amour</strong></strong></p>
						<p class="hors_detail"><strong>'.$balance_amour3.'</strong></p></span>
						<span class="travail"><p class="titre"><strong>Travail</strong></strong></p><p class="hors_detail"><strong>'.$balance_travail3.'</strong></p></span></div></div>';
						
						$phrase2 = explode("<li>", $balance);
						$balance2 .= $phrase2[0]; // phrase1
						if (isset($phrase2[1])) {$balance2 .= $phrase2[1];}
						if (isset($phrase2[2])) {$balance2 .= $phrase2[2];}
						
					//scorpion
					if (isset($phrase[37])) {$scorpion_titre .= $phrase[37];}
					if (isset($phrase[38])) {$scorpion_amour .= $phrase[38];}
					if (isset($phrase[40])) {$scorpion_travail .= $phrase[40];}
					
						
						//amour 
							// !
							$ponct_scorpion_amour1 = explode("!", $scorpion_amour);
							if (isset($ponct_scorpion_amour1[0])) {$scorpion_amour1 .= $ponct_scorpion_amour1[0].'.';}
							if (isset($ponct_scorpion_amour1[1])) {$scorpion_amour1 .= $ponct_scorpion_amour1[1].'.';}
							
							// .
							$ponct_scorpion_amour2 = explode('.', $scorpion_amour1);
							if (isset($ponct_scorpion_amour2[0])) {$scorpion_amour2 .= $ponct_scorpion_amour2[0].'.';}
							if (isset($ponct_scorpion_amour2[1])) {$scorpion_amour2 .= $ponct_scorpion_amour2[1].'.';}
							if (strlen($scorpion_amour2) < 256) {$scorpion_amour3 = $scorpion_amour2; } else {$scorpion_amour3 = $ponct_scorpion_amour2[0].'.' ;}
					
						//travail
							// !
							$ponct_scorpion_travail1 = explode("!", $scorpion_travail);
							if (isset($ponct_scorpion_travail1[0])) {$scorpion_travail1 .= $ponct_scorpion_travail1[0].'.';}
							if (isset($ponct_scorpion_travail1[1])) {$scorpion_travail1 .= $ponct_scorpion_travail1[1].'.';}
							
							// .
							$ponct_scorpion_travail2 = explode('.', $scorpion_travail1);
							if (isset($ponct_scorpion_travail2[0])) {$scorpion_travail2 .= $ponct_scorpion_travail2[0].'.';}
							if (isset($ponct_scorpion_travail2[1])) {$scorpion_travail2 .= $ponct_scorpion_travail2[1].'.';}
							if (strlen($scorpion_travail2) < 256) {$scorpion_travail3 = $scorpion_travail2; } else {$scorpion_travail3 = $ponct_scorpion_travail2[0].'.' ;}
						
						//chaine caractère
						$scorpion .= '<div id="scorpion"><h1 class="sign"><strong>&#9807;</strong></h1>
						<h3 class="t_sign">'.$scorpion_titre.'</h3><div class="slideshow2">
						<span class="amour"><p class="titre"><strong>Amour</strong></strong></p>
						<p class="hors_detail"><strong>'.$scorpion_amour3.'</strong></p></span>
						<span class="travail"><p class="titre"><strong>Travail</strong></strong></p><p class="hors_detail"><strong>'.$scorpion_travail3.'</strong></p></span></div></div>';
						
						$phrase2 = explode("<li>", $scorpion);
						$scorpion2 .= $phrase2[0]; // phrase1
						if (isset($phrase2[1])) {$scorpion2 .= $phrase2[1];}
						if (isset($phrase2[2])) {$scorpion2 .= $phrase2[2];}
					
					//sagittaire
					if (isset($phrase[42])) {$sagittaire_titre .= $phrase[42];}
					if (isset($phrase[43])) {$sagittaire_amour .= $phrase[43];}
					if (isset($phrase[45])) {$sagittaire_travail .= $phrase[45];}
					
						
						//amour 
							// !
							$ponct_sagittaire_amour1 = explode("!", $sagittaire_amour);
							if (isset($ponct_sagittaire_amour1[0])) {$sagittaire_amour1 .= $ponct_sagittaire_amour1[0].'.';}
							if (isset($ponct_sagittaire_amour1[1])) {$sagittaire_amour1 .= $ponct_sagittaire_amour1[1].'.';}
							
							// .
							$ponct_sagittaire_amour2 = explode('.', $sagittaire_amour1);
							if (isset($ponct_sagittaire_amour2[0])) {$sagittaire_amour2 .= $ponct_sagittaire_amour2[0].'.';}
							if (isset($ponct_sagittaire_amour2[1])) {$sagittaire_amour2 .= $ponct_sagittaire_amour2[1].'.';}
							if (strlen($sagittaire_amour2) < 256) {$sagittaire_amour3 = $sagittaire_amour2; } else {$sagittaire_amour3 = $ponct_sagittaire_amour2[0].'.' ;}
					
						//travail
							// !
							$ponct_sagittaire_travail1 = explode("!", $sagittaire_travail);
							if (isset($ponct_sagittaire_travail1[0])) {$sagittaire_travail1 .= $ponct_sagittaire_travail1[0].'.';}
							if (isset($ponct_sagittaire_travail1[1])) {$sagittaire_travail1 .= $ponct_sagittaire_travail1[1].'.';}
							
							// .
							$ponct_sagittaire_travail2 = explode('.', $sagittaire_travail1);
							if (isset($ponct_sagittaire_travail2[0])) {$sagittaire_travail2 .= $ponct_sagittaire_travail2[0].'.';}
							if (isset($ponct_sagittaire_travail2[1])) {$sagittaire_travail2 .= $ponct_sagittaire_travail2[1].'.';}
							if (strlen($sagittaire_travail2) < 256) {$sagittaire_travail3 = $sagittaire_travail2; } else {$sagittaire_travail3 = $ponct_sagittaire_travail2[0].'.' ;}
						
						//chaine caractère
						$sagittaire .= '<div id="sagittaire"><h1 class="sign"><strong>&#9808;</strong></h1>
						<h3 class="t_sign">'.$sagittaire_titre.'</h3><div class="slideshow2">
						<span class="amour"><p class="titre"><strong>Amour</strong></strong></p>
						<p class="hors_detail"><strong>'.$sagittaire_amour3.'</strong></p></span>
						<span class="travail"><p class="titre"><strong>Travail</strong></strong></p><p class="hors_detail"><strong>'.$sagittaire_travail3.'</strong></p></span></div></div>';
						
						$phrase2 = explode("<li>", $sagittaire);
						$sagittaire2 .= $phrase2[0]; // phrase1
						if (isset($phrase2[1])) {$sagittaire2 .= $phrase2[1];}
						if (isset($phrase2[2])) {$sagittaire2 .= $phrase2[2];}
					
					//capricorne
					if (isset($phrase[47])) {$capricorne_titre .= $phrase[47];}
					if (isset($phrase[48])) {$capricorne_amour .= $phrase[48];}
					if (isset($phrase[50])) {$capricorne_travail .= $phrase[50];}
					
						
						//amour 
							// !
							$ponct_capricorne_amour1 = explode("!", $capricorne_amour);
							if (isset($ponct_capricorne_amour1[0])) {$capricorne_amour1 .= $ponct_capricorne_amour1[0].'.';}
							if (isset($ponct_capricorne_amour1[1])) {$capricorne_amour1 .= $ponct_capricorne_amour1[1].'.';}
							
							// .
							$ponct_capricorne_amour2 = explode('.', $capricorne_amour1);
							if (isset($ponct_capricorne_amour2[0])) {$capricorne_amour2 .= $ponct_capricorne_amour2[0].'.';}
							if (isset($ponct_capricorne_amour2[1])) {$capricorne_amour2 .= $ponct_capricorne_amour2[1].'.';}
							if (strlen($capricorne_amour2) < 256) {$capricorne_amour3 = $capricorne_amour2; } else {$capricorne_amour3 = $ponct_capricorne_amour2[0].'.' ;}
					
						//travail
							// !
							$ponct_capricorne_travail1 = explode("!", $capricorne_travail);
							if (isset($ponct_capricorne_travail1[0])) {$capricorne_travail1 .= $ponct_capricorne_travail1[0].'.';}
							if (isset($ponct_capricorne_travail1[1])) {$capricorne_travail1 .= $ponct_capricorne_travail1[1].'.';}
							
							// .
							$ponct_capricorne_travail2 = explode('.', $capricorne_travail1);
							if (isset($ponct_capricorne_travail2[0])) {$capricorne_travail2 .= $ponct_capricorne_travail2[0].'.';}
							if (isset($ponct_capricorne_travail2[1])) {$capricorne_travail2 .= $ponct_capricorne_travail2[1].'.';}
							if (strlen($capricorne_travail2) < 256) {$capricorne_travail3 = $capricorne_travail2; } else {$capricorne_travail3 = $ponct_capricorne_travail2[0].'.' ;}
						
						//chaine caractère
						$capricorne .= '<div id="capricorne"><h1 class="sign"><strong>&#9809;</strong></h1>
						<h3 class="t_sign">'.$capricorne_titre.'</h3><div class="slideshow2">
						<span class="amour"><p class="titre"><strong>Amour</strong></p>
						<p class="hors_detail"><strong>'.$capricorne_amour3.'</strong></p></span>
						<span class="travail"><p class="titre"><strong>Travail</strong></p><p class="hors_detail"><strong>'.$capricorne_travail3.'</strong></p></span></div></div>';
						
						$phrase2 = explode("<li>", $capricorne);
						$capricorne2 .= $phrase2[0]; // phrase1
						if (isset($phrase2[1])) {$capricorne2 .= $phrase2[1];}
						if (isset($phrase2[2])) {$capricorne2 .= $phrase2[2];}
					
					
					//verseau
					if (isset($phrase[52])) {$verseau_titre .= $phrase[52];}
					if (isset($phrase[53])) {$verseau_amour .= $phrase[53];}
					if (isset($phrase[55])) {$verseau_travail .= $phrase[55];}
					
						
						//amour 
							// !
							$ponct_verseau_amour1 = explode("!", $verseau_amour);
							if (isset($ponct_verseau_amour1[0])) {$verseau_amour1 .= $ponct_verseau_amour1[0].'.';}
							if (isset($ponct_verseau_amour1[1])) {$verseau_amour1 .= $ponct_verseau_amour1[1].'.';}
							
							// .
							$ponct_verseau_amour2 = explode('.', $verseau_amour1);
							if (isset($ponct_verseau_amour2[0])) {$verseau_amour2 .= $ponct_verseau_amour2[0].'.';}
							if (isset($ponct_verseau_amour2[1])) {$verseau_amour2 .= $ponct_verseau_amour2[1].'.';}
							if (strlen($verseau_amour2) < 256) {$verseau_amour3 = $verseau_amour2; } else {$verseau_amour3 = $ponct_verseau_amour2[0].'.' ;}
					
						//travail
							// !
							$ponct_verseau_travail1 = explode("!", $verseau_travail);
							if (isset($ponct_verseau_travail1[0])) {$verseau_travail1 .= $ponct_verseau_travail1[0].'.';}
							if (isset($ponct_verseau_travail1[1])) {$verseau_travail1 .= $ponct_verseau_travail1[1].'.';}
							
							// .
							$ponct_verseau_travail2 = explode('.', $verseau_travail1);
							if (isset($ponct_verseau_travail2[0])) {$verseau_travail2 .= $ponct_verseau_travail2[0].'.';}
							if (isset($ponct_verseau_travail2[1])) {$verseau_travail2 .= $ponct_verseau_travail2[1].'.';}
							if (strlen($verseau_travail2) < 256) {$verseau_travail3 = $verseau_travail2; } else {$verseau_travail3 = $ponct_verseau_travail2[0].'.' ;}
						
						//chaine caractère
						$verseau .= '<div id="verseau"><h1 class="sign"><strong>&#9810;</strong></h1>
						<h3 class="t_sign">'.$verseau_titre.'</h3><div class="slideshow2">
						<span class="amour"><p class="titre"><strong>Amour</strong></strong></p>
						<p class="hors_detail"><strong>'.$verseau_amour3.'</strong></p></span>
						<span class="travail"><p class="titre"><strong>Travail</strong></strong></p><p class="hors_detail"><strong>'.$verseau_travail3.'</strong></p></span></div></div>';
						
						$phrase2 = explode("<li>", $verseau);
						$verseau2 .= $phrase2[0]; // phrase1
						if (isset($phrase2[1])) {$verseau2 .= $phrase2[1];}
						if (isset($phrase2[2])) {$verseau2 .= $phrase2[2];}
					
					//poissons
					if (isset($phrase[57])) {$poissons_titre .= $phrase[57];}
					if (isset($phrase[58])) {$poissons_amour .= $phrase[58];}
					if (isset($phrase[60])) {$poissons_travail .= $phrase[60];}
					
						
						//amour 
							// !
							$ponct_poissons_amour1 = explode("!", $poissons_amour);
							if (isset($ponct_poissons_amour1[0])) {$poissons_amour1 .= $ponct_poissons_amour1[0].'.';}
							if (isset($ponct_poissons_amour1[1])) {$poissons_amour1 .= $ponct_poissons_amour1[1].'.';}
							
							// .
							$ponct_poissons_amour2 = explode('.', $poissons_amour1);
							if (isset($ponct_poissons_amour2[0])) {$poissons_amour2 .= $ponct_poissons_amour2[0].'.';}
							if (isset($ponct_poissons_amour2[1])) {$poissons_amour2 .= $ponct_poissons_amour2[1].'.';}
							if (strlen($poissons_amour2) < 256) {$poissons_amour3 = $poissons_amour2; } else {$poissons_amour3 = $ponct_poissons_amour2[0].'.' ;}
					
						//travail
							// !
							$ponct_poissons_travail1 = explode("!", $poissons_travail);
							if (isset($ponct_poissons_travail1[0])) {$poissons_travail1 .= $ponct_poissons_travail1[0].'.';}
							if (isset($ponct_poissons_travail1[1])) {$poissons_travail1 .= $ponct_poissons_travail1[1].'.';}
							
							// .
							$ponct_poissons_travail2 = explode('.', $poissons_travail1);
							if (isset($ponct_poissons_travail2[0])) {$poissons_travail2 .= $ponct_poissons_travail2[0].'.';}
							if (isset($ponct_poissons_travail2[1])) {$poissons_travail2 .= $ponct_poissons_travail2[1].'.';}
							if (strlen($poissons_travail2) < 256) {$poissons_travail3 = $poissons_travail2; } else {$poissons_travail3 = $ponct_poissons_travail2[0].'.' ;}
						
						//chaine caractère
						$poissons .= '<div id="poissons"><h1 class="sign"><strong>&#9811;</strong></h1>
						<h3 class="t_sign">'.$poissons_titre.'</h3><div class="slideshow2">
						<span class="amour"><p class="titre"><strong>Amour</strong></strong></p>
						<p class="hors_detail"><strong>'.$poissons_amour3.'</strong></p></span>
						<span class="travail"><p class="titre"><strong>Travail</strong></strong></p><p class="hors_detail"><strong>'.$poissons_travail3.'</strong></p></span></div></div>';
						
						$phrase2 = explode("<li>", $poissons);
						$poissons2 .= $phrase2[0]; // phrase1
						if (isset($phrase2[1])) {$poissons2 .= $phrase2[1];}
						if (isset($phrase2[2])) {$poissons2 .= $phrase2[2];}


	//Affectation des Variables de sessions
	$_SESSION["belier"] = $belier2 ;
	$_SESSION["taureau"] = $taureau2 ;
	$_SESSION["gemeaux"] = $gemeaux2; 
	$_SESSION["cancer"] = $cancer2; 
	$_SESSION["lion"] = $lion2;
	$_SESSION["vierge"] = $vierge2;
	$_SESSION["balance"] = $balance2 ;
	$_SESSION["scorpion"] = $scorpion2 ;
	$_SESSION["sagittaire"] = $sagittaire2 ;
	$_SESSION["capricorne"] = $capricorne2 ;
	$_SESSION["verseau"] = $verseau2 ;
	$_SESSION["poissons"] = $poissons2 ;
					
	

		return $y;
}









function RSS_Channel($channel)
{
	global $RSS_Content;

	$items = $channel->getElementsByTagName("item");
	
	// Processing channel
	
	$y = RSS_Tags($channel, 0);		// get description of channel, type 0
	array_push($RSS_Content, $y);
	
	// Processing articles
	
	foreach($items as $item)
	{
		$y = RSS_Tags($item, 1);	// get description of article, type 1
		array_push($RSS_Content, $y);
	}
}

function RSS_Retrieve($url)
{
	global $RSS_Content;

	$doc  = new DOMDocument();
	$doc->load($url);

	$channels = $doc->getElementsByTagName("channel");
	
	$RSS_Content = array();
	
	foreach($channels as $channel)
	{
		 RSS_Channel($channel);
	}
	
}


function RSS_RetrieveLinks($url)
{
	global $RSS_Content;

	$doc  = new DOMDocument();
	$doc->load($url);

	$channels = $doc->getElementsByTagName("channel");
	
	$RSS_Content = array();
	
	foreach($channels as $channel)
	{
		$items = $channel->getElementsByTagName("item");
		foreach($items as $item)
		{
			$y = RSS_Tags($item, 1);	// get description of article, type 1
			array_push($RSS_Content, $y);
		}
		 
	}

}


function RSS_Links($url, $size = 15)
{
	global $RSS_Content;

	$page = "<ul>";

	RSS_RetrieveLinks($url);
	if($size > 0)
		$recents = array_slice($RSS_Content, 0, $size + 1);

	foreach($recents as $article)
	{
		$type = $article["type"];
		if($type == 0) continue;
		$title = $article["title"];
		$link = $article["link"];
		$page .= "<li><a href=\"$link\">$title</a></li>\n";			
	}

	$page ="</ul>\n";

	return $page;
	
}



function RSS_Display($url, $size = 15, $site = 0, $withdate = 0)
{
	global $RSS_Content;

	$opened = false;
	$page = "";
	$site = (intval($site) == 0) ? 1 : 0;

	RSS_Retrieve($url);
	if($size > 0)
		$recents = array_slice($RSS_Content, $site, $size + 1 - $site);

	foreach($recents as $article)
	{
		$type = $article["type"];
		if($type == 0)
		{
			if($opened == true)
			{
				$page .="</ul>\n";
				$opened = false;
			}
			$page .="<b>";
		}
		else
		{
			if($opened == false) 
			{
				$page .= "<ul>\n";
				$opened = true;
			}
		}
		$title = $article["title"];
		$link = $article["link"];
		$page .= "<li><a href=\"$link\">$title</a>";
		if($withdate)
		{
      $date = $article["date"];
      $page .=' <span class="rssdate">'.$date.'</span>';
    }
		$article2 = $article["description"];
		if($article2 != false)
		{
			$page .= "<br><span class='rssdesc'>$article2</span>";
		}
		$page .= "</li>\n";			
		
		if($type==0)
		{
			$page .="</b><br />";
		}

	}

	if($opened == true)
	{	
		$page .="</ul>\n";
	}
	//return $page."\n";
	
}


?>
