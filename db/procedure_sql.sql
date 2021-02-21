CREATE PROCEDURE `sp_usuarios_insert` (
pdeslogin varchar(64),
pdessenha varchar(255)
)
BEGIN
insert into tb_usuarios (deslogin, dessenha) values (pdeslogin, pdessenha);
select * from tb_usuarios where idusuarios = last_insert_id();
END
