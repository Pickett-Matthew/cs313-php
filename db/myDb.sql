create table myUsers(
id 			serial not null, 
username 	varchar(225), 
password 	varchar(225),
primary key (id) 
);

create table child (
id 			serial, 
childname 	varchar(225), 
age 		int, 
primary key (id)
);

create table chore (
id 				serial, 
workerID 		int not null, 			
description 	text, 
dueBy 			date, 
primary key (id), 
foreign key (workerId) references child(id)
);

insert into myUsers(username, password) values ('matt Pickett', 'jordan');
insert into myUsers(username, password) values ('whitney Pickett', 'ello');

insert into child(childname, age) values ('henry Pickett', 12);
insert into child(childname, age) values ('Jane Pickett', 9);

insert into chore(workerId, description, dueBy) values (1, 'clean your room', '2019-12-12');
insert into chore(workerId, description, dueBy) values (2, 'wash the dishes', '2019-12-12');

select * from chore;
select * from child;