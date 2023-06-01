-- CREATE table IF not EXISTS User(
--     NomUser varchar(150) NOT NULL,
--     PrenomUser varchar(150) NOT NULL,
--     NationlityUser varchar(150) NOT NULL,
--     TelephooneUser varchar(150) NOT NULL,
--     DateNaissanceUser DATETIME NOT null,
--     EmailUser varchar(150) NOT NULL,
--     Password varchar(150) NOT NULL
-- )

-- CREATE table IF not EXISTS recipes(
--     title varchar(150) NOT NULL,
--     content varchar(150) NOT NULL,
--     slug varchar(150) NOT NULL,
--     duration smallint(1) NOT NULL,
--     online boolean NOT NULL,
--     create_at DATETIME NOT NULL
-- )

-- insert into recipes(
--     title,
--     slug,
--     content,
--     duration,
--     online,
--     create_at
-- )values(
--     'Soupe',
--     'soupe',
--     'Contenu de test',
--     30,
--     TRUE,
--     1642659897);

/*-----------------------------------------------------*/
-- Create table Client(
--     client_id Number(10) CONSTRAINT PK_client_id PRIMARY KEY,
--     Prenom_client VARCHAR2(20) NOT NULL,
--     Nom_client VARCHAR2(20) NOT NULL,
--     Ville_client VARCHAR2(20) NOT NULL
-- );

-- INSERT INTO Client VALUES(1,'Pierre','Dupond','Paris');
-- INSERT INTO Client VALUES(6,'Pierre','Leroy','Lyon');
-- INSERT INTO Client VALUES(2,'Sabrina','Durant','Nantes');
-- INSERT INTO Client VALUES(3,'Julien','Martin','Lyon');
-- INSERT INTO Client VALUES(4,'Davide','Bernard','Marseille');
-- INSERT INTO Client VALUES(5,'Marie','Leroy','Grenoble');
-- INSERT INTO Client VALUES(7,'Wirdane','Moussa','Nice');
-- SELECT DISTINCT Prenom_client
-- FROM client;
-- SELECT *
-- FROM client
-- WHERE Ville_client in ('Paris','Nantes','Lyon');

/*----------------------------------------------------*/


/*----------------------------------------------------*/
-- Create table Produit(
--     produit_id Number(10) CONSTRAINT PK_produit_id PRIMARY KEY,
--     nom_produit VARCHAR2(20) NOT NULL,
--     Description_produit VARCHAR2(40) NOT NULL,
--     prix_produit NUMBER
-- );

-- INSERT INTO Produit VALUES(1,'Ecrant','Ecran de grandes taille', 399.99);
-- INSERT INTO Produit VALUES(2,'Clavier','Clavier sans fil',27);
-- INSERT INTO Produit VALUES(3,'Sourie','Sourie sans fil', 24);
-- INSERT INTO Produit VALUES(4,'Ordinateur protable','Grande autonome et sacoche offerte.', 700);
-- INSERT INTO Produit VALUES(5,'Tablete','Slime avec un ecran de glace', 883);
-- INSERT INTO Produit VALUES(6,'Smart-phone','Telephone Androide', 325);
-- SELECT nom_Produit as libelle 
-- FROM produit;
----------------------- l'operateur AND ----------------------------------
-- SELECT * FROM Produit
-- WHERE nom_produit = 'Tablete' AND prix_produit  > 20;
----------------------- l'operateur OR ----------------------------------
-- SELECT * FROM Produit
-- WHERE nom_produit = 'Tablete' OR nom_produit = 'Smart-phone';
----------------------- les operateurs OR , AND ----------------------------------
-- SELECT * FROM Produit
-- WHERE nom_produit = 'Tablete' AND prix_produit  > 20
-- OR (nom_produit = 'Clavier' OR prix_produit  < 200);
/*--------------------------------------------------------------------------*/


