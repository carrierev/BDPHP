<?php
// check_argv.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Tue Nov 19 10:32:11 2013 Valentin Carriere
// Last update Fri Nov 22 09:38:25 2013 Valentin Carriere
//
error_reporting (E_ALL);

function	check_argc($argc)
{
  if ($argc == 1)
    {
      echo "Usage: ./bdphp.php [-i inputfile] [-o outputfile] dbfile\n";
      return (0);
    }
  else
    return (1);
}

function	is_options($argc, $argv)
{
  if (check_argc($argc) == 0)
    return (0);
  if (in_array("-i", $argv))
    {
      if (in_array("-o", $argv))
	$file = is_file_exist($argc, $argv);
      else
	$file = is_file_exist($argc, $argv);
      return $file;
    }
  else if (in_array("-o", $argv))
    {
      $file = is_file_exist($argc, $argv);
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
    $file[0] = $argv[$argc - 1];
  else
    {
      echo "Usage: ./bdphp.php [-i inputfile] [-o outputfile] dbfile\n";
      return 0;
    }
  for ($i = 0; $i < $argc; $i++)
    {
      if ($argv[$i] == "-i" && file_exists($argv[$i + 1]))
	$file[1] = $argv[$i + 1];
      else if ($argv[$i] == "-o" && file_exists($argv[$i + 1]))
	$file[2] = $argv[$i + 1];
    }
  if (isset($file[1]) && $file[0] == $file[1]
      || isset($file[2]) && $file[0] == $file[2])
    {
      echo "Usage: ./bdphp.php [-i inputfile] [-o outputfile] dbfile\n";
      return (0);
    }
  return ($file);
}