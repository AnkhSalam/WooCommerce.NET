create table carrera(
cod_car char(5) primary key,
nom_car varchar(30)
);
create table ciclo(
cod_ciclo char(1) primary key
);
create table curso(
cod_car char(5),
cod_cur char(7) primary key,
cod_ciclo char(1),
nom_cur varchar(100),
horas_cur int
);
alter table curso add constraint pk_cur1 foreign key (cod_car) references carrera(cod_car);
alter table curso add constraint pk_cur2 foreign key (cod_ciclo) references ciclo(cod_ciclo);
insert into
	carrera (cod_car,nom_car)
values
	('COMP0','Computación e Informática'),
	('CONT0','Contabilidad'),
	('ELEC0','Electrónica'),
	('MECA0','Mecánica');
insert into
	ciclo(cod_ciclo)
values('1'),('2'),('3'),('4'),('5'),('6');

-- Computación
insert into
	curso(cod_car,cod_cur,cod_ciclo,nom_cur,horas_cur)
values
	('COMP0','COMP101','1','Organización y Administración del Soporte Técnico',4),
	('COMP0','COMP102','1','Integración de las Tecnologías de Información y Comunicación',4),
	('COMP0','COMP103','1','Mantenimiento de Equipos de Cómputo',6),
	('COMP0','COMP104','1','Diseño de Redes de Comunicación',5),
	('COMP0','COMP105','1','Seguridad Informática',3),
	('COMP0','COMP106','1','Técnicas de Comunicación',2),
	('COMP0','COMP107','1','Lógica y Funciones',2),
	('COMP0','COMP108','1','Cultura Física y Deporte',2),
	('COMP0','COMP109','1','Informática e Internet',2),
    ('COMP0','COMP201','2','Reparacion De Equipos De Computo',6),
    ('COMP0','COMP202','2','Didactica En El Uso De Los Recursos Informaticos',2),
    ('COMP0','COMP203','2','Instalacion Y Configuracion De Redes De Comunicación',4),
    ('COMP0','COMP204','2','Herramientas De Gestion De Redes De Comunicación',3),
    ('COMP0','COMP205','2','Administracion De Redes',2),
    ('COMP0','COMP206','2','Software De Servidores De Red',3),
    ('COMP0','COMP207','2','Interpretacion Y Produccion De Textos',2),
    ('COMP0','COMP208','2','Estadistica General',2),
    ('COMP0','COMP209','2','Cultura Artistica',2),
    ('COMP0','COMP210','2','Ofimatica',2),
    ('COMP0','COMP211','2','Fundamentos De Investigacion',2),
    ('COMP0','COMP301','3','Análisis Y Diseño De Sistemas',6),
    ('COMP0','COMP302','3','Herramientas De Desarrollo De Software',6),
    ('COMP0','COMP303','3','Taller De Base De Datos',4),
    ('COMP0','COMP304','3','Lógica De Programación',2),
    ('COMP0','COMP305','3','Taller De Modelamiento De Software',4),
    ('COMP0','COMP306','3','Sociedad Y Economía En La Globalización',3),
    ('COMP0','COMP307','3','Medio Ambiente Y Desarrollo Sostenible',3),
    ('COMP0','COMP308','3','Investigación E Innovación Tecnológica',2),
    ('COMP0','COMP401','4','Metodologias De Desarrollo De Software',2),
    ('COMP0','COMP402','4','Taller De Programacion Concurrente',8),
    ('COMP0','COMP403','4','Taller De Programacion Distribuida',8),
    ('COMP0','COMP404','4','Administracion De Base De Datos',6),
    ('COMP0','COMP405','4','Comunicación Interpersonal',2),
    ('COMP0','COMP406','4','Proyectos De Investigacion E Innovacion Tecnologica',4),
    ('COMP0','COMP501','5','Diseño Gráfico',5),
    ('COMP0','COMP502','5','Animación de Gráficos',5),
    ('COMP0','COMP503','5','Herramientas Multimedia',4),
    ('COMP0','COMP504','5','Diseño Web',4),
    ('COMP0','COMP505','5','Gestión y Administración Web',6),
    ('COMP0','COMP506','5','Comunicación Empresarial',2),
    ('COMP0','COMP507','5','Comportamiento Ético',2),
    ('COMP0','COMP508','5','Organización y Constitución de Empresas',2),
    ('COMP0','COMP601','6','Producción Audio Visual',6),
    ('COMP0','COMP602','6','Taller De Programación Web',10),
    ('COMP0','COMP603','6','Comercio Electrónico',3),
    ('COMP0','COMP604','6','Aplicaciones Móviles',4),
    ('COMP0','COMP605','6','Liderazgo  Y Trabajo En Equipo',2),
    ('COMP0','COMP606','6','Proyecto Empresarial',2),
    ('COMP0','COMP607','6','Legislación E Inserción Laboral',3);
    
