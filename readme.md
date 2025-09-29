create database ft_store ;
use ft_store;
create table users (
	id_user int primary key auto_increment,
    user_name varchar(50),
    email varchar(50),
    pwd varchar(20));
    
create table shoes (
id_shoes int primary key auto_increment,
name_shoes varchar(50) not null,
qte int not null,
prix_shoes float not null
);
create table gloves (
id_gloves int primary key auto_increment,
name_gloves varchar(50) not null,
qte int not null,
prix_gloves float not null
);
create table socks (
id_socks int primary key auto_increment,
name_socks varchar(50) not null,
qte int not null,
prix_socks float not null
);


SELECT * FROM users;

