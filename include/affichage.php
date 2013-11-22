<?php
// affichage.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Mon Nov 18 10:31:24 2013 Valentin Carriere
// Last update Fri Nov 22 10:00:28 2013 camille pire
//

function        aff_prompt()
{
  aff_echo("$> ");
}

function	aff_echo($str)
{
  global $option;
  if ($option != null)
    {
      $fd = fopen($option, 'w+');
      fwrite($fd, $str . "\n");
      fclose($fd);
    }
  echo $str;
}

function	multi_echo($char, $nb)
{
  for ($i = 0; $i <= $nb; $i++)
    aff_echo($char);
}

function	multi_echo_ret($char, $nb)
{
  $tmp = null;
  for ($i = 0; $i <= $nb; $i++)
    $tmp .= $char;
  return $tmp;
}

