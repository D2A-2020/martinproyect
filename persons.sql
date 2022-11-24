-- drop schema martindb;
create schema if not exists martindb;
use martindb;

create table if not exists Person(
	id int primary key AUTO_INCREMENT,
    ci int  unique key not null,
    `name`  varchar(16) not null,
    surname varchar(16)  not null,
    `password` varchar(50) unique key not null
);

insert into Person(ci,`name`, surname, `password`) 
values(55618820, "juan", "perez", "mateAmargo1");
insert into Person(ci,`name`, surname, `password`) 
values(55618821, "sofia", "sosa", "mateAmargo2");

