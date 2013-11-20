<?php
// read.php for read in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:02:41 2013 camille pire
// Last update Wed Nov 20 10:12:12 2013 camille pire
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
      if ($res[1] != '')
	$tab[] = $res[1];
    }
  if (isset($tab) && isset($title))
    print_tab($title, $tab);
}

function	desctab($file, $cmd)
{
  $lines = read_db($file[0]);
  for ($i = 0; isset($lines[$i]); $i++)
    {
      preg_match_all('#([^;]+);#', $lines[$i], $tab[$i]);
      if ($tab[$i][0][0] == $cmd[1] . ";")
	$res = $tab[$i][0];
    }
  if (isset($res))
  print_r($res);
}