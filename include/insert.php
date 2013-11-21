<?php
// insert.php for insert in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Thu Nov 21 14:50:33 2013 camille pire
// Last update Thu Nov 21 15:52:52 2013 camille pire
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
  print_r($tab);
}

  function	insert($cmd, $file)
  {
    if (!($desc = getdesc($cmd, $file)))
      return ;
    $tab_col = prepare_ins($desc);
  }