drop database szkola;
create database szkola;
use szkola;

create table uczniowie 
(
id_ucz int primary key auto_increment,
nazwisko varchar(20) not null,
imie varchar(10) not null,
pesel char(11) not null,
adres_ul varchar(20)not null, 
adres_nr varchar (3) not null,
miasto varchar(30) not null);

insert into uczniowie (nazwisko,imie,pesel,adres_ul,adres_nr,miasto)
			values
			('Abacki','Jan','95091202012','Nocna','21a','Gniezno'),
			('Babacki','Tomasz','96100102013','Gwiezdna','2','Gniezno'),
			('Cabacki','Jerzy','95110902056','Mierna','13b','Kutno'),
			('Dabcki','Tobiasz','94010398345','Bierna','3','Miastko'),
			('Ebacki','Adrian','95010198934','Marna','456','Mielno');

show tables;
describe uczniowie;
select * from uczniowie;