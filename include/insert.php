<?php
// insert.php for insert in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Thu Nov 21 14:50:33 2013 camille pire
// Last update Fri Nov 22 09:28:07 2013 camille pire
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

function	test_type($type, $val)
{
  if ($type == 'integer' && is_int($val))
    return true;
  elseif ($type == 'float' && is_double($val))
    return true;
  elseif ($type == 'bool' && is_bool($val))
    return true;
  elseif ($type == 'string' && is_string($val))
    return true;
  else
    return false;
}

function	test_val($type, $option, $val)
{
  if ($option == 'primary_key')
    {
      if (test_type($type, $val))
	return true;
    }
  elseif ($option == 'not_null')
    {
      if (test_type($type, $val))
	return true;
    }
  else
    {
      aff_echo('la donne' . $val .' ne sont pas compatible.\n');
      return false;
    }
}

  function	prepare_line($col, $val)
  {
    $line = null;
    for ($i = 0; isset($col[$i][1]); $i++)
      {
	for ($j = 1; isset($val[$j]); $j++)
	  {
	    if ($col[$i][1] == $val[$j]['id'])
	      if (test_val($col[$i][2], $col[$i][3], $val[$j]['val']))
		$line .= $val[$j]['val'] . ';';
	  }
      }
    return $line;
  }

  function	insert($cmd, $file)
  {
    if (!($desc = getdesc($cmd, $file)))
      return ;
    $tab_col = prepare_ins($desc);
    $tab_val = prepare_val($cmd);
    $line = prepare_line($tab_col, $tab_val);

  }