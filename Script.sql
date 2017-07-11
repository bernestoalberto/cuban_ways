-- SQL Manager for PostgreSQL 5.6.0.46322
-- ---------------------------------------
-- Host      : localhost
-- Database  : pinarmiami
-- Version   : PostgreSQL 9.2.0, compiled by Visual C++ build 1600, 32-bit



SET search_path = public, pg_catalog;
ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_usuario_key;
ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pkey;
DROP TABLE public.usuario;
SET check_function_bodies = false;
--
-- Structure for table usuario (OID = 16396) :
--
CREATE TABLE public.usuario (
    id serial NOT NULL,
    username varchar(69),
    password varchar(90) NOT NULL,
    auth_key varchar(10)
)
WITH (oids = false);
ALTER TABLE ONLY public.usuario ALTER COLUMN id SET STATISTICS 0;
--
-- Data for table public.usuario (OID = 16396) (LIMIT 0,1)
--
INSERT INTO usuario (id, username, password, auth_key)
VALUES (1, 'vane', 'vane', '');

--
-- Definition for index usuario_pkey (OID = 16400) :
--
ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey
    PRIMARY KEY (id);
--
-- Definition for index usuario_usuario_key (OID = 16402) :
--
ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_usuario_key
    UNIQUE (username);
--
-- Data for sequence public.usuario_id_seq (OID = 16394)
--
SELECT pg_catalog.setval('usuario_id_seq', 1, true);
--
-- Comments
--
COMMENT ON SCHEMA public IS 'standard public schema';