-- Contabilidad
insert into
	curso(cod_car,cod_cur,cod_ciclo,nom_cur,horas_cur)
values
	('CONT0','CONT101','1','Contabilidad General I',6),
	('CONT0','CONT102','1','Plan Contable',4),
	('CONT0','CONT103','1','Documentación Comercial y Contable',5),
	('CONT0','CONT104','1','Administración Empresarial',3),
	('CONT0','CONT105','1','Legislación Comercial',4),
	('CONT0','CONT106','1','Técnicas de Comunicación',2),
	('CONT0','CONT107','1','Lógica y Funciones',2),
	('CONT0','CONT108','1','Cultura Física y Deporte',2),
	('CONT0','CONT109','1','Informática e Internet',2),
	('CONT0','CONT201','2','Contabilidad General II',7),
	('CONT0','CONT202','2','Legislacion Laboral',4),
	('CONT0','CONT203','2','Legislacion Tributaria',4),
	('CONT0','CONT204','2','Fundamentos De Costos',5),
	('CONT0','CONT205','2','Interpretacion Y Produccion De Textos',2),
	('CONT0','CONT206','2','Estadistica General',2),
	('CONT0','CONT207','2','Cultura Artistica',2),
	('CONT0','CONT208','2','Ofimatica',2),
	('CONT0','CONT209','2','Fundamentos De Investigacion',2),
	('CONT0','CONT301','3','Contabilidad de Costos',6),
	('CONT0','CONT302','3','Técnica Presupuestal',6),
	('CONT0','CONT303','3','Contabilidad Gubernamental I',5),
	('CONT0','CONT304','3','Aplicativos Informáticos',5),
	('CONT0','CONT305','3','Sociedad y Economía en la Globalización',3),
	('CONT0','CONT306','3','Medio Ambiente y Desarrollo Sostenible',3),
	('CONT0','CONT307','3','Investigación e Innovación Tecnológica',2),
	('CONT0','CONT401','4','Contabilidad De Sociedades',8),
	('CONT0','CONT402','4','Contabilidad Aplicada',8),
	('CONT0','CONT403','4','Contabilidad Gubernamental II',8),
	('CONT0','CONT404','4','Comunicación Interpersonal',2),
	('CONT0','CONT405','4','Proyectos De Investigacion E Innovacion Tecnologica',4),
	('CONT0','CONT501','5','Formulación de Estados Financieros',6),
	('CONT0','CONT502','5','Fundamentos de Finanzas',4),
	('CONT0','CONT503','5','Formulación y Evaluación de Proyectos',5),
	('CONT0','CONT504','5','Planeamiento de la Auditoria',4),
	('CONT0','CONT505','5','Contabilidad de Entidades Financieras I',5),
	('CONT0','CONT506','5','Comunicación Empresarial',2),
	('CONT0','CONT507','5','Comportamiento Ético',2),
	('CONT0','CONT508','5','Organización y Constitución de Empresas',2),
	('CONT0','CONT601','6','Análisis E Interpretacion De Estados Financieros',5),
	('CONT0','CONT602','6','Finanzas Públicas',4),
	('CONT0','CONT603','6','Técnicas Y Procedimientos De Auditoría',4),
	('CONT0','CONT604','6','Contabilidad De Entidades Financieras II',5),
	('CONT0','CONT605','6','Cálculo Financiero',5),
	('CONT0','CONT606','6','Liderazgo Y Trabajo En Equipo',2),
	('CONT0','CONT607','6','Proyecto Empresarial',2),
	('CONT0','CONT608','6','Legislación E Inserción Laboral',3);
    
