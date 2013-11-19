<?php
// parse.php for parse in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:03:13 2013 camille pire
// Last update Tue Nov 19 09:46:52 2013 camille pire
//

function	parse_sql(&$param)
{
  if (!preg_match_all('#;$#', $param[count($param) - 1]))
    return ;
  else
    print_r($param);
  return ;
}