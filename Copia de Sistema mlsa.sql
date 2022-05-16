Create database BD_SistemaMLSA;

use BD_SistemaMLSA;
drop table tbestado;
SELECT  DATEDIFF(CURDATE() , (select MAX(tbbovinofechaN)
                             from tbbovino 
                             where tbbovinonumero= 'B41320'));
/*----------------------------------------------------------tablas--------------------------------------------------*/
/*-----------Bovino------*/
create table tbbovino(
	/*tbbovinoid INT AUTO_INCREMENT,*/	
	tbbovinonumero VARCHAR(200),	
	tbbovinonombre VARCHAR(200),
	tbbovinomadre VARCHAR(200),
    tbbovinopadre VARCHAR(200),
	tbbovinofechaN date,	
	tbbovinoactivo CHAR DEFAULT 'A',
	CONSTRAINT pk_tbbovinonumero PRIMARY KEY (tbbovinonumero)
)
/*-----------Raza------*/
create table tbraza(
	tbrazaid INT AUTO_INCREMENT,	
	tbrazanombre VARCHAR(200),	
	tbrazadescripcion VARCHAR(200),	
	tbrazaabreviatura VARCHAR(10),	
	tbrazaactivo CHAR DEFAULT 'A',
	CONSTRAINT pk_tbrazaid PRIMARY KEY (tbrazaid)
)
/*-----------bovino raza------*/
create table tbbovinoraza(
	tbbovinorazaid INT AUTO_INCREMENT,	
	tbrazaid INT,
    tbbovinonumero VARCHAR(200),
	CONSTRAINT pk_tbbovinorazaid PRIMARY KEY (tbbovinorazaid),
    FOREIGN KEY (tbrazaid) REFERENCES tbraza(tbrazaid),
    FOREIGN KEY (tbbovinonumero) REFERENCES tbbovino(tbbovinonumero)
)
/*-----------Estado------*/
create table tbestado(
	tbestadoid INT AUTO_INCREMENT,	
	tbestadonombre VARCHAR(200),
	tbestadodescripcion VARCHAR(200),	
	tbestasorangoinf INT,
	tbestadorangosup INT,
	tbestadoactivo CHAR DEFAULT 'A',
	CONSTRAINT pk_tbestadoid PRIMARY KEY (tbestadoid)
)
/*-----------bovino estado------*/
create table tbbovinoestado(
	tbbovinoestadoid INT AUTO_INCREMENT,	
	tbestadoid INT,
    tbbovinonumero VARCHAR(200),
	CONSTRAINT pk_tbbovinoestadoid PRIMARY KEY (tbbovinoestadoid),
    FOREIGN KEY (tbestadoid) REFERENCES tbestado(tbestadoid),
    FOREIGN KEY (tbbovinonumero) REFERENCES tbbovino(tbbovinonumero)
)
/*-----------Toro------*/
create table tbtoro(
	/*tbtoroid INT AUTO_INCREMENT,*/	
	tbtoroserie VARCHAR(200),	
	tbtoronombre VARCHAR(200),
	tbtorocasacomercial int,
    tbtororaza VARCHAR(200),
	tbtoroactivo CHAR DEFAULT 'A',
	CONSTRAINT pk_tbtoroserie PRIMARY KEY (tbtoroserie)
)
/*-----------vaquero------*/
create table tbvaquero(
	/*tbtoroid INT AUTO_INCREMENT,*/	
	tbvaquerocedula VARCHAR(200),	
	tbvaqueronombre VARCHAR(300),
	tbvaqueroroll int,
	tbvaqueroactivo CHAR DEFAULT 'A',
	CONSTRAINT pk_tbvaquerocedula PRIMARY KEY (tbvaquerocedula)
)
/*-----------parto------*/
create table tbparto(
	tbpartoid INT AUTO_INCREMENT,
	tbpartofechaN date,
	tbbovinonumero VARCHAR(200),
    tbtoroserie VARCHAR(200),
    tbraza VARCHAR(200),
    tbpartodescripcion VARCHAR(400),
	CONSTRAINT pk_tbpartoid PRIMARY KEY (tbpartoid),
    FOREIGN KEY (tbtoroserie) REFERENCES tbtoro(tbtoroserie),
    FOREIGN KEY (tbbovinonumero) REFERENCES tbbovino(tbbovinonumero)
)
/*-----------inseminacion------*/
create table tbinseminacion(
	tbinseminacionid INT AUTO_INCREMENT,
    tbbovinonumero VARCHAR(200),
    tbtoroserie VARCHAR(200),
	tbinseminacionfecha date,
	tbvaquerocedula VARCHAR(200),	
    tbinseminaciondescripcion VARCHAR(400),
	CONSTRAINT pk_tbinseminacionid PRIMARY KEY (tbinseminacionid),
    FOREIGN KEY (tbtoroserie) REFERENCES tbtoro(tbtoroserie),
    FOREIGN KEY (tbbovinonumero) REFERENCES tbbovino(tbbovinonumero),
    FOREIGN KEY (tbvaquerocedula) REFERENCES tbvaquero(tbvaquerocedula)
)
/*-----------muerte Bovino------*/
create table tbmuerteBovino(
	tbmuerteid INT AUTO_INCREMENT,	
	tbbovinonumero VARCHAR(200),
    tbmuertefecha date,
    tbmuertemotivo VARCHAR(500),
    tbmuertevalor float,
	CONSTRAINT pk_tbmuerteid PRIMARY KEY (tbmuerteid),
    FOREIGN KEY (tbbovinonumero) REFERENCES tbbovino(tbbovinonumero)
)
/*-----------muerte Toro------*/
create table tbmuerteToro(
	tbmuerteid INT AUTO_INCREMENT,	
	tbtoroserie VARCHAR(200),
    tbmuertefecha date,
    tbmuertemotivo VARCHAR(500),
    tbmuertevalor float,
	CONSTRAINT pk_tbmuerteid PRIMARY KEY (tbmuerteid),
    FOREIGN KEY (tbtoroserie) REFERENCES tbtoro(tbtoroserie)
)
/*-----------secado------*/
create table tbsecado(
	tbsecadoid INT AUTO_INCREMENT,
    tbbovinonumero VARCHAR(200),
    tbsecadofecha date,
    tbsecadodetalle VARCHAR(500),
	CONSTRAINT pk_tbsecadoid PRIMARY KEY (tbsecadoid),
    FOREIGN KEY (tbbovinonumero) REFERENCES tbbovino(tbbovinonumero)
)
/*-----------facilidad de parto------*/
create table tbfacilidadparto(
	tbfacilidadpartoid INT AUTO_INCREMENT,
    tbbovinonumero VARCHAR(200),
    tbfacilidadpartofacilidad CHAR DEFAULT 'A',
	CONSTRAINT pk_tbfacilidadpartoid PRIMARY KEY (tbfacilidadpartoid),
    FOREIGN KEY (tbbovinonumero) REFERENCES tbbovino(tbbovinonumero)
)
/*-----------bovino pezones------*/
create table tbbovinopezones(
	tbbovinopezonesid INT AUTO_INCREMENT,
    tbbovinonumero VARCHAR(200),
    tbbovinopezonesproductivos int,
	CONSTRAINT pk_tbbovinopezonesid PRIMARY KEY (tbbovinopezonesid),
    FOREIGN KEY (tbbovinonumero) REFERENCES tbbovino(tbbovinonumero)
)
/*-----------tipo Proveedor------*/
create table tbtipoproveedor(
	tbtipoproveedorid INT AUTO_INCREMENT,
    tbtipoproveedortipo VARCHAR(200),
    tbtipoproveedoractivo CHAR DEFAULT 'A',
	CONSTRAINT pk_tbtipoproveedorid PRIMARY KEY (tbtipoproveedorid)
)
/*-----------Proveedor------*/
create table tbproveedor(
	tbproveedorid INT AUTO_INCREMENT,
    tbproveedornombre VARCHAR(200),
    tbproveedortelefono VARCHAR(20),
    tbproveedorcorreo VARCHAR(200),
    tbtipoproveedorid INT,
    tbproveedoractivo CHAR DEFAULT 'A',
	CONSTRAINT pk_tbproveedorid PRIMARY KEY (tbproveedorid),
    FOREIGN KEY (tbtipoproveedorid) REFERENCES tbtipoproveedor(tbtipoproveedorid)
)
/*-----------compra------*/
create table tbcompra(
	tbcompraid INT AUTO_INCREMENT,
    tbcomprafecha date,
    tbbovinonumero VARCHAR(200),
	tbcompraraza VARCHAR(200),/*-----------PREGUNTAR------*/
    tbbovinomadre VARCHAR(200),
    tbbovinopadre VARCHAR(200),
    tbproveedorid INT,
    tbcompraedad float,
    tbcompravalor float,
    tbcompradetalle VARCHAR(500),
    tbcompraactivo CHAR DEFAULT 'A',
	CONSTRAINT pk_tbcompraid PRIMARY KEY (tbcompraid),
    FOREIGN KEY (tbproveedorid) REFERENCES tbproveedor(tbproveedorid)
)
/*-----------tipo comprador------*/
create table tbtipocomprador(
	tbtipocompradorid INT AUTO_INCREMENT,
    tbtipocompradortipo VARCHAR(200),
    tbtipocompradoractivo CHAR DEFAULT 'A',
	CONSTRAINT pk_tbtipocompradorid PRIMARY KEY (tbtipocompradorid)
)
/*-----------comprador------*/
create table tbcomprador(	
    tbcompradorcedula VARCHAR(15),
    tbcompradornombre VARCHAR(200),
    tbcompradortelefono VARCHAR(20),
    tbcompradorcorreo VARCHAR(200),
    tbtipocompradorid INT,
    tbcompradoractivo CHAR DEFAULT 'A',
	CONSTRAINT pk_tbcompradorcedula PRIMARY KEY (tbcompradorcedula),
    FOREIGN KEY (tbtipocompradorid) REFERENCES tbtipocomprador(tbtipocompradorid)
)
/*----------venta------*/
create table tbventa(
	tbventaid INT AUTO_INCREMENT,
    tbventafecha date,
    tbbovinonumero VARCHAR(200),
    tbcompradorcedula VARCHAR(15),
    tbventavalor float,
    tbventadetalle VARCHAR(500),
	CONSTRAINT pk_tbventaid PRIMARY KEY (tbventaid),
    FOREIGN KEY (tbbovinonumero) REFERENCES tbbovino(tbbovinonumero),
    FOREIGN KEY (tbcompradorcedula) REFERENCES tbcomprador(tbcompradorcedula)
)

