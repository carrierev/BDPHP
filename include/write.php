<?php
// write.php for write in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:03:42 2013 camille pire
// Last update Tue Nov 19 14:30:21 2013 camille pire
//

//ecriture dans la base

function	write_db($name, $str)
{
  $fd = fopen($name, 'a+');
  fwrite($fd, $str);
  fclose($fd);
}