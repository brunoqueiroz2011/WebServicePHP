USE `test`;
create table postagem(
	id int auto_increment primary key,
	post varchar(256) not null,
	comentario varchar(100)
)engine=MyISAM;