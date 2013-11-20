<?php
// user_choice.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Tue Nov 19 15:56:40 2013 Valentin Carriere
// Last update Wed Nov 20 09:14:08 2013 Valentin Carriere
//
function	user_choice($cmd, $file)
{
  if ($cmd[0] == 'drop')
    drop($cmd, $file);
  else if ($cmd[0] == 'create' && $cmd[1] ==  'table')
    createTab($cmd, $file);
  else if ($cmd[0] == 'show' && $cmd[1] ==  'tables')
    showtab(read_db($file[0]));
  else if ($cmd[0] == 'desc')
    desc($cmd, $file);
  else if ($cmd[0] == 'insert')
    insert($cmd, $file);
  else if ($cmd[0] == 'select')
    select($cmd, $file);
  else if ($cmd[0] == 'truncate')
    truncate($cmd, $file);
  else
    echo "Syntax error\n";
  return (0);
}