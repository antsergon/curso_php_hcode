use dbphp7;
create table tb_usuarios (
idusuario int not null auto_increment primary key,
deslogin varchar(64) not null,
dessenha varchar(256) not null,
dtcadastro timestamp not null default current_timestamp()
);

insert into tb_usuarios (deslogin, dessenha) values ('root', '@@@t');
insert into tb_usuarios (deslogin, dessenha) values ('sergio', 'xtxt');
insert into tb_usuarios (deslogin, dessenha) values ('hcode', 'curso');
insert into tb_usuarios (deslogin, dessenha) values ('jose', 'dao');
select * from tb_usuarios;
update tb_usuarios set dessenha = '123456' where idusuario = 1;

delete from tb_usuarios where idusuario = 1;

select * from tb_usuarios;





