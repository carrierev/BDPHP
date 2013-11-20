<?php
// drop.php for drop in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:04:08 2013 camille pire
// Last update Wed Nov 20 10:51:34 2013 Valentin Carriere
//
function	drop($file, $cmd)
{
  $ptr = fopen("./" . $file[0], "r");
  $contenu = fread($ptr, filesize("./" . $file[0]));
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
}