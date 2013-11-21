<?php
// file_read.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Thu Nov 21 11:29:48 2013 Valentin Carriere
// Last update Thu Nov 21 11:43:25 2013 Valentin Carriere
//
function	read_file($file[1])
{
  $ptr = fopen($file[1], "r");
  $contenu = fread($ptr, filesize($file[1]));
  $cmd = parse_sql($contenu, $ptr);
  print_r($cmd);
}

