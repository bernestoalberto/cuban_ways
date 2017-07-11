--
-- PostgreSQL database dump
--

-- Dumped from database version 9.2.0
-- Dumped by pg_dump version 9.2.0
-- Started on 2016-06-04 01:38:53

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 219 (class 3079 OID 11727)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2253 (class 0 OID 0)
-- Dependencies: 219
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


--
-- TOC entry 218 (class 3079 OID 49545)
-- Name: adminpack; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;


--
-- TOC entry 2254 (class 0 OID 0)
-- Dependencies: 218
-- Name: EXTENSION adminpack; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 168 (class 1259 OID 49554)
-- Name: availability_state; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE availability_state (
    id_availability_state integer DEFAULT nextval(('public.availability_state_id_availability_state_seq'::text)::regclass) NOT NULL,
    availability_state character varying(100) NOT NULL
);


ALTER TABLE public.availability_state OWNER TO postgres;

--
-- TOC entry 169 (class 1259 OID 49558)
-- Name: availability_state_id_availability_state_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE availability_state_id_availability_state_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.availability_state_id_availability_state_seq OWNER TO postgres;

--
-- TOC entry 2255 (class 0 OID 0)
-- Dependencies: 169
-- Name: availability_state_id_availability_state_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('availability_state_id_availability_state_seq', 7, true);


--
-- TOC entry 170 (class 1259 OID 49560)
-- Name: coin_type; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE coin_type (
    id_coin_type integer DEFAULT nextval(('public.coin_type_id_coin_type_seq'::text)::regclass) NOT NULL,
    name_coin character varying(100) NOT NULL,
    abbrv_coin character varying(100) NOT NULL
);


ALTER TABLE public.coin_type OWNER TO postgres;

--
-- TOC entry 171 (class 1259 OID 49564)
-- Name: coin_type_id_coin_type_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE coin_type_id_coin_type_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.coin_type_id_coin_type_seq OWNER TO postgres;

--
-- TOC entry 2256 (class 0 OID 0)
-- Dependencies: 171
-- Name: coin_type_id_coin_type_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('coin_type_id_coin_type_seq', 6, true);


--
-- TOC entry 172 (class 1259 OID 49566)
-- Name: continent; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE continent (
    id_continent integer DEFAULT nextval(('public.continent_id_continent_seq'::text)::regclass) NOT NULL,
    name_continent character varying(20) NOT NULL
);


ALTER TABLE public.continent OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 49570)
-- Name: continent_id_continent_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE continent_id_continent_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.continent_id_continent_seq OWNER TO postgres;

--
-- TOC entry 2257 (class 0 OID 0)
-- Dependencies: 173
-- Name: continent_id_continent_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('continent_id_continent_seq', 1, true);


--
-- TOC entry 174 (class 1259 OID 49572)
-- Name: country; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE country (
    id_country integer DEFAULT nextval(('public.country_id_country_seq'::text)::regclass) NOT NULL,
    name_country character varying(100) NOT NULL,
    ie_code_country character(2) NOT NULL,
    code_country character(3) NOT NULL,
    prefix smallint NOT NULL,
    id_continent integer NOT NULL,
    subcontinent character varying(32),
    iso_money character varying(3),
    money_name character varying(100)
);


ALTER TABLE public.country OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 49576)
-- Name: country_id_country_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE country_id_country_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.country_id_country_seq OWNER TO postgres;

--
-- TOC entry 2258 (class 0 OID 0)
-- Dependencies: 175
-- Name: country_id_country_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('country_id_country_seq', 1, true);


--
-- TOC entry 176 (class 1259 OID 49578)
-- Name: housing; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE housing (
    id_housing integer DEFAULT nextval(('public.housing_id_housing_seq'::text)::regclass) NOT NULL,
    name_housing character varying(100) NOT NULL,
    keywords_housing character varying(100),
    announce character varying(100) NOT NULL,
    description text NOT NULL,
    id_housing_type integer NOT NULL,
    id_housing_state_rent integer NOT NULL,
    createdat date,
    id_housing_address integer,
    id_owner integer NOT NULL
);


ALTER TABLE public.housing OWNER TO postgres;

--
-- TOC entry 177 (class 1259 OID 49585)
-- Name: housing_address; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE housing_address (
    id_housing_address integer DEFAULT nextval(('public.housing_address_id_housing_address_seq'::text)::regclass) NOT NULL,
    id_town integer NOT NULL,
    length real,
    latitude real,
    number_housing character varying(10) NOT NULL,
    main_street character varying(20) NOT NULL,
    between_first character varying(20),
    between_second character varying(20)
);


ALTER TABLE public.housing_address OWNER TO postgres;

--
-- TOC entry 178 (class 1259 OID 49589)
-- Name: housing_address_id_housing_address_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE housing_address_id_housing_address_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.housing_address_id_housing_address_seq OWNER TO postgres;

--
-- TOC entry 2259 (class 0 OID 0)
-- Dependencies: 178
-- Name: housing_address_id_housing_address_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('housing_address_id_housing_address_seq', 1, false);


--
-- TOC entry 179 (class 1259 OID 49591)
-- Name: housing_availability; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE housing_availability (
    id_housing_availability integer DEFAULT nextval(('public.housing_availability_id_housing_availability_seq'::text)::regclass) NOT NULL,
    description_housing_availability text NOT NULL,
    date_start date NOT NULL,
    date_end date,
    id_availability_state integer,
    id_housing integer,
    id_usuario integer NOT NULL
);


ALTER TABLE public.housing_availability OWNER TO postgres;

--
-- TOC entry 180 (class 1259 OID 49598)
-- Name: housing_availability_id_housing_availability_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE housing_availability_id_housing_availability_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.housing_availability_id_housing_availability_seq OWNER TO postgres;

--
-- TOC entry 2260 (class 0 OID 0)
-- Dependencies: 180
-- Name: housing_availability_id_housing_availability_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('housing_availability_id_housing_availability_seq', 1, false);


--
-- TOC entry 181 (class 1259 OID 49600)
-- Name: housing_characteristics; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE housing_characteristics (
    id_housing_characteristics integer DEFAULT nextval(('public.housing_characteristics_id_housing_characteristics_seq'::text)::regclass) NOT NULL,
    name_housing_characteristics character varying(100) NOT NULL
);


ALTER TABLE public.housing_characteristics OWNER TO postgres;

--
-- TOC entry 182 (class 1259 OID 49604)
-- Name: housing_characteristics_housing; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE housing_characteristics_housing (
    id_housing_characteristics integer NOT NULL,
    id_housing integer NOT NULL,
    count_housing_characteristics integer NOT NULL,
    cancelled boolean NOT NULL
);


ALTER TABLE public.housing_characteristics_housing OWNER TO postgres;

--
-- TOC entry 183 (class 1259 OID 49607)
-- Name: housing_characteristics_id_housing_characteristics_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE housing_characteristics_id_housing_characteristics_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.housing_characteristics_id_housing_characteristics_seq OWNER TO postgres;

--
-- TOC entry 2261 (class 0 OID 0)
-- Dependencies: 183
-- Name: housing_characteristics_id_housing_characteristics_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('housing_characteristics_id_housing_characteristics_seq', 4, true);


--
-- TOC entry 184 (class 1259 OID 49609)
-- Name: housing_id_housing_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE housing_id_housing_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.housing_id_housing_seq OWNER TO postgres;

--
-- TOC entry 2262 (class 0 OID 0)
-- Dependencies: 184
-- Name: housing_id_housing_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('housing_id_housing_seq', 1, false);


--
-- TOC entry 185 (class 1259 OID 49611)
-- Name: housing_image; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE housing_image (
    id_housing_image integer DEFAULT nextval(('public.housiong_image_id_housing_image_seq'::text)::regclass) NOT NULL,
    image character varying(100) NOT NULL,
    id_housing integer NOT NULL
);


