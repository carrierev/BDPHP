c<?php
// bdphp.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Mon Nov 18 10:30:38 2013 Valentin Carriere
// Last update Mon Nov 18 16:42:40 2013 camille pire
//
require_once('./include/include.php');
error_reporting (E_ALL);

$fd = fopen('php://stdin', 'r');
if ($fd !== false)
  {
    aff_prompt();
    while (($line = fgets($fd)) !== false)
      {
	$params = decoup_params($line);
	if (strcmp(strtolower($params[0]), "quit;") == 1 || $params[0] == "QUIT;")
	  exit;
	aff_prompt();
      }
  }
