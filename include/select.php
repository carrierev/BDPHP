<?php
// select.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Fri Nov 22 16:08:31 2013 Valentin Carriere
// Last update Fri Nov 22 16:27:40 2013 Valentin Carriere
//
function        select($file, $cmd)
{
  $bool = false;
  $lines = read_db($file[0]);
  for ($i = 0; isset($lines[$i]); $i++)
    {
      if (preg_match_all('#^([^;]+);#', $lines[$i], $res))
        if ($res[1][0] == $cmd[3])
          $bool = true;
    }
  if ($bool != true)
    {
      aff_echo("Unknown table : '$cmd[3]' in '$file[0]'\n");
      return ;
    }
  else
    selectTable($cmd, $file);
}

function        selectTable($cmd, $file)
{
  $ptr = fopen("./database/table/" . $cmd[3] . ".table", "r");
  $contenu = fread($ptr, filesize("./database/table/" . $cmd[3] . ".table"));
  fclose($ptr);
  $contenu = explode(PHP_EOL, $contenu);
  if (!isset($contenu[1]))
    {
      aff_echo("Table : '$cmd[3]' empty\n");
      return (0);
    }
  for ($i = 0; isset($contenu[$i]); $i++)
    {
      if ($i == 1)
	aff_echo("------------------------\n");
      if (preg_match_all('#[^;]+#', $contenu[$i], $tab[$i]))
	{
	  for ($j = 0; isset($tab[$i][0][$j]); $j++)
	    {
	      aff_echo($tab[$i][0][$j]. " ");
	    }
	  aff_echo("\n");
	}
    }
}
