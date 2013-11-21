<?php
// read.php for read in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:02:41 2013 camille pire
// Last update Thu Nov 21 14:18:29 2013 camille pire
//

function	read_db($path)
{
  $lines = file($path);
  return $lines;
}

function	showtab($line)
{
  $title = preg_replace('#^--|--$|\\n#', '', $line[0]);
  for ($i = 1; isset($line[$i]); $i++)
    {
      preg_match('#^([^;]+);#', $line[$i], $res);
      if (isset($res[1]))
	$tab[] = $res[1];
    }
  if (isset($tab) && isset($title))
    print_tab($title, $tab);
}

function	prepare_desc($title, $table)
{
  $size = strlen($title);
  for ($i = 0; isset($table[$i]); $i++)
    for ($j = 0; isset($table[$i][$j]); $j++)
      if (strlen($table[$i][$j]) > $size)
	$size = strlen($table[$i][$j]);
  for ($i = 0; isset($table[$i]); $i++)
    {
      $tmp = '';
      for ($j = 0; isset($table[$i][$j]); $j++)
	{
	  $space =  multi_echo_ret(' ', ($size - strlen($table[$i][$j]) + 1));
	  $tmp .= $table[$i][$j] . $space;
	}
      $tab[] = $tmp;
    }
  print_tab($title, $tab);
}

function        desctab($file, $cmd)
{
  $lines = read_db($file[0]);
  for ($i = 0; isset($lines[$i]); $i++)
    {
      if (preg_match_all('#([^;]+);#', $lines[$i], $tab[$i]))
	if ($tab[$i][0][0] == $cmd[1] . ';')
	  $res[] = $tab[$i][1];
    }
  if (!isset($res))
    {
      echo  "Unknown table '" . $cmd[1] . "' in " . $file[0] . "\n";
      return ;
    }
  if (isset($res))
    {
      $title = $res[0][0];
      for ($i = 1; isset($res[0][$i]); $i++)
	{
	  preg_match_all('#([^,]+)#', $res[0][$i], $tab2[$i]);
	  $table[] = $tab2[$i][1];
	}
    }
  prepare_desc($title, $table);
}