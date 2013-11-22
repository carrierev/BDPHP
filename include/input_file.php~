<?php
// input_file.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Thu Nov 21 15:01:03 2013 Valentin Carriere
// Last update Fri Nov 22 10:16:57 2013 Valentin Carriere
//
function	input_file($file)
{
  $ptr = fopen($file[1], "r");
  $contenu = fread($ptr, filesize($file[1]));
  $params = decoup_line($contenu);
  $cmd = decoup_array($params);
  for ($i = 0; isset($cmd[$i]) && $i < (count($cmd) - 1); $i++)
    user_choice($cmd[$i], $file);
}

function        decoup_line($line)
{
  $res = preg_replace('#[ ]{2,}|[\t]#', ' ', $line);
  return explode(";", $res);
}

function        decoup_array($test)
{
  for ($i = 0; isset($test[$i]); $i++)
    {
      $temp = explode(" ", $test[$i]);
      $temp = implode(PHP_EOL, $temp);
      $temp = explode("\n", $temp);
      for ($j = 0; isset($temp[$j]); $j++)
	{
	  $temp[$j] = trim(preg_replace('/\s\s+/',' ', $temp[$j]));
	  $array[$i][$j] = $temp[$j];
	}
    }
   for ($i = 1; isset($array[$i]); $i++)
    {
      unset($array[$i][0]);
      $array[$i] = array_values($array[$i]);
    }
   $final_array = add_coma($array);
   for ($i = 1; isset($final_array[$i]); $i++)
     $final_array[$i] = array_values($final_array[$i]);
   return $final_array;
}

function	add_coma($array)
{
  $k = 0;
  for ($i = 0; isset($array[$i]); $i++)
    {
      for ($j = 0; isset($array[$i][$j]); $j++)
	{
	  if (preg_match_all('#,$#', $array[$i][$j], $tab))
	    {
	      $final_array[$i][$k] = preg_replace('#,$#', '', $array[$i][$j]);
	      $k++;
	      $final_array[$i][$k] = ",";
	    }
	  else
	    $final_array[$i][$k] = $array[$i][$j];
	  $k++;
	}
    }
  return $final_array;
}