/*--------------------------------------------------------FINAL TABLAS-----------------------------------------*/
/*--------------------------------------------------------Procedimiento tbraza---------------------------------*/
/*pruebas
SELECT * FROM tbraza;
drop procedure sp_;
call sp_inserttbraza('Jersey','Lechera','Jsy')
call sp_updatetbraza(#,'','','')
call sp_deletedtbraza(3)
call sp_readtbraza
call sp_selecttbraza(#)

*/
/*insert*/
delimiter $$ 
CREATE PROCEDURE sp_inserttbraza(tbrazanombre_ varchar(200), tbrazadescripcion_ VARCHAR(200),
tbrazaabreviatura_ VARCHAR(10))
begin 
	
	insert into tbraza( tbrazanombre, tbrazadescripcion, tbrazaabreviatura)
    VALUES(tbrazanombre_ , tbrazadescripcion_ ,tbrazaabreviatura_ );
		
END $$
DELIMITER ;
/*update*/
delimiter $$
create procedure sp_updatetbraza(tbrazaid_ int,tbrazanombre_ varchar(200), tbrazadescripcion_ VARCHAR(200),
tbrazaabreviatura_ VARCHAR(10))
begin 
	update tbraza
	set tbrazanombre=tbrazanombre_,tbrazadescripcion=tbrazadescripcion_,tbrazaabreviatura=tbrazaabreviatura_
    where tbrazaid=tbrazaid_;
   
