create table topic(
id 		serial primary key, 
name 	varchar(80)
);

insert into topic(name) values('Faith');
insert into topic(name) values('Sacrifice');
insert into topic(name) values('Charity');

select * from scripture;

create table linkScript(
scripture_id 	int references scripture(id), 
topic_id  		int references topic(id)
);



SELECT name from topic t INNER JOIN linkscript sc ON sc.topic_id = t.id;