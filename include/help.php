<?php
// help.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Wed Nov 20 11:55:15 2013 Valentin Carriere
// Last update Wed Nov 20 12:15:15 2013 Valentin Carriere
//
function	help()
{
  echo "\n";
  echo "Toutes commandes se termine par un ;\n\n";
  echo "QUIT : Permet de quitter le programme\n";
  echo "SHOW TABLES : Affiche les tables de la base de donnees\n";
  echo "DESC [nom_table] : Permet de decrire une table\n";
  echo "CREATE TABLE [nom_table] : Permet de creer une nouvelle table
	CREATE TABLE [nom_table]
	(
		nom_col_1	type	[OPTIONS],
		nom_col_2	type	[OPTIONS],
		...
	);\n
	Les Types possibles sont:
		integer
		float
		bool
		string\n
	[options] : facultatif.
		PRIMARY_KEY : definit la cle primaire de la table. (Il ne peut en avoir qu'une)
		NOT_NULL : Definit un champs comme etant forcement different de NULL\n\n";
  echo "INSERT [nom_table] : Permet d'ajouter un enregistrement a une table
	INSERT [nom_table]
	(
		name_col = val[, ...]
	);\n\n";
  echo "TRUNCATE [nom_table] : Permet d'effacer tous les enregistrements d'une table\n";
  echo "DROP [nom_table] : Permet de detruire une table\n";
  echo "DELETE : Permet d'effacer les enregistrements d'une table qui correspondent a une ou plusieurs conditions
	DELETE
	FROM nom_table
	WHERE condition
	[AND condition_2 ...];\n\n";

  echo "SELECT : Permet d'afficher les informations de la base de donnes suivant des criteres de selection
	SELECT col_1 [, col2, ...]
	FROM nom_table_1 [, nom_table_2, ...]
	[WHERE condition_1 [AND condition_2 ...]]
	[ORDER BY col_tri [DESC]];\n";
}