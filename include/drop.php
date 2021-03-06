<?php
// drop.php for drop in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:04:08 2013 camille pire
// Last update Fri Nov 22 13:47:02 2013 Valentin Carriere
//
function	drop($file, $cmd)
{
  $bool = false;
  $lines = read_db($file[0]);
  for ($i = 0; isset($lines[$i]); $i++)
    {
      if (preg_match_all('#^([^;]+);#', $lines[$i], $res))
	if ($res[1][0] == $cmd[1])
	  {
	    $nb_line = $i;
	    $bool = true;
	  }
    }
  if ($bool != true)
    {
      aff_echo("Unknown table : '$cmd[1]' in '$file[0]'\n");
      return ;
    }
  else
    rewriteDB($file, $cmd, $nb_line);
}

function	rewriteDB($file, $cmd, $nb_line)
{
  $ptr = fopen("./" . $file[0], "r");
  $contenu = fread($ptr, filesize("./" . $file[0]));
  fclose($ptr);
  $contenu = explode(PHP_EOL, $contenu);
  unset($contenu[$nb_line]);
  $contenu = array_values($contenu);
  $contenu = implode(PHP_EOL, $contenu);
  $ptr = fopen("./" . $file[0], "w");
  fwrite($ptr, $contenu);
  fclose($ptr);
  if (file_exists("./database/table/" .$cmd[1]. ".table"))
  {
    unlink("./database/table/" . $cmd[1] . ".table");
    aff_echo("-> Table : '$cmd[1]' dropped\n");
  }
  else
    {
      aff_echo("-> Table : '$cmd[1]' delete from '$file[0]'\n");
      aff_echo("-> Table : '$cmd[1]' doesn't exist in './database/table'\n");
    }
}