end$$
DELIMITER ;
/*Deleted*/
delimiter $$
create procedure sp_deletedtbraza(tbrazaid_ int)
begin 
	update tbraza
	set tbrazaactivo='I'
    where tbrazaid=tbrazaid_;
   
end$$
DELIMITER ;
/*Read*/
delimiter $$
create procedure sp_readtbraza()
begin 
	
    select tbrazaid, tbrazanombre, tbrazadescripcion,tbrazaabreviatura from tbraza
	where tbrazaactivo='A';
	
   
end$$
DELIMITER ;
/*select from id*/
delimiter $$
create procedure sp_selecttbraza(tbrazaid_ int)
begin 
	select * from tbraza
	where tbrazaactivo='A'and tbrazaid=tbrazaid_ ;
	
   
end$$
DELIMITER ;
/*--------------------------------------------------------Procedimiento tbestado---------------------------------*/
/*pruebas
SELECT * FROM tbestado;
drop procedure sp_updatetbestado;
call sp_inserttbestado('Estado1','Ejemplo',1,1)
call sp_updatetbestado(#,'','',#,#)
call sp_deletedtbestado(#)
call sp_readtbestado
call sp_selecttbestado(#)

*/
/*insert*/
delimiter $$ 
CREATE PROCEDURE sp_inserttbestado(tbestadonombre_ varchar(200), tbestadodescripcion_ VARCHAR(200),
tbestasorangoinf_ INT,tbestadorangosup_ INT)
begin 
	
	insert into tbestado( tbestadonombre, tbestadodescripcion,tbestasorangoinf,tbestadorangosup)
    VALUES(tbestadonombre_ , tbestadodescripcion_ ,tbestasorangoinf_,tbestadorangosup_ );
		
END $$
DELIMITER ;
/*update*/
delimiter $$
create procedure sp_updatetbestado(tbestadoid_ int,tbestadonombre_ varchar(200), tbestadodescripcion_ VARCHAR(200),
tbestasorangoinf_ INT,tbestadorangosup_ INT)
begin 
	update tbestado
	set tbestadonombre=tbestadonombre_,tbestadodescripcion=tbestadodescripcion_,tbestasorangoinf=tbestasorangoinf_,tbestadorangosup=tbestadorangosup_
    where tbestadoid=tbestadoid_;
   
end$$
DELIMITER ;
/*Deleted*/
delimiter $$
create procedure sp_deletedtbestado(tbestadoid_ int)
begin 
	update tbestado
	set tbestadoactivo='I'
    where tbestadoid=tbestadoid_;
   
end$$
DELIMITER ;
/*Read*/
delimiter $$
create procedure sp_readtbestado()
begin 
	select * from tbestado
	where tbestadoactivo='A';
	
   
end$$
DELIMITER ;
/*select from id*/
delimiter $$
create procedure sp_selecttbestado(tbestadoid_ int)
begin 
	select * from tbestado
	where tbestadoactivo='A'and tbestadoid=tbestadoid_ ;
	
   
end$$
DELIMITER ;

/*--------------------------------------------------------Procedimiento tbtoro---------------------------------*/
/*pruebas
SELECT * FROM tbtoro;
drop procedure sp_deletedtbtoro;
call sp_inserttbtoro('5','Cachos',5,'5')
call sp_updatetbtoro('','',#,'')
call sp_deletedtbtoro('')
call sp_readtbtoro
call sp_selecttbtoro('')

*/
/*insert*/
delimiter $$ 
CREATE PROCEDURE sp_inserttbtoro(tbtoroserie_ varchar(200), tbtoronombre_ varchar(200), tbtorocasacomercial_ int,
tbtororaza_ varchar(200))
begin 
	
	insert into tbtoro(tbtoroserie, tbtoronombre, tbtorocasacomercial,tbtororaza)
    VALUES(tbtoroserie_, tbtoronombre_, tbtorocasacomercial_,tbtororaza_);
		
