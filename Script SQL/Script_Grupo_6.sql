--Creación de Tablas:

CREATE TABLE TB_DIRECCION(
ID_DIRECCION NUMBER NOT NULL,
PROVINCIA VARCHAR2(20),
CANTON VARCHAR2(20),
DISTRITO VARCHAR2(20),
CONSTRAINT DIRECCION_PK PRIMARY KEY(ID_DIRECCION)
);


CREATE TABLE TB_CLIENTES(
ID_CLIENTE NUMBER NOT NULL,
NOMBRE_CLIENTE VARCHAR2(20),
PRIMER_APELLIDO_CLIENTE VARCHAR2(20),
SEGUNDO_APELLIDO_CLIENTE VARCHAR2(20),
TELEFONO_CLIENTE NUMBER(20),
CORREO_CLIENTE VARCHAR2(20),
FECHA_CREACION_CLIENTE DATE DEFAULT SYSDATE,
ID_DIRECCION NUMBER,
CONSTRAINT CLIENTES_PK PRIMARY KEY(ID_CLIENTE),
CONSTRAINT CLIENTES_FK FOREIGN KEY (ID_DIRECCION) REFERENCES TB_DIRECCION(ID_DIRECCION)
);


CREATE TABLE TB_ORDEN(
ID_ORDEN NUMBER GENERATED BY DEFAULT ON NULL AS IDENTITY,
ID_CLIENTE NUMBER(20),
FECHA_ORDEN DATE,
TIPO_PAGO VARCHAR2(20),
CONSTRAINT ORDEN_PK PRIMARY KEY (ID_ORDEN),
CONSTRAINT CLIENTE_ORDEN_FK FOREIGN KEY (ID_CLIENTE) REFERENCES TB_CLIENTES (ID_CLIENTE)
);

CREATE TABLE TB_PRODUCTO (
ID_PRODUCTO NUMBER NOT NULL,
NOMBRE_PRODUCTO VARCHAR2(20),
DESCRIPCION_PRODUCTO VARCHAR2(30),
PRECIO_PRODUCTO NUMBER(20),
CANTIDAD_PRODUCTO NUMBER(30),
CONSTRAINT ID_PRODUCTO_PK PRIMARY KEY (ID_PRODUCTO)
);

CREATE TABLE TB_DETALLE_ORDEN(
ID_DETALLE NUMBER GENERATED BY DEFAULT ON NULL AS IDENTITY,
ID_ORDEN NUMBER,
ID_PRODUCTO NUMBER,
CANTIDAD NUMBER(30),
TOTAL_PAGAR NUMBER (30),
CONSTRAINT DETALLE_ORDEN_PK PRIMARY KEY (ID_DETALLE),
CONSTRAINT ID_ORDEN_FK FOREIGN KEY (ID_ORDEN) REFERENCES TB_ORDEN (ID_ORDEN),
CONSTRAINT ID_PRODUCTO_FK FOREIGN KEY (ID_PRODUCTO) REFERENCES TB_PRODUCTO (ID_PRODUCTO)
);


--Store Procedures.
--Procedimiento para insertar clientes:

CREATE OR REPLACE PROCEDURE INSERTARCLIENTE(
	ID_CLI IN TB_CLIENTES.ID_CLIENTE%TYPE,
	NOM_CLIENTE IN TB_CLIENTES.NOMBRE_CLIENTE%TYPE,
	PR_APELLIDO IN TB_CLIENTES.PRIMER_APELLIDO_CLIENTE%TYPE,
	SEG_APELLIDO IN TB_CLIENTES.SEGUNDO_APELLIDO_CLIENTE%TYPE,
	TELEFONO IN TB_CLIENTES.TELEFONO_CLIENTE%TYPE,
	CORREO IN TB_CLIENTES.CORREO_CLIENTE%TYPE,
	FECHA IN TB_CLIENTES.FECHA_CREACION_CLIENTE%TYPE
)IS
BEGIN 
	INSERT INTO TB_CLIENTES (ID_CLIENTE, NOMBRE_CLIENTE, PRIMER_APELLIDO_CLIENTE, SEGUNDO_APELLIDO_CLIENTE, TELEFONO_CLIENTE, CORREO_CLIENTE, FECHA_CREACION_CLIENTE)  
    VALUES (ID_CLI, NOM_CLIENTE, PR_APELLIDO, SEG_APELLIDO, TELEFONO, CORREO, SYSDATE);
END INSERTARCLIENTE;


--Triggers:

--Tabla de Auditoria Para Clientes:

CREATE TABLE TB_AUDIT_EVENT_CLIENTE
( 
  ID_LOG number GENERATED BY DEFAULT ON NULL AS IDENTITY,
  REALIZADO_POR VARCHAR2(20),
  ACCION VARCHAR2(20),
  FECHA DATE
);

ALTER TABLE TB_AUDIT_EVENT_CLIENTE
  ADD (
    CONSTRAINT TB_AUDIT_EVENT_CLIENTE PRIMARY KEY (ID_LOG)
  );


--Secuencia para el Trigger y Tabla Auditoria:

CREATE SEQUENCE id_log_seq
    INCREMENT BY 1
    START WITH 1
    MINVALUE 1
    MAXVALUE 9999999999999
    NOCYCLE
    CACHE 2;


--Trigger para Actualizar ID de Cambio en TB_AUDIT_EVENT_CLIENTE:

CREATE OR REPLACE TRIGGER CHANGE_LOG_ID
	BEFORE INSERT ON TB_AUDIT_EVENT_CLIENTE
  		FOR EACH ROW

BEGIN
  SELECT id_log_seq.nextval
  INTO :new.ID_LOG
  FROM dual;
END;


--Trigger para Cambios en Cliente:

CREATE OR REPLACE TRIGGER CHANGE_ON_CLIENTES
  AFTER INSERT OR UPDATE OR DELETE ON TB_CLIENTES

DECLARE
	ACC TB_AUDIT_EVENT_CLIENTE.ACCION%TYPE;


BEGIN
	IF INSERTING THEN
		ACC := 'Cliente INSERTADO';
		

	ELSIF UPDATING THEN
		ACC := 'Cliente MODIFICADO';
		
	ELSIF DELETING THEN
		ACC := 'Cliente ELIMINADO';
		
	ELSE 
		DBMS_OUTPUT.PUT_LINE('El código no es alcanzable.');
	END IF;

  INSERT INTO TB_AUDIT_EVENT_CLIENTE (REALIZADO_POR, ACCION,FECHA) VALUES (user,ACC,SYSDATE);
END;






