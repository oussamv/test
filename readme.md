create database ft_store ;
use ft_store;
create table users (
	id_user int primary key auto_increment,
    user_name varchar(50),
    email varchar(50),
    pwd varchar(20));
       
    
SELECT * FROM users;