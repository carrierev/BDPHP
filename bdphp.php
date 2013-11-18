<?php
// bdphp.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Mon Nov 18 10:30:38 2013 Valentin Carriere
// Last update Mon Nov 18 13:13:10 2013 camille pire
//
require_once('./include/affichage.php');
require_once('./include/cut.php');
error_reporting (E_ALL);

$fd = fopen('php://stdin', 'r');
if ($fd !== false)
  {
    aff_prompt();
    while (($line = fgets($fd)) !== false)
      {
	$params = decoup_params($line);
	if (strcmp($params[0], "QUIT;") == 1 || $params[0] == "QUIT;")
	  exit;
	aff_prompt();
      }
  }
