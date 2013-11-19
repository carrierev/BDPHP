<?php
// bdphp.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Mon Nov 18 10:30:38 2013 Valentin Carriere
<<<<<<< HEAD
// Last update Tue Nov 19 12:53:20 2013 camille pire
//
require_once('./include/include.php');
error_reporting (E_ALL);

if (is_options($argc, $argv) == 0)
  exit (0);
=======
// Last update Tue Nov 19 12:55:08 2013 Valentin Carriere
//
require_once('./include/include.php');
error_reporting (E_ALL);
/*if (is_options($argc, $argv) == 0)
  exit;
>>>>>>> cb94c368ad299e6d404666cb9c4b00e31f04e558
else
$file_options = is_options($argc, $argv);*/
$fd = fopen('php://stdin', 'r');
if ($fd !== false)
  {
    aff_prompt();
    while (($line = strtolower(fgets($fd))) !== false)
      {
	$params = decoup_params($line);
	if (strcmp($params[0], "quit;") == 1)
	  exit;
	$cmd = parse_sql($params, $fd);
	aff_prompt();
      }
  }
