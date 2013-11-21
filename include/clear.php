<?php
// clear.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Thu Nov 21 09:58:58 2013 Valentin Carriere
// Last update Thu Nov 21 09:59:15 2013 Valentin Carriere
//
function	clear()
{
  echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
  return (0);
}