<?php
// bdphp.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Mon Nov 18 10:30:38 2013 Valentin Carriere
<<<<<<< HEAD
// Last update Tue Nov 19 17:02:49 2013 Valentin Carriere
=======
// Last update Tue Nov 19 17:09:12 2013 camille pire
>>>>>>> cded4bb9d820052485f4606c4111418508569c22
require_once('./include/include.php');
error_reporting (E_ALL);

if (is_options($argc, $argv) == 0)
  exit (0);
else
<<<<<<< HEAD
  $file_options = is_options($argc, $argv);
=======
  $file_options = is_options($argc, $argv);*/
>>>>>>> cded4bb9d820052485f4606c4111418508569c22
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
	user_choice($cmd, $file_options);
	aff_prompt();
      }
  }
