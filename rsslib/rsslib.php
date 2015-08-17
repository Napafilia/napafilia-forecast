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
		$belier = '';
		$taureau = '';
		$gemeaux = '';
		$cancer = '';
		$lion = '';
		$vierge = '';
		$balance = '';
		$scorpion = '';
		$sagittaire = '';
		$capricorne = '';
		$verseau = '';
		$poissons = '';
		
		$belier2 = '';
		$taureau2 = '';
		$gemeaux2 = '';
		$cancer2 = '';
		$lion2 = '';
		$vierge2 = '';
		$balance2 = '';
		$scorpion2 = '';
		$sagittaire2 = '';
		$capricorne2 = '';
		$verseau2 = '';
		$poissons2 = '';
		
					$phrase = explode("<br>", $description);
					$article2 .= ''; // phrase1
					
					//bélier
					if (isset($phrase[1])) {$belier .= '';}
					if (isset($phrase[2])) {$belier .= '<div id="belier"><h1 class="sign">&#9800;</h1><h2>'.$phrase[2].'</h2><div class="slideshow2">';}
					if (isset($phrase[3])) {$belier .= '<span class="amour"><p class="titre"><strong>Amour</strong></p><p>'.$phrase[3].'</p></span>';}
					if (isset($phrase[4])) {$belier .= '';}
					if (isset($phrase[5])) {$belier .= '<span class="travail"><p class="titre"><strong>Travail</strong></p><p>'.$phrase[5].'</p></span></div></div>';}
					
					$phrase2 = explode("<li>", $belier);
					$belier2 .= $phrase2[0]; // phrase1
					if (isset($phrase2[1])) {$belier2 .= $phrase2[1];}
					if (isset($phrase2[2])) {$belier2 .= $phrase2[2];}
					
					//taureau
					if (isset($phrase[6])) {$taureau .= '';}
					if (isset($phrase[7])) {$taureau .= '<div id="taureau"><h1 class="sign">&#9801;</h1><h2>'.$phrase[7].'</h2><div class="slideshow2">';}
					if (isset($phrase[8])) {$taureau .= '<span class="amour"><p class="titre"><strong>Amour</strong></p><p>'.$phrase[8].'</p></span>';}
					if (isset($phrase[9])) {$taureau .= '';}
					if (isset($phrase[10])) {$taureau .= '<span class="travail"><p class="titre"><strong>Travail</strong></p><p>'.$phrase[10].'</p></span></div></div>';}
					
					$phrase3 = explode("<li>", $taureau);
					$taureau2.= $phrase3[0]; // phrase1
					if (isset($phrase3[1])) {$taureau2 .= $phrase3[1];}
					if (isset($phrase3[2])) {$taureau2 .= $phrase3[2];}
					
					//Gémeaux
					if (isset($phrase[11])) {$gemeaux .= '';}
					if (isset($phrase[12])) {$gemeaux .= '<div id="gemeaux"><h1 class="sign">&#9802;</h1><h2>'.$phrase[12].'</h2><div class="slideshow2">';}
					if (isset($phrase[13])) {$gemeaux .= '<span class="amour"><p class="titre"><strong>Amour</strong></p><p>'.$phrase[13].'</p></span>';}
					if (isset($phrase[14])) {$gemeaux .= '';}
					if (isset($phrase[15])) {$gemeaux .= '<span class="travail"><p class="titre"><strong>Travail</strong></p><p>'.$phrase[15].'</p></span></div></div>';}
					
					$phrase4 = explode("<li>", $gemeaux);
					$gemeaux2.= $phrase4[0];
					if (isset($phrase4[1])) {$gemeaux2 .= $phrase4[1];}
					if (isset($phrase4[2])) {$gemeaux2 .= $phrase4[2];}
					
					//Cancer
					if (isset($phrase[16])) {$cancer .= '';}
					if (isset($phrase[17])) {$cancer .= '<div id="cancer"><h1 class="sign">&#9803;</h1><h2>'.$phrase[17].'</h2><div class="slideshow2">';}
					if (isset($phrase[18])) {$cancer .= '<span class="amour"><p class="titre"><strong>Amour</strong></p><p>'.$phrase[18].'</p></span>';}
					if (isset($phrase[19])) {$cancer .= '';}
					if (isset($phrase[20])) {$cancer .= '<span class="travail"><p class="titre"><strong>Travail</strong></p><p>'.$phrase[20].'</p></span></div></div>';}
					
					$phrase5 = explode("<li>", $cancer);
					$cancer2.= $phrase5[0]; 
					if (isset($phrase5[1])) {$cancer2 .= $phrase5[1];}
					if (isset($phrase5[2])) {$cancer2 .= $phrase5[2];}
					
					//Lion
					if (isset($phrase[21])) {$lion .= '';}
					if (isset($phrase[22])) {$lion .= '<div id="lion"><h1 class="sign">&#9804;</h1><h2>'.$phrase[22].'</h2><div class="slideshow2">';}
					if (isset($phrase[23])) {$lion .= '<span class="amour"><p class="titre"><strong>Amour</strong></p><p>'.$phrase[23].'</p></span>';}
					if (isset($phrase[24])) {$lion .= '';}
					if (isset($phrase[25])) {$lion .= '<span class="travail"><p class="titre"><strong>Travail</strong></p><p>'.$phrase[25].'</p></span></div></div>';}
					
					$phrase6 = explode("<li>", $lion);
					$lion2.= $phrase6[0]; 
					if (isset($phrase6[1])) {$lion2 .= $phrase6[1];}
					if (isset($phrase6[2])) {$lion2 .= $phrase6[2];}
					
					//vierge
					if (isset($phrase[26])) {$vierge .= '';}
					if (isset($phrase[27])) {$vierge .= '<div id="vierge"><h1 class="sign">&#9805;</h1><h2>'.$phrase[27].'</h2><div class="slideshow2">';}
					if (isset($phrase[28])) {$vierge .= '<span class="amour"><p class="titre"><strong>Amour</strong></p><p>'.$phrase[28].'</p></span>';}
					if (isset($phrase[29])) {$vierge .= '';}
					if (isset($phrase[30])) {$vierge .= '<span class="travail"><p class="titre"><strong>Travail</strong></p><p>'.$phrase[30].'</p></span></div></div>';}
					
					$phrase7 = explode("<li>", $vierge);
					$vierge2.= $phrase7[0]; 
					if (isset($phrase7[1])) {$vierge2 .= $phrase7[1];}
					if (isset($phrase7[2])) {$vierge2 .= $phrase7[2];}
					
					//Balance
					if (isset($phrase[31])) {$balance .= '';}
					if (isset($phrase[32])) {$balance .= '<div id="balance"><h1 class="sign">&#9806;</h1><h2>'.$phrase[32].'</h2><div class="slideshow2">';}
					if (isset($phrase[33])) {$balance .= '<span class="amour"><p class="titre"><strong>Amour</strong></p><p>'.$phrase[33].'</p></span>';}
					if (isset($phrase[34])) {$balance .= '';}
					if (isset($phrase[35])) {$balance .= '<span class="travail"><p class="titre"><strong>Travail</strong></p><p>'.$phrase[35].'</p></span></div></div>';}
					
					$phrase8 = explode("<li>", $balance);
					$balance2.= $phrase8[0]; 
					if (isset($phrase8[1])) {$balance2 .= $phrase8[1];}
					if (isset($phrase8[2])) {$balance2 .= $phrase8[2];}
					
					//Scorpion
					if (isset($phrase[36])) {$scorpion .= '';}
					if (isset($phrase[37])) {$scorpion .= '<div id="scorpion"><h1 class="sign">&#9807;</h1><h2>'.$phrase[37].'</h2><div class="slideshow2">';}
					if (isset($phrase[38])) {$scorpion .= '<span class="amour"><p class="titre"><strong>Amour</strong></p><p>'.$phrase[38].'</p></span>';}
					if (isset($phrase[39])) {$scorpion .= '';}
					if (isset($phrase[40])) {$scorpion .= '<span class="travail"><p class="titre"><strong>Travail</strong></p><p>'.$phrase[40].'</p></span></div></div>';}
					
					$phrase9 = explode("<li>", $scorpion);
					$scorpion2.= $phrase9[0]; 
					if (isset($phrase9[1])) {$scorpion2 .= $phrase9[1];}
					if (isset($phrase9[2])) {$scorpion2 .= $phrase9[2];}
					
					//Sagittaire
					if (isset($phrase[41])) {$sagittaire .= '';}
					if (isset($phrase[42])) {$sagittaire .= '<div id="sagittaire"><h1 class="sign">&#9808;</h1><h2>'.$phrase[42].'</h2><div class="slideshow2">';}
					if (isset($phrase[43])) {$sagittaire .= '<span class="amour"><p class="titre"><strong>Amour</strong></p><p>'.$phrase[43].'</p></span>';}
					if (isset($phrase[44])) {$sagittaire .= '';}
					if (isset($phrase[45])) {$sagittaire .= '<span class="travail"><p class="titre"><strong>Travail</strong></p><p>'.$phrase[45].'</p></span></div></div>';}
					
					$phrase10 = explode("<li>", $sagittaire);
					$sagittaire2.= $phrase10[0]; 
					if (isset($phrase10[1])) {$sagittaire2 .= $phrase10[1];}
					if (isset($phrase10[2])) {$sagittaire2 .= $phrase10[2];}
					
					//Capricorne
					if (isset($phrase[46])) {$capricorne .= '';}
					if (isset($phrase[47])) {$capricorne .= '<div id="capricorne"><h1 class="sign">&#9809;</h1><h2>'.$phrase[47].'</h2><div class="slideshow2">';}
					if (isset($phrase[48])) {$capricorne .= '<span class="amour"><p class="titre"><strong>Amour</strong></p><p>'.$phrase[48].'</p></span>';}
					if (isset($phrase[49])) {$capricorne .= '';}
					if (isset($phrase[50])) {$capricorne .= '<span class="travail"><p class="titre"><strong>Travail</strong></p><p>'.$phrase[50].'</p></span></div></div>';}
					
					$phrase11 = explode("<li>", $capricorne);
					$capricorne2.= $phrase11[0]; 
					if (isset($phrase11[1])) {$capricorne2 .= $phrase11[1];}
					if (isset($phrase11[2])) {$capricorne2 .= $phrase11[2];}
					
					//Verseau
					if (isset($phrase[51])) {$verseau .= '';}
					if (isset($phrase[52])) {$verseau .= '<div id="verseau"><h1 class="sign">&#9810;</h1><h2>'.$phrase[52].'</h2><div class="slideshow2">';}
					if (isset($phrase[53])) {$verseau .= '<span class="amour"><p class="titre"><strong>Amour</strong></p><p>'.$phrase[53].'</p></span>';}
					if (isset($phrase[54])) {$verseau .= '';}
					if (isset($phrase[55])) {$verseau .= '<span class="travail"><p class="titre"><strong>Travail</strong></p><p>'.$phrase[55].'</p></span></div></div>';}
					
					$phrase12 = explode("<li>", $verseau);
					$verseau2.= $phrase12[0]; 
					if (isset($phrase12[1])) {$verseau2 .= $phrase12[1];}
					if (isset($phrase12[2])) {$verseau2 .= $phrase12[2];}
					
					//Poissons
					if (isset($phrase[56])) {$poissons .= '';}
					if (isset($phrase[57])) {$poissons .= '<div id="poissons"><h1 class="sign">&#9811;</h1><h2>'.$phrase[57].'</h2><div class="slideshow2">';}
					if (isset($phrase[58])) {$poissons .= '<span class="amour"><p class="titre"><strong>Amour</strong></p><p>'.$phrase[58].'</p></span>';}
					if (isset($phrase[59])) {$poissons .= '';}
					if (isset($phrase[50])) {$poissons .= '<span class="travail"><p class="titre"><strong>Travail</strong></p><p>'.$phrase[60].'</p></span></div></div>';}
					
					$phrase13 = explode("<li>", $poissons);
					$poissons2.= $phrase13[0]; 
					if (isset($phrase13[1])) {$poissons2 .= $phrase13[1];}
					if (isset($phrase13[2])) {$poissons2 .= $phrase13[2];}
					
					

	
	
	
	
	
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
