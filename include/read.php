<?php
// read.php for read in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:02:41 2013 camille pire
// Last update Wed Nov 20 09:34:49 2013 Valentin Carriere
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
