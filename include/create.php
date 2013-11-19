<?php
// create.php for create in /Users/camillepire/github/BDPHP/include
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Tue Nov 19 12:38:23 2013 camille pire
// Last update Tue Nov 19 13:01:09 2013 camille pire
//

//cree un fichier avec le nom passer en paramettre dans
// le repertoire passer en paramettre

function	file_create($path, $name)
{
  touch($path . $name);
}