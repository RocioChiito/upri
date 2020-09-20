create database upri;
use upri;

create table inscritos(
id int primary key auto_increment,
curso varchar(150) null DEFAULT 'SIN CURSO',
nombre_completo varchar(250) null DEFAULT 'SIN NOMBRE',
ci varchar(10) null DEFAULT 'SIN CI',
forma_pago varchar(10) null DEFAULT 'SIN CI',
fecha_nacimiento date null,
direccion varchar(150) null DEFAULT 'SIN CI',
celular varchar(15) null,
correo varchar(50) null,
fecha_inscripcion date null,
ip varchar(12) null,
navegador varchar(150) null,
ver_contrato varchar(2),
fecha_contrato date null,
nro_contrato int  DEFAULT '0'
);



create table usuarios(
id int primary key auto_increment,
usuario varchar(50) not null,
clave varchar(50) not null,
nivel varchar(30) not null,
activo  int not null
);

create table sistemas(
id int primary key auto_increment,
fecha_inicio date,
fecha_final date,
activo varchar(2),
id_usuario int
);
