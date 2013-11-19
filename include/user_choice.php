<?php
// user_choice.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Tue Nov 19 15:56:40 2013 Valentin Carriere
// Last update Tue Nov 19 16:03:26 2013 Valentin Carriere
//
function	user_choice($cmd, $file)
{
  if (strcmp($cmd[0], 'drop') == 1)
    drop($file, $lineCmd);
  else if (strcmp($cmd[0], 'create') == 1)
    createTab($lineCmd, $file);
  else if (strcmp($cmd[0], 'desc') == 1)
    desc($lineCmd, $file);
  else if (strcmp($cmd[0], 'insert') == 1)
    insert($lineCmd, $file);
  else if (strcmp($cmd[0] , 'select' ) == 1)
    select($lineCmd, $file);
  else if (strcmp($cmd[0], 'truncate') == 1)
    truncate($lineCmd, $file);
  else
    echo "Syntax error\n";
  return (0);
}