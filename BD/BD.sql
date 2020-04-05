create database Unclesoft;

use Unclesoft;

create table Tipo_Documento
(
	IDTipoDoc int auto_increment,
    Descripcion varchar(45) not null,
	constraint PK_TipoDoc primary key (IDTipoDoc)
);

create table Estado_Pago
(
	IDEst_Pago int auto_increment,
    Descripcion varchar(30) not null,
	constraint PK_EstPago primary key (IDEst_Pago)
);

create table Seguimiento
(
	IDSeguimiento int auto_increment,
	Estado varchar(30) not null,
    constraint PK_Seguimiento primary key (IDSeguimiento)
);

create table Horario
(
	IDHorario int auto_increment,
    Descripcion varchar(30),
	Hora_Inicio time not null,
	Hora_Finalizacion time not null,
    EstadoAct bit(1),
	constraint PK_Horario primary key (IDHorario)
);

create table Tipo_Servicio
(
	ID_TipoServ int auto_increment,
	Descripcion varchar(15) not null,
    Precio int not null,
    EstadoAct int,
    constraint PK_Tipo_Servicio primary key (ID_TipoServ)
);

create table Especificacion
(
	IDEspecificacion int auto_increment,
    Ancho varchar(35) not null,
    Alto varchar(35) not null,
    Color varchar(35) not null,
    Material varchar(35) not null,
    constraint PK_Especificacion primary key(IdEspecificacion)
);

create table Producto
(
	IDProducto int auto_increment,
    Especificacion int,
	Precio int not null,
	Cantidad int not null,
	Nombre varchar (20) not null,
	Descripcion text,
    Imagen varchar (255),
    EstadoAct bit(1),
    constraint PK_Producto primary key (IDProducto),
    constraint FK_Especificacion foreign key (Especificacion) references Especificacion(IDEspecificacion)
);


create table Tipo_Usuario
(
	IDTipoUsua int auto_increment,
    Descripcion varchar(45) not null,
	constraint PK_Rol primary key (IDTipoUsua)
);

create table Usuario
(
	IDUsuario int auto_increment,
	Nombre varchar(35) not null,
	Apellido varchar(35) not null,
	Documento varchar(35) not null,
    Tipo_Documento int,
    Fecha_Nacimiento date not null,
    Direccion varchar(35) not null,
    Tipo_Usuario int,
    Correo varchar(35) not null,
    Password varchar(255) not null,
    Horario int,
    EstadoAct bit(1),
    constraint PK_Usuario primary key (IDUsuario),
    constraint FK_TipoUsuario foreign key(Tipo_Usuario) references Tipo_Usuario(IDTipoUsua),
    constraint FK_TipoDocUsua foreign key(Tipo_Documento) references Tipo_Documento(IDTipoDoc),
    constraint FK_Horario foreign key(Horario) references Horario(IDHorario)
);



create table Pago
(
	IDPago int auto_increment,
    Cliente int,
    Fecha date not null,
    Pago int not null,
    Estado int,
    constraint PK_Pago primary key(IDPago),
    constraint FK_PagCliente foreign key (Cliente) references Usuario(IDUsuario),
    constraint FK_EstPago foreign key (Estado) references Estado_Pago(IDEst_Pago)
    
);

create table Abono
(
	IDAbono int auto_increment,
    Abono int,
    Pago int,
    constraint PK_Abono primary key(IDAbono),
    constraint FK_AbonPago foreign key (Pago) references Pago(IDPago)
);

create table Tipo_pedido
(
	IDTipo_Pedido int auto_increment,
    Descripcion varchar(50) not null,
    constraint PK_Tipo_Pedido primary key(IDTipo_Pedido)
);

create table Detalle_Pedido
(
	IDDetallePe int auto_increment,
	Encargado int,
    Cliente int,
	Tipo_Servicio int,
    Tipo_Pedido int,
	Seguimiento int,
    Producto int,
	Precio int not null,
    Subtotal int not null,
    Descripcion text not null,
    Cantidad int not null,
    constraint PK_DetallePe primary key (IDDetallePe),
	constraint FK_DetaPeUsua foreign key (Encargado) references Usuario(IDUsuario),
    constraint FK_DetaPeCliente foreign key (Cliente) references Usuario(IDUsuario),
	constraint FK_TipoServDetaPe foreign key (Tipo_Servicio) references Tipo_Servicio(ID_TipoServ),
    constraint FK_TipoPedidoDetaPe foreign key (Tipo_Pedido) references Tipo_Pedido(IDTipo_Pedido),
    constraint FK_SeguimientoDetaPe foreign key (Seguimiento) references Seguimiento(IDSeguimiento),
    constraint FK_DetaPProducto foreign key (Producto) references Producto(IDProducto)

);


create table Pedido
(
	IDPedido int auto_increment,
	IDDetallePe int,
	Cliente int,
    Pago int,
	Fecha date not null,
    Total int not null,
    constraint PK_Pedido primary key (IDPedido),
    constraint FK_PeCliente foreign key (Cliente) references Usuario(IDUsuario),
    constraint FK_PeDetalle foreign key (IDDetallePe) references Detalle_Pedido(IDDetallePe),
    constraint FK_PePago foreign key(Pago) references Pago(IDPago)
);

create table Evaluacion
(
	IDEvaluacion int auto_increment,
	Calificacion char(5),
	Comentario varchar(45),
	Pedido int,
    constraint PK_Evaluacion primary key (IDEvaluacion),
    constraint FK_EvPedido foreign key(Pedido) references Detalle_Pedido(IDDetallePe)
);



 