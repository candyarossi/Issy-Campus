--base de datos 

create database malharrodb;

/*crear usuario y contraseña 
y cambiarlo en el archivo config.php*/

use malharrodb;


--tabla tipos de usuario

create table type_of_users (
    id_type int auto_increment,
    name_type varchar(20) not null,
    constraint pk_type primary key (id_type)
);


--tipos de usuarios

insert into type_of_users (name_type) values ("Invitado");
insert into type_of_users (name_type) values ("Estudiante");
insert into type_of_users (name_type) values ("Profesor");
insert into type_of_users (name_type) values ("Administrativo");
insert into type_of_users (name_type) values ("Administrador");


--tabla usuarios

create table users (
    id_user int auto_increment,
    dni_user varchar(8) not null,
    first_name_user varchar(50) not null,
    last_name_user varchar(50) not null,
    password_user varchar(50) not null,
    email_user varchar(50) not null,
    address_user varchar(50) not null,
    city_of_residence_user varchar(50) not null,
    birthday_user date not null,
    city_of_birth_user varchar(50) not null,
    telephone_user varchar(50) not null,
    cellphone_user varchar(50) not null,
    type_user int not null,
    photo_user varchar(100) not null default 'default.png',
    en_uso_user int not null default 0,
    legajo_user varchar(10) not null,
    fecha_creacion timestamp not null default CURRENT_TIMESTAMP,
    online_user int not null default 0,
    constraint pk_users primary key (id_user),
    constraint fk_users foreign key (type_user) references type_of_users (id_type),
    constraint unq_users unique (dni_user)
);


--tabla carreras

create table carreras (
    id_carrera int auto_increment,
    name_carrera varchar(50) not null,
    banner_carrera varchar(50) not null,
    image_carrera varchar(50) not null,
    anios_carrera int not null, 
    constraint pk_carreras primary key (id_carrera)
);


--carreras

insert into carreras (name_carrera, banner_carrera, image_carrera, anios_carrera) values ("Diseño Gráfico", "disenog.jpg", "disenog.png", "4");
insert into carreras (name_carrera, banner_carrera, image_carrera, anios_carrera) values ("Escenografía", "escenografia.jpg", "escenografia.png", "3");
insert into carreras (name_carrera, banner_carrera, image_carrera, anios_carrera) values ("Formación Básica", "foba.jpg", "foba.png", "2");
insert into carreras (name_carrera, banner_carrera, image_carrera, anios_carrera) values ("Fotografía", "fotografia.jpg", "fotografia.png", "4");
insert into carreras (name_carrera, banner_carrera, image_carrera, anios_carrera) values ("Ilustración", "ilustracion.jpg", "ilustracion.png", "4");
insert into carreras (name_carrera, banner_carrera, image_carrera, anios_carrera) values ("Realizador en Artes Visuales", "realizador.jpg", "realizador.png", "4");
insert into carreras (name_carrera, banner_carrera, image_carrera, anios_carrera) values ("Profesorado de Artes Visuales", "profesorado.jpg", "profesorado.png", "4");
insert into carreras (name_carrera, banner_carrera, image_carrera, anios_carrera) values ("Realizador en Medios Audiovisuales", "medios.jpg", "medios.png", "4");


--tabla materias

create table materias (
    id_materia int auto_increment,
    name_materia varchar(80) not null,
    anio_materia int not null,
    id_carrera_materia int not null,
    pass_materia varchar(20) not null default 0,
    constraint pk_materias primary key (id_materia),
    constraint fk_materias foreign key (id_carrera_materia) references carreras (id_carrera)
);


--materias foba

insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo", "1", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Pintura", "1", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Grabado", "1", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escultura", "1", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Gráfica", "1", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Cerámica", "1", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Medios Audiovisuales", "1", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Lenguaje Visual", "1", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Introducción al Análisis", "1", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia del Arte y la Cultura", "1", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo, Pintura y Composición Escenográfica I", "2", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escenografía I", "2", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Electricidad", "2", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escenotecnia", "2", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Lenguajes Artísticos I - Arte y Arquitectura I", "2", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Lenguajes Artísticos I - Literatura", "2", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia del Traje I", "2", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fundamentos del Diseño I", "2", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Teatro y Literatura Dramática I", "2", "3");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Teorías de la Percepción y Comunicación", "2", "3");


--materias diseño grafico 

insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo", "1", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Tipografía I", "1", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Gráfica Asistida por Computadora I", "1", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Percepción Visual", "1", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller de Texto", "1", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Comunicación", "1", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia del Arte y el Diseño", "1", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Metodología Proyectual", "1", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller de Diseño I", "1", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Tecnología I", "2", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Tipografía II", "2", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Gráfica Asistida por Computadora II", "2", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Semiología de la Imagen", "2", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia del Diseño", "2", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Organización de las Instituciones", "2", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Síntesis Visual", "2", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller de Diseño II", "2", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Tecnología II", "3", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fotografía", "3", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller de Multimedia", "3", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Sociología de la Comunicación", "3", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Ética y Legislación", "3", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Introducción a la Tridimensión", "3", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller de Diseño III y Proyecto", "3", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Diseño Institucional", "4", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Diseño de Información", "4", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Diseño en Medios", "4", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Arte, Cultura y Estética en el Mundo Contemporáneo", "4", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Diseño Web", "4", "1");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Práctica Profesional", "4", "1");


--materias fotografia

insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Tecnología I", "1", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fotografía Digital I", "1", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Laboratorio Monocromo", "1", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Percepción Visual", "1", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Medios Audiovisuales I", "1", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Comunicación", "1", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia de la Fotografía y la Cultura I", "1", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fotografía I", "1", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Tecnología II", "2", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Luminotecnia", "2", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fotografía Digital II", "2", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Semiología de la Imagen", "2", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Medios Audiovisuales II", "2", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia de la Fotografía y la Cultura II", "2", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fotografía Sociocomunitaria", "2", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fotografía II", "2", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller de Preimpresión", "3", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller de Impresión", "3", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Laboratorio Color", "3", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Iluminación Aplicada", "3", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Diseño y Fotografía", "3", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller de Texto", "3", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Medios Audiovisuales III", "3", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Ética y Legislación", "3", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia de la Fotografía y la Cultura III", "3", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fotografía III", "3", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fotografía de Medio y Gran Formato", "4", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fotografía en el Área de Prensa", "4", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fotografía en Área Científica", "4", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Proyectos de Fotografía", "4", "4");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Arte, Cultura y Estética en el Mundo Contemporáneo", "4", "4");


--materias ilustracion

insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo I", "1", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Diseño Gráfico", "1", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Gráfica Asistida por Computadora I", "1", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Técnicas Bidimensionales de Ilustración I", "1", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Percepción Visual", "1", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller de Texto", "1", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Comunicación", "1", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia del Arte y del Diseño", "1", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values (" Taller de Ilustración I", "1", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo II", "2", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Tecnología I", "2", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Gráfica Asistida por Computadora II", "2", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Técnicas Bidimensionales de Ilustración II", "2", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller de Sonido", "2", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Semiología de la Imagen", "2", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia de la Ilustración", "2", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historieta", "2", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values (" Taller de Ilustración II", "2", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo III", "3", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fotografía", "3", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Imagen Digital", "3", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Técnicas Tridimensionales de Ilustración", "3", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Sociología de la Comunicación", "3", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Ética y Legislación", "3", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Guión Visual", "3", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller de Ilustración III", "3", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Espacio de Especialización I", "4", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Espacio de Especialización II", "4", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Espacio de Especialización III", "4", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller de Ilustración Aplicada", "4", "5");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Arte, Cultura y Estética en el Mundo Contemporáneo", "4", "5");


--materias profesorado

insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Lenguaje Visual I", "1", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo I", "1", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Pintura I", "1", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escultura I", "1", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Grabado y Arte Impreso I", "1", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia de las Artes Visuales I", "1", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia Social General", "1", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Psicología de la Educación I", "1", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fundamentos de la Educación", "1", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Práctica Docente I", "1", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Lenguaje Visual II", "2", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo II", "2", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Pintura II", "2", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escultura II", "2", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Grabado y Arte Impreso II", "2", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia de las Artes Visuales II", "2", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Didáctica General", "2", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Psicología de la Educación II", "2", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia Sociopolítica de Latinoamérica y Argentina", "2", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Práctica Docente II", "2", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller Básico I", "3", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo III", "3", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Lenguaje Visual III", "3", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller Complementario I", "3", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Medios Audiovisuales e Imagen Digital", "3", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historias de las Artes Visuales III", "3", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Didácticas de las Artes Visuales I", "3", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Política Educativa", "3", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Teorías del Arte I", "3", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Práctica Docente III", "3", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller Básico II", "4", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo IV", "4", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Artes Combinadas", "4", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Taller Complementario II", "4", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Didáctica de las Artes Visuales II", "4", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Teorías del Arte II", "4", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Definición Institucional (EDI)", "4", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Metodología de la Investigación", "4", "7");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Práctica Docente IV", "4", "7");


