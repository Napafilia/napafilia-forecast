

var dd1, delai;
function debuteDate1(delai1) {
  var adate, date, amois;
  delai = delai1;
  adate = new Date();
  date = adate.getDate();
  amois = adate.getMonth()+1;

  if (amois == 1) date += " Janvier";
  else if (amois == 2) date += " Février";
  else if (amois == 3) date += " Mars";
  else if (amois == 4) date += " Avril";
  else if (amois == 5) date += " Mai";
  else if (amois == 6) date += " Juin";
  else if (amois == 7) date += " Juillet";
  else if (amois == 8) date += " Août";
  else if (amois == 9) date += " Septembre";
  else if (amois == 10) date += " Octobre";
  else if (amois == 11) date += " Novembre";
  else if (amois == 12) date += " Décembre";
  if (adate.getYear() > "99")
    date += " " + adate.getYear();
  else date += "  " + (1900 + adate.getYear());
  date = "  " + date;
  document.Tempsh.date.value = date;
  dd1 = setTimeout("debuteDate1(delai)",delai1);
}
function getFonc(mois,jour) {
  	var ar = new Array(12)
 	ar[0] = getFete01(jour)
  	ar[1] = getFete02(jour)
	ar[2] = getFete03(jour)
	ar[3] = getFete04(jour)
	ar[4] = getFete05(jour)
	ar[5] = getFete06(jour)
	ar[6] = getFete07(jour)
	ar[7] = getFete08(jour)
	ar[8] = getFete09(jour)
	ar[9] = getFete10(jour)
	ar[10] = getFete11(jour)
	ar[11] = getFete12(jour)
	return ar[mois]
}

function getFete01(num)
{var fetes = new Array(
	"Jour de l'An", "Basile", "Genevi&egrave;ve", "Odilon", "Edouard", "Melaine",
   	"Raymond", "Lucien", "Alix", "Guillaume", "Paulin", "Tatiana", "Yvette",
   	"Nina", "R&eacute;mi", "Marcel", "Roseline", "Prisca", "Marius", "S&eacute;bastien",
   	"Agn&egrave;s", "Vincent", "Barnard", "Fran&ccedil;ois", "Paul", "Paule", "Ang&egrave;le",
   	"Thomas", "Gildas", "Martine", "Marcelle","","","");
   	return fetes[num]}

function getFete02(num)
{var fetes = new Array(
	"Ella", "Pr&eacute;sention", "Blaise", "V&eacute;ronique", "Agathe", "Gaston", "Eug&egrave;nie", "Jacqueline",
   	"Apolline", "Arnaud", "ND Lourdes", "F&eacute;lix", "B&eacute;atrice", "Valentin", "Claude",
	"Julienne", "Alexis", "Bernadette", "Gabin", "Aim&eacute;e", "Cendres", "Isabelle",
	"Lazare", "Modeste", "Rom&eacute;o", "Nestor", "Honorine", "Romain", "Auguste","","","","","");
   	return fetes[num]}

function getFete03(num)
{var fetes = new Array(
	"Aubin", "Charles", "Gu&eacute;nol&eacute;", "Casimir", "Olive", "Colette", "F&eacute;licit&eacute;", "Jean", "Fran&ccedil;oise",
	"Vivien", "Rosine", "Justine", "Rodrigue", "Mathilde", "Louise", "B&eacute;n&eacute;dicte", "Patrice",
	"Cyrille", "Joseph", "Herbert", "Cl&eacute;mence", "L&eacute;a", "Victorien", "Karine", "Ann.", "Larissa",
	"Habib", "Gontran", "Gwladys", "Am&eacute;d&eacute;e", "Benjamin","","","");
   	return fetes[num]}

function getFete04(num)
{var fetes = new Array(
	"Hugues", "Sandrine", "Richard", "Isidore", "Ir&egrave;ne", "Marcellin", "JB.de la S", "Julie", "Gautier",
	"Fulbert", "Stanislas", "Jules", "Ida", "Maxime", "Paterne", "Beno&icirc;t", "Anicet", "Parfait",
	"Emma", "Odette", "Anselme", "Alexandre", "Georges", "Fid&egrave;le", "Marc", "Alida", "Zita", "Val&eacute;rie",
	"Catherine", "Robert","","","");
	return fetes[num]}

function getFete05(num)
{var fetes = new Array(
	"Fête du travail", "Boris", "Philippe", "Sylvain", "Judith", "Prudence", "Gis&egrave;le", "Armistice 1945", "Pâcome", "Solange",
	"Estelle", "Achille", "Rolande", "Matthias", "Denise", "Honor&eacute;", "Pascal", "Eric", "Yves", 
	"Bernardin", "Constantin", "Emile", "Didier", "Donatien", "Sophie", "B&eacute;ranger", "Augustin", 
	"Germain", "Aymar", "Ferdinand", "Visitation","","","");
   return fetes[num]}