-- Electrónica
insert into
	curso(cod_car,cod_cur,cod_ciclo,nom_cur,horas_cur)
values
	('ELEC0','ELEC101','1','Electrotecnia General',8),
	('ELEC0','ELEC102','1','Electrónica Analógica',9),
	('ELEC0','ELEC103','1','Instalaciones Eléctricas',5),
	('ELEC0','ELEC104','1','Técnicas de Comunicación',2),
	('ELEC0','ELEC105','1','Lógica y Funciones',2),
	('ELEC0','ELEC106','1','Cultura Física y Deporte',2),
	('ELEC0','ELEC107','1','Informática e Internet',2),
	('ELEC0','ELEC201','2','Diseño E Instalaciones Electronicas',7),
	('ELEC0','ELEC202','2','Sistemas Digitales',7),
	('ELEC0','ELEC203','2','Maquinas Electricas Y Tableros Industriales',6),
	('ELEC0','ELEC204','2','Interpretacion Y Produccion De Textos',2),
	('ELEC0','ELEC205','2','Estadistica General',2),
	('ELEC0','ELEC206','2','Cultura Artisitica',2),
	('ELEC0','ELEC207','2','Ofimatica',2),
	('ELEC0','ELEC208','2','Fiundamentos De Investigacion',2),
	('ELEC0','ELEC301','3','Microcontroladores I',7),
	('ELEC0','ELEC302','3','Controlador Lógico Programable I',5),
	('ELEC0','ELEC303','3','Electrónica de Potencia',5),
	('ELEC0','ELEC304','3','Instrumentación Industrial',5),
	('ELEC0','ELEC305','3','Sociedad y Economía en la Globalización',3),
	('ELEC0','ELEC306','3','Medio Ambiente y Desarrollo Sostenible',3),
	('ELEC0','ELEC307','3','Investigación e Innovación Tecnológica',2),
	('ELEC0','ELEC401','4','Microcontroladores II',5),
	('ELEC0','ELEC402','4','Controlador Logico Programable II',8),
	('ELEC0','ELEC403','4','Control Electronico De Motores Industriales',3),
	('ELEC0','ELEC404','4','Sistemas De Mando Neumatico E Hidraulico',4),
	('ELEC0','ELEC405','4','Fundamentos De Robotica',4),
	('ELEC0','ELEC406','4','Comunicación Interpersonal',2),
	('ELEC0','ELEC407','4','Proyectos De Investigacion E Innovacion Tecnologica',4),
	('ELEC0','ELEC501','5','Proyecto Electrónico I',7),
	('ELEC0','ELEC502','5','Redes Industriales I',5),
	('ELEC0','ELEC503','5','Comunicaciones Electrónicas I',7),
	('ELEC0','ELEC504','5','Control de Procesos Industriales',5),
	('ELEC0','ELEC505','5','Comunicación Empresarial',2),
	('ELEC0','ELEC506','5','Comportamiento Ético',2),
	('ELEC0','ELEC507','5','Organización y Constitución de Empresas',2),
	('ELEC0','ELEC601','6','Proyecto Electrónico II',6),
	('ELEC0','ELEC602','6','Redes Industriales  II',5),
	('ELEC0','ELEC603','6','Comunicaciones Electrónicas II',7),
	('ELEC0','ELEC604','6','Cableado Estructurado Y Configuración',5),
	('ELEC0','ELEC605','6','Liderazgo Y Trabajo En Equipo',2),
	('ELEC0','ELEC606','6','Proyecto Empresarial',2),
	('ELEC0','ELEC607','6','Legislación E Inserción Empresarial',3);
