<?php
// delete.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Wed Nov 20 15:22:02 2013 Valentin Carriere
// Last update Fri Nov 22 14:30:22 2013 Valentin Carriere
//
function	checkConditions($cmd, $file, $nb_line)
{
  for ($i = 0; isset($cmd[$i]); $i++)
    {
      if ($cmd [$i] == 'where')
	{
	  echo "test";
	}
   }
}

function	delete($file, $cmd)
{
  $bool = false;
  $lines = read_db($file[0]);
  for ($i = 0; isset($lines[$i]); $i++)
    {
      if (preg_match_all('#^([^;]+);#', $lines[$i], $res))
        if ($res[1][0] == $cmd[2])
	  {
	    $nb_line = $i;
	    $bool = true;
	  }
    }
  if ($bool != true)
    {
      echo  'Unknown table : "' . $cmd[2] . '" in ' . $file[0] . "\n";
      return ;
    }
  else
    deleteElement($cmd, $file, $nb_line);
}

function        deleteElement($cmd, $file, $nb_line)
{
  if(checkConditions($cmd, $file, $nb_file) == 0)
    echo "-> 0 row(s) deleted.";
  else
    {
      $ptr = fopen("./database/table/" . $cmd[2] . ".table", "r");
      $contenu = fread($ptr,
		       filesize("./database/table/" . $cmd[2] . ".table"));
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
}