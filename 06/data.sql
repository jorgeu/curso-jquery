create table persona (
  cedula bigint primary key,
  nombre varchar(40),
  direccion varchar(100)
) engine=innodb;

insert into persona values (123,'Pedro Jesús','san jacinto');
insert into persona values (423,'Maria Gonzalez','mara norte');
insert into persona values (9884,'Jesús Martinez','amparo');
insert into persona values (23344,'Jorge Urdaneta','veritas');
insert into persona values (897277,'Diana Delgado','tierra negra');