-- Mecánica
insert into
	curso(cod_car,cod_cur,cod_ciclo,nom_cur,horas_cur)
values
	('MECA0','MECA101','1','Dibujo mecánico',4),
	('MECA0','MECA102','1','Mecánica de taller',8),
	('MECA0','MECA103','1','Sistema de suspensión y  direccion',10),
	('MECA0','MECA104','1','Técnicas de Comunicación',2),
	('MECA0','MECA105','1','Lógica y Funciones',2),
	('MECA0','MECA106','1','Cultura Física y Deporte',2),
	('MECA0','MECA107','1','Informática e Internet',2),
	('MECA0','MECA201','2','Hidroneumatica',4),
	('MECA0','MECA202','2','Laboratorio De Sistemas',4),
	('MECA0','MECA203','2','Prevencion De Riesgos',2),
	('MECA0','MECA204','2','Sistema De Frenos',10),
	('MECA0','MECA205','2','Interpretacion Y Produccion De Textos',2),
	('MECA0','MECA206','2','Estadistica General',2),
	('MECA0','MECA207','2','Cultura Artistica',2),
	('MECA0','MECA208','2','Ofimatica',2),
	('MECA0','MECA209','2','Fundamentos De Investigacion',2),
	('MECA0','MECA301','3','Mecanismos de embrague y caja de velocidades',8),
	('MECA0','MECA302','3','Mecanismo diferencial',4),
	('MECA0','MECA303','3','Soldadura aplicada a mecanismos automotrices',6),
	('MECA0','MECA304','3','Laboratorio de mecanismos de transmisión',4),
	('MECA0','MECA305','3','Sociedad y Economía en la Globalización',3),
	('MECA0','MECA306','3','Medio Ambiente y Desarrollo Sostenible',3),
	('MECA0','MECA307','3','Investigación e Innovación Tecnológica',2),
	('MECA0','MECA401','4','Dibujo Electrico Automotriz',3),
	('MECA0','MECA402','4','Fundamentos Electricos Y Electronicos Automotrices',4),
	('MECA0','MECA403','4','Sistema De Carga Y Arranque',6),
	('MECA0','MECA404','4','Sistema De Encendido Covencional Y Electronico',6),
	('MECA0','MECA405','4','Sistema De Luces Y Controles Auxiliares',5),
	('MECA0','MECA406','4','Comunicación Interpersonal',2),
	('MECA0','MECA407','4','Proyectos De Investigacion E Innovacion Tecnologica',4),
	('MECA0','MECA501','5','Motores de combustión interna Otto',10),
	('MECA0','MECA502','5','Inyección electrónica Otto',5),
	('MECA0','MECA503','5','Laboratorio de motores',5),
	('MECA0','MECA504','5','Conversión de motores a combustibles alternos',4),
	('MECA0','MECA505','5','Comunicación Empresarial',2),
	('MECA0','MECA506','5','Comportamiento Ético',2),
	('MECA0','MECA507','5','Organización y Constitución de Empresas',2),
	('MECA0','MECA601','6','Motores De Combustión Interna Diesel',5),
	('MECA0','MECA602','6','Laboratorio De Sistema Diesel',5),
	('MECA0','MECA603','6','Rectificaciones Automotrices',6),
	('MECA0','MECA604','6','Afinamiento De Motores De Combustión Interna',4),
	('MECA0','MECA605','6','Inyección Electrónica Diesel',3),
	('MECA0','MECA606','6','Liderazgo Y Trabajo En Equipo',2),
	('MECA0','MECA607','6','Proyecto Empresarial',2),
	('MECA0','MECA608','6','Legislacion E Inserción Empresarial',3);
    
    
    
    
    
    
    