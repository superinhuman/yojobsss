--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 9.6.10

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: _applications; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._applications (
    jobid smallint,
    postedby character varying(20) DEFAULT NULL::character varying,
    cname character varying(23) DEFAULT NULL::character varying,
    postname character varying(26) DEFAULT NULL::character varying,
    applicantsname character varying(26) DEFAULT NULL::character varying,
    birthdate character varying(10) DEFAULT NULL::character varying,
    email character varying(25) DEFAULT NULL::character varying,
    contact bigint,
    address character varying(15) DEFAULT NULL::character varying,
    skills character varying(31) DEFAULT NULL::character varying,
    work character varying(6) DEFAULT NULL::character varying,
    school character varying(7) DEFAULT NULL::character varying,
    college character varying(7) DEFAULT NULL::character varying,
    university character varying(20) DEFAULT NULL::character varying
);


ALTER TABLE public._applications OWNER TO rebasedata;

--
-- Name: _jobs; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._jobs (
    id smallint,
    email character varying(20) DEFAULT NULL::character varying,
    cname character varying(23) DEFAULT NULL::character varying,
    pname character varying(25) DEFAULT NULL::character varying,
    numberofpost smallint,
    education character varying(9) DEFAULT NULL::character varying,
    description character varying(19) DEFAULT NULL::character varying
);


ALTER TABLE public._jobs OWNER TO rebasedata;

--
-- Name: _users; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._users (
    name character varying(31) DEFAULT NULL::character varying,
    birthdate character varying(10) DEFAULT NULL::character varying,
    email character varying(25) DEFAULT NULL::character varying,
    password integer,
    usertype character varying(8) DEFAULT NULL::character varying,
    contact character varying(13) DEFAULT NULL::character varying,
    address character varying(15) DEFAULT NULL::character varying,
    organisation character varying(17) DEFAULT NULL::character varying,
    skills character varying(49) DEFAULT NULL::character varying,
    work character varying(17) DEFAULT NULL::character varying,
    school character varying(22) DEFAULT NULL::character varying,
    college character varying(20) DEFAULT NULL::character varying,
    university character varying(20) DEFAULT NULL::character varying,
    img character varying(58) DEFAULT NULL::character varying
);


ALTER TABLE public._users OWNER TO rebasedata;

--
-- Data for Name: _applications; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._applications (jobid, postedby, cname, postname, applicantsname, birthdate, email, contact, address, skills, work, school, college, university) FROM stdin;
8			 Salesman	Kazi Jahidur Rahaman Riyad	1996-01-05	riyad.jr359@gmail.com	1534524734	DIT	PHP	Nope	KAHS	GCCC	EWU
6			 Analyst	Kazi Jahidur Rahaman Riyad	1996-01-05	riyad.jr359@gmail.com	1534524734	DIT	PHP	Nope	KAHS	GCCC	EWU
4			 Manager	Kazi Jahidur Rahaman Riyad	1996-01-05	riyad.jr359@gmail.com	1534524734	DIT	PHP	Nope	KAHS	GCCC	EWU
5			 Junior Officer	Kazi Jahidur Rahaman Riyad	1996-01-05	riyad.jr359@gmail.com	1534524734	DIT	PHP	Nope	KAHS	GCCC	EWU
8			 Salesman	Kazi Jahidur Rahaman Riyad	1996-01-05	riyad.jr359@gmail.com	1534524734	DIT	PHP	Nope	KAHS	GCCC	EWU
1			 Junior Software Developer	Kazi Jahidur Rahaman Riyad	1996-01-05	riyad.jr359@gmail.com	1534524734	DIT	PHP	Nope	KAHS	GCCC	EWU
6		 Yoda	 Analyst	Shakhawat Hoshein Patwari	1990-02-22	shomiq@titumircollege.edu	2147483647	Mirpur	South Indian Movie Dekha	N/A	N/A	N/A	N/A
4		 Eastern Bank Ltd	 Manager	Jannatul Adon	1996-10-19	na831532@gmail.com	0	Shiddheshwari	PHP	A lot	Wills		EWU
8		 Trade Point	 Salesman	Jannatul Adon	1996-10-19	na831532@gmail.com	0	Shiddheshwari	PHP	A lot	Wills		EWU
11		 Eastern Bank Ltd.	 hshghg	Kazi Jahidur Rahaman Riyad	1996-01-05	riyad.jr359@gmail.com	1534524734	DIT	PHP	Nope	KAHS	GCCC	EWU
7	anik@gamil.com	Foodiez	 Cheff	Kazi Jahidur Rahaman Riyad	1996-01-05	riyad.jr359@gmail.com	1534524734	DIT	PHP	Nope	KAHS	GCCC	EWU
1	mib@gmail.com	Linkstaff Software Ltd.	 Junior Software Developer	Syed Jobayer Arfin	1997-02-18	arfin@nomail.com	2147483647	bashundhara r/a	PHP, JAVA, DoT NET, Android App	n/a	CA	DRMC	AIUB
2	mib@gmail.com	Datasoft	 Software Developer	Syed Jobayer Arfin	1997-02-18	arfin@nomail.com	2147483647	bashundhara r/a	PHP, JAVA, DoT NET, Android App	n/a	CA	DRMC	AIUB
3	mib@gmail.com	Pi Solutions	 CEO	Syed Jobayer Arfin	1997-02-18	arfin@nomail.com	2147483647	bashundhara r/a	PHP, JAVA, DoT NET, Android App	n/a	CA	DRMC	AIUB
9	raselewu@hotmail.com	Eastern Bank Ltd.	 hshghg	Aurin Tabassum		aurin@putput.com	0						
8	raselewu@hotmail.com	Trade Point	 Salesman	Kazi Jahidur Rahaman	1996-01-06	riyad.jr359@gmail.com	2147483647	DIT Project R/A	C++, C	Intern	CA	GCCC	East West University
7	anik@gamil.com	Foodiez	 Cheff		2019-12-10	sadaf@lol.com	1688888888	hgsfcgsf	jhjsg	mnxghs	jhgjhgd	jdghsgd	jhsjwgs
\.