/*--------------------------------------------------------------------------*/
-- Create table Produit_Liste(
--     Produit_Liste_id Number(10) CONSTRAINT PK_Produit_Liste_id PRIMARY KEY,
--     nom_Produit VARCHAR2(20) NOT NULL,
--     categorie VARCHAR2(20) NOT NULL,
--     stock_Produit NUMBER,
--     prix_category NUMBER
-- );

-- INSERT INTO Produit_Liste VALUES(1,'Ecrant','informatique', 5, 399.99);
-- INSERT INTO Produit_Liste VALUES(2,'Clavier','informatique', 8,27);
-- INSERT INTO Produit_Liste VALUES(3,'Sourie','informatique', 19, 24);
-- INSERT INTO Produit_Liste VALUES(4,'Ordinateur','informatique', 32, 700);
-- INSERT INTO Produit_Liste VALUES(5,'Tablete','informatique', 65, 883);
-- INSERT INTO Produit_Liste VALUES(6,'Smart-phone','informatique', 157, 325);
-- INSERT INTO Produit_Liste VALUES(7,'Crayon','Fourniture', 147, 325);
/*--------------------------------------------------------------------------*/

/*--------------------------------------------------------------------------*/
-- Create table IF NOT EXISTS utilisateur(
--     id Number(10) CONSTRAINT PK_utilisateur_id PRIMARY KEY,
--     nom VARCHAR2(20) NOT NULL,
--     date_inscription DATE NOT NULL
-- );

-- INSERT INTO utilisateur VALUES(1,'Maurice', '02/03/2012');
-- INSERT INTO utilisateur VALUES(2,'Simon', '05/03/2012');
-- INSERT INTO utilisateur VALUES(3,'Chloe', '14/04/2012');
-- INSERT INTO utilisateur VALUES(4,'Marie', '15/04/2012');
-- INSERT INTO utilisateur VALUES(5,'Clementine', '13/01/2013');
-- SELECT date_inscription 
-- from utilisateur;

/*-------------------------------------------------------------------------*/

/*-------------------------------------------------------------------------*/
-- Create table IF NOT EXISTS  utilisateur_Abonne (
--     id Number(10) CONSTRAINT PK_utilisateur_Abonne_id PRIMARY KEY,
--     nom VARCHAR2(20) NOT NULL,
--     date_inscription DATE NOT NULL,
--     fk_adresse_livraison_id Number(10),
--     fk_adresse_facturation_id Number(10)
-- );

-- INSERT INTO utilisateur_Abonne VALUES(1,'Maurice', '02/03/2012', 12, 19);
-- INSERT INTO utilisateur_Abonne VALUES(2,'Simon', '05/03/2012', Null, Null);
-- INSERT INTO utilisateur_Abonne VALUES(3,'Chloe', '14/04/2012', 13, 14);
-- INSERT INTO utilisateur_Abonne VALUES(4,'Marie', '15/04/2012', Null, Null);
-- INSERT INTO utilisateur_Abonne VALUES(5,'Clementine', '13/01/2013', 23, 18);

-- SELECT nom
-- FROM utilisateur_Abonne
-- WHERE nom IN ( 'Maurice', 'Marie', 'Thimoté' );

-- SELECT *
-- FROM utilisateur_Abonne
-- WHERE date_inscription BETWEEN '02/03/2012' AND '15/04/2012';

-- SELECT *
-- FROM utilisateur_Abonne
-- WHERE id NOT BETWEEN 4 AND 10;
/*-------------------------------------------------------------------------*/


/*-------------------------------------------------------------------------*/
/*-------------------------- L'operateur IN -------------------------------*/
-- Create table IF NOT EXISTS adresse(
--     id Number(10) CONSTRAINT PK_id PRIMARY KEY,
--     id_user Number(10),
--     addr_rue VARCHAR2(40) NOT NULL,
--     addr_code_postal NUMBER,
--     addr_ville VARCHAR2(20) NOT NULL
-- );

