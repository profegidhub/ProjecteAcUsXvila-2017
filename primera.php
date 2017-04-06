<?php
/**
*Fitxer inicial que conté el principi de l'aplicació.
*
*
*/

/**
*Iniciar sessió.
*
*/
session_start();
include_once('pantalla.php');

/**
*defineix el temps de la sessió.
*@source /primera.php
*/
define("TEMPS",     300);

comprovarSessio();
$p = new Pantalla();
$p->pinta1();



/**
*Comprovar si la sessió està iniciada
*
*@param $a Parametre de prova
*/
function comprovarSessio(String $a){
	/** 
	*@var string $durada_sessio Temps en que caduca la sessió. 
	*/
	$durada_sessio=TEMPS;
if(!isset($_SESSION)|| !isset($_SESSION['ready'])) {
	exit("<h1>403 Forbidden</h1>Aquesta pàgina requereix registre1.<br><a href='index.php'>Inici</a>");
}
else if(!$_SESSION['ready']) {
	exit("<h1>403 Forbidden</h1>Aquesta pàgina requereix registre2.<br><a href='index.php'>Inici</a>");
}

if((time() - $_SESSION['last_access']) > $durada_sessio ){
	echo "<p style='color:blue;'>Sessió caducada, tornat a registrar.</p>";
	$_SESSION['ready']=false;
	header('Location: index.php');
}
}

