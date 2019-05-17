create table public.admin(
id 			serial primary key, 
user_name 	varchar not null, 
password 	varchar not null
);

create table public.child(
id 			serial primary key, 
child_name 	varchar, 
password 	varchar
);

create table public.chore(
id 				serial primary key, 
c_description 	text not null, 
child 			integer references public.child(id), 
due_date		date, 
constraint fk_child foreign key(child) references public.child(id)
);

insert into public.admin(user_name, password) values('matt Pickett', 'Pickett92');

insert into public.child(child_name, password) values('Henry Pickett', 'Little');

insert into public.chore(c_description, child) values ('clean your room', 1);

insert into public.chore(c_description, child) values ('Do the laundry', 1);

insert into public.chore(c_description, child, due_date) values ('wash the dishes', 1, '2019-12-07');

