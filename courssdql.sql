
-Mysql 
MariaDb
PostgreSQL

Pour se connecter a une base de donnée mysql

mysql -hlocalhost  -uroot -priftone07

mysql  -uroot -p

u = utilisateur
p = password
h = hote

//Pour creer une base de donnée

create database nom_base_de_donnee;
create database nom_bd CHARACTER SET 'utf8';

//Afficher les bases donnée

show databases;
//selectionner la base de donnee

USE nom_base_de_donnee;


//creation de la table

CREATE TABLE region(
    code_region INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom_region varchar(75) NOT NULL);


CREATE TABLE departement(
	code_departement INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nom_departement VARCHAR(75) NOT NULL,
	code_region INT NOT NULL,
	nom_region VARCHAR(75) NOT NULL
);

//Afficher les tables de la base de donnée

SHOW tables;




CREATE TABLE nomtable(
	nom_colone type_colonne
);

CREATE TABLE salles(
	nom_salle varchar(50),
	taille int
);

CREATE TABLE personnels( 
	prenom varchar(75) , 
	nom varchar(25), 
	biographie text, 
	age int, 
	date_de_naissance date
	);



//Insert

INSERT INTO nom_table(colone1, colone2,colone3) VALUES ('valeur1','valeur2','valeur3');

INSERT INTO region(nom_region) VALUES ('Dakar');
INSERT INTO region(nom_region) VALUES ('Kaolack');
INSERT INTO region(nom_region) VALUES ('Thies');

INSERT INTO region(nom_region) VALUES ('sedhiou'),('Kolda');

INSERT INTO departement(nom_departement,code_region,nom_region) 
VALUES ('Dakar',1,'dakar');


INSERT INTO departement(nom_departement,code_region,nom_region) 
VALUES ('Dakar',102,'dakar');


INSERT INTO departement VALUES ('Dakar',102,'dakar');




-- Afficher les element d'une base de donnée

SELECT * FROM nomtable;

SELECT * from region where code_region > 3;

SELECT * from region  ORDERBY('nom_region','ASC') ;

DESC
ASC










