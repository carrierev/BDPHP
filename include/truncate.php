#!/usr/local/bin/php
<?php
// truncate.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Wed Nov 20 12:27:00 2013 Valentin Carriere
// Last update Wed Nov 20 12:37:28 2013 Valentin Carriere
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
      echo  'Unknown table : "' . $cmd[1] . '" in ' . $file[0] . "\n";
      return ;
    }
  else
    writeTable($cmd, $nb_line);                                             }
}

function        writeTable($cmd, $nb_line)
{
  $filename = "./database/table" . $cmd[1] . ".table";
  $ptr = fopen($filename, "r+");
  ftruncate($ptr,filesize($filename)));
  rewind($handle);
  fclose($handle);
  echo "Table : '" . $cmd[1] . "' truncated\n";
}