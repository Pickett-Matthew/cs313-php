drop database conference;

create table public.user(
id 			serial primary key, 
username 	varchar, 
password 	varchar

);

create table public.speakers(
id 				serial primary key,
speaker_name 	varchar
	

);

create table public.conference(
id 			serial primary key,
isFall 		boolean, 
year 		int

);


create table public.notes(
id 				serial 	not null primary key, 
user_id 		int not null references public.user(id), 
speaker_id 		int references public.speakers(id), 
conference_id 	int not null references public.conference(id), 
note_text 		text not null

);


insert into public.user values(
default, 
'matt-pickett',
'password'
);

insert into public.speakers values(
default, 
'Holland'
);

insert into public.conference values(
default, 
true, 
2012
);

insert into public.notes values(
default, 
1, 
1, 
1, 
'Elder Holland gave an incredible talk about having faith in Jesus Christ'
);
 
select * from public.notes;







