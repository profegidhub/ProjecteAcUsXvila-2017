<?php
/**
*Aquest fitxer conté la Classe BDD.
*
*@author Xavier Vilà Puig
*/

/**
*Classe que utilitza l'aplicació per mostrar contingut a l'usuari.
*
*/
class Pantalla {
	/**
     * Númerao de pagina, no s'utilitza.
     *
     * Note that names of private properties or methods must be
     * preceeded by an underscore.
     *
     * @var int
     * @access private
     */
	var $numero = 0;
	
	/**
	*Funcio per mostrar per pantalla el contingut de la primera pàgina.
	*
	*/	
	function pinta1(){

	echo"<!DOCTYPE html>
<html>
	<head>
		<title>Primera</title>
	</head>
	<body>
		<h1 style=\"text-align:center;\">PRIMERA</h1>
		<div style=\"display:inlibe-block;width:15%;float:left;\">
			<ul>
				<li><a href='index.php'>Inici</a></li>
				<li><a href='segona.php'>Segona</a></li>
				<li><a href='logout.php'>Logout</a></li>
			</ul>
		</div>
		<div style='display:inlibe-block;width:85%;float:right;'>
			<h2>Primera pàgina</h2>
			<p style='text-align:justify;padding:10px 50px 10px 10px;'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc gravida mi justo, in egestas orci commodo et. Vivamus sit amet mollis tortor. Donec ac molestie sem. Mauris consectetur tellus et turpis vestibulum auctor. In at lobortis ante. Quisque tristique, ante fringilla posuere tincidunt, risus quam luctus lacus, id ornare mauris lacus sed arcu. Pellentesque diam nisi, varius ac nibh placerat, euismod ultricies neque. Aliquam vitae odio lacus. Integer sodales rutrum velit. Aliquam dignissim tempor blandit. Pellentesque gravida eu mi ut pretium. Donec lectus arcu, elementum et placerat at, tempus vel enim. Morbi dictum id arcu elementum dapibus. Maecenas eget feugiat nisi.
				<br /><br />
				Integer quam purus, consectetur a pellentesque non, egestas eget velit. Fusce vitae ex id sapien finibus porta id sed leo. Duis rutrum ex tempor, malesuada sapien sit amet, fermentum est. Sed accumsan ex at iaculis volutpat. Nunc ante nulla, maximus nec sapien ut, porttitor commodo ipsum. Nunc consequat, massa varius venenatis ultrices, ligula nulla mattis augue, vel dapibus purus magna ac dui. Aenean a mi mi. Vivamus ut bibendum lectus. Proin vitae sapien vitae leo mattis laoreet. Praesent maximus quis diam eget vehicula. Etiam porta diam vitae enim convallis, id fermentum nulla rhoncus. Fusce mauris velit, pellentesque et imperdiet nec, convallis eget eros. 
			</p>
		</div>
		
	</body>
</html>";
}
}
?>