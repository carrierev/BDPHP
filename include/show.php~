<?php
// show.php for show in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:04:48 2013 camille pire
// Last update Wed Nov 20 11:48:36 2013 Valentin Carriere
//

function        echo_tab($tab, $size, $option)
{
  for ($i = 0; isset($tab[$i]) && $option == 'simple'; $i++)
    {
      echo "| " . $tab[$i];
      multi_echo(' ', ($size - strlen($tab[$i]) + 1));
      echo " |\n";
    }
}

function        print_tab($title, $tab)
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

