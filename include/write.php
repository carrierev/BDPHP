<?php
// write.php for write in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:03:42 2013 camille pire
// Last update Tue Nov 19 17:47:45 2013 camille pire
//

//ecriture dans la base

function	write_db($name, $str)
{
  $fd = fopen($name, 'a+');
  fwrite($fd, $str);
  fwrite($fd, "\n");
  fclose($fd);
}

function	write_tb($name, $str)
{
  $fd = fopen('./database/table/' . $name, 'a+');
  fwrite($fd, $str);
  fwrite($fd, "\n");
  fclose($fd);
}