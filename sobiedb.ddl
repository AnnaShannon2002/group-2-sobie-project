/*
*  So far - attributes:
*    fname, lname, & email
*/

create database sobiedb;

use sobiedb;
create table student (id int primary key auto_increment, fname varchar(25), lname varchar(25), email varchar(50));


insert into student (fname, lname, email) values ("Jane", "Doe", "jdoe@una.edu");