ALTER TABLE public.housing_image OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 49615)
-- Name: housing_season_price; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE housing_season_price (
    id_housing_season_price integer DEFAULT nextval(('public.housing_season_price_id_housing_season_price_seq'::text)::regclass) NOT NULL,
    price_housing_season real NOT NULL,
    comition real NOT NULL,
    cretedat date NOT NULL,
    id_housing integer NOT NULL,
    id_season integer NOT NULL,
    id_coin_type integer NOT NULL,
    comition_for_publicitiy double precision,
    date_start_publicity date NOT NULL,
    date_end_publicity date,
    booking_deposit double precision,
    date_start date,
    date_end date
);


ALTER TABLE public.housing_season_price OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 49619)
-- Name: housing_season_price_id_housing_season_price_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE housing_season_price_id_housing_season_price_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.housing_season_price_id_housing_season_price_seq OWNER TO postgres;

--
-- TOC entry 2263 (class 0 OID 0)
-- Dependencies: 187
-- Name: housing_season_price_id_housing_season_price_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('housing_season_price_id_housing_season_price_seq', 1, false);


--
-- TOC entry 188 (class 1259 OID 49621)
-- Name: housing_service; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE housing_service (
    id_service integer DEFAULT nextval(('public.service_id_service_seq'::text)::regclass) NOT NULL,
    name_service character varying(100) NOT NULL,
    description_service text
);


ALTER TABLE public.housing_service OWNER TO postgres;

--
-- TOC entry 189 (class 1259 OID 49628)
-- Name: housing_state_rent; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE housing_state_rent (
    id_housing_state_rent integer DEFAULT nextval(('public.housing_state_rent_id_housing_state_rent_seq'::text)::regclass) NOT NULL,
    name_housing_state_rent character varying(100) NOT NULL
);


ALTER TABLE public.housing_state_rent OWNER TO postgres;

--
-- TOC entry 190 (class 1259 OID 49632)
-- Name: housing_state_rent_id_housing_state_rent_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE housing_state_rent_id_housing_state_rent_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.housing_state_rent_id_housing_state_rent_seq OWNER TO postgres;

--
-- TOC entry 2264 (class 0 OID 0)
-- Dependencies: 190
-- Name: housing_state_rent_id_housing_state_rent_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('housing_state_rent_id_housing_state_rent_seq', 2, true);


--
-- TOC entry 191 (class 1259 OID 49634)
-- Name: housing_type; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE housing_type (
    id_housing_type integer DEFAULT nextval(('public.housing_type_id_housing_type_seq'::text)::regclass) NOT NULL,
    name_housing_type character varying(100) NOT NULL
);


ALTER TABLE public.housing_type OWNER TO postgres;

--
-- TOC entry 192 (class 1259 OID 49638)
-- Name: housing_type_id_housing_type_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE housing_type_id_housing_type_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.housing_type_id_housing_type_seq OWNER TO postgres;

--
-- TOC entry 2265 (class 0 OID 0)
-- Dependencies: 192
-- Name: housing_type_id_housing_type_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('housing_type_id_housing_type_seq', 4, true);


--
-- TOC entry 193 (class 1259 OID 49640)
-- Name: housiong_image_id_housing_image_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE housiong_image_id_housing_image_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.housiong_image_id_housing_image_seq OWNER TO postgres;

--
-- TOC entry 2266 (class 0 OID 0)
-- Dependencies: 193
-- Name: housiong_image_id_housing_image_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('housiong_image_id_housing_image_seq', 1, false);


--
-- TOC entry 194 (class 1259 OID 49642)
-- Name: owner; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE owner (
    id_owner integer DEFAULT nextval(('public.owner_id_owner_seq'::text)::regclass) NOT NULL,
    name_owner character varying(100) NOT NULL,
    lastname_owner character varying(100) NOT NULL,
    datebirth date,
    email character varying(100) NOT NULL,
    phone character varying(100) NOT NULL,
    createdat date NOT NULL,
    identification character varying(15) NOT NULL,
    name_owner_incharge character varying(100),
    lastname_owner_incharge character varying(100),
    bank_account character varying(50),
    photo character varying(150) DEFAULT 'user.jpg'::character varying
);


ALTER TABLE public.owner OWNER TO postgres;

--
-- TOC entry 195 (class 1259 OID 49649)
-- Name: owner_id_owner_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE owner_id_owner_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.owner_id_owner_seq OWNER TO postgres;

--
-- TOC entry 2267 (class 0 OID 0)
-- Dependencies: 195
-- Name: owner_id_owner_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('owner_id_owner_seq', 1, false);


--
-- TOC entry 217 (class 1259 OID 49935)
-- Name: owner_user; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE owner_user (
    id_owner integer NOT NULL,
    id_usuario integer NOT NULL
);
ALTER TABLE ONLY owner_user ALTER COLUMN id_owner SET STATISTICS 0;


ALTER TABLE public.owner_user OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 49651)
-- Name: permission; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE permission (
    id_permission integer DEFAULT nextval(('public.permission_id_permission_seq'::text)::regclass) NOT NULL,
    name_permission character varying(100) NOT NULL,
    url character varying(100) NOT NULL
);


ALTER TABLE public.permission OWNER TO postgres;

--
-- TOC entry 197 (class 1259 OID 49655)
-- Name: permission_id_permission_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE permission_id_permission_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.permission_id_permission_seq OWNER TO postgres;

--
-- TOC entry 2268 (class 0 OID 0)
-- Dependencies: 197
-- Name: permission_id_permission_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('permission_id_permission_seq', 1, false);


--
-- TOC entry 198 (class 1259 OID 49657)
-- Name: permission_role; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE permission_role (
    id_permission_role integer NOT NULL,
    id_role integer NOT NULL,
    id_permission integer NOT NULL
);


ALTER TABLE public.permission_role OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 49660)
-- Name: permission_role_id_permission_role_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE permission_role_id_permission_role_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.permission_role_id_permission_role_seq OWNER TO postgres;

--
-- TOC entry 2269 (class 0 OID 0)
-- Dependencies: 199
-- Name: permission_role_id_permission_role_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE permission_role_id_permission_role_seq OWNED BY permission_role.id_permission_role;


--
-- TOC entry 2270 (class 0 OID 0)
-- Dependencies: 199
-- Name: permission_role_id_permission_role_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('permission_role_id_permission_role_seq', 1, false);


--
-- TOC entry 200 (class 1259 OID 49662)
-- Name: pronvince_id_province_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE pronvince_id_province_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.pronvince_id_province_seq OWNER TO postgres;

--
-- TOC entry 2271 (class 0 OID 0)
-- Dependencies: 200
-- Name: pronvince_id_province_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('pronvince_id_province_seq', 1, true);


--
-- TOC entry 201 (class 1259 OID 49664)
-- Name: province; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE province (
    id_province integer DEFAULT nextval(('public.pronvince_id_province_seq'::text)::regclass) NOT NULL,
    name_province character varying(100) NOT NULL,
    id_country integer NOT NULL
);


ALTER TABLE public.province OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 49668)
-- Name: reference_point; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE reference_point (
    id_reference_point integer NOT NULL,
    name_reference_point character varying(100) NOT NULL,
    latitude real NOT NULL,
    length real NOT NULL,
    image character varying(1)
);


ALTER TABLE public.reference_point OWNER TO postgres;

--
-- TOC entry 203 (class 1259 OID 49671)
-- Name: reference_point_id_reference_point_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE reference_point_id_reference_point_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.reference_point_id_reference_point_seq OWNER TO postgres;

--
-- TOC entry 2272 (class 0 OID 0)
-- Dependencies: 203
-- Name: reference_point_id_reference_point_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE reference_point_id_reference_point_seq OWNED BY reference_point.id_reference_point;


--
-- TOC entry 2273 (class 0 OID 0)
-- Dependencies: 203
-- Name: reference_point_id_reference_point_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('reference_point_id_reference_point_seq', 1, false);


--
-- TOC entry 204 (class 1259 OID 49673)
-- Name: role; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE role (
    id_role integer DEFAULT nextval(('public.role_id_role_seq'::text)::regclass) NOT NULL,
    name_role character varying(100) NOT NULL
);


ALTER TABLE public.role OWNER TO postgres;

--
-- TOC entry 205 (class 1259 OID 49677)
-- Name: role_id_role_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE role_id_role_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.role_id_role_seq OWNER TO postgres;

