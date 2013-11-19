<?php
// parse.php for parse in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:03:13 2013 camille pire
// Last update Tue Nov 19 10:02:12 2013 camille pire
//

function	parse_sql(&$param, $fd)
{
  $in[0] = $param;


  for ($i = 1; !preg_match_all('#;$#', $param[count($param) - 1]); $i++)
    {
      echo " > ";
      $param = decoup_params(strtolower(fgets($fd)));
      $in[$i] = $param;
    }
  print_r($in);
  return ;
}