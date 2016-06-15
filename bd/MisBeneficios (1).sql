drop schema misbeneficios;
create schema misbeneficios;
USE misbeneficios;

create table empresa(id_empresa int auto_increment, nombre_empresa varchar(100), primary key(id_empresa));
create table usuario_empresa(email_ue varchar(150), id_empresa int, nombre varchar(150), password varchar(100), primary key(email_ue), FOREIGN key(id_empresa) references empresa(id_empresa));
create table presupuesto(id_presupuesto int auto_increment, nombre varchar(100), presupuesto int, fecha_inicio date, fecha_final date, email_ue varchar(150), primary key(id_presupuesto), FOREIGN KEY(email_ue) references usuario_empresa(email_ue));
create table campana(id_campana int auto_increment, email_ue varchar(150), nombre varchar(100), descripcion varchar(250), presupuesto_campana int, id_presupuesto int, inicio date, fin date, primary key(id_campana), FOREIGN key(id_presupuesto) references presupuesto(id_presupuesto));

create table categoria(id_cat int auto_increment, nombre_cat varchar(150), primary key(id_cat));
create table subcategoria(id_subcat int auto_increment, nombre_subcat varchar(150), primary key(id_subcat));
create table enlace_cat(id_subcat int, id_cat int, primary key(id_subcat, id_cat), FOREIGN key(id_subcat) references subcategoria(id_subcat), FOREIGN key(id_cat) references categoria(id_cat));

create table convenio(id_convenio int auto_increment, nombre_convenio varchar(150), id_empresa int ,primary key(id_convenio), FOREIGN KEY(id_empresa) references empresa(id_empresa));
create table descuento(id_descuento bigint auto_increment, id_empresa int, id_convenio int, id_campana int,  id_subcat int, descuento varchar(150), descripcion text, imagen varchar(250), vigencia_inicio date, vigencia_fin date, contacto varchar(250), gasto int, creado datetime, primary key(id_descuento), FOREIGN key(id_empresa) references empresa(id_empresa), FOREIGN key(id_campana) references campana(id_campana), FOREIGN key(id_subcat) references subcategoria(id_subcat), FOREIGN key(id_convenio) references convenio(id_convenio));
create table usuario(email varchar(150), nombre varchar(150), apellido_p varchar(150), apellido_m varchar(150), password varchar(150), sexo char, nacimiento date, primary key(email));
create table save_convenio(email varchar(150), id_convenio varchar(50), primary key(email), FOREIGN key(email) references usuario(email));

create table favorito(id_descuento bigint, email varchar(150), primary key(id_descuento, email), FOREIGN key(id_descuento) references descuento(id_descuento), FOREIGN key(email) references usuario(email));
create table recordar(id_descuento bigint, email varchar(150), primary key(id_descuento, email), FOREIGN key(id_descuento) references descuento(id_descuento), FOREIGN key(email) references usuario(email));
create table compartir(id_descuento bigint, email varchar(150), contador int, primary key(id_descuento, email), FOREIGN key(id_descuento) references descuento(id_descuento), FOREIGN key(email) references usuario(email));


create table ubicacion(id_ubicacion int auto_increment, id_empresa int, direccion varchar(250), lat double, lon double, primary key(id_ubicacion), FOREIGN key(id_empresa) references empresa(id_empresa));
create table ubicacion_descuento(id_ubicacion int, id_descuento bigint, primary key(id_ubicacion, id_descuento), FOREIGN key(id_ubicacion) references ubicacion(id_ubicacion), FOREIGN key(id_descuento) references descuento(id_descuento));

create table historial_campana(id_historial_camp int auto_increment, email_ue varchar(100), nombre varchar(100), descripcion varchar(250), presupuesto_campana int, id_presupuesto int, inicio date, fin date, primary key(id_historial_camp), FOREIGN key(id_presupuesto) references presupuesto(id_presupuesto));
create table historial_descuento(id_historial_desc bigint auto_increment, id_empresa int, id_historial_camp int,  id_subcat int, descuento varchar(150), imagen varchar(250), vigencia_inicio date, vigencia_fin date, contacto varchar(250), gasto int, creado datetime, primary key(id_historial_desc), FOREIGN key(id_empresa) references empresa(id_empresa), FOREIGN key(id_historial_camp) references historial_campana(id_historial_camp), FOREIGN key(id_subcat) references subcategoria(id_subcat));

