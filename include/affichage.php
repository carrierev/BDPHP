<?php
// affichage.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Mon Nov 18 10:31:24 2013 Valentin Carriere
// Last update Wed Nov 20 11:11:20 2013 camille pire
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

function	echo_tab($tab, $size, $option)
{
  for ($i = 0; isset($tab[$i]) && $option == 'simple'; $i++)
    {
      echo "| " . $tab[$i];
      multi_echo(' ', ($size - strlen($tab[$i]) + 1));
      echo " |\n";
    }
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
  echo_tab($tab, $size, 'simple');
  echo "+";
  multi_echo('-', $size + 3);
  echo "+\n" . $i ." rows in set\n";
}
