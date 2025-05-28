<?php
$correctValues = [
    [43.6956874550532, 7.269899815255486], // chall 0 solution
    [41.23515575795018, 9.16847759472148], // chall 1 solution
    [43.07936205983258, 5.902303129369102] //...
];

$images = [
	"example.jpg",
	"example.jpg",
	"example.jpg"
];

$flags = [
    "FLAG{flag1}", // chall 0 flag
    "FLAG{flag2}", // chall 1 flag
    "FLAG{flag3}"  // ...
];

$accepted_error = 20; // accepted error in meters

$lang = "en";
//$lang = "fr";






//////////////////////////////////////////////////
// DEFAULT TXT SETTINGS (in french and english) //
//////////////////////////////////////////////////

$name_website = ($lang === 'fr') ? 'Outil GeoSint' : 'GeoSint Tool';									// Website Title
$desc_website = ($lang === 'fr') ? 'GeoSint CDD (capture de drapeaux)' : 'GeoSint CTF';					// Website description
$send_button = ($lang === 'fr') ? 'Envoyer ✅' : 'Send ✅';												// Button
$select_bar = ($lang === 'fr') ? 'Selectionne un point (à 20m)' : 'Select a location (to within 20m)';	// Placeholder when selecting

$taunt_fr = [
	"Ma grand-mère ferait mieux avec son Minitel.",
    "Tu veux pas mettre l'Antarctique tant que t'y es ?",
    "T'y es presque... nan, j'rigole !",
    "On n'est pas dans le même référentiel.",
    "T’as visé la Terre au moins, ou t’es sur Mars ?",
    "T’es plus proche de la vérité en lançant un dé à 20 faces.",
    "Je savais que c'était loin, mais pas à ce point...",
    "Même un pigeon voyageur aurait eu plus de précision.",
    "T’as tiré au pif… et t’as quand même raté la carte.",
    "À ce niveau-là, autant fermer les yeux et cliquer.",
    "T’as déjà vu un globe terrestre ou c’est une première ?",
    "Ton sens de l’orientation me fait peur.",
    "T’es tellement loin que Google Maps refuse de recalculer.",
    "Bon, au moins t’étais sur la bonne planète, c’est déjà ça.",
    "T’as pointé où ? Dans ton imagination ?",
    "Si c’était un lancer de fléchettes, t’aurais touché le mur.",
    "J’espère que t’as pas le permis, parce que là, c’est inquiétant.",
    "Même un dauphin avec un globe ferait mieux.",
    "Je savais que c'était faux, mais pas à ce point...",
    "C’est pas un ping, c’est un appel au secours !",
    "T’as visé large... très large.",
    "Je te laisse une seconde chance… ah non, c’est encore pire.",
    "Le GPS a ragequit en voyant ça."
];

$taunt_en = [
  "My grandma would have done better using her minitel, and she's dead",
  "My grandma would have done better using her atlas",
  "Don't you want to put Antarctica, while you're at it?",
  "You're almost there... nah, just kidding!",
  "I get it now ! We're not in the same frame of reference",
  "Did you at least aim for Earth, or are you looking at Mars?",
  "You'd be closer to the truth if you rolled a 20-sided die.",
  "I knew it was far, but not that far...",
  "Even a carrier pigeon would have been more accurate.",
  "You took a wild guess... and still missed the map.",
  "At that level, you might as well close your eyes and click.",
  "Have you ever seen a globe before, or is this a first?",
  "Your sense of direction scares me.",
  "You're so far away that Maps refuses to recalculate.",
  "Well, at least you were on the right planet, that's something.",
  "Where did you point? In your imagination?",
  "If it was a dart throw, you'd have hit the wall.",
  "I hope you don't have a driver's license, because that's worrying.",
  "Even a dolphin with a globe would do better.",
  "I knew it was wrong, but not *that* wrong...",
  "It's not a ping, it's a cry for help!",
  "You aimed wide... very wide.",
  "Trying out bad strategies intentionally is healthy empiricism. That IS what you are doing, right?"
];

$taunt = ($lang === 'fr') ? $taunt_fr : $taunt_en;

?>