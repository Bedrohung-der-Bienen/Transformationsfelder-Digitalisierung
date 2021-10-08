<?php
//diese funktion soll einfach das ergebniss des htmls zurückgeben mit beachtung auf hochzeichen und zeichenkodierung UTF-8 somit wird es sicherer
function escape($string){
	return htmlentities($string, ENT_QUOTES,'UTF-8');
}

?>