-- INSERT INTO adresse VALUES(1,23,'34 Rue Abassindaw', 8734, 'DAKAR');
-- INSERT INTO adresse VALUES(2,10,'36 Rue de Volovolo', 7374, 'MORONI');
-- INSERT INTO adresse VALUES(3,18,'27 Rue Moscova', 1623, 'MOSCOU');
-- INSERT INTO adresse VALUES(4,29,'19 Rue de PISKA', 16253, 'TANANARIVO');
-- INSERT INTO adresse VALUES(5,34,'21 Rue du Moulin Collet', 75006, 'PARIS');
-- INSERT INTO adresse VALUES(6,17,'35 Rue Madeleine pelletier',25250, 'BOURNOIS');
-- INSERT INTO adresse VALUES(7,43,'21 Rue du Moulin Collet',75006, 'PARIS');
-- INSERT INTO adresse VALUES(8,67,'41 Rue Marcel de la Provote',76430, 'GRAIMBOUVILLE');
-- INSERT INTO adresse VALUES(9,68,'18 Rue de Navarre',75009, 'PARIS');

-- SELECT *
-- FROM adresse
-- WHERE addr_ville IN ( 'PARIS', 'GRAIMBOUVILLE' );
/*-------------------------------------------------------------------------*/


/*-------------------------------- L'operateur LIKE -----------------------*/
-- SELECT *
-- FROM client
-- where Ville_client LIKE '%i%';


/*-------------------------------- L'operateur IS NULL / IS NOT NULL -----------------------*/
-- SELECT *
-- FROM utilisateur_Abonne
-- where fk_adresse_livraison_id is null
-- OR fk_adresse_livraison_id IS NOT NULL;


/*-------------------------------- L'operateur GROUPE BY -----------------------*/
-- Create table IF NOT EXISTS achat (
--     id Number(10) CONSTRAINT PK_achat_id PRIMARY KEY,
--     client VARCHAR2(20) NOT NULL,
--     tarif Number,
--     date_achat DATE NOT NULL
-- );

-- INSERT INTO achat VALUES(1,'Maurice',986, '02/03/2012');
-- INSERT INTO achat VALUES(2,'Simon',179, '05/03/2012');
-- INSERT INTO achat VALUES(3,'Chloe',18, '14/04/2012');
-- INSERT INTO achat VALUES(4,'Marie',84, '15/04/2012');
-- INSERT INTO achat VALUES(5,'Clementine',193, '13/01/2013');
-- SELECT client,tarif, sum(tarif)
-- FROM achat
-- group by tarif;

/*-------------------------------- L'operateur HAVING -----------------------*/
-- Syntaxe
-- L’utilisation de HAVING s’utilise de la manière suivante :
-- SELECT colonne1, SUM(colonne2)
-- FROM nom_table
-- where condition
-- GROUP BY colonne1
-- HAVING fonction(colonne2) operateur valeur

-- SELECT client, SUM(tarif)
-- FROM achat
-- where id > 1
-- GROUP BY client
-- HAVING SUM(tarif) > 40;

/*-------------------------------- L'operateur ORDER BY -----------------------*/
-- Syntaxe
-- Une requête où l’ont souhaite filtrer l’ordre des résultats utilise la commande ORDER BY de la sorte :
-- SELECT colonne1, colonne2, colonne3
-- FROM table
-- ORDER BY colonne1 DESC, colonne2 ASC, ...Ncolone 

-- SELECT *
-- FROM utilisateur_Abonne
-- ORDER BY nom desc;

-- SELECT *
-- FROM utilisateur_Abonne
-- ORDER BY nom, date_inscription DESC;

/*-------------------------------- L'operateur La clause LIMIT -----------------------*/
-- Syntaxe simple
-- La syntaxe commune aux principales système de gestion de bases de données est la suivante :
-- SELECT *
-- FROM table
-- LIMIT 10

-- SELECT *
-- FROM utilisateur_Abonne
-- LIMIT 1, 2

/*-------------------------------- L'operateur La clause LIMIT -----------------------*/
-- Syntaxe
-- L’utilisation du CASE est possible de 2 manières différentes :
-- • Comparer une colonne à un set de résultat possible
-- • Élaborer une série de conditions booléennes pour déterminer un résultat
-- Comparer une colonne à un set de résultat
-- Voici la syntaxe nécessaire pour comparer une colonne à un set d’enregistrement :
-- CASE a
--     WHEN 1 THEN 'un'
--     WHEN 2 THEN 'deux'
--     WHEN 3 THEN 'trois'
--     ELSE 'autre'
-- END

