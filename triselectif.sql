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
		poids float(5.2),
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
		idhab int(5) not null auto_increment,
		adresse char(150),
		codep int(5) not null,
		CP int(5),
		ville varchar(100),
		type varchar(100),
		primary key(idhab),
		foreign key(codep) references poubelle
	);

create table usager
	(
		id int(5) not null auto_increment,
		nom varchar(50),
		idhab int(5) not null,
		prenom varchar(50),
		civilite enum("Femme", "Homme", "Autre"),
		datenaiss date,
		payement boolean,
		primary key(id),
		foreign key(idhab) references habitation
	);

insert into type_dechet values
	(1, "Verre", FALSE, "10.6");

insert into levee values
	(1, "2018-04-16", "24.2");

insert into poubelle values
	(1, 1, 1, "vert", 1);

insert into habitation values
	(1,"11 rue du Leader Price", 1, 93120, "Saint-Denis-Capital", "Residence");

insert into usager values
	(1,"JEAN", 1, "Pierre", "Autre", "1988-08-07", TRUE);
