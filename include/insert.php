<?php
// insert.php for insert in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Thu Nov 21 14:50:33 2013 camille pire
// Last update Sat Nov 23 19:53:40 2013 camille pire
//

function	test_primary($path, $val, $id)
{
  $lines = read_db($path);
  if (preg_match_all('#[^;]+#', $lines[0], $tab))
    for ($i = 0; isset($tab[0][$i]); $i++)
      if ($tab[0][$i] == $id)
	$pk = $i;
  for ($i = 1; isset($lines[$i]); $i++)
    {
      if (preg_match_all('#[^;]+#', $lines[$i], $res))
	if ($res[0][$pk] == $val)
	  {
	    aff_echo("Primary_key already exist.\n");
	    return false;
	  }
    }
  return true;
}

function	test_val($type, $option, $val, $path, $id)
{
  if ($option == 'primary_key'
      && test_primary($path, $val, $id)
      && test_type_in($type, $val))
    {
      return true;
    }
  elseif ($option == 'not_null'
	  && test_type_in($type, $val) && isset($val))
    {
      return true;
    }
  elseif (test_type_in($type, $val)
	  && $option != 'primary_key' && $option != 'not_null')
    return true;
  else
    {
      aff_echo('Data ' . $val ." is not valid.\n");
      return false;
    }
}

function	prepare_line($col, $val)
{
  $line = null;
  $k = 0;
  $l = 0;
  for ($i = 0; isset($col[$i][1]); $i++)
    {
      if ($col[$i][3] == 'not_null' || $col[$i][3] == 'primary_key')
	$k++;
      for ($j = 1; isset($val[$j]); $j++)
	{
	  if ($col[$i][1] == $val[$j]['id'])
	    if (test_val($col[$i][2], $col[$i][3], $val[$j]['val'],
			 $col['path'], $val[$j]['id']))
	      {
		$l++;
		$line .= $val[$j]['val'];
	      }
	    else
	      return false;
	}
      $line .= ';';
    }
  if ($k > $l)
    {
      aff_echo("Insufficient number of arguments.\n");
      return false;
    }
  return $line;
}

function	insert($cmd, $file)
{
  if (!($desc = getdesc($cmd, $file)))
    return ;
  $tab_col = prepare_ins($desc);
  if (!file_exists($tab_col['path']))
    return ;
  $tab_val = prepare_val($cmd);
  if ($line = prepare_line($tab_col, $tab_val))
    {
      $fd = fopen($tab_col['path'], 'a+');
      fwrite($fd, $line);
      fwrite($fd, "\n");
      fclose($fd);
      aff_echo("-> Insert done.\n");
    }
}