--materias realizador

insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo I", "1", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Pintura I", "1", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Grabado I", "1", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escultura I", "1", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Lenguaje Visual I", "1", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Perspectiva Filosófica", "1", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia del Arte I", "1", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Figura humana", "1", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo II", "2", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Pintura II", "2", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Grabado II", "2", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escultura II", "2", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Lenguaje Visual II", "2", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia del Arte II", "2", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Teorías de la Percepción y la Comunicación", "2", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Materiales y Técnicas", "2", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo III", "3", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Pintura III", "3", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Grabado III", "3", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escultura III", "3", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Medios Audiovisuales", "3", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia del Arte III y Proyecto de Análisis", "3", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Proyecto", "3", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo IV", "4", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Pintura IV", "4", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Grabado IV", "4", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escultura IV", "4", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Muralismo", "4", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Arte, Cultura y Estética en el Mundo Contemporáneo", "4", "6");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Imagen Digital", "4", "6");


--materias escenografia

insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo, Pintura y Composición Escenográfica II", "1", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escenografía II", "1", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Iluminación I", "1", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Lenguajes Artísticos II - Arte y Arquitectura II", "1", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Lenguajes Artísticos II - Música", "1", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia del Traje II", "1", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Fundamentos del Diseño II", "1", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Teorías y Tendencias Teatrales Contemporáneas", "1", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Teatro y Literatura Dramática II", "1", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dibujo, Pintura y Composición Escenográfica III", "2", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escenografía III", "2", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Iluminación II", "2", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Lenguajes Artísticos III - Arte y Arquitectura III", "2", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Lenguajes Artísticos III - Cine", "2", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia del Traje III", "2", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Análisis del Espectáculo", "2", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Teatro y Literatura Dramática III", "2", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Producción", "3", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Vestuario I", "3", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escenografía y Realización", "3", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escenotecnia II", "3", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Iluminación", "3", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Vestuario II", "3", "2");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Escenografía", "3", "2");


--materias medios 

insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Realización Audiovisual I", "1", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Producción Audiovisual", "1", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Guión I", "1", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Iluminación y Cámara I", "1", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Sonido I", "1", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia Social General", "1", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Estética", "1", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Realización Audiovisual II", "2", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Montaje y Postproducción I", "2", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Guión II", "2", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Iluminación y Cámara II", "2", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Sonido II", "2", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia Sociopolítica", "2", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Historia de los Medios", "2", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Realización Audiovisual III", "3", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Montaje y Postproducción II", "3", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Guión III", "3", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Iluminación y Cámara III", "3", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Producción Aplicada", "3", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Animación", "3", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Géneros y Formatos Audiovisuales", "3", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Realización Audiovisual IV", "4", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Metodología de la Investigación en Arte", "4", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dirección de Arte", "4", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Dirección de Actores", "4", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Tecnología Educativa", "4", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Narrativas Transmedia", "4", "8");
insert into materias (name_materia, anio_materia, id_carrera_materia) values ("Legislación, Política e Industria Cultural", "4", "8");


--tabla redes sociales

create table redes_sociales(
    id_red int auto_increment,
    name_red varchar(20) not null,
    constraint pk_red primary key (id_red)
);


--redes sociales

insert into redes_sociales (name_red) values ("Whatsapp");
insert into redes_sociales (name_red) values ("Facebook");
insert into redes_sociales (name_red) values ("Instagram");
insert into redes_sociales (name_red) values ("Twitter");
insert into redes_sociales (name_red) values ("Tumblr");
insert into redes_sociales (name_red) values ("Pinterest");
insert into redes_sociales (name_red) values ("Youtube");
insert into redes_sociales (name_red) values ("Behance");
insert into redes_sociales (name_red) values ("Dribbble");
insert into redes_sociales (name_red) values ("Github");
insert into redes_sociales (name_red) values ("Linkedin");
insert into redes_sociales (name_red) values ("Sitio Web");


--tabla redes por usuarios

create table redes_x_users(
    id_red_user int not null,
    id_user_red int not null,
    link_red varchar(100) not null default 0,
    constraint fk_user foreign key (id_user_red) references users (id_user),
    constraint fk_red foreign key (id_red_user) references redes_sociales (id_red)
);


--tablas mensajes

