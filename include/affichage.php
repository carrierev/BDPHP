<?php
// affichage.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Mon Nov 18 10:31:24 2013 Valentin Carriere
// Last update Tue Nov 19 19:42:57 2013 camille pire
//

function        aff_prompt()
{
  echo "$> ";
}

function	multi_echo($char, $nb)
{
  for ($i = 0; $i <= $nb; $i++)
    echo $char;
}

function	print_tab($title, $tab)
{
  $size = strlen($title);
  for ($i = 0; isset($tab[$i]); $i++)
    if (strlen($tab[$i]) > $size)
      $size = strlen($tab[$i]);
  echo "+";
  multi_echo('-', $size + 3);
  echo "+\n| ";
  multi_echo(' ',($size - strlen($title)) / 2);
  echo $title;
  multi_echo(' ',($size - strlen($title)) / 2);
  if ($size % 2)
    echo ' ';
  echo " |\n";
  echo "+";
  multi_echo('-', $size + 3);
  echo "+\n";
  for ($i = 0; isset($tab[$i]); $i++)
    {
      echo "| " . $tab[$i];
      multi_echo(' ', ($size - strlen($tab[$i]) + 1));
      echo " |\n";
    }
  echo "+";
  multi_echo('-', $size + 3);
  echo "+\n" . $i ." rows in set\n";
}

function	desc($cmd, $file)
{
  $tablename = $cmd[2];
  $fd = fopen('/database/table/' . $tablename . "table", 'r');
  if ($fd != false)
    {
      $i = filesize($file);
      $temp = fread($fd, $i);
      if ($temp != false)
	echo $temp;
      fclose($fd);
    }
  else
    echo "Cannot read table\n";
}
/*
echo ("------- TABLE '" . $tablename . "' -------");
'id'	integer	PRIMARY_KEY
'nom'	string	NOT_NULL
'pnom'	string
'age'	integer
echo ("------- TABLE '" . $tablename . "' -------");
*/