--
-- Data for Name: _jobs; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._jobs (id, email, cname, pname, numberofpost, education, description) FROM stdin;
1	mib@gmail.com	Linkstaff Software Ltd.	Junior Software Developer	0		
2	mib@gmail.com	Datasoft	Software Developer	0		
3	mib@gmail.com	Pi Solutions	CEO	0		
4	mib@gmail.com	Eastern Bank Ltd	Manager	0		
5	mib@gmail.com	Bangladesh Krishi Bank	Junior Officer	0		
6	mib@gmail.com	Yoda	Analyst	0		
7	anik@gamil.com	Foodiez	Cheff	0		
8	raselewu@hotmail.com	Trade Point	Salesman	100	HSC	Delivering Products
9	raselewu@hotmail.com	Eastern Bank Ltd.	hshghg	1113	aaaahshaj	nsmanm
10	raselewu@hotmail.com	Eastern Bank Ltd.	hshghg	1113	aaaahshaj	nsmanm
11	raselewu@hotmail.com	Eastern Bank Ltd.	hshghg	1113	aaaahshaj	nsmanm
\.


--
-- Data for Name: _users; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._users (name, birthdate, email, password, usertype, contact, address, organisation, skills, work, school, college, university, img) FROM stdin;
Kazi Jahidur Rahaman	1996-01-06	riyad.jr359@gmail.com	12345	seeker	03687215653	DIT Project R/A	Pi Corp	C++, C	Intern	CA	GCCC	East West University	photos/Photo1.jpg
Kazi Jahidur Rahaman		riyad.jr359@gmail.com	1	employer	0								
Jannatul Adon	1999-02-17	na831532@gmail.com	1234	seeker	999999999999	Siddheshwari	Yoda	PHP, JAVA, DoT NET, Android App	YODA	Wills	Wills	EWU	photos/51868854_930499370478547_2561674222258618368_n.jpg
Kazi Billaler Rahaman Rasel	1994-05-15	raselewu@hotmail.com	1234	employer		DIT R/A	Eastern Bank Ltd.	MS Office, SPSS	TradePoint	City Corp. Boys School	Commerce College CTG	EWU, NSU	photos/87153.jpg
Kazi Billaler Rahaman		raselewu2@hotmail.com	1234	employer	0								
Musharrat Islam Barsha	2017-02-06	mib@gmail.com	12345	employer	999999999999	Dhbh	qdmnsbanm	php	nscbns	qmnbdw	nsbnb	xbmsnbx	photos/25552398_1742024132771940_3180375020418977635_n.jpg
S. M. Muhaiminul Haque Anik	2008-07-29	anik@gamil.com	12345	employer	0191883893	Banasree	Foodiez	Cricket	Keeping	NIS	NIC	EWU	
Shakhawat Hoshein Patwari Somiq	1995-07-04	shomiq@titumircollege.edu	12345	seeker	1987482164872	Badda, Dhaka	Toto Company	MS Office, Ghumaite Pari, Tamil Movie Dekhte Pari	Khai Khai Company	Monurhat High School	Monurhat College	Titumir College	photos/1.jpg
Syed Jobayer Arfin	1997-02-18	arfin@nomail.com	12345	seeker	0021902819082	bashundhara r/a	datasoft	PHP, JAVA, DoT NET, Android App	n/a	CA	DRMC	AIUB	
Aurin Tabassum	1996-02-13	aurin@putput.com	1234	seeker	01688888888	jatrabari	datasoft	shob pare	rannabanna	akschool	city college	EWU	photos/IMG-20160730-WA0005_1.jpg
ABCD		ABC@gmail.com	1111	employer									
	2019-12-10	sadaf@lol.com	11111	seeker	01688888888	hgsfcgsf	hxhgsav	jhjsg	mnxghs	jhgjhgd	jdghsgd	jhsjwgs	photos/11049655_10206048886155010_91106920464599459_n.jpg
\.


--
-- PostgreSQL database dump complete
--

