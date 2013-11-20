<?php
// drop.php for drop in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:04:08 2013 camille pire
// Last update Wed Nov 20 11:04:17 2013 Valentin Carriere
//
function	drop($file, $cmd)
{
  /*
  $ptr = fopen("./" . $file[0], "r");
  $contenu = fread($ptr, filesize($file[0]));
  fclose($ptr);
  $contenu = explode(PHP_EOL, $contenu);
  for ($i = 0; isset($contenu[$i]); $i++)
    {
      preg_match('#([' . $cmd[1] . ']+)##', $contenu[$i], $res);
      if ($res != '')
	unset($contenu[$i]);
    }
  $contenu = array_values($contenu);
  $contenu = implode(PHP_EOL, $contenu);
  $ptr = fopen("./" . $file[0], "w");
  fwrite($ptr, $contenu);
  */
  $lines = file($file[0]);
  // return $lines;
  //$lines = read_db($file[0]);
  print_r($lines);
  for ($i = 0; isset($lines[$i]); $i++)
    {
      if (preg_match_all('#([' . $cmd[1] . ']+)##', $lines[$i], $res))
	if ($res != '')
	  unset($file[0][$i]);
    }

}