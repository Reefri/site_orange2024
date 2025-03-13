drop database if exists orange_25_Slam2A ;
create database orange_25_Slam2A ;
use orange_25_Slam2A;

create table client(
    idclient int(5) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    adresse varchar(50),
    email varchar(50),
    tel varchar(20),
    primary key(idclient)
);

create table technicien(
    idtechnicien int(5) not null auto_increment,
    nom varchar(50),
    prenom varchar(50),
    specialite enum ("telephonie","box","autre"),
    email varchar(50),
    tel varchar(20),
    primary key(idtechnicien)
);

create table telephone(
    idtelephone int(5) not null auto_increment,
    designation varchar(50),
    prixAchat float,
    dateAchat date,
    idclient int(5) not null,
    primary key(idtelephone),
    foreign key (idclient) references client(idclient)
);
 
 create table intervention (
    idinter int(5) not null auto_increment,
    description text,
    prixInter float,
    dateInter date,
    idtechnicien int(5) not null,
    idtelephone int(5) not null,
    primary key (idinter),
    foreign key (idtechnicien) references technicien (idtechnicien),
    foreign key (idtelephone) references telephone(idtelephone)

 );


