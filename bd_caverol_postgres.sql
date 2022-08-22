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
-- Name: _articulos; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._articulos (
    articulo_id smallint,
    categoria_id smallint,
    nombre character varying(50) DEFAULT NULL::character varying,
    precio numeric(4,2) DEFAULT NULL::numeric,
    descripcion character varying(1941) DEFAULT NULL::character varying,
    stock smallint,
    imagen character varying(18) DEFAULT NULL::character varying
);


ALTER TABLE public._articulos OWNER TO rebasedata;

--
-- Name: _categorias; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._categorias (
    categoria_id smallint,
    nombre character varying(6) DEFAULT NULL::character varying,
    "descripción" character varying(80) DEFAULT NULL::character varying
);


ALTER TABLE public._categorias OWNER TO rebasedata;

--
-- Name: _cestas; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._cestas (
    cesta_id character varying(1) DEFAULT NULL::character varying,
    usuario_id character varying(1) DEFAULT NULL::character varying,
    importe character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._cestas OWNER TO rebasedata;

--
-- Name: _clientes; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._clientes (
    cliente_id smallint,
    usuario_id smallint,
    fecha_registro character varying(10) DEFAULT NULL::character varying
);


ALTER TABLE public._clientes OWNER TO rebasedata;

--
-- Name: _compras; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._compras (
    compra_id character varying(1) DEFAULT NULL::character varying,
    formapago_id character varying(1) DEFAULT NULL::character varying,
    direccion_id character varying(1) DEFAULT NULL::character varying,
    importe character varying(1) DEFAULT NULL::character varying,
    fecha_compra character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._compras OWNER TO rebasedata;

--
-- Name: _detallescestas; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._detallescestas (
    cesta_id character varying(1) DEFAULT NULL::character varying,
    articulo_id character varying(1) DEFAULT NULL::character varying,
    cantidad character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._detallescestas OWNER TO rebasedata;

--
-- Name: _detallescompras; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._detallescompras (
    articulo_id character varying(1) DEFAULT NULL::character varying,
    compra_id character varying(1) DEFAULT NULL::character varying,
    cantidad_comprada character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._detallescompras OWNER TO rebasedata;

--
-- Name: _direcciones; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._direcciones (
    direccion_id smallint,
    usuario_id smallint,
    calle character varying(17) DEFAULT NULL::character varying,
    numero smallint,
    ciudad character varying(13) DEFAULT NULL::character varying,
    provincia character varying(10) DEFAULT NULL::character varying,
    cp integer,
    pais character varying(8) DEFAULT NULL::character varying,
    detalles character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._direcciones OWNER TO rebasedata;

--
-- Name: _empleados; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._empleados (
    empleados_id smallint,
    usuario_id smallint,
    puesto character varying(11) DEFAULT NULL::character varying,
    dni character varying(9) DEFAULT NULL::character varying
);


ALTER TABLE public._empleados OWNER TO rebasedata;

--
-- Name: _formaspago; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._formaspago (
    formaspago_id smallint,
    nombre character varying(18) DEFAULT NULL::character varying,
    descripcion character varying(53) DEFAULT NULL::character varying,
    sobrecargo smallint
);


ALTER TABLE public._formaspago OWNER TO rebasedata;

--
-- Name: _turnos; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._turnos (
    turno_id smallint,
    empleado_id smallint,
    dia smallint,
    hora character varying(12) DEFAULT NULL::character varying
);


ALTER TABLE public._turnos OWNER TO rebasedata;

--
-- Name: _usuarios; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._usuarios (
    usuario_id smallint,
    nombre character varying(7) DEFAULT NULL::character varying,
    apellido1 character varying(8) DEFAULT NULL::character varying,
    apellido2 character varying(8) DEFAULT NULL::character varying,
    clave character varying(32) DEFAULT NULL::character varying,
    email character varying(19) DEFAULT NULL::character varying,
    telefono integer,
    fecha_nacimiento character varying(10) DEFAULT NULL::character varying
);


ALTER TABLE public._usuarios OWNER TO rebasedata;

--
-- Data for Name: _articulos; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._articulos (articulo_id, categoria_id, nombre, precio, descripcion, stock, imagen) FROM stdin;
1	1	Spidey 01: Primer Día	19.90	¿Crees que te lo sabes todo sobre Peter Parker? Piénsatelo mejor! Volvemos a los primeros días de Pete como Spiderman, para presentarte esa época mágica de la más asombrosa, espectacular y sensacional manera.\r\n\r\n¿Crees que te lo sabes todo sobre Peter Parker? Piénsatelo mejor! Volvemos a los primeros días de Pete como Spiderman, para presentarte esa época mágica de la más asombrosa, espectacular y sensacional manera.	0	portada-comic.png
2	1	Supergirl: La mujer del mañana	2.54	Supergirl cae en una trampa y ahora tanto ella como Ruthye están atrapadas en un planeta de noche casi perpetua. En un ambiente hostil, la Mujer de Acero deberá esforzarse al máximo para acabar con los monstruos que moran en la superficie.\r\n\r\nSupergirl cae en una trampa y ahora tanto ella como Ruthye están atrapadas en un planeta de noche casi perpetua. En un ambiente hostil, la Mujer de Acero deberá esforzarse al máximo para acabar con los monstruos que moran en la superficie.\r\n\r\n	10	portada-comic.png
3	1	Star Wars: Darth Vader	47.20	Recopilación de la segunda serie Marvel del emblemático personaje.\r\n\r\nLord Vader ... ¡levántate! Tras la Venganza de los Sith, ¡sigue a Vader mientras asciende al poder como un Señor Oscuro de los Sith! Habiendo perdido todo lo que amaba y ahora más máquina que hombre, Vader da sus primeros pasos en un mundo más oscuro, ¡comenzando por erradicar a los Jedi restantes de la galaxia!\r\n\r\nPero la bibliotecaria Jocasta Nu está haciendo un esfuerzo desesperado por preservar el legado Jedi, ¡y han comenzado los indicios de una rebelión en el sistema de Mon Cala! Para garantizar que el control del Emperador sobre la galaxia sea absoluto, Vader debe lidiar rápida y brutalmente con cualquier levantamiento, aunque en secreto tiene su propio objetivo.\r\n\r\nA medida que la oscuridad se eleva sobre Mustafar, el escenario de la mayor derrota de Vader, ¿se dará cuenta de su verdadero destino el hombre llamado Anakin Skywalker?	10	portada-comic.png
4	1	Mushi-shi	8.08	Ryoichi es un chico de instituto que tiene unos sueños de lo más horribles: en ellos ve decenas de cadáveres y una mujer grotes ca que se lo quiere comer. Un día, aparece en su clase una chica llamada Kikuko, que misteriosamente se parece a la que ve en sus sueños. Después de protegerla de un ataque, decide llevarla a su casa y ahí es donde empezará su auténtica pesadilla y la del mundo en el que vive. Una obra perturbadora, a la vez que bella, con un precioso dibujo y unas escenas de lo más angustiantes, recogiendo lo mejor del horror y el thriller a la perfección. La serie consta de 3 tomos, con tando con el estilizado dibujo de Yu Satomi y el guión de Masaya Hokazono, un especialista en el género del terror.	10	portada-manga.png
5	1	Haykyu 09	7.52	El Karasuno se fija un nuevo objetivo y se pone en marcha impulsado por la frustración de perder contra el Aoba Jôsai. En medio de todo el entusiasmo por la expedición a Tokio que han organizado, ¡les aguardan los exámenes finales! Pero si suspenden, no podrán ir a Tokio... ¿¡Qué destino les espera a Hinata, Kageyama, Tanaka y Nishinoya, que están al borde del suspenso!?\r\nEl Karasuno se fija un nuevo objetivo y se pone en marcha impulsado por la frustración de perder contra el Aoba Jôsai. En medio de todo el entusiasmo por la expedición a Tokio que han organizado, ¡les aguardan los exámenes finales! Pero si suspenden, no podrán ir a Tokio... ¿¡Qué destino les espera a Hinata, Kageyama, Tanaka y Nishinoya, que están al borde del suspenso!?	10	portada-manga.png
6	1	Capitán Tsubada 09	12.30	Empieza la esperadísima final entre el Nankatsu y el Meiwa, tras la que uno de los dos conjuntos se situará en la cima de todos los equipos juveniles de fútbol de Japón. Se suceden los aguerridos ataques en ambas áreas, ¡y el Nankatsu abre el marcador! Sin embargo, Tsubasa, Misaki y Wakabayashi se lesionan... ¡¡El Nankatsu está en un grave aprieto!!\r\nEmpieza la esperadísima final entre el Nankatsu y el Meiwa, tras la que uno de los dos conjuntos se situará en la cima de todos los equipos juveniles de fútbol de Japón. Se suceden los aguerridos ataques en ambas áreas, ¡y el Nankatsu abre el marcador! Sin embargo, Tsubasa, Misaki y Wakabayashi se lesionan... ¡¡El Nankatsu está en un grave aprieto!!	10	portada-manga.png
7	1	Crónicas del Multiverso	17.86	La Variedad: una isla de soles rodeada por un inmenso vacío cósmico. Las quince especies inteligentes que habitan en ella están atrapadas, sin posibilidad de escapar aunque siguen tratando de desarrollar sus civilizaciones. Lina Kolbrand es una corsaria estelar, capitana de la nave Eurídice. En un audaz golpe de mano, roba una valiosísima mercancía a los urtianos, misteriosos seres inteligentes que funcionan como un ente colectivo y que son la especie más desarrollada de la Variedad.\r\n\r\nLa desmesurada reacción de los urtianos parece anunciar una guerra total contra las restantes especies inteligentes. Pero los urtianos tienen un objetivo muy distinto. Antes que nadie, han comprendido que el universo que habitan está muriendo. Los soles se apagan y los límites de la Variedad se colapsan. Todo el cosmos parece desintegrarse.\r\n\r\n¿Podrán los habitantes de la Variedad escapar a su prisión, al universo burbuja que los alberga? ¿Podrán salvar su cultura y sus logros intelectuales? ¿Y qué hay más allá de los límites de ese universo?\r\n\r\nCrónicas del multiverso es un regreso al auténtico espíritu de la ciencia ficción. Una novela en la que no hay límites para la imaginación, pero cuyos personajes viven situaciones y se enfrentan a dilemas que resultarán tremendamente cercanos al lector.	10	portada-novela.png
8	1	El castillo de los búhos	19.20	Durante incontables años, la entidad que una vez fuera conocida como NorrinRadd ha navegado a través de las galaxias, explorando la oscuridad situada entre las estrellas y asistiendo al nacimiento y a la caída de poderosas civilizaciones. Ahora, su camino está próximo a llegar a su fin. Joe Michael Straczynski (El Asombroso Spiderman) y Esad Ribic (Thor) narran una aventura de Estela Plateada que ocupará para siempre un lugar destacado en tu corazón y en tu biblioteca.	10	portada-novela.png
9	1	El señor de los anillos: Las dos torres	22.45	Mi declaración no es imparcial. Soy el clásico adicto a El Señor de los Anillos. Desde los doce años lo leo cada año. Lo tengo en mi mesita de noche, y cuando no lo leo, huelo sus páginas, las humedezco con mis lágrimas, me froto mis carnes tolendas con los lomos de sus tres volúmenes. —Alex de la Iglesia, El País\r\n\r\nEl mundo se divide entre los que han leído El Hobbit y El Señor de los Anillos y los que están a punto de leerlos. —The Sunday Times\r\n\r\nEl mundo se divide entre los que han leído El Hobbit y El Señor de los Anillos y los que están a punto de leerlos. —The Sunday Times	10	portada-novela.png
17	3	LA LLAMADA DE CTHULHU JDR: PERLAS ENSANGRENTADAS	8.50	Un crimen estremecedor, unas joyas robadas, una misteriosa reliquia. Esto es solo el principio. La codicia de los hombres está a punto de liberar un terrible mal y pronto se arrepentirán de ello.\r\nPerlas ensangrentadas es una aventura para La llamada de Cthulhu ambientada en la España de los ochenta y que puede jugarse de forma independiente o como precuela de La reputación del señor Castiñeira. 	10	portada-rol.png
18	3	HISTORIAS DE LEYENDA TOMO II JDR	23.70	La recopilación en físico de los shadowshots de 5ª edición más descargados del año:\r\n\r\nUn paseo por las nubes\r\n\r\nUn grupo de investigadores de la Academia Arcana ha desaparecido cuando investigaba la caída de un meteorito en la cima más alta de la región. Para encontrarlos tendréis que seguir sus pasos hasta la cumbre de la montaña y adentraros en el bosque donde han empezado a ocurrir cosas extrañas. ¿Correréis la misma suerte que vuestros antecesores? Solo hay un modo de saberlo.\r\n\r\nEl fin de la venganza\r\n\r\nEl encuentro fortuito con Therkan, un paladín del dios de la luz, especialmente generoso, puede ser un golpe de suerte. Sin embargo, su sed de venganza y sus ansias por recuperar una reliquia robada han desencadenado el terror en Pinosaltos, un pueblo que oculta oscuros secretos.\r\n\r\nCucú cantaba la rana\r\n\r\nSegún cuenta la leyenda, oculta en algún lugar del bosque de Fangalnegro se encuentra la mina abandonada de Timrek, donde un gran tesoro aguarda a quién se atreva a internarse en sus galerías inundadas y a enfrentarse a la terrible criatura que lo custodia. Aquel que desafíe los peligros del bosque y la mina puede tener una gran recompensa. o un terrible final.\r\n\r\nEl vórtice interior\r\n\r\nEn la mansión Furhast, antaño un oasis de libertinaje y excesos, reina ahora la mediocridad y la decadencia. El archimago cayó víctima de sus propios experimentos y se ha convertido en una especie de portal que engulle a todo el que lo toca. Nadie ha conseguido rescatarlo hasta ahora.\r\n\r\nLa apuesta\r\n\r\nVuestro grupo de aventureros ha decidido tomarse un descanso en la villa de Gliederung. Ninguno ha estado allí antes, pero habéis oído maravillas del lugar: un entorno idílico, numerosas tabernas, muchísimas casas de apuestas Es un lugar de esparcimiento y desenfreno en el que conviven razas de toda índole en paz y armonía. Es una lástima que justo vosotros hayáis tenido que descubrir su terrible secreto\r\nY muchos más... 	10	portada-rol.png
10	1	La casa, de Paco Roca	15.30	A lo largo de los años el dueño llena de recuerdos su casa, testigo mudo de su vida. Y aquél es también la fiel imagen de ella. Como las parejas que han convivido siempre juntas. Así, cuando su ocupante desaparece para siempre, el contenido de la casa se paraliza por el polvo esperando que alguna vez su dueño regrese.\r\nLos tres hermanos protagonistas de esta historia volverán un año después de la muerte de su padre a la casa familiar donde crecieron. Su intención es venderla, pero con cada trasto que tiran se enfrentan a los recuerdos. Temen estar deshaciéndose del pasado, del recuerdo de su padre, pero también del suyo propio. Se perciben en esta nueva obra de Paco Roca ecos autobiográficos que surgen de una necesidad de contar una situación que ha tocado de cerca al autor valenciano, tal y como ya le sucediera con Arrugas.\r\nEl escritor Fernando Marías destaca que “nada compromete más a un autor que arrancar su obra con una secuencia memorable. El lector lo ha captado y exigirá que la fuerza no afloje y se encamine, además, hacia el cierre exacto del círculo perfecto. La casa, llena de amor y verdad, lo consigue”, y añade Marías que, para él, esta nueva obra del autor valenciano, “un emocionante último paseo juntos de un padre y un hijo, es también el libro que ha permitido a Paco Roca dibujar el Tiempo que se va, o que se fue, o que se irá”.	10	portada-comic.png
11	3	DUNGEONS & DRAGONS: PLAYERS HANDBOOK	37.95	Todo lo que un jugador necesita para crear personajes heroicos para el juego de rol más importante del mundo\r\n\r\nEl Manual del Jugador es el documento de referencia esencial para todo jugador de Dungeons & Dragons te sumerge en un mundo de aventura. Explora antiguas ruinas y letales mazmorras. Lucha contra monstruos en tu búsqueda de tesoros legendarios. Gana experiencia y poder al abrirte paso por tierras ignotas junto a tus compañeros. 	10	portada-rol.png
12	3	D&D: MAZMORRAS & TUMBAS	14.21	Una guía única para sumergirte en las mazmorras y trampas mortales del juego de rol más popular del mundo, DUNGEONS & DRAGONS®. Mazmorras & Tumbas incluye increíbles ilustraciones nuevas y consejos de experto para que te adentres en los rincones más oscuros y peligrosos de los escenarios más famosos del juego. Aquí encontrarás desde castillos, criptas y fortalezas a laberintos y bajeles pirata además de algunas de las criaturas que viven en estos lugares.\r\n\r\nSi tienes ganas de crear tus propias aventuras de D&D, esta guía te ofrece el punto de partida perfecto a este mundo de fantasía, para que empieces a escribir una historia épica propia. 	10	portada-rol.png
13	3	DUNGEONS & DRAGONS: EL TRUENO DEL REY DE LA TORMEN	47.49	Gigantes y dragones guerrearon a lo largo de toda la Frontera Salvaje. Las civilizaciones humanas actuales han olvidado aquellas luchas, pero algunas de sus antiguas reliquias han perdurado. Ahora, la tierra se estremece una vez más bajo las atronadoras zancadas de los gigantes.\r\n\r\nLos gigantes de las colinas asaltan las granjas en busca de comida y ganado, mientras los gigantes de piedra arrasan los asentamientos que encuentran en su camino. Los gigantes de escarcha saquean las ciudades de la costa y los gigantes de fuego esclavizan a la población. Los castillos de los gigantes de las nubes surcan los cielos, proyectando sus siniestras sombras sobre las poblaciones del Norte. No obstante, ninguna amenaza es comparable con la ira de los gigantes de las tormentas, que han sufrido una traición.\r\n\r\nUnos enclenques aventureros deberán afrontar este desafío, reunir fuerzas, reactivar el poder de las antiguas runas y llevar la lucha hasta las puertas de los gigantes. Solo entonces descubrirán el mal oculto que está a punto de provocar la guerra entre los gigantes y la gente pequeña. Solo así podrán forjar una alianza para poner fin al conflicto antes de que estalle.\r\n\r\nUna aventura de Dungeons & Dragons para personajes de niveles 1-10 	10	portada-rol.png
14	3	EL RESURGIR DEL DRAGON JDR EL BOSQUE DE AMBAR	33.24	Testigo mudo de lo acontecido durante milenios, el Bosque de Ámbar permanece inmutable ante los grandes cambios que rigen el mundo. Existía cuando los Peregrinos posaron su vista en Voldor por primera vez y permanece siglos después de su marcha. Ha visto nacer majestuosas especies para perecer sin dejar rastro y en su interior han florecido grandiosos imperios que han caído en desgracia a manos de su propia ambición.\r\n\r\nEste bosque ha recibido muchos nombres. Fue Ryionisian, el Bosque Invernal, para los dragones que anidaron en él. Fue Sath-shala, un enorme campo de recursos en manos de los tiránicos Peregrinos. Fue fuente de esperanza para los esclavos que ansiaban libertad y tumba profunda para aquellos que la alcanzaron. Fue la floresta brumosa de Indever para los elfos que buscaron su destino tras la marcha de sus creadores, y ahora sus moradores lo llaman el Bosque de Ámbar, hasta que todo vuelva a cambiar.\r\n\r\nEl Bosque de Ámbar es un suplemento de ambientación para El Resurgir del Dragón que incluye todo lo necesario para dirigir tus aventuras en el interior de este bosque primigenio y las naciones que lo habitan. En este libro encontrarás:\r\n\r\n- Una descripción en profundidad del bosque y sus cercanías, las naciones que lo habitan y de su historia hasta la actualidad.\r\n- Nuevas reglas de juego, incluyendo nuevas razas, arquetipos, trasfondos y equipo para tus aventuras.\r\n- Nuevos monstruos, encuentros y personalidades destacadas, así como una lista detallada de semillas de conflicto.\r\n- La aventura Sangre, hielo y ámbar lista para jugar y que sumerge a los aventureros en uno de los principales conflictos de la región, donde tendrán que enfrentarse a los temibles grandes trasgos de Sagar. 	10	portada-rol.png
15	3	DUNE: AVENTURAS EN EL IMPERIO JDR	52.24	El juego de rol Dune: Aventuras en el Imperio te lleva a un futuro distante, más allá de todo lo que hubieras imaginado. El miedo es tu mayor enemigo, mantén cerca tu buen juicio. Estará disponible en dos versiones, la edición premium y la edición Atreides, o Deluxe, con la portada en guafles con estampación dorada.\r\n\r\nEl Imperio es un lugar de duelos letales, políticas feudales y misteriosas habilidades donde las Casas nobles confabulan en una búsqueda constante de poder, influencia y venganza. En este universo, el filo de una espada puede cambiar el destino de millones. Forja tu Casa, esculpe tu lugar en el cosmos o reconstruye tu linaje ancestral y lucha por el Trono Imperial.\r\n\r\nLleva a tu personaje a un viaje por los mundos contados en la obra maestra de ciencia ficción de Frank Herbert, planetas habitados por agentes de élite al servicio de las Casas nobles. Une bajo tu bandera a mentats, Maestros de la Espada, espías, hermanas Bene Gesserit e incluso a los Fremen.\r\n\r\n¡Haz ahora tu prepedido y consigue un cuaderno de hojas de personajes! Hasta agotar existencias o fecha de lanzamiento.	10	portada-rol.png
16	3	OLD SCHOOL ESSENTIALS JDR FANTASÍA AVANZADA	17.05	Este libro contiene la lista completa de hechizos para druidas e ilusionistas:\r\n\r\n34 hechizos para druida: De 5 niveles diferentes. Bendiciones simples para domar la naturaleza, poderosas oraciones para curar heridas y protegerse del daño, increíbles conjuros para liberar los destructivos poderes de la naturaleza.\r\n72 hechizos para ilusionista: De 6 niveles diferentes. Astutas ilusiones para seducir y engañar, aterradoras\r\nimágenes sombrías para que tus enemigos huyan despavoridos, poderosos hechizos que deforman el tiempo y tuercen la realidad.\r\n\r\nRequieren el manual Reglas básicas de Old-School Essentials y Fantasía clásica: Reglas de género	10	portada-rol.png
19	2	BLACK STORIES: HOSPITALES DEMENCIALES 	12.30	En esta ocasión las Black Stories son una macabra receta de pastillas, pacientes,patologías, psicosis...\r\n\r\nComponiendo un tratamiento a base de espeluznantes y enigmáticas historias de hospital, leyendas oscuras sobre salas de espera escalofriantes y quirófanos que os pondrán los tejidos blandos al descubierto.\r\n\r\nMejor mirad a vuestro doctor profundamente a los ojos antes de que saque su afilado bisturí... y preparaos para descifrar un puñado de enigmas, negros como el final de los tiempos. 	10	portada-juego.png
20	2	CORTEX GEO 	14.20	¡Bienvenido al universo Cortex!\r\n\r\nCortex pone a juego tu agilidad visual, tu coordinación, tu memoria, capacidad de razonamiento ... ¡incluso la sensibilidad de tu tacto!\r\n\r\nEl objetivo del juego es ganar la mayor cantidad de cartas reto. Para ello, tendrás que ser el primer jugador en tapar la carta en curso con la mano y dar la respuesta correcta.\r\n\r\nColoca el mazo de cartas, boca abajo, en el centro de la mesa. El dibujo del reverso de la primera carta os indicará el tipo de prueba que se va a jugar: memoria, laberinto, color, coordinación, país, bandera, repetición, Todos menos uno, población o desafío tácil... Contad hasta tres y dad la vuelta a la carta. ¿quién será el primero en resolver el acertijo?\r\n\r\nCuando un jugador consiga tener dos cartas del mismo tipo de prueba, podrá cambiarlas por una de las 4 piezas del puzzle-cerebro que ha de completar, ¡si quiere ser el ganador de la partida!\r\n\r\n¡Tres títulos diferentes de Cortex, con nuevos retos que pondrá a prueba a tu cerebro!\r\n\r\n2-6 jugadores\r\nA partir de 8 años 	10	portada-juego.png
21	2	MAGE WARS ARENA 	47.45	¡Este es el juego de fantasía que siempre quisiste probar! En él serás un poderoso hechicero, lanzado a la arena en un combate a muerte. Con una espléndida atmósfera fantástica, Mage Wars combina los mejores elementos de los juegos de cartas coleccionables y los juegos de miniaturas. Es un juego trepidante, repleto de difíciles decisiones en cada turno. Prepara tu libro de hechizos personalizado y lanza exactamente el conjuro adecuado en cada momento. Adéntrate en la arena como Señor de las Bestias, Hechicero, Mago o Sacerdotisa, cada uno armado con su propia estrategia. 	10	portada-juego.png
22	2	EPIC EL JUEGO DE CARTAS 	11.21	En el juego de cartas Epic cada jugador representa a un Dios que invoca a sus campeones para derrotar a su oponente y hacer que este pierda sus 30 vidas de inicio. También podrán jugar eventos que cambiaran drásticamente el estado de las batallas y podrán inclinar la balanza de la victoria a un lado u otro.\r\n\r\nLa primera guerra de los dioses rompió el mundo en trozos. Cada dios rehacía continuamente la realidad más de lo que el universo podía soportar\r\n La gran nada volvió, dejando a los dioses a discutir en el vacío.\r\n\r\nFinalmente, se llegó a un compromiso. Los dioses unieron fuerzas para crear el universo de nuevo, pero esta vez había reglas que incluso ellos debían obedecer.\r\n\r\nLos dioses ya no podían pelear directamente, tirando de uno contra el otro en el tejido de la realidad. Ahora sus guerras se libran en el mundo de los mortales con poderosos campeones y devastadores acontecimientos.\r\n\r\nEn el juego de cartas Epic cada jugador representa a un Dios que invoca a sus campeones para derrotar a su oponente y hacer que este pierda sus 30 vidas de inicio. También podrán jugar eventos que cambiaran drásticamente el estado de las batallas y podrán inclinar la balanza de la victoria a un lado u otro.\r\n\r\nEpic es un ágil juego de cartas de combate de ambientación fantástica diseñado por los famosos creadores de Star RealmsTM: Rob Dougherty y Darwin Kastle.\r\n\r\nCon este mismo mazo, pueden jugar de dos a cuatro jugadores las variantes de mazo cerrado, de selección por lotes y de mazos construidos.\r\n\r\nEste mazo es un juego completo, con 120 cartas diferentes, 8 tarjetas de refuerzos a doble cara y un reglamento.\r\n\r\nAñadiendo un segundo mazo, pueden jugar de cinco a ocho jugadores. 	10	portada-juego.png
23	2	DICE MASTERS DC WAR OF LIGHT GRAVITY FEED	1.14	Dice Masters es el hit global de Wizkids Games. Usa la mecánica desarrollada por Michael Elliot y Eric M. Lang, sólo que esta vez con una de las franquicias más populares de DC Cómics, War of Light.\r\n\r\nEl DC Comics Dice Masters: War of Light Gravity Feed presenta a los personajes favoritos de los fans de esta saga, como Batman, Wonder Woman, Hal Jordan, Mogo, Superboy Prime y muchos más!\r\n\r\nCada DC Comics Dice Masters: War of Light Foil Pack contiene 2 cartas y 2 dados que los jugadores podrán añadir a su colección. Con más de 30 dados de héroes y villanos, el DC Comics Dice Masters: War of Light es sin duda algo que no puedes dejar pasar.\r\n\r\nContenido: 1 sobre con 2 cartas y 2 dados. 	10	portada-juego.png
24	2	LOBO 10º ANIVERSARIO (JUEGO DE TABLERO) 	18.95	¿Quién pudiera ser pastor? Paseando en silencio por los verdes prados mientras saboreas una pieza de fruta libre de aditivos. Disfrutando de la naturaleza, entregado en cuerpo y alma al cuidado de tu rebaño. Por supuesto, se trata de una vida dura en la que no escasea el trabajo. Aunque seguro que, después de perder varias horas en un infernal atasco para fichar en una empresa gris con un jefe insoportable, la vida del pastor te parece mucho más atractiva de lo habitual.\r\n\r\nPero, ¡no te precipites! Antes de enviar a tu jefe a pastar (nunca mejor dicho), ¿por qué no comprobar cómo sería tu vida siendo pastor? Sin necesidad de mudarte, madrugar ni soportar el olor de las ovejas. En Lobo cada jugador intentará ser el propietario del mayor rebaño al finalizar la partida. Para conseguirlo te verás obligado a sabotear a tus contrincantes, huir de los lobos y pedir ayuda a los cazadores. Por si esto fuera poco, los jugadores desconocen la identidad de sus adversarios.\r\n\r\nA pesar de su aspecto encantador (algunas ovejas se roban besos por encima de la valla), Lobo esconde una competición feroz que arrastrará incluso a los jugadores más pacíficos. Lobo gusta a grandes y pequeños y resulta ideal para disfrutarlo en familia. Aunque, si cae en las manos equivocadas, puede contribuir a algún que otro divorcio. No en vano, en el dorso de la caja puede leerse el testimonio de un jugador que declara: Quien nunca ha jugado (a Lobo) no conoce realmente a sus amigos.	10	portada-juego.png
25	2	AGRICOLA - EDICIÓN REVISADA 	53.15	¡La edición revisada de un juego de estrategia de fama mundial!\r\n\r\nEstamos en Europa Central, en el año 1670 d. C. Por fin ha desaparecido la plaga que llevaba siglos asolando la región, y el mundo civilizado vuelve a ponerse en marcha.\r\nLos habitantes empiezan a reformar y ampliar sus modestas viviendas de madera. Hay que labrar y sembrar los campos para recolectar los cultivos. La dieta básica se compone de gachas, pan y hortalizas, pero tras años de hambruna la carne empieza a ser cada vez más frecuente (como sucede hoy en día, a medida que aumenta la riqueza).\r\nAl final de la partida, el jugador más próspero será el ganador. Curiosamente, los animales que no te hayas comido contribuirán a tu fortuna.\r\n\r\nCONTENIDO\r\n1 tablero principal, 4 tableros de Granja, 1 tablero de Adquisiciones mayores, 2 ampliaciones, 2 piezas de variante, 1 pieza de Quehaceres, 23 losetas de Campo/Habitación de madera, 16 losetas de Habitación de adobe/piedra, 36 fichas de 1 Alimento, 8 fichas de 5 Alimentos, 3 fichas de Sugerencia, 10 fichas de Recurso, 120 cartas (Adquisiciones, Oficios y Rondas), 1 bloc de puntuación, 1 reglamento y un apéndice. Figuras de madera: 18 Ovejas, 15 Jabalíes, 13 Vacas, 30 Maderas, 24 Adobes, 14 Juncos, 16 Piedras, 24 Cereales, 18 Hortalizas, 1 peón de Jugador inicial, 60 Cercas, 16 Establos y 20 Granjeros.	10	portada-juego.png
26	2	STORY CUBES BATMAN	11.35	"En las sombras de Gotham..." ¿Estará planeando Enigma su próximo crimen? ¿Quién ha descubierto la identidad de Batman? ¿Conseguirá escapar el Joker de Arkham?\r\n\r\nCon Rory's Story Cubes: Batman, tú decides la historia. Tira los 9 dados y podrás crear infinidad de aventuras incluyendo objetos, ubicaciones y tus villanos favoritos del mundo de Batman. 	10	portada-juego.png
\.


--
-- Data for Name: _categorias; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._categorias (categoria_id, nombre, "descripción") FROM stdin;
1	libros	Categoría en la que se engloba tanto novela, comic (ya sea americano o europeo) 
2	juegos	Categoría en la que se engloban todo tipo de juegos de mesa (juegos de: tablero,
3	rol	Categoría en la que se engloban los artículos relacionados con los juegos de rol
\.


--
-- Data for Name: _cestas; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._cestas (cesta_id, usuario_id, importe) FROM stdin;
\.


--
-- Data for Name: _clientes; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._clientes (cliente_id, usuario_id, fecha_registro) FROM stdin;
1	1	2022-02-08
2	2	2021-10-13
\.


--
-- Data for Name: _compras; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._compras (compra_id, formapago_id, direccion_id, importe, fecha_compra) FROM stdin;
\.


--
-- Data for Name: _detallescestas; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._detallescestas (cesta_id, articulo_id, cantidad) FROM stdin;
\.


--
-- Data for Name: _detallescompras; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._detallescompras (articulo_id, compra_id, cantidad_comprada) FROM stdin;
\.


--
-- Data for Name: _direcciones; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._direcciones (direccion_id, usuario_id, calle, numero, ciudad, provincia, cp, pais, detalles) FROM stdin;
1	1	Buckhannan Avenue	2977	Syracuse	NY	13206	EEUU	
2	2	Bellavista	49	Illueca	Zaragoza	50250	España	
3	3	Chausseestr.	17	Borstel	Hohenraden	25494	Alemania	
4	4	Strada Statale	7	Pray Biellese	BI	13867	Italia	
5	8	adfadfa	78	adfadfaf	adfadf	9846	adfadf	
6	9	adfadfa	78	adfadfaf	adfadf	9846	adfadf	
7	10	adfadfa	78	adfadfaf	adfadf	9846	adfadf	
8	11	adfadfa	78	adfadfaf	adfadf	9846	adfadf	
9	12	adfadfa	78	adfadfaf	adfadf	9846	adfadf	
10	13	adfadfa	78	adfadfaf	adfadf	9846	adfadf	
\.


--
-- Data for Name: _empleados; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._empleados (empleados_id, usuario_id, puesto, dni) FROM stdin;
3	3	dependiente	12345678C
4	4	dependienta	98765432A
\.


--
-- Data for Name: _formaspago; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._formaspago (formaspago_id, nombre, descripcion, sobrecargo) FROM stdin;
1	Tarjeta de crédito	Paga con tu tarjeta de crédito o débito	0
2	Transferencia	Realiza una transferencia bancaria	2
3	PayPal	Paga de forma segura a través de una cuenta de Paypal	3
4	Contrareembolso	Paga en el momento de recibir el envío	3
\.


--
-- Data for Name: _turnos; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._turnos (turno_id, empleado_id, dia, hora) FROM stdin;
1	3	1	turno_mañana
2	3	2	turno_tarde
3	3	3	turno_tarde
4	3	4	turno_tarde
5	3	5	turno_mañana
6	3	6	turno_mañana
7	4	1	turno_tarde
8	4	2	turno_mañana
9	4	3	turno_mañana
10	4	4	turno_mañana
11	4	5	turno_tarde
12	4	6	turno_tarde
\.


--
-- Data for Name: _usuarios; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._usuarios (usuario_id, nombre, apellido1, apellido2, clave, email, telefono, fecha_nacimiento) FROM stdin;
1	Alfredo	Gómez	Gómez	81dc9bdb52d04dc20036dbd8313ed055	alfredo@cliente.com	912345678	1997-06-16
2	Rosa	Pérez	Pérez	81dc9bdb52d04dc20036dbd8313ed055	rosa@cliente.com	987654321	1994-09-15
3	Manuel	Torres	Torres	81dc9bdb52d04dc20036dbd8313ed055	manuel@empleado.com	632154987	1999-02-03
4	Lidia	Ortiz	Ortiz	81dc9bdb52d04dc20036dbd8313ed055	lidia@empleado.com	698754321	2000-07-06
5	adadf	adfadfaf	adfadfaf	81dc9bdb52d04dc20036dbd8313ed055	pepe@admin.com	987654321	2022-06-01
6	adadf	adfadfaf	adfadfaf	81dc9bdb52d04dc20036dbd8313ed055	pepe@admin.com	987654321	2022-06-01
7	adadf	adfadfaf	adfadfaf	81dc9bdb52d04dc20036dbd8313ed055	pepe@admin.com	987654321	2022-06-01
8	adadf	adfadfaf	adfadfaf	81dc9bdb52d04dc20036dbd8313ed055	pepe@admin.com	987654321	2022-06-01
9	adadf	adfadfaf	adfadfaf	81dc9bdb52d04dc20036dbd8313ed055	pepe@admin.com	987654321	2022-06-01
10	adadf	adfadfaf	adfadfaf	81dc9bdb52d04dc20036dbd8313ed055	pepe@admin.com	987654321	2022-06-01
11	adadf	adfadfaf	adfadfaf	81dc9bdb52d04dc20036dbd8313ed055	pepe@admin.com	987654321	2022-06-01
12	adadf	adfadfaf	adfadfaf	81dc9bdb52d04dc20036dbd8313ed055	pepe@admin.com	987654321	2022-06-01
13	adadf	adfadfaf	adfadfaf	81dc9bdb52d04dc20036dbd8313ed055	pepe@admin.com	987654321	2022-06-01
\.


--
-- PostgreSQL database dump complete
--

