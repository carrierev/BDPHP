#!/usr/local/bin/php
<?php
// check_argv.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Tue Nov 19 10:32:11 2013 Valentin Carriere
// Last update Tue Nov 19 11:45:24 2013 Valentin Carriere
//
error_reporting (E_ALL);

function	is_options($argc, $argv)
{
  if (in_array("-i", $argv))
    {
      if (in_array("-o", $argv))
        {
	  $file = is_file_exist($argc, $argv);
	  $output = fopen($file['o'], 'w');
	}
      $file = is_file_exist($argc, $argv);
      //$list_cmd = $file[1];
      return $file;
    }
  else if (in_array("-o", $argv))
    {
      $file = is_file_exist($argc, $argv);
      $out = fopen($file['o'], "w");
      return $file;
    }
  else if (in_array("-", $argv))
    {
      echo "Usage: ./bdphp.php [-i inputfile] [-o outputfile] dbfile\n";
      return (0);
    }
  else
    {
      $file = is_file_exist($argc, $argv);
      return $file;
    }
}

function    is_file_exist($argc, $argv)
{
  if (file_exists($argv[$argc - 1]))
    $file["db"] = $argv[$argc - 1];
  else
    {
      echo "Usage: ./bdphp.php [-i inputfile] [-o outputfile] dbfile\n";
      return 0;
    }
  for ($i = 0; $i < $argc; $i++)
    {
      if ($argv[$i] == "-i" && file_exists($argv[$i + 1])
	  $file["i"] = $argv[$i + 1];)
      else if ($argv[$i] == "-o" && file_exists($argv[$i + 1]))
	$file["o"] = $argv[$i + 1];
    }
  if ($file["db"] == $file["i"] || $file["db"] == $file["o"])
    {
      echo "Usage: ./bdphp.php [-i inputfile] [-o outputfile] dbfile\n";
      return (0);
    }
  return ($file);
}