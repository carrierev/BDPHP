<?php
// user_choice.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Tue Nov 19 15:56:40 2013 Valentin Carriere
// Last update Tue Nov 19 18:18:10 2013 camille pire
//
function	user_choice($cmd, $file)
{
  if (strcmp($cmd[0], 'drop') == 1)
    drop($cmd, $file);
  else if ($cmd[0] == 'create' && $cmd[1] ==  'table')
    createTab($cmd, $file);
  else if ($cmd[0] == 'show' && $cmd[1] ==  'tables')
    showtab(read_db($file[0]));
  else if (strcmp($cmd[0], 'desc') == 1)
    desc($cmd, $file);
  else if (strcmp($cmd[0], 'insert') == 1)
    insert($cmd, $file);
  else if (strcmp($cmd[0] , 'select' ) == 1)
    select($cmd, $file);
  else if (strcmp($cmd[0], 'truncate') == 1)
    truncate($cmd, $file);
  else
    echo "Syntax error\n";
  return (0);
}