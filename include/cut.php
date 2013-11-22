<?php
// cut.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Mon Nov 18 10:39:51 2013 Valentin Carriere
// Last update Fri Nov 22 10:34:14 2013 camille pire
//
function        decoup_params($line)
{
  write_cmd($line . "\n");
  $res = preg_replace('#[ ]{2,}|[\t]#', ' ', $line);
  if (preg_match_all('#(?![\'"])[^ ]+(?<![\'"])|".+"|\'.+\'#', $res, $tab))
    for ($i = 0; isset($tab[0][$i]); $i++)
      $return[] = $tab[0][$i];
  return ($return);
}
