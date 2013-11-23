<?php
// prepare_insert.php for prepare insert in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Sat Nov 23 19:52:38 2013 camille pire
// Last update Sat Nov 23 19:53:22 2013 camille pire
//

function	getdesc($cmd, $file)
{
  $lines = read_db($file[0]);
  for ($i = 1; isset($lines[$i]); $i++)
    {
      preg_match('#^[^;]+#', $lines[$i], $tab);
      if ($tab[0] == $cmd[1])
	return $lines[$i];
    }
  return false;
}

function	prepare_ins($desc)
{
  preg_match_all('#;([^;]+)#', $desc, $parse);
  preg_match('`;([^;]+)#$`', $desc, $result);
  $tab['path'] = $result[1];
  for ($i = 0; isset($parse[1][$i + 1]); $i++)
    {
      preg_match_all('#^([^,]*),([^,]*),(.*)$#', $parse[1][$i], $res);
      for ($j = 1; isset($res[$j]); $j++)
	$tab[$i][$j] = $res[$j][0];
    }
  return $tab;
}

function	prepare_val($cmd)
{
  $j = 0;
  for ($i = 3; isset($cmd[$i + 1]); $i++)
    {
      if ($cmd[$i - 1] == '(' || $cmd[$i - 1] == ',')
	{
	  $j++;
	  $tab[$j]['id'] = $cmd[$i];
	}
      if ($cmd[$i + 1] == ')' || $cmd[$i + 1] == ',')
	$tab[$j]['val'] = $cmd[$i];
    }
  return $tab;
}

function	test_type_in($type, $val)
{
  if ($type == 'integer' && is_int((int)$val) && is_numeric($val))
    return true;
  elseif ($type == 'float' && is_numeric($val))
    return true;
  elseif ($type == 'bool' && ($val == 'true'
			      || $val == '1'
			      || $val == 'false'
			      || $val == '0'))
    return true;
  elseif ($type == 'string' && is_string($val))
    return true;
  else
    return false;
}