-- Create table achat_Produit(
--     id Number(10) CONSTRAINT PK_achat_Produit_id PRIMARY KEY,
--     nom VARCHAR2(20) NOT NULL,
--     marge_pourcentage Number(5),
--     surcharge Number,
--     prix_unitaire Number(10),
--     quantite Number(10)
-- );

-- INSERT INTO achat_Produit VALUES(1,'Produit A',1  , 1.3 , 6 , 3);
-- INSERT INTO achat_Produit VALUES(2,'Produit B',1.5, 1.5 , 8 , 4);
-- INSERT INTO achat_Produit VALUES(3,'Produit C',0.2, 0.75, 7 , 92);
-- INSERT INTO achat_Produit VALUES(4,'Produit D',0.9, 1   , 15, 2);
-- INSERT INTO achat_Produit VALUES(5,'Produit E',1  , 1.7 , 13, 18);
-- INSERT INTO achat_Produit VALUES(7,'Produit G',1  , 2   , 17, 28);

-- 1)
-- SELECT id, nom, marge_pourcentage, prix_unitaire, quantite,
--  CASE
--     WHEN marge_pourcentage = 1 THEN 'Prix ordinaire'
--     WHEN marge_pourcentage > 1 THEN 'Prix supérieur à la normale'
--     ELSE 'Prix inférieur à la normale'
--  END
--  as info
-- FROM achat_Produit
-- order by marge_pourcentage;

-- 2)
-- SELECT id, nom, marge_pourcentage, prix_unitaire, quantite,
--  CASE
--     WHEN marge_pourcentage = 1 THEN prix_unitaire
--     WHEN marge_pourcentage > 1 THEN prix_unitaire*2
--     ELSE prix_unitaire / 2
--  END
--  as PrixUT
-- FROM achat_Produit
-- order by marge_pourcentage;

-- 3)
-- SELECT id as ID, nom, marge_pourcentage as Pourcentage, prix_unitaire as Prix, quantite,
--     CASE quantite
--         WHEN 0 THEN 'Erreur'
--         WHEN 1 THEN 'Offre de -5% pour le prochain achat'
--         WHEN 2 THEN 'Offre de -6% pour le prochain achat'
--         WHEN 3 THEN 'Offre de -8% pour le prochain achat'
--         ELSE 'Offre de -10% pour le prochain achat'
--     END
--  as info
-- FROM achat_Produit
-- order by marge_pourcentage;


/*-------------------- UPDATE avec CASE  ---------------------*/
-- UPDATE achat_Produit
-- SET quantite = (
--  CASE
--     WHEN surcharge < 1 THEN quantite + 1
--     WHEN surcharge > 1 THEN quantite - 1
--     ELSE quantite
--  END
-- );
-- SELECT id as ID, nom, marge_pourcentage as Pourcentage, surcharge, prix_unitaire as Prix, quantite,
--     CASE quantite
--         WHEN 0 THEN 'Erreur'
--         WHEN 1 THEN 'Offre de -5% pour le prochain achat'
--         WHEN 2 THEN 'Offre de -6% pour le prochain achat'
--         WHEN 3 THEN 'Offre de -8% pour le prochain achat'
--         ELSE 'Offre de -10% pour le prochain achat'
--     END
--  as info
-- FROM achat_Produit
-- order by marge_pourcentage;

/*-------------------- Les unions  ---------------------*/

-- Create table IF NOT EXISTS magasin_client(
--     id Number(10) CONSTRAINT PK_magasin_client_id PRIMARY KEY,
--     nom VARCHAR2(20) NOT NULL,
--     prenom VARCHAR2(20) NOT NULL,
--     ville VARCHAR2(20) NOT NULL,
--     date_naissance DATE NOT NULL,
--     totale_achat Number
-- );

