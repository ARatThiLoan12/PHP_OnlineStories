drop database if exists MVC;
create database MVC;
use MVC;

drop table if exists user;
create table user(
id int auto_increment primary key,
fullname varchar(100),
username varchar(100),
pass varchar(10));

insert into user(fullname, username, pass) values ('Nguyen Van Hung', 'admin', 'admin'), ('Le Thi Lan', 'lan123', 'lan123');

alter table user add column role varchar(20);
insert into user(fullname, username, pass, role) values ('Nguyen Thi Nhi', 'nhi', 'nhi', 'user');