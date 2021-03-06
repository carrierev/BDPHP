<?php
// user_choice.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
//
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
//
// Started on  Tue Nov 19 15:56:40 2013 Valentin Carriere
// Last update Fri Nov 22 16:27:02 2013 Valentin Carriere
//
function	user_choice($cmd, $file)
{
  if ($cmd[0] == 'drop' && isset($cmd[1]))
    drop($file, $cmd);
  else if ($cmd[0] == 'clear')
    clear();
  else if ($cmd[0] == 'help')
    help();
  else if ($cmd[0] == 'create' && $cmd[1] ==  'table')
    createTab($cmd, $file);
  else if ($cmd[0] == 'show' && $cmd[1] ==  'tables')
    showtab(read_db($file[0]));
  else if ($cmd[0] == 'desc' && isset($cmd[1]))
    desctab($file, $cmd);
  else if ($cmd[0] == 'insert')
    insert($cmd, $file);
  else if ($cmd[0] == 'select' && $cmd[2] == 'from')
    select($file, $cmd);
  else if ($cmd[0] == 'truncate' && isset($cmd[1]))
    truncate($file, $cmd);
  else if ($cmd[0] == 'delete' && $cmd[1] == 'from' && isset($cmd[2]))
    delete($file, $cmd);
  else
    aff_echo("Syntax error\n");
  return (0);
}