--
-- TOC entry 2274 (class 0 OID 0)
-- Dependencies: 205
-- Name: role_id_role_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('role_id_role_seq', 3, true);


--
-- TOC entry 206 (class 1259 OID 49679)
-- Name: season; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE season (
    id_season integer DEFAULT nextval(('public.season_id_season_seq'::text)::regclass) NOT NULL,
    name_season character varying(100) NOT NULL
);


ALTER TABLE public.season OWNER TO postgres;

--
-- TOC entry 207 (class 1259 OID 49683)
-- Name: season_id_season_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE season_id_season_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.season_id_season_seq OWNER TO postgres;

--
-- TOC entry 2275 (class 0 OID 0)
-- Dependencies: 207
-- Name: season_id_season_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('season_id_season_seq', 5, true);


--
-- TOC entry 208 (class 1259 OID 49685)
-- Name: service_housing; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE service_housing (
    id_service_housing integer DEFAULT nextval(('public.service_housing_id_service_housing_seq'::text)::regclass) NOT NULL,
    price real NOT NULL,
    canceled boolean NOT NULL,
    id_service integer NOT NULL,
    id_housing integer NOT NULL
);


ALTER TABLE public.service_housing OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 49689)
-- Name: service_housing_id_service_housing_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE service_housing_id_service_housing_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.service_housing_id_service_housing_seq OWNER TO postgres;

--
-- TOC entry 2276 (class 0 OID 0)
-- Dependencies: 209
-- Name: service_housing_id_service_housing_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('service_housing_id_service_housing_seq', 1, false);


--
-- TOC entry 210 (class 1259 OID 49691)
-- Name: service_id_service_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE service_id_service_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.service_id_service_seq OWNER TO postgres;

--
-- TOC entry 2277 (class 0 OID 0)
-- Dependencies: 210
-- Name: service_id_service_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('service_id_service_seq', 4, true);


--
-- TOC entry 211 (class 1259 OID 49693)
-- Name: slip_for_rent; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE slip_for_rent (
    id_slip_for_rent integer DEFAULT nextval(('public.slip_for_rent_id_slip_for_rent_seq'::text)::regclass) NOT NULL,
    code_slip_for_rent character varying(100) NOT NULL,
    description_slip_for_rent text NOT NULL,
    createdat date NOT NULL,
    id_housing integer NOT NULL,
    id_usuario integer NOT NULL
);


ALTER TABLE public.slip_for_rent OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 49700)
-- Name: slip_for_rent_id_slip_for_rent_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE slip_for_rent_id_slip_for_rent_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.slip_for_rent_id_slip_for_rent_seq OWNER TO postgres;

--
-- TOC entry 2278 (class 0 OID 0)
-- Dependencies: 212
-- Name: slip_for_rent_id_slip_for_rent_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('slip_for_rent_id_slip_for_rent_seq', 1, false);


--
-- TOC entry 213 (class 1259 OID 49702)
-- Name: town; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE town (
    id_town integer DEFAULT nextval(('public.town_id_town_seq'::text)::regclass) NOT NULL,
    name_town character varying(100) NOT NULL,
    id_province integer NOT NULL
);


ALTER TABLE public.town OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 49706)
-- Name: town_id_town_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE town_id_town_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.town_id_town_seq OWNER TO postgres;

--
-- TOC entry 2279 (class 0 OID 0)
-- Dependencies: 214
-- Name: town_id_town_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('town_id_town_seq', 1, true);