END $$
DELIMITER ;
/*update*/
delimiter $$
create procedure sp_updatetbtoro(tbtoroserie_ varchar(200), tbtoronombre_ varchar(200), tbtorocasacomercial_ int,
tbtororaza_ varchar(200))
begin 
	update tbtoro
	set tbtoronombre=tbtoronombre_,tbtorocasacomercial=tbtorocasacomercial_,tbtororaza=tbtororaza_
    where tbtoroserie=tbtoroserie_;
   
end$$
DELIMITER ;
/*Deleted*/

delimiter $$
create procedure sp_deletedtbtoro(tbtoroserie_ varchar(200),tbmuertefecha_ date,tbmuertemotivo_ varchar(500),
tbmuertevalor_ float)
begin
	insert into tbmuerteToro(tbtoroserie,tbmuertefecha,tbmuertemotivo,tbmuertevalor)
    VALUES(tbtoroserie_,tbmuertefecha_,tbmuertemotivo_,tbmuertevalor_);
    
	update tbtoro
	set tbtoroactivo='I'
    where tbtoroserie=tbtoroserie_;
   
end$$
DELIMITER ;
/*Read*/
delimiter $$
create procedure sp_readtbtoro()
begin 
	select * from tbtoro
	where tbtoroactivo='A';
	
   
end$$
DELIMITER ;
/*select from id*/
delimiter $$
create procedure sp_selecttbtoro(tbtoroserie_ varchar(200))
begin 
	select * from tbtoro
	where tbtoroactivo='A'and tbtoroserie=tbtoroserie_ ;
	
   
end$$
DELIMITER ;

/*--------------------------------------------------------Procedimiento tbbovino---------------------------------*/
/*pruebas
SELECT * FROM tbbovino;
SELECT * FROM tbbovinoraza;
SELECT * FROM tbbovinoestado;
SELECT * FROM tbbovinopezones;
SELECT * FROM tbfacilidadparto;
SELECT * FROM tbmuerte;
drop procedure sp_readtbbovino;
call sp_inserttbbovino('2','Machas','Perla','Macho',CURDATE(),2,8,4)
call sp_updatetbbovino('','','','',CURDATE(),#,#,#)
call sp_deletedtbbovino('',CURDATE(),'',#)
call sp_readtbbovino
call sp_selecttbbovino('1')

*/
/*insert*/
delimiter $$ 
CREATE PROCEDURE sp_inserttbbovino(tbbovinonumero_ varchar(200), tbbovinonombre_ varchar(200), tbbovinomadre_ varchar(200),
tbbovinopadre_ varchar(200),tbbovinofechaN_ date,tbestadoid_ int, tbrazaid_ int, tbbovinopezonesproductivos_ int)
begin 
	insert into tbbovino(tbbovinonumero, tbbovinonombre, tbbovinomadre,tbbovinopadre,tbbovinofechaN)
    VALUES(tbbovinonumero_, tbbovinonombre_, tbbovinomadre_,tbbovinopadre_,tbbovinofechaN_);
    
    insert into tbbovinoraza(tbbovinonumero, tbrazaid)
    VALUES(tbbovinonumero_, tbrazaid_);
    
    insert into tbbovinoestado(tbbovinonumero, tbestadoid)
    VALUES(tbbovinonumero_, tbestadoid_);
    
    insert into tbbovinopezones(tbbovinonumero, tbbovinopezonesproductivos)
    VALUES(tbbovinonumero_, tbbovinopezonesproductivos_);
    
    insert into tbfacilidadparto(tbbovinonumero)
    VALUES(tbbovinonumero_);
    
    
END $$
DELIMITER ;
/*update*/
delimiter $$
create procedure sp_updatetbbovino(tbbovinonumero_ varchar(200), tbbovinonombre_ varchar(200), tbbovinomadre_ varchar(200),
tbbovinopadre_ varchar(200),tbbovinofechaN_ date,tbestadoid_ int, tbrazaid_ int, tbbovinopezonesproductivos_ int,
tbfacilidadpartofacilidad_ char(1) )
begin 
 
    update tbbovino
	set tbbovinonombre=tbbovinonombre_,tbbovinomadre=tbbovinomadre_,tbbovinopadre=tbbovinopadre_,
    tbbovinofechaN=tbbovinofechaN_
    where tbbovinonumero=tbbovinonumero_;
    
    update tbbovinoraza
	set tbrazaid=tbrazaid_
    where tbbovinoraza.tbbovinonumero=tbbovinonumero_;
	
    update tbbovinoestado
	set tbestadoid=tbestadoid_
    where tbbovinoestado.tbbovinonumero=tbbovinonumero_;
    
    update tbbovinopezones
	set tbbovinopezonesproductivos=tbbovinopezonesproductivos_
    where tbbovinopezones.tbbovinonumero=tbbovinonumero_;
    
     update tbfacilidadparto
	set tbfacilidadpartofacilidad=tbfacilidadpartofacilidad_
    where tbfacilidadparto.tbbovinonumero=tbbovinonumero_;
    
		
END $$
DELIMITER ;
/*Deleted*/

