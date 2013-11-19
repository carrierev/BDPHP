<?php
// function.php for function in /Users/camillepire/github/BDPHP
//
// Made by camille pire
// Login   <pire_c@etna-alternance.net>
//
// Started on  Tue Nov 19 16:38:38 2013 camille pire
// Last update Tue Nov 19 16:59:09 2013 camille pire
//

function	createTab($cmd, $file)
{
  $file_name = $cmd[2] . '.table';
  file_create('./database/table/', $file_name);
  $dbline = $cmd[2] . ";";
  for ($i = 4; isset($cmd[$i + 1]); $i++)
    {
      if ($cmd[$i] != ',')
	if ($cmd[$i + 1] == ',')
	  $dbline .= $cmd[$i] . ';';
	else
	  $dbline .= $cmd[$i] . ',';
    }
  $dbline .= './database/table/' . $file_name . '#';
  write_db('./database/' . $file[0] . '.table', $dbline);
}