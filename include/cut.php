<?php
// cut.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Mon Nov 18 10:39:51 2013 Valentin Carriere
// Last update Tue Nov 19 11:19:22 2013 camille pire
//
function        decoup_params($line)
{
  $res = preg_replace('#[ ]{2,}|[\t]#', ' ', $line);
  return (explode(' ', $res));
}
