drop database if exists triselectif;
create database triselectif;
	use triselectif;

create table type_dechet
	(
		code int(5) not null auto_increment,
		libelle varchar(100),
		recyclable boolean,
		tarif float(5.2),
		primary key(code)
	);

create table levee
	(
		num int(5) not null auto_increment,
		datelevee date,
		poids float(5,2),
		primary key(num)
	);

create table poubelle
	(
		codep int(5) not null auto_increment,
		code int(5) not null,
		num int(5) not null,
		couleur enum("jaune", "vert", "noir"),
		nblevees int(3),
		primary key(codep),
		foreign key(code) references type_dechet,
		foreign key(num) references levee
	);

create table habitation
	(
		adresse char(150) not null,
		codep int(5) not null,
		CP int(5),
		ville varchar(100),
		type varchar(100),
		primary key(adresse),
		foreign key(codep) references poubelle
	);

create table usager
	(
		nom varchar(50) not null,
		adresse char(150) not null,
		prenom varchar(50),
		civilite enum("Femme", "Homme", "Autre"),
		datenaiss date,
		primary key(nom),
		foreign key(adresse) references adresse
	);

insert into type_dechet values
	(1, "Verre", FALSE, "10.6");
