create database knitjoy;
use knitjoy;

create table users(
id int primary key auto_increment,
login varchar(100) not null,
email varchar(50) not null,
password varchar(32) not null,
role enum('Admin','Seller','User') not null);

create table aducation(
id int primary key auto_increment,
title varchar(255) not null,
text varchar(255) not null);

create table catalog(
id int primary key auto_increment,
tittle varchar(100) not null,
price decimal(8,0) not null,
imade varchar(100) not null);