function getFete06(num)
{var fetes = new Array(
	"Justin", "Blandine", "K&eacute;vin", "Clotilde", "Igor", "Norbert", "Gilbert", "M&eacute;dard", "Diane", "Landry",
   "Yolande", "Guy", "Antoine", "Elis&eacute;e", "Germaine", "J.F.R&eacute;gis", "Herv&eacute;", "L&eacute;once", "Romuald",
   "Silv&egrave;re", "Rodolphe", "Alban", "Audrey", "Baptiste", "Prosper", "Anthelme", "Fernand", "Ir&eacute;n&eacute;e", 
   "Paul/Pierre", "Martial","","","");
   return fetes[num]}

function getFete07(num)
{var fetes = new Array(
	"Thierry", "Martinien", "Thomas", "Florent", "Antoine", "Mariette", "Raoul", "Thibaut", "Amandine", "Ulrich",
	"Beno&icirc;t", "Olivier", "Jo&euml;l", "Camille", "Donald", "ND.Carmel", "Caroline", "Fr&eacute;d&eacute;ric", "Arsène",
	"Marina", "Victor", "Madeleine", "Brigitte", "Christine", "Jacques", "Anne", "Nathalie", "Samson",
	"Marthe", "Juliette", "Ignace","","","");
   return fetes[num]}

function getFete08(num)
{var fetes = new Array(
	"Alphonse", "Julien", "Lydie", "Jean Marie", "Oswald", "Transf.", "Ga&eacute;tan", "Dominique", "Amour", "Laurent", 
   "Claire", "Clarisse", "Hippolyte", "Evrard", "Alfred", "Armel", "Hyacinthe", "H&eacute;l&egrave;ne", "Jean",
   "Bernard", "Christophe", "Fabrice", "Rose", "Barth&eacute;l&eacute;my", "Louis", "Natacha", "Monique", "Augustin.",
   "Sabine", "Fiacre", "Aristide","","","");
   return fetes[num]}

function getFete09(num)
{var fetes = new Array(
	"Gilles", "Ingrid", "Gr&eacute;goire", "Rosalie", "Ra&iuml;ssa", "Bertrand", "Reine", "Nativit&eacute;", "Alain", "In&eacute;s", 
   "Adelphe", "Apollinaire", "Aim&eacute;", "Ste-Croix", "Roland", "Edith", "Renaud", "Nad&egrave;ge", "Am&eacute;lie",
   "Davy", "Mathieu", "Maurice", "Constant", "Th&egrave;cle", "Hermann", "Côme", "Vincent", "Venceslas",
   "Gabriel", "J&eacute;rôme","","",""); 
   return fetes[num]}

function getFete10(num)
{var fetes = new Array(
	"Th&eacute;r&egrave;se", "L&eacute;ger", "G&eacute;rard", "Fran&ccedil;ois", "Fleur", "Bruno", "Serge", "P&eacute;lagie", "Denis", "Ghislain", 
	"Firmin", "Wilfried", "G&eacute;raud", "Juste", "Th&eacute;r&egrave;se", "Edwige", "Baudoin", "Luc", "Ren&eacute;", "Adeline", 
	"C&eacute;line", "Elodie", "Jean", "Florentin", "Enguerran", "Dimitri", "Emeline", "Simon", "Narcisse", 
	"Bienvenue", "Quentin","","","");
   return fetes[num]}

function getFete11(num)
{var fetes = new Array(
	"Toussaint", "D&eacute;funts", "Hubert", "Charles", "Sylvie", "Bertille", "Carine", "Geoffroy", "Th&eacute;odore", 
	"L&eacute;on", "Martin", "Christian", "Brice", "Sidoine", "Albert", "Marguerite", "Elisabeth", "Aude", "Tanguy",
	"Edmond", "Pr&eacute;sentat.", "C&eacute;cile", "Cl&eacute;ment", "Augusta", "Catherine", "Delphine", "S&eacute;verin", "Jacques",
	"Saturnin", "Andr&eacute;","","","");
   	return fetes[num]}

function getFete12(num)
{var fetes = new Array(
	"Florence", "Viviane", "Fran&ccedil;ois", "Barbara", "G&eacute;rald", "Nicolas", "Ambroise", "Imm.Conc.", "Pierre",
	"Romaric", "Daniel", "Chantal", "Lucie", "Odile", "Ninon", "Alice", "Ga&euml;l", "Gatien", "Urbain", "Abraham",
   "Pierre", "Fran&ccedil;oise", "Armand", "Ad&egrave;le", "No&euml;l", "Etienne", "Jean", "Innocents", "David", "Roger",
   "Sylvestre","","","");
   return fetes[num]}


