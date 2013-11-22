<?php
// function.php for function in /Users/camillepire/github/BDPHP
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Tue Nov 19 16:38:38 2013 camille pire
// Last update Fri Nov 22 09:56:17 2013 camille pire
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

function	test_option($str, $option)
{
  static $bool = false;

  if ($option == 0 && $bool == false)
    {
      echo "You must set one primary_key.\n";
      return true;
    }
  elseif ($option == 0)
    $bool = false;
  if ($option == 1)
    {
      if ($bool == false && $str == 'primary_key')
	{
	  $bool = true;
	  return true;
	}
      elseif ($str == 'not_null')
	return true;
      elseif ($bool == true && $str == 'primary_key')
	{
	  aff_echo("You can have just one primary_key.\n");
	  return false;
	}
      else
	return false;
    }
  return false;
}

function	iftab_exist($cmd, $file)
{
  $lines = read_db($file[0]);
  for ($i = 1; isset($lines[$i]); $i++)
    {
      preg_match('#^[^;]+#', $lines[$i], $tab);
	if ($tab[0] == $cmd[2])
	  {
	    aff_echo("Table : '" . $cmd[2] . "' already exist.\n");
	    return true;
	  }
    }
  return false;
}

function	createTab($cmd, $file)
{
  if (iftab_exist($cmd, $file))
    return ;
  $file_name = $cmd[2] . '.table';
  file_create('./database/table/', $file_name);
  $dbline = $cmd[2] . ";";
  $tbline = null;
 $j = 0;
 for ($i = 4; isset($cmd[$i + 1]); $i++)
    {
      if ($cmd[$i - 1] == '(' || preg_match('#,$#', $cmd[$i - 1]))
	{
	  $dbline .= $cmd[$i] . ',';
	  $tbline .= $cmd[$i] . ";";
	}
      elseif ($cmd[$i] != ',')
	{
	  if ($cmd[$i + 1] == ',' || $cmd[$i + 1] == ')' || preg_match('#,$#', $cmd[$i]))
	    {
	      if ($j == 1 && test_type($cmd[$i]))
		{
		  $dbline .= $cmd[$i] . ',;';
		}
	      elseif (test_option($cmd[$i], 1))
		$dbline .= $cmd[$i] . ';';
	      $j = 0;
	    }
	  elseif (test_type($cmd[$i]))
	    $dbline .= $cmd[$i] . ',';
	  else
	    {
	      aff_echo("Invalid commande: '" . $cmd[$i] . "'\n");
	      return ;
	    }
	  $j++;
	}
    }
  if (test_option(' ', 0))
    return ;
  $dbline .= './database/table/' . $file_name . '#';
  if (isset($tbline))
    write_tb($file_name, $tbline);
  write_db($file[0], $dbline);
  aff_echo("-> Table " . "'" . $cmd[2] . "'" . " created.\n");
}