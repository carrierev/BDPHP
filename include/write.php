<?php
// write.php for write in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Mon Nov 18 16:03:42 2013 camille pire
// Last update Tue Nov 19 15:55:34 2013 Valentin Carriere
//

//ecriture dans la base

function	write_db($name, $str)
{
  $fd = fopen($name, 'a+');
  fwrite($fd, $str);
  fwrite($fd, "\n");
  fclose($fd);
}

