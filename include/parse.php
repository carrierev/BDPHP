<?php
// parse.php for parse in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:03:13 2013 camille pire
// Last update Mon Nov 18 19:58:48 2013 camille pire
//

function	parse_sql(&$param)
{
  if (in_array(";", $param))
    return ;
  print_r($param);
  return ;
}