<?php
// bdphp.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Mon Nov 18 10:30:38 2013 Valentin Carriere
<<<<<<< HEAD
// Last update Mon Nov 18 13:17:50 2013 camille pire
=======
// Last update Mon Nov 18 13:18:21 2013 Valentin Carriere
// Last update Mon Nov 18 13:13:10 2013 camille pire
>>>>>>> a509b86eae470750d6aace450f40d05113874ca3
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
	if (strcmp($params[0], "QUIT;") == 1 || $params[0] == "QUIT;")
	  exit;
	aff_prompt();
      }
  }
