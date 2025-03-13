/* Made By Noah Brown */

create database sublist; 

use sublist ; 
create table subs (id int primary key auto_increment, firstName varchar(255), 
                    lastName varchar(255), email varchar(255) ); 

insert into subs (firstName, lastName, email) values ("Noah", "Brown", "nbrown9@una.edu"); 
insert into subs (firstName, lastName, email) values ("Brandon", "Smith", "bsmith42@una.edu "); 
insert into subs (firstName, lastName, email) values ("Milly", "Trejo", "mtrejo1@una.edu"); 
insert into subs (firstName, lastName, email) values ("Anna", "Shannon", "<>"); 