-- INSERT INTO magasin_client VALUES(1, 'Leon'  , 'Maurice', 'Lyon'     , '1994/12/12', 384);
-- INSERT INTO magasin_client VALUES(2, 'Marie' , 'Simon'  , 'Lyon'     , '1994/12/12', 129);
-- INSERT INTO magasin_client VALUES(3, 'Sophie', 'Chloe'  , 'Paris'    , '1994/12/12', 14);
-- INSERT INTO magasin_client VALUES(4, 'Marcel', 'Marie'  , 'Paris'    , '1994/12/12', 27);
-- INSERT INTO magasin_client VALUES(5, 'Marion', 'Leroy'  , 'Marseille', '1994/12/12', 4);
-- INSERT INTO magasin_client VALUES(6, 'Paule' , 'Moreau' , 'Paris'    , '1994/12/12', 14);
-- INSERT INTO magasin_client VALUES(7, 'Marie' , 'Bernard', 'Marseille', '1994/12/12', 34);
-- INSERT INTO magasin_client VALUES(8, 'Marcel', 'Martin' , 'Lyon'     , '1994/12/12', 164);
-- INSERT INTO magasin_client VALUES(9,'Liza'      , 'Martin'   , 'Lyon'     , '1999/22/02', 4); // à supprimer


-- Create table IF NOT EXISTS magasin_client2(
--     id Number(10) CONSTRAINT PK_magasin_client2_id PRIMARY KEY,
--     nom VARCHAR2(20) NOT NULL,
--     prenom VARCHAR2(20) NOT NULL,
--     ville VARCHAR2(20) NOT NULL,
--     date_naissance DATE NOT NULL,
--     totale_achat Number
-- );

-- INSERT INTO magasin_client2 VALUES(1, 'Mounibe'   , 'Ibrahime' , 'Lyon'     , '1994/12/12', 384);
-- INSERT INTO magasin_client2 VALUES(2, 'Mounnissa' , 'Issa'     , 'Lyon'     , '1994/12/12', 129);
-- INSERT INTO magasin_client2 VALUES(3, 'Safana'    , 'youssouf' , 'Paris'    , '1994/12/12', 14);
-- INSERT INTO magasin_client2 VALUES(4, 'Angela'    , 'Marker'   , 'Paris'    , '1994/12/12', 27);
-- INSERT INTO magasin_client2 VALUES(5, 'Hafidha'   , 'Hafidhou' , 'Marseille', '1994/12/12', 4);
-- INSERT INTO magasin_client2 VALUES(6, 'Kassime'   , 'Abdereman', 'Paris'    , '1994/12/12', 14);
-- INSERT INTO magasin_client2 VALUES(7, 'Lory'      , 'Bernard'  , 'Marseille', '1994/12/12', 34);
-- INSERT INTO magasin_client2 VALUES(8, 'Liza'      , 'Martin'   , 'Lyon'     , '1994/12/12', 164);

/*---------------------  UNION il evite les doublons ---------------------------*/
-- SELECT * FROM magasin_client
-- UNION
-- SELECT * FROM magasin_client2;

/*------------------------------ UNION ALL  ------------------------------------*/
---  UNION ALL les doublons sont pris en charge
-- SELECT * FROM magasin_client
-- UNION ALL
-- SELECT * FROM magasin_client2;


/*---------------------------------- INTERSECT  -------------------------------*/
---  INTERSECT récupérer les enregistrements communs à 2 requêtes
-- SELECT * FROM magasin_client
-- INTERSECT
-- SELECT * FROM magasin_client2; // a revenir

/*---------------------------------- EXCEPTE / UNION  -------------------------------*/
-- Syntaxe
-- La syntaxe d’une requête SQL est toute simple :

-- SELECT * FROM table1
-- EXCEPT
-- SELECT * FROM table2

-- Cette requête permet de lister les résultats du table 1 sans inclure les enregistrements de la table 1
-- qui sont aussi dans la table 2.

-- SELECT * FROM magasin_client
-- EXCEPT
-- SELECT * FROM magasin_client2; 