delimiter $$
create procedure sp_deletedtbbovino(tbbovinonumero_ varchar(200),tbmuertefecha_ date,tbmuertemotivo_ varchar(500),
tbmuertevalor_ float)
begin
	insert into tbmuerteBovino(tbbovinonumero,tbmuertefecha,tbmuertemotivo,tbmuertevalor)
    VALUES(tbbovinonumero_,tbmuertefecha_,tbmuertemotivo_,tbmuertevalor_); 
	
    update tbbovino
	set tbrazaactivo='I'
    where tbbovinonumero=tbbovinonumero_;
   
end$$
DELIMITER ;
/*Read*/
delimiter $$
create procedure sp_readtbbovino()
begin 
	select tbbovino.tbbovinonumero, tbbovino.tbbovinonombre,
    tbbovino.tbbovinomadre,tbbovino.tbbovinopadre,tbbovino.tbbovinofechaN,
    tbraza.tbrazanombre as Raza,
    tbestado.tbestadonombre as Estado,
    tbbovinopezones.tbbovinopezonesproductivos as NumeroPezones,
    tbfacilidadparto.tbfacilidadpartofacilidad as FacilidadParto from tbbovino
	inner join tbbovinoraza on tbbovinoraza.tbbovinonumero=tbbovino.tbbovinonumero
    inner join tbraza on tbraza.tbrazaid=tbbovinoraza.tbrazaid
    inner join tbbovinoestado on tbbovinoestado.tbbovinonumero=tbbovino.tbbovinonumero
    inner join tbestado on tbestado.tbestadoid=tbbovinoestado.tbestadoid
    inner join tbbovinopezones on tbbovinopezones.tbbovinonumero=tbbovino.tbbovinonumero
	inner join tbfacilidadparto on tbfacilidadparto.tbbovinonumero=tbbovino.tbbovinonumero
	where tbbovino.tbbovinoactivo='A';
	
   
end$$
DELIMITER ;
/*select from id*/
delimiter $$
create procedure sp_selecttbbovino(tbbovinonumero_ varchar(200))
begin 
	select * from tbbovino
	where tbrazaactivo='A'and tbbovinonumero=tbbovinonumero_ ;
	
   
end$$
DELIMITER ;
/*--------------------------------------------------------Procedimiento tbvaquero---------------------------------*/
/*pruebas
SELECT * FROM tbvaquero;
drop procedure sp_deletedtbvaquero;
call sp_inserttbvaquero('304560456','Luis',1)
call sp_updatetbvaquero('','',#)
call sp_deletedtbvaquero('')
call sp_readtbvaquero
call sp_selecttbvaquero('')

*/
/*insert*/
delimiter $$ 
CREATE PROCEDURE sp_inserttbvaquero(tbvaquerocedula_ varchar(200), tbvaqueronombre_ varchar(300), tbvaqueroroll_ int)
begin 
	
	insert into tbvaquero(tbvaquerocedula, tbvaqueronombre, tbvaqueroroll)
    VALUES(tbvaquerocedula_, tbvaqueronombre_, tbvaqueroroll_);
		
END $$
DELIMITER ;
/*update*/
delimiter $$
create procedure sp_updatetbvaquero(tbvaquerocedula_ varchar(200), tbvaqueronombre_ varchar(300), tbvaqueroroll_ int)
begin 
	update tbvaquero
	set tbvaqueronombre=tbvaqueronombre_,tbvaqueroroll=tbvaqueroroll_
    where tbvaquerocedula=tbvaquerocedula_;
   
end$$
DELIMITER ;
/*Deleted*/
delimiter $$
create procedure sp_deletedtbvaquero(tbvaquerocedula_ varchar(200))
begin 
	update tbvaquero
	set tbvaqueroactivo='I'
    where tbvaquerocedula=tbvaquerocedula_;
   
end$$
DELIMITER ;
/*Read*/
delimiter $$
create procedure sp_readtbvaquero()
begin 
	select * from tbvaquero
	where tbvaqueroactivo='A';
	
   
end$$
DELIMITER ;
/*select from id*/
delimiter $$
create procedure sp_selecttbvaquero(tbvaquerocedula_ varchar(200))
begin 
	select * from tbvaquero
	where tbvaqueroactivo='A'and tbvaquerocedula=tbvaquerocedula_ ;
	
   
end$$
DELIMITER ;
/*--------------------------------------------------------Procedimiento tbinseminacion---------------------------------*/
/*pruebas
SELECT * FROM tbinseminacion;
SELECT * FROM tbbovino;
SELECT * FROM tbtoro;
SELECT * FROM tbvaquero;
drop procedure sp_inserttbinseminacion;
call sp_inserttbinseminacion('B41320','B41320',CURDATE(),'304560456','ak7')
call sp_updatetbinseminacion('','',#)
call sp_deletedtbinseminacion('')
call sp_readtbinseminacion
call sp_selecttbinseminacion('')

*/
/*insert*/
delimiter $$ 
CREATE PROCEDURE sp_inserttbinseminacion(tbbovinonumero_ varchar(200), tbtoroserie_ varchar(200),
tbinseminacionfecha_ date,tbvaquerocedula_ varchar(200), tbinseminaciondescripcion_ varchar(400))
begin 
	
	insert into tbinseminacion(tbbovinonumero, tbtoroserie, tbinseminacionfecha,tbvaquerocedula,tbinseminaciondescripcion)
    VALUES(tbbovinonumero_, tbtoroserie_, tbinseminacionfecha_, tbvaquerocedula_,tbinseminaciondescripcion_);
		