--
-- TOC entry 215 (class 1259 OID 49708)
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuario (
    id_usuario integer DEFAULT nextval(('public.usuario_id_usuario_seq'::text)::regclass) NOT NULL,
    username character varying(45) NOT NULL,
    pass character varying(255) NOT NULL,
    word_pass character varying(100) NOT NULL,
    email character varying(45) NOT NULL,
    foto character varying(150) DEFAULT 'user.jpg'::character varying,
    auth_key character varying(255),
    active smallint,
    created_at date,
    updated_at date,
    type_user character varying(255),
    state character varying(20) NOT NULL,
    id_role integer NOT NULL,
    id_owner integer
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- TOC entry 216 (class 1259 OID 49716)
-- Name: usuario_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuario_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.usuario_id_usuario_seq OWNER TO postgres;

--
-- TOC entry 2280 (class 0 OID 0)
-- Dependencies: 216
-- Name: usuario_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuario_id_usuario_seq', 15, true);


--
-- TOC entry 2085 (class 2604 OID 49718)
-- Name: id_permission_role; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY permission_role ALTER COLUMN id_permission_role SET DEFAULT nextval('permission_role_id_permission_role_seq'::regclass);


--
-- TOC entry 2087 (class 2604 OID 49719)
-- Name: id_reference_point; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY reference_point ALTER COLUMN id_reference_point SET DEFAULT nextval('reference_point_id_reference_point_seq'::regclass);


--
-- TOC entry 2220 (class 0 OID 49554)
-- Dependencies: 168
-- Data for Name: availability_state; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY availability_state (id_availability_state, availability_state) FROM stdin;
2	Pendiente
4	Disponible
5	No Disponible
6	Reparacion
7	adsdas
\.


--
-- TOC entry 2221 (class 0 OID 49560)
-- Dependencies: 170
-- Data for Name: coin_type; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY coin_type (id_coin_type, name_coin, abbrv_coin) FROM stdin;
5	Divisa	CUC
\.


--
-- TOC entry 2222 (class 0 OID 49566)
-- Dependencies: 172
-- Data for Name: continent; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY continent (id_continent, name_continent) FROM stdin;
1	América
8	--
4	África
3	Antártida
2	Asia
7	Australia
6	Europa
5	Oceanía
\.


--
-- TOC entry 2223 (class 0 OID 49572)
-- Dependencies: 174
-- Data for Name: country; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY country (id_country, name_country, ie_code_country, code_country, prefix, id_continent, subcontinent, iso_money, money_name) FROM stdin;
4	Afganistán	AF	AFG	93	2	\N	AFN	Afgani afgano
8	Albania	AL	ALB	355	6	\N	ALL	Lek albanés
10	Antártida	AQ	ATA	672	3	\N	\N	\N
12	Argelia	DZ	DZA	213	4	\N	DZD	Dinar algerino
16	Samoa Americana	AS	ASM	1684	5	\N	\N	\N
20	Andorra	AD	AND	376	6	\N	EUR	Euro
24	Angola	AO	AGO	244	4	\N	AOA	Kwanza angoleño
28	Antigua y Barbuda	AG	ATG	1268	1	El Caribe	\N	\N
31	Azerbaiyán	AZ	AZE	994	2	\N	AZM	Manat azerbaiyano
32	Argentina	AR	ARG	54	1	América del Sur	ARS	Peso argentino
36	Australia	AU	AUS	61	7	\N	AUD	Dólar australiano
40	Austria	AT	AUT	43	6	\N	EUR	Euro
44	Bahamas	BS	BHS	1242	1	El Caribe	BSD	Dólar bahameño
48	Bahréin	BH	BHR	973	2	\N	BHD	Dinar bahreiní
50	Bangladesh	BD	BGD	880	2	\N	BDT	Taka de Bangladesh
51	Armenia	AM	ARM	374	2	\N	AMD	Dram armenio
52	Barbados	BB	BRB	1246	1	El Caribe	BBD	Dólar de Barbados
56	Bélgica	BE	BEL	32	6	\N	EUR	Euro
60	Bermudas	BM	BMU	1441	1	El Caribe	BMD	Dólar de Bermuda
64	Bhután	BT	BTN	975	2	\N	BTN	Ngultrum de Bután
68	Bolivia	BO	BOL	591	1	América del Sur	BOB	Boliviano
70	Bosnia y Herzegovina	BA	BIH	387	6	\N	BAM	Marco convertible de Bosnia-Herzegovina
72	Botsuana	BW	BWA	267	4	\N	BWP	Pula de Botsuana
74	Isla Bouvet	BV	BVT	0	3	\N	\N	\N
76	Brasil	BR	BRA	55	1	América del Sur	BRL	Real brasileño
84	Belice	BZ	BLZ	501	1	América Central	BZD	Dólar de Belice
86	Territorio Británico del Océano Índico	IO	IOT	0	8	\N	\N	\N
90	Islas Salomón	SB	SLB	677	5	\N	SBD	Dólar de las Islas Salomón
92	Islas Vírgenes Británicas	VG	VGB	1284	1	El Caribe	\N	\N
96	Brunéi	BN	BRN	673	2	\N	BND	Dólar de Brunéi
100	Bulgaria	BG	BGR	359	6	\N	BGN	Lev búlgaro
104	Myanmar	MM	MMR	95	2	\N	MMK	Kyat birmano
108	Burundi	BI	BDI	257	4	\N	BIF	Franco burundés
112	Bielorrusia	BY	BLR	375	6	\N	BYR	Rublo bielorruso
116	Camboya	KH	KHM	855	2	\N	KHR	Riel camboyano
120	Camerún	CM	CMR	237	4	\N	\N	\N
124	Canadá	CA	CAN	1	1	América del Norte	CAD	Dólar canadiense
132	Cabo Verde	CV	CPV	238	4	\N	CVE	Escudo caboverdiano
136	Islas Caimán	KY	CYM	1345	1	El Caribe	KYD	Dólar caimano (de Islas Caimán)
140	República Centroafricana	CF	CAF	236	4	\N	\N	\N
144	Sri Lanka	LK	LKA	94	2	\N	LKR	Rupia de Sri Lanka
148	Chad	TD	TCD	235	4	\N	\N	\N
152	Chile	CL	CHL	56	1	América del Sur	CLP	Peso chileno
156	China	CN	CHN	86	2	\N	CNY	Yuan Renminbi de China
158	Taiwán	TW	TWN	886	2	\N	TWD	Dólar taiwanés
162	Isla de Navidad	CX	CXR	61	5	\N	\N	\N
166	Islas Cocos	CC	CCK	61	8	\N	\N	\N
170	Colombia	CO	COL	57	1	América del Sur	COP	Peso colombiano
174	Comoras	KM	COM	269	4	\N	KMF	Franco comoriano (de Comoras)
175	Mayotte	YT	MYT	262	4	\N	\N	\N
178	Congo	CG	COG	242	4	\N	\N	\N
180	República Democrática del Congo	CD	COD	243	4	\N	CDF	Franco congoleño
184	Islas Cook	CK	COK	682	5	\N	\N	\N
188	Costa Rica	CR	CRI	506	1	América Central	CRC	Colón costarricense
191	Croacia	HR	HRV	385	6	\N	HRK	Kuna croata
192	Cuba	CU	CUB	53	1	El Caribe	CUP	Peso cubano
196	Chipre	CY	CYP	357	6	\N	CYP	Libra chipriota
203	República Checa	CZ	CZE	420	6	\N	CZK	Koruna checa
204	Benín	BJ	BEN	229	4	\N	\N	\N
208	Dinamarca	DK	DNK	45	6	\N	DKK	Corona danesa
212	Dominica	DM	DMA	1767	1	El Caribe	\N	\N
214	República Dominicana	DO	DOM	1809	1	El Caribe	DOP	Peso dominicano
218	Ecuador	EC	ECU	593	1	América del Sur	\N	\N
222	El Salvador	SV	SLV	503	1	América Central	SVC	Colón salvadoreño
226	Guinea Ecuatorial	GQ	GNQ	240	4	\N	\N	\N
231	Etiopía	ET	ETH	251	4	\N	ETB	Birr etíope
232	Eritrea	ER	ERI	291	4	\N	ERN	Nakfa eritreo
233	Estonia	EE	EST	372	6	\N	EEK	Corona estonia
234	Islas Feroe	FO	FRO	298	6	\N	\N	\N
238	Islas Malvinas	FK	FLK	500	1	América del Sur	FKP	Libra malvinense
239	Islas Georgias del Sur y Sandwich del Sur	GS	SGS	0	1	América del Sur	\N	\N
242	Fiyi	FJ	FJI	679	5	\N	FJD	Dólar fijiano
246	Finlandia	FI	FIN	358	6	\N	EUR	Euro
248	Islas Gland	AX	ALA	0	6	\N	\N	\N
250	Francia	FR	FRA	33	6	\N	EUR	Euro
254	Guayana Francesa	GF	GUF	0	1	América del Sur	\N	\N
258	Polinesia Francesa	PF	PYF	689	5	\N	\N	\N
260	Territorios Australes Franceses	TF	ATF	0	8	\N	\N	\N
262	Yibuti	DJ	DJI	253	4	\N	DJF	Franco yibutiano
266	Gabón	GA	GAB	241	4	\N	\N	\N
268	Georgia	GE	GEO	995	6	\N	GEL	Lari georgiano
270	Gambia	GM	GMB	220	4	\N	GMD	Dalasi gambiano
275	Palestina	PS	PSE	0	2	\N	\N	\N
276	Alemania	DE	DEU	49	6	\N	EUR	Euro
288	Ghana	GH	GHA	233	4	\N	GHC	Cedi ghanés
292	Gibraltar	GI	GIB	350	6	\N	GIP	Libra de Gibraltar
296	Kiribati	KI	KIR	686	5	\N	\N	\N
300	Grecia	GR	GRC	30	6	\N	EUR	Euro
304	Groenlandia	GL	GRL	299	1	América del Norte	\N	\N
308	Granada	GD	GRD	1473	1	El Caribe	\N	\N
312	Guadalupe	GP	GLP	0	1	El Caribe	\N	\N
316	Guam	GU	GUM	1671	5	\N	\N	\N
320	Guatemala	GT	GTM	502	1	América Central	GTQ	Quetzal guatemalteco
324	Guinea	GN	GIN	224	4	\N	GNF	Franco guineano
328	Guyana	GY	GUY	592	1	América del Sur	GYD	Dólar guyanés
332	Haití	HT	HTI	509	1	El Caribe	HTG	Gourde haitiano
334	Islas Heard y McDonald	HM	HMD	0	5	\N	\N	\N
336	Ciudad del Vaticano	VA	VAT	39	6	\N	\N	\N
340	Honduras	HN	HND	504	1	América Central	HNL	Lempira hondureño
344	Hong Kong	HK	HKG	852	2	\N	HKD	Dólar de Hong Kong
348	Hungría	HU	HUN	36	6	\N	HUF	Forint húngaro
352	Islandia	IS	ISL	354	6	\N	ISK	Króna islandesa
356	India	IN	IND	91	2	\N	INR	Rupia india
360	Indonesia	ID	IDN	62	2	\N	IDR	Rupiah indonesia
364	Irán	IR	IRN	98	2	\N	IRR	Rial iraní
368	Iraq	IQ	IRQ	964	2	\N	IQD	Dinar iraquí
372	Irlanda	IE	IRL	353	6	\N	EUR	Euro
376	Israel	IL	ISR	972	2	\N	ILS	Nuevo shéquel israelí
380	Italia	IT	ITA	39	6	\N	EUR	Euro
384	Costa de Marfil	CI	CIV	225	4	\N	\N	\N
388	Jamaica	JM	JAM	1876	1	El Caribe	JMD	Dólar jamaicano
392	Japón	JP	JPN	81	2	\N	JPY	Yen japonés
398	Kazajstán	KZ	KAZ	7	2	\N	KZT	Tenge kazajo
400	Jordania	JO	JOR	962	2	\N	JOD	Dinar jordano
404	Kenia	KE	KEN	254	4	\N	KES	Chelín keniata
408	Corea del Norte	KP	PRK	850	2	\N	KPW	Won norcoreano
410	Corea del Sur	KR	KOR	82	2	\N	KRW	Won surcoreano
414	Kuwait	KW	KWT	965	2	\N	KWD	Dinar kuwaití
417	Kirguistán	KG	KGZ	996	2	\N	KGS	Som kirguís (de Kirguistán)
418	Laos	LA	LAO	856	2	\N	LAK	Kip lao
422	Líbano	LB	LBN	961	2	\N	LBP	Libra libanesa
426	Lesotho	LS	LSO	266	4	\N	LSL	Loti lesotense
428	Letonia	LV	LVA	371	6	\N	LVL	Lat letón
430	Liberia	LR	LBR	231	4	\N	LRD	Dólar liberiano
434	Libia	LY	LBY	218	4	\N	LYD	Dinar libio
438	Liechtenstein	LI	LIE	423	6	\N	\N	\N
440	Lituania	LT	LTU	370	6	\N	LTL	Litas lituano
442	Luxemburgo	LU	LUX	352	6	\N	EUR	Euro
446	Macao	MO	MAC	853	2	\N	MOP	Pataca de Macao
450	Madagascar	MG	MDG	261	4	\N	MGA	Ariary malgache
454	Malaui	MW	MWI	265	4	\N	MWK	Kwacha malauiano
458	Malasia	MY	MYS	60	2	\N	MYR	Ringgit malayo
462	Maldivas	MV	MDV	960	2	\N	MVR	Rufiyaa maldiva
466	Malí	ML	MLI	223	4	\N	\N	\N
470	Malta	MT	MLT	356	6	\N	MTL	Lira maltesa
474	Martinica	MQ	MTQ	0	1	El Caribe	\N	\N
478	Mauritania	MR	MRT	222	4	\N	MRO	Ouguiya mauritana
480	Mauricio	MU	MUS	230	4	\N	MUR	Rupia mauricia
484	México	MX	MEX	52	1	América del Norte	MXN	Peso mexicano
492	Mónaco	MC	MCO	377	6	\N	\N	\N
496	Mongolia	MN	MNG	976	2	\N	MNT	Tughrik mongol
498	Moldavia	MD	MDA	373	6	\N	MDL	Leu moldavo
499	Montenegro	ME	MNE	382	6	\N	\N	\N
500	Montserrat	MS	MSR	1664	1	El Caribe	\N	\N
504	Marruecos	MA	MAR	212	4	\N	MAD	Dirham marroquí
508	Mozambique	MZ	MOZ	258	4	\N	MZM	Metical mozambiqueño
512	Omán	OM	OMN	968	2	\N	OMR	Rial omaní
516	Namibia	NA	NAM	264	4	\N	NAD	Dólar namibio
520	Nauru	NR	NRU	674	5	\N	\N	\N
524	Nepal	NP	NPL	977	2	\N	NPR	Rupia nepalesa
528	Países Bajos	NL	NLD	31	6	\N	EUR	Euro
530	Antillas Holandesas	AN	ANT	599	1	El Caribe	ANG	Florín antillano neerlandés
533	Aruba	AW	ABW	297	1	El Caribe	AWG	Florín arubeño
540	Nueva Caledonia	NC	NCL	687	5	\N	\N	\N
548	Vanuatu	VU	VUT	678	5	\N	VUV	Vatu vanuatense
554	Nueva Zelanda	NZ	NZL	64	5	\N	NZD	Dólar neozelandés
558	Nicaragua	NI	NIC	505	1	América Central	NIO	Córdoba nicaragüense
562	Níger	NE	NER	227	4	\N	\N	\N
566	Nigeria	NG	NGA	234	4	\N	NGN	Naira nigeriana
570	Niue	NU	NIU	683	5	\N	\N	\N
574	Isla Norfolk	NF	NFK	0	5	\N	\N	\N
578	Noruega	NO	NOR	47	6	\N	NOK	Corona noruega
580	Islas Marianas del Norte	MP	MNP	1670	5	\N	\N	\N
581	Islas Ultramarinas de Estados Unidos	UM	UMI	0	8	\N	\N	\N
583	Micronesia	FM	FSM	691	5	\N	\N	\N
584	Islas Marshall	MH	MHL	692	5	\N	\N	\N
585	Palaos	PW	PLW	680	5	\N	\N	\N
586	Pakistán	PK	PAK	92	2	\N	PKR	Rupia pakistaní
591	Panamá	PA	PAN	507	1	América Central	PAB	Balboa panameña
598	Papúa Nueva Guinea	PG	PNG	675	5	\N	PGK	Kina de Papúa Nueva Guinea
600	Paraguay	PY	PRY	595	1	América del Sur	PYG	Guaraní paraguayo
604	Perú	PE	PER	51	1	América del Sur	PEN	Nuevo sol peruano
608	Filipinas	PH	PHL	63	2	\N	PHP	Peso filipino
612	Islas Pitcairn	PN	PCN	870	5	\N	\N	\N
616	Polonia	PL	POL	48	6	\N	PLN	zloty polaco
620	Portugal	PT	PRT	351	6	\N	EUR	Euro
624	Guinea-Bissau	GW	GNB	245	4	\N	\N	\N
626	Timor Oriental	TL	TLS	670	2	\N	\N	\N
630	Puerto Rico	PR	PRI	1	1	El Caribe	\N	\N
634	Qatar	QA	QAT	974	2	\N	QAR	Rial qatarí
638	Reunión	RE	REU	262	4	\N	\N	\N
642	Rumania	RO	ROU	40	6	\N	RON	Leu rumano
643	Rusia	RU	RUS	7	2	\N	RUB	Rublo ruso
646	Ruanda	RW	RWA	250	4	\N	RWF	Franco ruandés
654	Santa Helena	SH	SHN	290	4	\N	SHP	Libra de Santa Helena
659	San Cristóbal y Nieves	KN	KNA	1869	1	El Caribe	\N	\N
660	Anguila	AI	AIA	1264	1	El Caribe	\N	\N
662	Santa Lucía	LC	LCA	1758	1	El Caribe	\N	\N
666	San Pedro y Miquelón	PM	SPM	508	1	América del Norte	\N	\N
670	San Vicente y las Granadinas	VC	VCT	1784	1	El Caribe	\N	\N
674	San Marino	SM	SMR	378	6	\N	\N	\N
678	Santo Tomé y Príncipe	ST	STP	239	4	\N	STD	Dobra de Santo Tomé y Príncipe
682	Arabia Saudí	SA	SAU	966	2	\N	SAR	Riyal saudí
686	Senegal	SN	SEN	221	4	\N	\N	\N
688	Serbia	RS	SRB	381	6	\N	\N	\N
690	Seychelles	SC	SYC	248	4	\N	SCR	Rupia de Seychelles
694	Sierra Leona	SL	SLE	232	4	\N	SLL	Leone de Sierra Leona
702	Singapur	SG	SGP	65	2	\N	SGD	Dólar de Singapur
703	Eslovaquia	SK	SVK	421	6	\N	SKK	Corona eslovaca
704	Vietnam	VN	VNM	84	2	\N	VND	Dong vietnamita
705	Eslovenia	SI	SVN	386	6	\N	\N	\N
706	Somalia	SO	SOM	252	4	\N	SOS	Chelín somalí
710	Sudáfrica	ZA	ZAF	27	4	\N	ZAR	Rand sudafricano
716	Zimbabue	ZW	ZWE	263	4	\N	ZWL	Dólar zimbabuense
724	España	ES	ESP	34	6	\N	EUR	Euro
732	Sahara Occidental	EH	ESH	0	4	\N	\N	\N
736	Sudán	SD	SDN	249	4	\N	SDD	Dinar sudanés
740	Surinam	SR	SUR	597	1	América del Sur	SRD	Dólar surinamés
744	Svalbard y Jan Mayen	SJ	SJM	0	6	\N	\N	\N
748	Suazilandia	SZ	SWZ	268	4	\N	SZL	Lilangeni suazi
752	Suecia	SE	SWE	46	6	\N	SEK	Corona sueca
756	Suiza	CH	CHE	41	6	\N	CHF	Franco suizo
760	Siria	SY	SYR	963	2	\N	SYP	Libra siria
762	Tayikistán	TJ	TJK	992	2	\N	TJS	Somoni tayik (de Tayikistán)
764	Tailandia	TH	THA	66	2	\N	THB	Baht tailandés
768	Togo	TG	TGO	228	4	\N	\N	\N
772	Tokelau	TK	TKL	690	5	\N	\N	\N
776	Tonga	TO	TON	676	5	\N	TOP	Pa'anga tongano
780	Trinidad y Tobago	TT	TTO	1868	1	El Caribe	TTD	Dólar de Trinidad y Tobago
784	Emiratos Árabes Unidos	AE	ARE	971	2	\N	AED	Dirham de los Emiratos Árabes Unidos
788	Túnez	TN	TUN	216	4	\N	TND	Dinar tunecino
792	Turquía	TR	TUR	90	2	\N	TRY	Lira turca
795	Turkmenistán	TM	TKM	993	2	\N	TMM	Manat turcomano
796	Islas Turcas y Caicos	TC	TCA	1649	1	El Caribe	\N	\N
798	Tuvalu	TV	TUV	688	5	\N	\N	\N
800	Uganda	UG	UGA	256	4	\N	UGX	Chelín ugandés
804	Ucrania	UA	UKR	380	6	\N	UAH	Grivna ucraniana
807	Macedonia	MK	MKD	389	6	\N	MKD	Denar macedonio
818	Egipto	EG	EGY	20	4	\N	EGP	Libra egipcia
826	Reino Unido	GB	GBR	44	6	\N	GBP	Libra esterlina (libra de Gran Bretaña)
834	Tanzania	TZ	TZA	255	4	\N	TZS	Chelín tanzano
840	Estados Unidos	US	USA	1	1	América del Norte	USD	Dólar estadounidense
850	Islas Vírgenes de los Estados Unidos	VI	VIR	1340	1	El Caribe	\N	\N
854	Burkina Faso	BF	BFA	226	4	\N	\N	\N
858	Uruguay	UY	URY	598	1	América del Sur	UYU	Peso uruguayo
860	Uzbekistán	UZ	UZB	998	2	\N	UZS	Som uzbeko
862	Venezuela	VE	VEN	58	1	América del Sur	VEB	Bolívar venezolano
876	Wallis y Futuna	WF	WLF	681	5	\N	\N	\N
882	Samoa	WS	WSM	685	5	\N	WST	Tala samoana
887	Yemen	YE	YEM	967	2	\N	YER	Rial yemení (de Yemen)
894	Zambia	ZM	ZMB	260	4	\N	ZMK	Kwacha zambiano
\.


--
-- TOC entry 2224 (class 0 OID 49578)
-- Dependencies: 176
-- Data for Name: housing; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY housing (id_housing, name_housing, keywords_housing, announce, description, id_housing_type, id_housing_state_rent, createdat, id_housing_address, id_owner) FROM stdin;
\.


--
-- TOC entry 2225 (class 0 OID 49585)
-- Dependencies: 177
-- Data for Name: housing_address; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY housing_address (id_housing_address, id_town, length, latitude, number_housing, main_street, between_first, between_second) FROM stdin;
\.


--
-- TOC entry 2226 (class 0 OID 49591)
-- Dependencies: 179
-- Data for Name: housing_availability; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY housing_availability (id_housing_availability, description_housing_availability, date_start, date_end, id_availability_state, id_housing, id_usuario) FROM stdin;
\.


--
-- TOC entry 2227 (class 0 OID 49600)
-- Dependencies: 181
-- Data for Name: housing_characteristics; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY housing_characteristics (id_housing_characteristics, name_housing_characteristics) FROM stdin;
1	Pisicina
4	Garaje
\.


--
-- TOC entry 2228 (class 0 OID 49604)
-- Dependencies: 182
-- Data for Name: housing_characteristics_housing; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY housing_characteristics_housing (id_housing_characteristics, id_housing, count_housing_characteristics, cancelled) FROM stdin;
\.


--
-- TOC entry 2229 (class 0 OID 49611)
-- Dependencies: 185
-- Data for Name: housing_image; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY housing_image (id_housing_image, image, id_housing) FROM stdin;
\.


--
-- TOC entry 2230 (class 0 OID 49615)
-- Dependencies: 186
-- Data for Name: housing_season_price; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY housing_season_price (id_housing_season_price, price_housing_season, comition, cretedat, id_housing, id_season, id_coin_type, comition_for_publicitiy, date_start_publicity, date_end_publicity, booking_deposit, date_start, date_end) FROM stdin;
\.


--
-- TOC entry 2231 (class 0 OID 49621)
-- Dependencies: 188
-- Data for Name: housing_service; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY housing_service (id_service, name_service, description_service) FROM stdin;
1	Desayuno	\N
2	Almuerzo	\N
4	Masaje	Horario de 5 a 8 pm
\.


--
-- TOC entry 2232 (class 0 OID 49628)
-- Dependencies: 189
-- Data for Name: housing_state_rent; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY housing_state_rent (id_housing_state_rent, name_housing_state_rent) FROM stdin;
1	Confirmado
2	No Confirmado
\.


--
-- TOC entry 2233 (class 0 OID 49634)
-- Dependencies: 191
-- Data for Name: housing_type; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY housing_type (id_housing_type, name_housing_type) FROM stdin;
1	Casa
2	Departamento
4	Hostal
\.


--
-- TOC entry 2234 (class 0 OID 49642)
-- Dependencies: 194
-- Data for Name: owner; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY owner (id_owner, name_owner, lastname_owner, datebirth, email, phone, createdat, identification, name_owner_incharge, lastname_owner_incharge, bank_account, photo) FROM stdin;
\.


--
-- TOC entry 2245 (class 0 OID 49935)
-- Dependencies: 217
-- Data for Name: owner_user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY owner_user (id_owner, id_usuario) FROM stdin;
\.


--
-- TOC entry 2235 (class 0 OID 49651)
-- Dependencies: 196
-- Data for Name: permission; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY permission (id_permission, name_permission, url) FROM stdin;
\.


--
-- TOC entry 2236 (class 0 OID 49657)
-- Dependencies: 198
-- Data for Name: permission_role; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY permission_role (id_permission_role, id_role, id_permission) FROM stdin;
\.


--
-- TOC entry 2237 (class 0 OID 49664)
-- Dependencies: 201
-- Data for Name: province; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY province (id_province, name_province, id_country) FROM stdin;
1	La Habana	192
\.


--
-- TOC entry 2238 (class 0 OID 49668)
-- Dependencies: 202
-- Data for Name: reference_point; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY reference_point (id_reference_point, name_reference_point, latitude, length, image) FROM stdin;
\.


--
-- TOC entry 2239 (class 0 OID 49673)
-- Dependencies: 204
-- Data for Name: role; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY role (id_role, name_role) FROM stdin;
1	Administrador
3	Propietario
\.


--
-- TOC entry 2240 (class 0 OID 49679)
-- Dependencies: 206
-- Data for Name: season; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY season (id_season, name_season) FROM stdin;
4	Alta
5	Baja
\.


--
-- TOC entry 2241 (class 0 OID 49685)
-- Dependencies: 208
-- Data for Name: service_housing; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY service_housing (id_service_housing, price, canceled, id_service, id_housing) FROM stdin;
\.


--
-- TOC entry 2242 (class 0 OID 49693)
-- Dependencies: 211
-- Data for Name: slip_for_rent; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY slip_for_rent (id_slip_for_rent, code_slip_for_rent, description_slip_for_rent, createdat, id_housing, id_usuario) FROM stdin;
\.


--
-- TOC entry 2243 (class 0 OID 49702)
-- Dependencies: 213
-- Data for Name: town; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY town (id_town, name_town, id_province) FROM stdin;
1	Marianao	1
\.


--
-- TOC entry 2244 (class 0 OID 49708)
-- Dependencies: 215
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuario (id_usuario, username, pass, word_pass, email, foto, auth_key, active, created_at, updated_at, type_user, state, id_role, id_owner) FROM stdin;
1	vanessa	vane	vane	vane@gmail.es	vanessa.jpg	\N	1	2016-06-07	2016-06-02	Trabajador	1	1	\N
4	charlietyn	caronal12	11	charlietyn@gmail.com	charlietyn.JPG	\N	1	2016-06-02	2016-06-02	Trabajador	1	1	\N
12	salvador	salvi1234	11	salvi@gmail.com	salvador.jpg	\N	1	2016-06-02	2016-06-03	Trabajador	1	1	\N
13	yanette	yanette123	fjfj	yanette@gmail.es	user.jpg	\N	1	2016-06-03	2016-06-03	Trabajador	1	1	\N
14	arturo	arturo123	11	arturo@gmail.es	user.jpg	\N	1	2016-06-03	2016-06-03	Trabajador	1	1	\N
15	ernesto	ernestobonet	11	ernestobonet@gmail.es	ernesto.jpg	\N	1	2016-06-03	2016-06-03	Trabajador	1	1	\N
\.


--
-- TOC entry 2164 (class 2606 OID 49721)
-- Name: PK10; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY reference_point
    ADD CONSTRAINT "PK10" PRIMARY KEY (id_reference_point);


--
-- TOC entry 2138 (class 2606 OID 49723)
-- Name: PK11; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_state_rent
    ADD CONSTRAINT "PK11" PRIMARY KEY (id_housing_state_rent);


--
-- TOC entry 2142 (class 2606 OID 49725)
-- Name: PK12; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_type
    ADD CONSTRAINT "PK12" PRIMARY KEY (id_housing_type);


--
-- TOC entry 2146 (class 2606 OID 49727)
-- Name: PK13; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY owner
    ADD CONSTRAINT "PK13" PRIMARY KEY (id_owner);


--
-- TOC entry 2168 (class 2606 OID 49729)
-- Name: PK15; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY role
    ADD CONSTRAINT "PK15" PRIMARY KEY (id_role);


--
-- TOC entry 2150 (class 2606 OID 49731)
-- Name: PK16; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY permission
    ADD CONSTRAINT "PK16" PRIMARY KEY (id_permission);


--
-- TOC entry 2130 (class 2606 OID 49733)
-- Name: PK17; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_image
    ADD CONSTRAINT "PK17" PRIMARY KEY (id_housing_image);


--
-- TOC entry 2134 (class 2606 OID 49735)
-- Name: PK18; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_service
    ADD CONSTRAINT "PK18" PRIMARY KEY (id_service);


--
-- TOC entry 2176 (class 2606 OID 49737)
-- Name: PK19; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY service_housing
    ADD CONSTRAINT "PK19" PRIMARY KEY (id_service_housing);


--
-- TOC entry 2160 (class 2606 OID 49739)
-- Name: PK2; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY province
    ADD CONSTRAINT "PK2" PRIMARY KEY (id_province);


--
-- TOC entry 2124 (class 2606 OID 49741)
-- Name: PK20; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_characteristics
    ADD CONSTRAINT "PK20" PRIMARY KEY (id_housing_characteristics);


--
-- TOC entry 2172 (class 2606 OID 49743)
-- Name: PK21; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY season
    ADD CONSTRAINT "PK21" PRIMARY KEY (id_season);


--
-- TOC entry 2128 (class 2606 OID 49745)
-- Name: PK23; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_characteristics_housing
    ADD CONSTRAINT "PK23" PRIMARY KEY (id_housing_characteristics, id_housing);


--
-- TOC entry 2132 (class 2606 OID 49747)
-- Name: PK24; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_season_price
    ADD CONSTRAINT "PK24" PRIMARY KEY (id_housing_season_price);


--
-- TOC entry 2100 (class 2606 OID 49749)
-- Name: PK25; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY coin_type
    ADD CONSTRAINT "PK25" PRIMARY KEY (id_coin_type);


--
-- TOC entry 2180 (class 2606 OID 49751)
-- Name: PK26; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY slip_for_rent
    ADD CONSTRAINT "PK26" PRIMARY KEY (id_slip_for_rent);


--
-- TOC entry 2122 (class 2606 OID 49753)
-- Name: PK27; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_availability
    ADD CONSTRAINT "PK27" PRIMARY KEY (id_housing_availability);


--
-- TOC entry 2096 (class 2606 OID 49755)
-- Name: PK28; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY availability_state
    ADD CONSTRAINT "PK28" PRIMARY KEY (id_availability_state);


--
-- TOC entry 2184 (class 2606 OID 49757)
-- Name: PK7; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY town
    ADD CONSTRAINT "PK7" PRIMARY KEY (id_town);


--
-- TOC entry 2118 (class 2606 OID 49759)
-- Name: PK8; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing
    ADD CONSTRAINT "PK8" PRIMARY KEY (id_housing);


--
-- TOC entry 2120 (class 2606 OID 49761)
-- Name: PK9; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_address
    ADD CONSTRAINT "PK9" PRIMARY KEY (id_housing_address);


--
-- TOC entry 2098 (class 2606 OID 49763)
-- Name: availability_state_availability_state_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY availability_state
    ADD CONSTRAINT availability_state_availability_state_key UNIQUE (availability_state);


--
-- TOC entry 2102 (class 2606 OID 49765)
-- Name: coin_type_abbrv_coin_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY coin_type
    ADD CONSTRAINT coin_type_abbrv_coin_key UNIQUE (abbrv_coin);


--
-- TOC entry 2104 (class 2606 OID 49767)
-- Name: coin_type_name_coin_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY coin_type
    ADD CONSTRAINT coin_type_name_coin_key UNIQUE (name_coin);


--
-- TOC entry 2106 (class 2606 OID 49769)
-- Name: continent_name_continent_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY continent
    ADD CONSTRAINT continent_name_continent_key UNIQUE (name_continent);


--
-- TOC entry 2110 (class 2606 OID 49771)
-- Name: country_code_country_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY country
    ADD CONSTRAINT country_code_country_key UNIQUE (code_country);


--
-- TOC entry 2112 (class 2606 OID 49773)
-- Name: country_ie_code_country_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY country
    ADD CONSTRAINT country_ie_code_country_key UNIQUE (ie_code_country);


--
-- TOC entry 2114 (class 2606 OID 49775)
-- Name: country_name_country_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY country
    ADD CONSTRAINT country_name_country_key UNIQUE (name_country);


--
-- TOC entry 2126 (class 2606 OID 49777)
-- Name: housing_characteristics_name_housing_characteristics_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_characteristics
    ADD CONSTRAINT housing_characteristics_name_housing_characteristics_key UNIQUE (name_housing_characteristics);


--
-- TOC entry 2140 (class 2606 OID 49779)
-- Name: housing_state_rent_name_housing_state_rent_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_state_rent
    ADD CONSTRAINT housing_state_rent_name_housing_state_rent_key UNIQUE (name_housing_state_rent);


--
-- TOC entry 2144 (class 2606 OID 49781)
-- Name: housing_type_name_housing_type_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_type
    ADD CONSTRAINT housing_type_name_housing_type_key UNIQUE (name_housing_type);


--
-- TOC entry 2148 (class 2606 OID 49783)
-- Name: owner_ci_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY owner
    ADD CONSTRAINT owner_ci_key UNIQUE (identification);


--
-- TOC entry 2192 (class 2606 OID 49958)
-- Name: owner_user_id_owner_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY owner_user
    ADD CONSTRAINT owner_user_id_owner_key UNIQUE (id_owner);


--
-- TOC entry 2194 (class 2606 OID 49944)
-- Name: owner_user_id_usuario_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY owner_user
    ADD CONSTRAINT owner_user_id_usuario_key UNIQUE (id_usuario);


--
-- TOC entry 2152 (class 2606 OID 49785)
-- Name: permission_name_permission_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY permission
    ADD CONSTRAINT permission_name_permission_key UNIQUE (name_permission);


--
-- TOC entry 2154 (class 2606 OID 49787)
-- Name: permission_role_id_permission_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY permission_role
    ADD CONSTRAINT permission_role_id_permission_key UNIQUE (id_permission);


--
-- TOC entry 2156 (class 2606 OID 49789)
-- Name: permission_role_id_role_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY permission_role
    ADD CONSTRAINT permission_role_id_role_key UNIQUE (id_role);


--
-- TOC entry 2158 (class 2606 OID 49791)
-- Name: permission_role_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY permission_role
    ADD CONSTRAINT permission_role_pkey PRIMARY KEY (id_permission_role);


--
-- TOC entry 2188 (class 2606 OID 49793)
-- Name: pk19; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT pk19 PRIMARY KEY (id_usuario);


--
-- TOC entry 2108 (class 2606 OID 49795)
-- Name: pk7_1; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY continent
    ADD CONSTRAINT pk7_1 PRIMARY KEY (id_continent);


--
-- TOC entry 2116 (class 2606 OID 49797)
-- Name: pk8_1; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY country
    ADD CONSTRAINT pk8_1 PRIMARY KEY (id_country);


--
-- TOC entry 2162 (class 2606 OID 49799)
-- Name: province_name_province_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY province
    ADD CONSTRAINT province_name_province_key UNIQUE (name_province);


--
-- TOC entry 2166 (class 2606 OID 49801)
-- Name: reference_point_name_reference_point_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY reference_point
    ADD CONSTRAINT reference_point_name_reference_point_key UNIQUE (name_reference_point);


--
-- TOC entry 2170 (class 2606 OID 49803)
-- Name: role_name_role_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY role
    ADD CONSTRAINT role_name_role_key UNIQUE (name_role);


--
-- TOC entry 2174 (class 2606 OID 49805)
-- Name: season_name_season_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY season
    ADD CONSTRAINT season_name_season_key UNIQUE (name_season);


--
-- TOC entry 2178 (class 2606 OID 49807)
-- Name: service_housing_idx; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY service_housing
    ADD CONSTRAINT service_housing_idx UNIQUE (id_service, id_housing);


--
-- TOC entry 2136 (class 2606 OID 49809)
-- Name: service_name_service_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY housing_service
    ADD CONSTRAINT service_name_service_key UNIQUE (name_service);


--
-- TOC entry 2182 (class 2606 OID 49811)
-- Name: slip_for_rent_code_slip_for_rent_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY slip_for_rent
    ADD CONSTRAINT slip_for_rent_code_slip_for_rent_key UNIQUE (code_slip_for_rent);


--
-- TOC entry 2186 (class 2606 OID 49813)
-- Name: town_name_town_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY town
    ADD CONSTRAINT town_name_town_key UNIQUE (name_town);


--
-- TOC entry 2190 (class 2606 OID 49815)
-- Name: usuario_username_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_username_key UNIQUE (username);


--
-- TOC entry 2201 (class 2606 OID 49816)
-- Name: Refavailability_state32; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing_availability
    ADD CONSTRAINT "Refavailability_state32" FOREIGN KEY (id_availability_state) REFERENCES availability_state(id_availability_state);


--
-- TOC entry 2207 (class 2606 OID 49821)
-- Name: Refcoin_type29; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing_season_price
    ADD CONSTRAINT "Refcoin_type29" FOREIGN KEY (id_coin_type) REFERENCES coin_type(id_coin_type);


--
-- TOC entry 2210 (class 2606 OID 49826)
-- Name: Refcountry36; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY province
    ADD CONSTRAINT "Refcountry36" FOREIGN KEY (id_country) REFERENCES country(id_country) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2211 (class 2606 OID 49831)
-- Name: Refhousing19; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY service_housing
    ADD CONSTRAINT "Refhousing19" FOREIGN KEY (id_housing) REFERENCES housing(id_housing);


--
-- TOC entry 2204 (class 2606 OID 49836)
-- Name: Refhousing26; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing_characteristics_housing
    ADD CONSTRAINT "Refhousing26" FOREIGN KEY (id_housing) REFERENCES housing(id_housing);


--
-- TOC entry 2208 (class 2606 OID 49841)
-- Name: Refhousing27; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing_season_price
    ADD CONSTRAINT "Refhousing27" FOREIGN KEY (id_housing) REFERENCES housing(id_housing);


--
-- TOC entry 2213 (class 2606 OID 49846)
-- Name: Refhousing30; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY slip_for_rent
    ADD CONSTRAINT "Refhousing30" FOREIGN KEY (id_housing) REFERENCES housing(id_housing);


--
-- TOC entry 2202 (class 2606 OID 49851)
-- Name: Refhousing33; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing_availability
    ADD CONSTRAINT "Refhousing33" FOREIGN KEY (id_housing) REFERENCES housing(id_housing);


--
-- TOC entry 2206 (class 2606 OID 49856)
-- Name: Refhousing37; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing_image
    ADD CONSTRAINT "Refhousing37" FOREIGN KEY (id_housing) REFERENCES housing(id_housing);


--
-- TOC entry 2196 (class 2606 OID 49861)
-- Name: Refhousing_address9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing
    ADD CONSTRAINT "Refhousing_address9" FOREIGN KEY (id_housing_address) REFERENCES housing_address(id_housing_address);


--
-- TOC entry 2205 (class 2606 OID 49866)
-- Name: Refhousing_characteristics25; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing_characteristics_housing
    ADD CONSTRAINT "Refhousing_characteristics25" FOREIGN KEY (id_housing_characteristics) REFERENCES housing_characteristics(id_housing_characteristics);


--
-- TOC entry 2197 (class 2606 OID 49871)
-- Name: Refhousing_state_rent8; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing
    ADD CONSTRAINT "Refhousing_state_rent8" FOREIGN KEY (id_housing_state_rent) REFERENCES housing_state_rent(id_housing_state_rent);


--
-- TOC entry 2198 (class 2606 OID 49876)
-- Name: Refhousing_type11; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing
    ADD CONSTRAINT "Refhousing_type11" FOREIGN KEY (id_housing_type) REFERENCES housing_type(id_housing_type);


--
-- TOC entry 2199 (class 2606 OID 49881)
-- Name: Refowner12; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing
    ADD CONSTRAINT "Refowner12" FOREIGN KEY (id_owner) REFERENCES owner(id_owner);


--
-- TOC entry 2216 (class 2606 OID 49886)
-- Name: Refowner40; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT "Refowner40" FOREIGN KEY (id_owner) REFERENCES owner(id_owner) ON UPDATE SET NULL ON DELETE SET NULL;


--
-- TOC entry 2215 (class 2606 OID 49891)
-- Name: Refpronvince5; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY town
    ADD CONSTRAINT "Refpronvince5" FOREIGN KEY (id_province) REFERENCES province(id_province);


--
-- TOC entry 2217 (class 2606 OID 49896)
-- Name: Refrole38; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT "Refrole38" FOREIGN KEY (id_role) REFERENCES role(id_role);


--
-- TOC entry 2209 (class 2606 OID 49901)
-- Name: Refseason28; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing_season_price
    ADD CONSTRAINT "Refseason28" FOREIGN KEY (id_season) REFERENCES season(id_season);


--
-- TOC entry 2212 (class 2606 OID 49906)
-- Name: Refservice18; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY service_housing
    ADD CONSTRAINT "Refservice18" FOREIGN KEY (id_service) REFERENCES housing_service(id_service);


--
-- TOC entry 2200 (class 2606 OID 49911)
-- Name: Reftown6; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing_address
    ADD CONSTRAINT "Reftown6" FOREIGN KEY (id_town) REFERENCES town(id_town);


--
-- TOC entry 2214 (class 2606 OID 49916)
-- Name: Refusuario39; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY slip_for_rent
    ADD CONSTRAINT "Refusuario39" FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario);


--
-- TOC entry 2203 (class 2606 OID 49921)
-- Name: Refusuario41; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY housing_availability
    ADD CONSTRAINT "Refusuario41" FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario);


--
-- TOC entry 2195 (class 2606 OID 49926)
-- Name: country_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY country
    ADD CONSTRAINT country_fk FOREIGN KEY (id_continent) REFERENCES continent(id_continent);


--
-- TOC entry 2218 (class 2606 OID 49947)
-- Name: owner_user_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY owner_user
    ADD CONSTRAINT owner_user_fk FOREIGN KEY (id_owner) REFERENCES owner(id_owner);


--
-- TOC entry 2219 (class 2606 OID 49952)
-- Name: owner_user_fk1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY owner_user
    ADD CONSTRAINT owner_user_fk1 FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario);


--
-- TOC entry 2252 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2016-06-04 01:38:55

--
-- PostgreSQL database dump complete
--

