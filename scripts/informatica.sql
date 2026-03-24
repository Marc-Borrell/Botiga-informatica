use mysql;
create user 'admin'@'localhost' identified by 'FjeClot26#';
create database informatica;
use informatica;
grant all privileges on informatica.* to 'admin'@'localhost';
