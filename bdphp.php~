<?php
// bdphp.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Mon Nov 18 10:30:38 2013 Valentin Carriere
// Last update Fri Nov 22 10:06:49 2013 Valentin Carriere
require_once('./include/include.php');
error_reporting (E_ALL);

function	main($argc, $argv)
{
  global $option;
  if (is_options($argc, $argv) == 0)
    exit (0);
  else
    $file_options = is_options($argc, $argv);
  if (isset($file_options[1]))
    input_file($file_options);
  if (!isset($file_options[1]) && $argv[1] == "-i")
    aff_echo("Option -i file doesnt exist\n");
  if (isset($file_options[2]))
    $option = $file_options[2];
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
}

main($argc, $argv);