create table mensajes(
    id_mensaje int auto_increment,
    id_emisor int not null,
    id_receptor int not null,
    mensaje varchar(200) not null,
    enlace varchar(100) not null default 0,
    leido int not null,
    fecha_hora timestamp not null default CURRENT_TIMESTAMP,
    constraint pk_msj primary key (id_mensaje),
    constraint fk_msj_emisor foreign key (id_emisor) references users (id_user),
    constraint fk_msj_receptor foreign key (id_receptor) references users (id_user)
);


-- tabla tipos de contenido de la biblio

create table type_of_content(
    id int auto_increment,
    nombre varchar(50) not null,
    constraint pk_content primary key (id)
);


-- contenidos

insert into type_of_content (nombre) values ("Libro Digital");
insert into type_of_content (nombre) values ("Contenido Multimedia");
insert into type_of_content (nombre) values ("Contenido Online");
insert into type_of_content (nombre) values ("Historia de la Escuela");


-- tabla biblioteca

create table biblioteca(
    id_item int auto_increment,
    titulo varchar(100) not null,
    autor varchar(50) not null default 'Desconocido',
    anio varchar(12) not null default 'Desconocido',
    pais varchar(30) not null default 'Desconocido',
    editorial varchar(30) not null default 'Desconocido',
    carrera int not null,
    descripcion varchar(200) not null,
    archivo varchar(150) not null default 0,
    imagen varchar(150) not null default 'not-available.jpg',
    enlace varchar(150) not null default 0,
    tipo int not null,
    id_user int not null,
    constraint pk_biblioteca primary key (id_item),
    constraint fk_biblioteca_user foreign key (id_user) references users (id_user),
    constraint fk_biblioteca_tipo foreign key (tipo) references type_of_content (id),
    constraint fk_biblioteca_carrera foreign key (carrera) references carreras (id_carrera)
);


-- tabla de tipos de examenes

create table type_of_exams(
    id int auto_increment,
    nombre varchar(50) not null,
    constraint pk_type_of_exams primary key (id)
);


-- tipos de examen

insert into type_of_exams (nombre) values ("Primer Parcial");
insert into type_of_exams (nombre) values ("Segundo Parcial");
insert into type_of_exams (nombre) values ("Recuperatorio Primer Parcial");
insert into type_of_exams (nombre) values ("Recuperatorio Segundo Parcial");
insert into type_of_exams (nombre) values ("Final");


-- tabla examenes finales

create table finales(
    id int auto_increment,
    id_materia int not null,
    id_user int not null,
    fecha date not null,
    nota int not null default 0,
    libro varchar(10) not null,
    folio varchar(10) not null,
    tipo int not null,
    constraint pk_finales primary key (id),
    constraint fk_finales_user foreign key (id_user) references users (id_user),
    constraint fk_finales_materia foreign key (id_materia) references materias (id_materia),
    constraint fk_finales_tipo foreign key (tipo) references type_of_exams (id)
);


-- tabla examenes parciales

create table parciales(
    id int auto_increment,
    id_materia int not null,
    id_user int not null,
    fecha date not null,
    nota int not null default 0,
    tipo int not null,
    constraint pk_parciales primary key (id),
    constraint fk_parciales_user foreign key (id_user) references users (id_user),
    constraint fk_parciales_materia foreign key (id_materia) references materias (id_materia),
    constraint fk_parciales_tipo foreign key (tipo) references type_of_exams (id)
);


-- tabla notificaciones

create table notificaciones(
    id int auto_increment,
    id_user int not null,
    mensaje varchar(100) not null,
    link varchar(100) not null,
    fecha_hora timestamp not null default CURRENT_TIMESTAMP,
    leido int not null default 0,
    constraint pk_notificaciones primary key (id),
    constraint fk_notificaciones_user foreign key (id_user) references users (id_user)
);


-- tabla profesores por materias

create table profesores_x_materias(
    id_user int not null,
    id_materia int not null,
    constraint fk_profes_mate_user foreign key (id_user) references users (id_user),
    constraint fk_profes_mate_materia foreign key (id_materia) references materias (id_materia)
);


-- tabla estudiantes por materias

create table estudiantes_x_materias(
    id_user int not null,
    id_materia int not null,
    constraint fk_estu_mate_user foreign key (id_user) references users (id_user),
    constraint fk_estu_mate_materia foreign key (id_materia) references materias (id_materia)
);


-- 

tarea 
apuntes
avisos
texto 
calendario
imagen 
video 
enlace 