create table historial_favorito(id_historial_desc bigint, email varchar(150), primary key(id_historial_desc, email), FOREIGN key(id_historial_desc) references historial_descuento(id_historial_desc), FOREIGN key(email) references usuario(email));
create table historial_recordar(id_historial_desc bigint, email varchar(150), primary key(id_historial_desc, email), FOREIGN key(id_historial_desc) references historial_descuento(id_historial_desc), FOREIGN key(email) references usuario(email));
create table historial_compartir(id_historial_desc bigint, email varchar(150), contador int, primary key(id_historial_desc, email), FOREIGN key(id_historial_desc) references historial_descuento(id_historial_desc), FOREIGN key(email) references usuario(email));

create table usuario_admin(id int auto_increment, authKey varchar(50), email_admin varchar(150), password varchar(100), rol char, primary KEY(id));
create table rating(id_descuento bigint, email varchar(150), rating int, primary key(id_descuento, email), FOREIGN key(id_descuento) references descuento(id_descuento), FOREIGN key(email) references usuario(email));
create table historial_rating(id_descuento bigint, email varchar(150), rating int, primary key(id_descuento, email), FOREIGN key(id_descuento) references descuento(id_descuento), FOREIGN key(email) references usuario(email));
create table error(id_ubicacion int, email_admin varchar(150), causa varchar(250), fecha date, primary key(id_ubicacion, email_admin), FOREIGN key(id_ubicacion) references ubicacion(id_ubicacion), FOREIGN key(email_admin) references usuario_admin(email_admin));

create table save_gusto(email varchar(150), id_cat varchar(50), primary key(email), FOREIGN KEY(email) references usuario(email));

insert into usuario_admin(email_admin, password,rol) values("admin@dromos.cl","root","a");
insert into empresa(id_empresa, nombre_empresa) values(-1, "test");
insert into empresa(nombre_empresa) values
	("Banco Santander"),
	("BancoEstado"),
	("Banco de Chile"),
	("MasterCard"),
	("Visa"),
	("Copec Lanpass"),
	("CMR"),
	("Ripley"),
	("Cencosud"),
	("Presto"),
	("Entel"),
	("Claro"),
	("Movistar"),
	("El Mercuerio"),
	("La Tercera"),
	("Luigis"),
	("Deportes Jadue");
insert into usuario_empresa(email_ue, id_empresa, nombre, password) values("empresa@dromos.cl",-1, "test", "root");
insert into usuario_empresa(email_ue, id_empresa, nombre, password) values("ripley@dromos.cl",16, "Ripley", "root");
insert into presupuesto(id_presupuesto, nombre, presupuesto, fecha_inicio, fecha_final) values(-1, "presupuesto test", 1000000000,"2016/01/01","2100/01/01");
insert into presupuesto(nombre, presupuesto, fecha_inicio, fecha_final) values("presupuesto Ripley", 1000000000,"2016/01/01","2100/01/01");
insert into campana(id_campana, email_ue, nombre, descripcion, presupuesto_campana, id_presupuesto, inicio, fin) values(-1, "empresa@dromos.cl", "test", "campana test", 1000,-1,"2016/01/01","2100/01/01");
insert into campana(id_campana, email_ue, nombre, descripcion, presupuesto_campana, id_presupuesto, inicio, fin) values(1 ,"ripley@dromos.cl", "Camapana de ripley", "campana test de ripley", 1000, 1,"2016/01/01","2100/01/01");

insert into categoria(nombre_cat) values("Comida"),("Deportes"),("Salud y belleza"),("Hail Hydra"),("Angel"),("Drogas y alcohol"),("Vestuario"),("Calzado"),("Tecnologia"),("Muebles"),("Decoración"),("Infantil"),("Camping"),("Otro");
insert into subcategoria(nombre_subcat)
	values
	("Comida Italiana"),
	("Comida China"),
	("Comida Rica"),
	("Balonpie"),
	("Tenis"),
	("Baloncesto"),
	("Rayuela"),
	("Correr"),
	("Ski"),
	("LoL"),
	("Maincrá"),
	("Cosmeticos"),
	("Medicamentos"),
	("Spa"),
	("Marvel"),
	("Destilados"),
	("Vinos"),
	("Cebada"),
	("Cañamo"),
	("Vestuario Hombres"),
	("Vestuario Mujer"),
	("Lenceria"),
	("Ropa interior"),
	("Calcetines navideños"),
	("ElectroHogar"),
	("Televisores"),
	("Telefonia"),
	("Computacion"),
	("Muebles de cocina"),
	("Muebles de living"),
	("Comedor"),
	("Camas"),
	("Adornos"),
	("Juguetes"),
	("Carpas"),
	("Otro");
