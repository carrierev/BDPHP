<?php
// truncate.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Wed Nov 20 12:27:00 2013 Valentin Carriere
// Last update Fri Nov 22 13:45:16 2013 Valentin Carriere
//
function        truncate($file, $cmd)
{
  $bool = false;
  $lines = read_db($file[0]);
  for ($i = 0; isset($lines[$i]); $i++)
    {
      if (preg_match_all('#^([^;]+);#', $lines[$i], $res))
        if ($res[1][0] == $cmd[1])
	  $bool = true;
    }
  if ($bool != true)
    {
      aff_echo("Unknown table : '$cmd[1]' in '$file[0]'\n");
      return ;
    }
  else
    truncateTable($cmd, $file);
}

function        truncateTable($cmd, $file)
{
  $ptr = fopen("./database/table/" . $cmd[1] . ".table", "r");
  $contenu = fread($ptr, filesize("./database/table/" . $cmd[1] . ".table"));
  fclose($ptr);
  $contenu = explode(PHP_EOL, $contenu);
  if (!isset($contenu[1]))
    {
      aff_echo("Table : '$cmd[1]' already empty\n");
      return (0);
    }
  for ($i = 1; isset($contenu[$i]); $i++)
    unset($contenu[$i]);
  $contenu = array_values($contenu);
  $contenu = implode(PHP_EOL, $contenu);
  $ptr = fopen("./database/table/" . $cmd[1] . ".table", "w");
  fwrite($ptr, $contenu);
  fclose($ptr);
  aff_echo("-> Table : '$cmd[1]' truncated\n");
}