<?php
// delete.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Wed Nov 20 15:22:02 2013 Valentin Carriere
// Last update Wed Nov 20 15:27:32 2013 Valentin Carriere
//
function	delete($file, $cmd)
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
      echo  'Unknown table : "' . $cmd[1] . '" in ' . $file[0] . "\n";
      return ;
    }
  else
    deleteElement($cmd, $file);
}

function        deleteElement($cmd, $file)
{
  $ptr = fopen("./database/table/" . $cmd[1] . ".table", "r");
  $contenu = fread($ptr, filesize("./database/table/" . $cmd[1] . ".table"));
  fclose($ptr);
  $contenu = explode(PHP_EOL, $contenu);
  for ($i = 1; isset($contenu[$i]); $i++)
    unset($contenu[$i]);
  $contenu = array_values($contenu);
  $contenu = implode(PHP_EOL, $contenu);
  $ptr = fopen("./database/table/" . $cmd[1] . ".table", "w");
  fwrite($ptr, $contenu);
  fclose($ptr);
  echo "Table : '" . $cmd[1] . "' truncated\n";
}