insert into enlace_cat(id_cat,id_subcat) values(1,1),(1,2),(1,3),(2,4),(2,5),(2,6),(2,7),(2,8),(2,9),(2,10),(2,11),(3,12),(3,13),(3,14),(4,15),(5,16),(5,17),(5,18),(5,19),(6,20),(6,21),(6,22),(6,23),(6,24),(7,25),(7,26),(7,27),(7,28),(8,29),(8,30),(8,31),(8,32),(9,33),(10,34),(11,35),(1,36),(2,36),(3,36),(4,36),(5,36),(6,36),(7,36),(8,36),(9,36),(10,36),(11,36);
insert into convenio(nombre_convenio,id_empresa) values ("Banco Santander",1), ("BancoEstado",2), ("Banco de Chile",3), ("MasterCard",4), ("Visa",5), ("Copec Lanpass",6), ("CMR",7), ("Ripley",8), ("Cencosud",9), ("Presto",10), ("Entel",11), ("Claro",12), ("Movistar",13), ("El Mercuerio",14), ("La Tercera",15);

insert into descuento(id_empresa, id_convenio, id_campana, id_subcat, descuento, descripcion, imagen, vigencia_inicio, vigencia_fin, contacto, gasto)
	values(16,8,1,1,"20% en pastas","Comida italiana ofrece descuento a todos sus clientes con tarjetas del banco santander","http://running.es/sites/default/files/pasta-primavera-1.jpg","2016/01/01","2100/01/01","Luigi", 0);

insert into descuento(id_empresa, id_convenio, id_campana, id_subcat, descuento, descripcion, imagen, vigencia_inicio, vigencia_fin, contacto, gasto)
	values(17,8,1,4,"20% en balones robados de copa america","Descuento aplica con tarjetas Ripley","http://static.lacuarta.com/20141116/2034244__413.jpg","2016/01/01","2100/01/01","Deportes Jadue", 0);

insert into usuario(email, nombre, apellido_p, apellido_m, password, sexo, nacimiento) values("sheriquez@dromos.cl","Sarai","Henriquez","Medina","123","f","2016/01/01");
insert into usuario(email, nombre, apellido_p, apellido_m, password, sexo, nacimiento) values("rescobar@dromos.cl","Ramón","Escobar","Mena","123","m","2016/01/01");

insert into save_convenio(email, id_convenio) values("sheriquez@dromos.cl",8);
insert into save_convenio(email, id_convenio) values("rescobar@dromos.cl",8);
insert into recordar(id_descuento,email) values(1,"sheriquez@dromos.cl");
insert into compartir(id_descuento,email) values(2,"rescobar@dromos.cl");
insert into rating(id_descuento,email,rating) values(1,"sheriquez@dromos.cl",5);
insert into rating(id_descuento,email,rating) values(2,"rescobar@dromos.cl",1);

insert into ubicacion(id_empresa,direccion, lat, lon) values(16,"Vicuña Mackenna 1008, Ñuñoa, Región Metropolitana",-33.4544547,-70.6301847);
insert into ubicacion(id_empresa,direccion, lat, lon) values(17,"Avenida Libertador Bernardo O'Higgins 1010, Santiago",-33.4438792,-70.6505755);
insert into ubicacion(id_empresa,direccion, lat, lon) values(17,"Vicuña Subercaseaux 1499, Santiago, Región Metropolitana",-33.434019, -70.658820);
insert into ubicacion_descuento(id_ubicacion, id_descuento) values(3,2);

insert into save_gusto(email, id_cat) values("sheriquez@dromos.cl",1);
insert into save_gusto(email, id_cat) values("rescobar@dromos.cl",2);
