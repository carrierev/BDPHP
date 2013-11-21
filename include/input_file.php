<?php
// input_file.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Thu Nov 21 15:01:03 2013 Valentin Carriere
// Last update Thu Nov 21 17:23:26 2013 Valentin Carriere
//
function	input_file($file)
{
  $ptr = fopen($file[1], "r");
  $contenu = fread($ptr, filesize($file[1]));
  if (preg_match_all('#[^;]+;#', $contenu, $tab))
    {
      for ($i = 0; isset($tab[0][$i]); $i++)
	{
	  $tab[0][$i] = decoup_params($tab[0][$i]);
	  $cmd = parse_sql($tab[0][$i], $ptr);
	  user_choice($cmd, $file);
	}
    }
}