<?php
// show.php for show in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:04:48 2013 camille pire
// Last update Fri Nov 22 10:20:28 2013 Valentin Carriere
//

function        echo_tab($tab, $size, $option)
{
  for ($i = 0; isset($tab[$i]) && $option == 'simple'; $i++)
    {
      aff_echo("| " . $tab[$i]);
      multi_echo(' ', ($size - strlen($tab[$i]) + 1));
      aff_echo(" |\n");
    }
}

function        print_tab($title, $tab)
{
  $size = strlen($title);
  for ($i = 0; isset($tab[$i]); $i++)
    if (strlen($tab[$i]) > $size)
      $size = strlen($tab[$i]);
  aff_echo("+");
  multi_echo('-', $size + 3);
  aff_echo("+\n| ");
  multi_echo(' ',($size - strlen($title)) / 2);
  aff_echo($title);
  multi_echo(' ',($size - strlen($title)) / 2);
  if ($size % 2)
    aff_echo(' ');
  aff_echo(" |\n");
  aff_echo("+");
  multi_echo('-', $size + 3);
  aff_echo("+\n");
  echo_tab($tab, $size, 'simple');
  aff_echo("+");
  multi_echo('-', $size + 3);
  aff_echo("+\n" . $i ." rows in set\n");
}

