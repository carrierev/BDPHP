<?php
// parse.php for parse in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:03:13 2013 camille pire
// Last update Tue Nov 19 11:28:24 2013 camille pire
//

function	parse_sql(&$param, $fd)
{
  $in[0] = $param;
  for ($i = 1; !preg_match_all('#;$#', $param[count($param) - 1], $tab); $i++)
    {
      echo " > ";
      $param = decoup_params(strtolower(fgets($fd)));
      $in[$i] = $param;
    }
  for ($i = 0; isset($in[$i]); $i++)
    for ($j = 0; isset($in[$i][$j]); $j++)
      {
	$in[$i][$j] = preg_replace('#\\n$|;$#', '', $in[$i][$j]);
      if ($in[$i][$j] != ''
	  && !preg_match_all('#^ +$#', $in[$i][$j], $tab))
	$res[] = $in[$i][$j];
      }
  if (isset($res))
    {
      print_r($res);
      return $res;
    }
}