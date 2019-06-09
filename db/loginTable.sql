

create table login(
id 			serial primary key, 
username 	varchar(80) not null unique, 
password 	varchar(80) not null
);

select * from login;


SELECT id from child where childname = 'Henry Pickett';

insert into chore(workerid, description, c_value) VALUES(4, 'clean the computer', 5);

drop table login;

select chore.description, child.childname, c_value from chore inner join child on chore.workerid = child.id;