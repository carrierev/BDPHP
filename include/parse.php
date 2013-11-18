<?php
// parse.php for parse in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:03:13 2013 camille pire
// Last update Mon Nov 18 16:52:49 2013 camille pire
//

function	parse_sql(&$param)
{
  for ($i = 0; isset($param[$i]);$i++)
    echo $param[0];
  return ;
}