-- Cette commande permet de récupérer les éléments de l’ensemble A sans prendre en compte les
-- éléments de A qui sont aussi présent dans l’ensemble B. Dans le schéma ci-dessous seule la zone
-- bleu sera retournée grâce à la commande EXCEPT (ou MINUS).

/*---------------------------------- INSERT INTO MULTIPLE  -------------------------------*/
-- DROP TABLE clients2;
-- CREATE TABLE IF NOT EXISTS clients2(
--     id INTEGER CONSTRAINT PK_id PRIMARY KEY  AUTOINCREMENT,
--     prenom VARCHAR2(20) not null,
--     nom VARCHAR2(20) NOT NULL,
--     ville VARCHAR2(20) not null,
--     age Number not null
-- );

-- INSERT INTO clients2 (prenom, nom, ville, age)
--  VALUES
--  ('Rébecca', 'Armand', 'Saint-Didier-des-Bois', 24),
--  ('Aimée', 'Hebert', 'Marigny-le-Châtel', 36),
--  ('Marielle', 'Ribeiro', 'Maillères', 27),
--  ( 'Hilaire', 'Savary', 'Conie-Molitard', 58);

--  SELECT * 
--  from clients2;


/*---------------------------- ON DUPLICATE KEY UPDATE -------------------------*/
-- Syntaxe
-- Cette commande s’effectue au sein de la requête INSERT INTO 
-- avec la syntaxe suivante :

-- INSERT INTO table (a, b, c)
-- VALUES (1, 20, 68)

-- ON DUPLICATE KEY UPDATE a=a+1
-- A noter : cette requête se traduit comme suit :

-- 1.) insérer les données a, b et c avec les données respectives de 1, 20 et 68
-- 2.) Si la clé primaire existe déjà pour ces valeurs alors seulement 
-- faire une mise à jour de a = a+1

-- INSERT INTO magasin_client2 ( nom, prenom, ville, date_naissance, totale_achat)
-- values ('Soule', 'Ali', 'Moroni', '1694/02/12', 384)
-- ON DUPLICATE KEY UPDATE id = id + 1; -- avec mysql

/*----------------------------  UPDATE -------------------------*/
-- La commande UPDATE permet d’effectuer des modifications sur des lignes existantes. Très souvent
-- cette commande est utilisée avec WHERE pour spécifier sur quelles lignes doivent porter la ou les
-- modifications.

-- Syntaxe
-- La syntaxe basique d’une requête utilisant UPDATE est la suivante :
-- UPDATE table
-- SET colonne_1 = 'valeur 1', colonne_2 = 'valeur 2', colonne_3 = 'valeur 3'
-- WHERE condition


-- UPDATE magasin_client2
-- set 
--     nom = 'Mounibe',
--     prenom ='YOUDOUF'
-- where id = 1;


/*----------------------------  DELETE -------------------------*/
-- Syntaxe
-- La syntaxe pour supprimer des lignes est la suivante :
-- DELETE FROM table
-- WHERE condition

/*----------------------------  MERGE -------------------------*/
-- Syntaxe
-- La syntaxe standard pour effectuer un merge consiste à utiliser une requête SQL semblable à celle
-- ci-dessous :

-- MERGE INTO table1
--  USING table_reference
--  ON (conditions)
--  WHEN MATCHED THEN
--  UPDATE SET table1.colonne1 = valeur1, table1.colonne2 = valeur2
--  DELETE WHERE conditions2
--  WHEN NOT MATCHED THEN
--  INSERT (colonnes1, colonne3)
--  VALUES (valeur1, valeur3)

-- Voici les explications détaillées de cette requête :
-- • MERGE INTO permet de sélectionner la table à modifier
-- • USING et ON permet de lister les données sources et la condition de correspondance
-- • WHEN MATCHED permet de définir la condition de mise à jour lorsque la condition est
-- vérifiée
-- • WHEN NOT MATCHED permet de définir la condition d’insertion lorsque la condition n’est pas
-- vérifiée