END $$
DELIMITER ;
/*update*/
delimiter $$
create procedure sp_updatetbinseminacion(tbinseminacionid_ int,tbbovinonumero_ varchar(200), tbtoroserie_ varchar(200),
tbinseminacionfecha_ date,tbvaquerocedula_ varchar(200), tbinseminaciondescripcion_ varchar(400))
begin 
	update tbinseminacion
	set tbbovinonumero=tbbovinonumero_,tbtoroserie=tbtoroserie_,tbinseminacionfecha=tbinseminacionfecha_,tbvaquerocedula=tbvaquerocedula_,tbinseminaciondescripcion=tbinseminaciondescripcion_
    where tbinseminacionid=tbinseminacionid_;
   
end$$
DELIMITER ;

/*Read*/
delimiter $$
create procedure sp_readtbinseminacion()
begin 
	select * from tbinseminacion;
	
   
end$$
DELIMITER ;
/*select from id*/
delimiter $$
create procedure sp_selecttbinseminacion(tbinseminacionid_ int)
begin 
	select * from tbinseminacion
	where tbinseminacionid=tbinseminacionid_;
	
   
end$$
DELIMITER ;
/*--------------------------------------------------------Procedimiento tbparto---------------------------------*/
/*pruebas
SELECT * FROM tbparto;
SELECT * FROM tbbovino;
SELECT * FROM tbtoro;
SELECT * FROM tbvaquero;
drop procedure sp_inserttbinseminacion;
call sp_inserttbinseminacion('B41320','B41320',CURDATE(),'304560456','ak7')
call sp_updatetbinseminacion('','',#)
call sp_deletedtbinseminacion('')
call sp_readtbinseminacion
call sp_selecttbinseminacion('')

*/
/*insert*/
delimiter $$ 
CREATE PROCEDURE sp_inserttbinseminacion(tbbovinonumero_ varchar(200), tbtoroserie_ varchar(200),
tbinseminacionfecha_ date,tbvaquerocedula_ varchar(200), tbinseminaciondescripcion_ varchar(400))
begin 
	
	insert into tbinseminacion(tbbovinonumero, tbtoroserie, tbinseminacionfecha,tbvaquerocedula,tbinseminaciondescripcion)
    VALUES(tbbovinonumero_, tbtoroserie_, tbinseminacionfecha_, tbvaquerocedula_,tbinseminaciondescripcion_);
		
END $$
DELIMITER ;
/*update*/
delimiter $$
create procedure sp_updatetbinseminacion(tbinseminacionid_ int,tbbovinonumero_ varchar(200), tbtoroserie_ varchar(200),
tbinseminacionfecha_ date,tbvaquerocedula_ varchar(200), tbinseminaciondescripcion_ varchar(400))
begin 
	update tbinseminacion
	set tbbovinonumero=tbbovinonumero_,tbtoroserie=tbtoroserie_,tbinseminacionfecha=tbinseminacionfecha_,tbvaquerocedula=tbvaquerocedula_,tbinseminaciondescripcion=tbinseminaciondescripcion_
    where tbinseminacionid=tbinseminacionid_;
   
end$$
DELIMITER ;

/*Read*/
delimiter $$
create procedure sp_readtbinseminacion()
begin 
	select * from tbinseminacion;
	
   
end$$
DELIMITER ;
/*select from id*/
delimiter $$
create procedure sp_selecttbinseminacion(tbinseminacionid_ int)
begin 
	select * from tbinseminacion
	where tbinseminacionid=tbinseminacionid_;
	
   
end$$
DELIMITER ;

*--------------------------------------------------------Procedimiento tbtipoproveedor---------------------------------*/
/*pruebas
SELECT * FROM tbtipoproveedor;
drop procedure sp_inserttbtipoproveedor;
call sp_inserttbtipoproveedor('Ganado')
call sp_updatetbtipoproveedor(#,'')
call sp_deletedtbtipoproveedor(#)
call sp_readtbtipoproveedor
call sp_selecttbtipoproveedor(#)

*/
/*insert*/
delimiter $$ 
CREATE PROCEDURE sp_inserttbtipoproveedor(tbtipoproveedortipo_ varchar(200))
begin 
	
	insert into tbtipoproveedor(tbtipoproveedortipo)
VALUES(tbtipoproveedortipo_);
		
END $$
DELIMITER ;
/*update*/
delimiter $$
create procedure sp_updatetbtipoproveedor(tbtipoproveedorid_ int ,tbtipoproveedortipo_ varchar(200))
begin 
	update tbtipoproveedor
	set tbtipoproveedortipo=tbtipoproveedortipo_
    where tbtipoproveedorid=tbtipoproveedorid_;
   
end$$
DELIMITER ;
/*Deleted*/
delimiter $$
create procedure sp_deletedtbtipoproveedor(tbtipoproveedorid_ int)
begin 
	update tbtipoproveedor
	set tbtipoproveedoractivo ='I'
    where tbtipoproveedorid=tbtipoproveedorid_;
   
