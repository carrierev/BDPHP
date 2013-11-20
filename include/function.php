<?php
// function.php for function in /Users/camillepire/github/BDPHP
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Tue Nov 19 16:38:38 2013 camille pire
// Last update Wed Nov 20 12:36:22 2013 camille pire
//
function test_type($str)
{
  if ($str == 'integer'
      || $str == 'float'
      || $str == 'bool'
      || $str == 'string')
    return true;
  else
    return false;
}

function	test_option($str)
{
  static $bool = false;

  if ($bool == false && $str == 'primary_key')
    {
      $bool == true;
      return true;
    }
  elseif ($str == 'not_null')
    return true;
  else
    return false;
}

function	createTab($cmd, $file)
{
  $file_name = $cmd[2] . '.table';
  file_create('./database/table/', $file_name);
  $dbline = $cmd[2] . ";";
  for ($i = 4; isset($cmd[$i + 1]); $i++)
    {
      if ($cmd[$i - 1] == '(' || $cmd[$i - 1] == ',')
	{
	  $dbline .= $cmd[$i] . ',';
	  $tbline .= $cmd[$i] . ";";
	}
      elseif ($cmd[$i] != ',')
	{
	  if (($cmd[$i + 1] == ',' || $cmd[$i + 1] == ')')
	      && test_option($cmd[$i]))
	    $dbline .= $cmd[$i] . ';';
	  elseif (test_type($cmd[$i]))
	    $dbline .= $cmd[$i] . ',';
	  else
	    {
	      echo "Invalid commande: '" . $cmd[$i] . "'\n";
	      return ;
	    }
	}
    }
  $dbline .= './database/table/' . $file_name . '#';
  if (isset($tbline))
    write_tb($file_name, $tbline);
  write_db($file[0], $dbline);
  echo "-> Table " . "'" . $cmd[2] . "'" . " created.\n";
}