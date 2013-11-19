<?php
// read.php for read in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:02:41 2013 camille pire
// Last update Tue Nov 19 18:27:09 2013 camille pire
//

function	read_db($path)
{
  $lines = file($path);
  return $lines;
}

function	showtab($line)
{
  $db = preg_replace('#^--|--$|\\n#', '', $line[0]);
  echo "--------" . $db . "--------\n";
  for ($i = 1; isset($line[$i]); $i++)
    {
      preg_match('#^([^;]+);#', $line[$i], $res);
      echo $res[1] . "\n";
    }
}
