<?php
// construct.php for construct in /Users/camillepire/github/BDPHP
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Tue Nov 19 14:50:57 2013 camille pire
// Last update Tue Nov 19 14:53:53 2013 camille pire
//
function	construct_db($name)
{
	file_create('./database/', $name . ".table");
	write_db('./database/' . $name . ".table" , "--" . $name . "--");
}