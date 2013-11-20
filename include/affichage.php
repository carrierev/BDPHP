<?php
// affichage.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Mon Nov 18 10:31:24 2013 Valentin Carriere
// Last update Wed Nov 20 11:48:47 2013 Valentin Carriere
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

function	multi_echo_ret($char, $nb)
{
  $tmp = null;
  for ($i = 0; $i <= $nb; $i++)
    $tmp .= $char;
  return $tmp;
}

