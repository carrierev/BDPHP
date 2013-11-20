<?php
// drop.php for drop in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:04:08 2013 camille pire
// Last update Wed Nov 20 11:37:14 2013 Valentin Carriere
//
function	drop($file, $cmd)
{
  $lines = read_db($file[0]);
  for ($i = 0; isset($lines[$i]); $i++)
    {
      if (preg_match_all('#^([^;]+);#', $lines[$i], $res))
	if ($res[1][0] == $cmd[1])
	    $nb_line = $i;
    }
  $ptr = fopen("./" . $file[0], "r");
  $contenu = fread($ptr, filesize("./" . $file[0]));
  fclose($ptr);
  $contenu = explode(PHP_EOL, $contenu);
  unset($contenu[$nb_line]);
  $contenu = array_values($contenu);
  $contenu = implode(PHP_EOL, $contenu);
  $ptr = fopen("./" . $file[0], "w");
  fwrite($ptr, $contenu);
  unlink("./database/table/" . $cmd[1] . ".table");
}