end$$
DELIMITER ;
/*Read*/
delimiter $$
create procedure sp_readtbtipoproveedor()
begin 
	select * from tbtipoproveedor
	where tbtipoproveedorid='A';
	
   
end$$
DELIMITER ;
/*select from id*/
delimiter $$
create procedure sp_selecttbtipoproveedor(tbtipoproveedorid_ int)
begin 
	select * from tbtipoproveedor
	where tbtipoproveedorid='A'and tbtipoproveedorid=tbtipoproveedorid_ ;
	
   
end$$
DELIMITER ;
/*--------------------------------------------------------Procedimiento tbproveedor---------------------------------*/
/*pruebas
SELECT * FROM tbproveedor;
drop procedure sp_inserttbproveedor;
call sp_inserttbproveedor('','','',#)
call sp_updatetbproveedor(#,'','','',#)
call sp_deletedtbproveedor(#)
call sp_readtbproveedor
call sp_selecttbproveedor(#)

*/
/*insert*/
delimiter $$ 
CREATE PROCEDURE sp_inserttbproveedor(tbproveedornombre_ varchar(200), tbproveedortelefono_ VARCHAR(20),
tbproveedorcorreo_ VARCHAR(200),tbtipoproveedorid_ INT)
begin 
	
	insert into tbproveedor( tbproveedornombre, tbproveedortelefono,tbproveedorcorreo,tbtipoproveedorid)
    VALUES(tbproveedornombre_ , tbproveedortelefono_ ,tbproveedorcorreo_,tbtipoproveedorid_);
		
END $$
DELIMITER ;
/*update*/
delimiter $$
create procedure sp_updatetbproveedor(tbproveedorid_ int,tbproveedornombre_ varchar(200), tbproveedortelefono_ VARCHAR(20),
tbproveedorcorreo_ VARCHAR(200),tbtipoproveedorid_ INT)
begin 
	update tbproveedor
	set tbproveedornombre=tbproveedornombre_,tbproveedortelefono=tbproveedortelefono_,tbproveedorcorreo=tbproveedorcorreo_,tbtipoproveedorid=tbtipoproveedorid_
    where tbproveedorid=tbproveedorid_;
   
end$$
DELIMITER ;
/*Deleted*/
delimiter $$
create procedure sp_deletedtbproveedor(tbproveedorid_ int)
begin 
	update tbproveedor
	set tbproveedoractivo='I'
    where tbproveedorid=tbproveedorid_;
   
end$$
DELIMITER ;
/*Read*/
delimiter $$
create procedure sp_readtbproveedor()
begin 
	select * from tbproveedor
	where tbproveedoractivo='A';
	
   
end$$
DELIMITER ;
/*select from id*/
delimiter $$
create procedure sp_selecttbproveedor(tbproveedorid_ int)
begin 
	select * from tbproveedor
	where tbproveedoractivo='A'and tbproveedorid=tbproveedorid_ ;
	
   
end$$
DELIMITER ;
/*--------------------------------------------------------Procedimiento tbcompra---------------------------------*/
/*pruebas
SELECT * FROM tbcompra;
drop procedure sp_inserttbcompra;
call sp_inserttbcompra(CURDATE(),'Paquita','Angus','Teresa','Rafael',1,8,15000,'Compra de ganado')
call sp_updatetbcompra(2,CURDATE(),'Pedro','Angus','Teresa','Rafael',1,8,15000,'Compra de ganado')
call sp_deletedtbcompra(#)
call sp_readtbcompra
call sp_selecttbcompra(#)

*/
/*insert*/
delimiter $$ 
CREATE PROCEDURE sp_inserttbcompra(tbcomprafecha_ date, tbbovinonumero_ VARCHAR(200),tbcompraraza_ VARCHAR(200),
tbbovinomadre_ VARCHAR(200),tbbovinopadre_ VARCHAR(200),tbproveedorid_ INT,tbcompraedad_ float,tbcompravalor_ float,
tbcompradetalle_ VARCHAR(500))
begin 
	
	insert into tbcompra(tbcomprafecha,tbbovinonumero,tbcompraraza,tbbovinomadre,tbbovinopadre,tbproveedorid,tbcompraedad,tbcompravalor,tbcompradetalle)
    VALUES(tbcomprafecha_,tbbovinonumero_,tbcompraraza_,tbbovinomadre_,tbbovinopadre_,tbproveedorid_,tbcompraedad_,tbcompravalor_,tbcompradetalle_);
		
END $$
DELIMITER ;
/*update*/
delimiter $$
create procedure sp_updatetbcompra(tbcompraid_ int,tbcomprafecha_ date, tbbovinonumero_ VARCHAR(200),tbcompraraza_ VARCHAR(200),
tbbovinomadre_ VARCHAR(200),tbbovinopadre_ VARCHAR(200),tbproveedorid_ INT,tbcompraedad_ float,tbcompravalor_ float,
tbcompradetalle_ VARCHAR(500))
begin 
	update tbcompra
	set tbcomprafecha=tbcomprafecha_,tbbovinonumero=tbbovinonumero_,tbcompraraza=tbcompraraza_,
    tbbovinomadre=tbbovinomadre_,tbbovinopadre=tbbovinopadre_,tbproveedorid=tbproveedorid_,tbcompraedad=tbcompraedad_,
    tbcompravalor=tbcompravalor_,tbcompradetalle=tbcompradetalle_
    where tbcompraid=tbcompraid_;
   
