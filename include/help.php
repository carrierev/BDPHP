<?php
// help.php for  in /Users/valentin/Desktop/ProjetPHP/BDPHP/include
// 
// Made by Valentin Carriere
// Login   <carrie_v@etna-alternance.net>
// 
// Started on  Wed Nov 20 11:55:15 2013 Valentin Carriere
// Last update Fri Nov 22 10:15:58 2013 Valentin Carriere
//
function	help()
{
  aff_echo("\n
       Toutes commandes se termine par un ;\n\n
       QUIT : Permet de quitter le programme\n
       SHOW TABLES : Affiche les tables de la base de donnees\n
       DESC [nom_table] : Permet de decrire une table\n
       CREATE TABLE [nom_table] : Permet de creer une nouvelle table
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
		NOT_NULL : Definit un champs comme etant forcement different de NULL\n\n
        INSERT [nom_table] : Permet d'ajouter un enregistrement a une table
	INSERT [nom_table]
	(
		name_col = val[, ...]
	);\n\n
        TRUNCATE [nom_table] : Permet d'effacer tous les enregistrements d'une table\n
        DROP [nom_table] : Permet de detruire une table\n
        DELETE : Permet d'effacer les enregistrements d'une table qui correspondent a une ou plusieurs conditions
	DELETE
	FROM nom_table
	WHERE condition
	[AND condition_2 ...];\n\n

        SELECT : Permet d'afficher les informations de la base de donnes suivant des criteres de selection
	SELECT col_1 [, col2, ...]
	FROM nom_table_1 [, nom_table_2, ...]
	[WHERE condition_1 [AND condition_2 ...]]
	[ORDER BY col_tri [DESC]];\n");
  return (0);
}