end$$
DELIMITER ;
/*Deleted*/
delimiter $$
create procedure sp_deletedtbcompra(tbcompraid_ int)
begin 
	update tbcompra
	set tbcompraactivo='I'
    where tbcompraid=tbcompraid_;
   
end$$
DELIMITER ;
/*Read*/
delimiter $$
create procedure sp_readtbcompra()
begin 
	select * from tbcompra
	where tbcompraactivo='A';
	
   
end$$
DELIMITER ;
/*select from id*/
delimiter $$
create procedure sp_selecttbcompra(tbcompraid_ int)
begin 
	select * from tbcompra
	where tbcompraactivo='A'and tbcompraid=tbcompraid_;
	
   
end$$
DELIMITER ;
/*--------------------------------------------------------Procedimiento tbtipocomprador---------------------------------*/
/*pruebas
SELECT * FROM tbtipocomprador;
drop procedure sp_inserttbtipocomprador;
call sp_inserttbtipocomprador('Subasta')
call sp_updatetbtipocomprador(#,'')
call sp_deletedtbtipocomprador(#)
call sp_readtbtipocomprador
call sp_selecttbtipocomprador(#)

*/
/*insert*/
delimiter $$ 
CREATE PROCEDURE sp_inserttbtipocomprador(tbtipocompradortipo_ varchar(200))
begin 
	
	insert into tbtipocomprador(tbtipocompradortipo)
VALUES(tbtipocompradortipo_);
		
END $$
DELIMITER ;
/*update*/
delimiter $$
create procedure sp_updatetbtipocomprador(tbtipocompradorid_ int ,tbtipocompradortipo_ varchar(200))
begin 
	update tbtipocomprador
	set tbtipocompradortipo=tbtipocompradortipo_
    where tbtipocompradorid=tbtipocompradorid_;
   
end$$
DELIMITER ;
/*Deleted*/
delimiter $$
create procedure sp_deletedtbtipocomprador(tbtipocompradorid int)
begin 
	update tbtipocomprador
	set tbtipocompradoractivo ='I'
    where tbtipocompradorid=tbtipocompradorid_;
   
end$$
DELIMITER ;
/*Read*/
delimiter $$
create procedure sp_readtbtipocomprador()
begin 
	select * from tbtipocomprador
	where tbtipocompradoractivo='A';
	
   
end$$
DELIMITER ;
/*select from id*/
delimiter $$
create procedure sp_selecttbtipocomprador(tbtipocompradorid_ int)
begin 
	select * from tbtipocomprador
	where tbtipocompradoractivo='A'and tbtipocompradorid=tbtipocompradorid_ ;
	
   
end$$
DELIMITER ;
/*--------------------------------------------------------Procedimiento tbcomprador---------------------------------*/
/*pruebas
SELECT * FROM tbcomprador;
drop procedure sp_inserttbcomprador;
call sp_inserttbcomprador('','','','',#)
call sp_updatetbcomprador('','','','',#)
call sp_deletedtbcomprador('')
call sp_readtbcomprador
call sp_selecttbcomprador(#)

*/
/*insert*/
delimiter $$ 
CREATE PROCEDURE sp_inserttbcomprador(tbcompradorcedula_ VARCHAR(15),tbcompradornombre_ VARCHAR(200),
tbcompradortelefono_ VARCHAR(20),tbcompradorcorreo_ VARCHAR(200),tbtipocompradorid_ INT)
begin 
	
	insert into tbcomprador(tbcompradorcedula,tbcompradornombre,tbcompradortelefono,tbcompradorcorreo,tbtipocompradorid)
    VALUES(tbcompradorcedula_,tbcompradornombre_,tbcompradortelefono_,tbcompradorcorreo_,tbtipocompradorid_);
		
END $$
DELIMITER ;
/*update*/
delimiter $$
create procedure sp_updatetbcomprador(tbcompradorcedula_ VARCHAR(15),tbcompradornombre_ VARCHAR(200),
tbcompradortelefono_ VARCHAR(20),tbcompradorcorreo_ VARCHAR(200),tbtipocompradorid_ INT)
begin 
	update tbcomprador
	set tbcompradornombre=tbcompradornombre_,tbcompradortelefono=tbcompradortelefono_,
    tbcompradorcorreo=tbcompradorcorreo_,tbtipocompradorid=tbtipocompradorid_
    where tbcompradorcedula=tbcompradorcedula_;
   
end$$
DELIMITER ;
/*Deleted*/
delimiter $$
create procedure sp_deletedtbcomprador(tbcompradorcedula_ VARCHAR(15))
begin 
	update tbcomprador
	set tbcompradoractivo='I'
    where tbcompradorcedula=tbcompradorcedula_;
   
end$$
DELIMITER ;
/*Read*/
delimiter $$
create procedure sp_readtbcomprador()
begin 
	select * from tbcomprador
	where tbcompradoractivo='A';
	
   
end$$
DELIMITER ;
/*select from id*/
delimiter $$
create procedure sp_selecttbcomprador(tbcompradorcedula_ VARCHAR(15))
begin 
	select * from tbcomprador
	where tbcompradoractivo='A'and tbcompradorcedula=tbcompradorcedula_;
	
   
end$$
DELIMITER ;