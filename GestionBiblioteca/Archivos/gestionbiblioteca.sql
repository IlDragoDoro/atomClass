-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2020 a las 22:21:56
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestionbiblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `ID` int(11) NOT NULL,
  `isbn` text NOT NULL,
  `titulo` text NOT NULL,
  `autor` text NOT NULL,
  `editorial` text NOT NULL,
  `genero` set('actualidad','bienestar','cocina','comic','infantil','juvenil','literatura','psicologia','tiempoLibre') NOT NULL,
  `publicacion` date NOT NULL,
  `valoracion` int(11) NOT NULL,
  `busquedas` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `paginas` int(11) NOT NULL,
  `img` text NOT NULL,
  `disponibilidad` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`ID`, `isbn`, `titulo`, `autor`, `editorial`, `genero`, `publicacion`, `valoracion`, `busquedas`, `descripcion`, `paginas`, `img`, `disponibilidad`) VALUES
(1, '978-84-679-1209-8', 'Death Note I', 'Tsugumi Ohba,Takeshi Obata', 'Norma', 'comic', '2020-11-03', 10, 2000, 'Light Yaami,Estudiante modelo al que todos aseguran un brillante porvenir,encuentra un cuadeno de un shinigami donde puede asesinar gente.', 200, 'deathnoteI.jpg', 1),
(2, '978-84-679-1210-4', 'Death Note II', 'Tsugumi Ohba,Takeshi Obata', 'Norma', 'comic', '2020-12-24', 10, 2000, 'L está cada vez ams seguro de que kira,el asesino que está provocando la muerte de criminales por todo el mundo, es hijo del jefe de policia.', 200, 'deathnoteII.jpg', 1),
(3, '9 788435 061421', 'El amor de spinoza', 'Yael Guiladi', 'Edhasa', 'literatura', '2020-11-11', 10, 200, 'En la segunda mitad del siglo XVII Ámsterdam era una de las ciudades más vitales de Europa, con pintores tan descollantes como Van Rijn o jan Steen', 461, 'elamordespinoza.jpg', 1),
(4, '9 788497 346627', 'HISPANIA La Epopeya De Los Romanos En La Península', 'Gonzalo Bravo', 'La esfera de los libros', 'literatura', '2020-11-11', 6, 200, 'Desde que Escipión El Africano desembarcó en Ampurias en el año 218 a.C. para combatir a los cartagineses, hasta la caída del Imperio ROmano occidental, en 476 d.C.,La peninsula ibéroca estuvo ligada estrechamente a los destinos de Roma.', 236, 'hispanialaepopeya.jpg', 1),
(5, '9 788490 947432', 'Food Wars 1: Un destino sin fin', 'Yûto Tsukuda', 'Panini Manga', 'comic', '2020-11-02', 10, 3000, 'Sôma Yukihira es un estudiante de secundaria cuya familia lleva un pequeño restaurante de barrio. Sôma practica cada día junto a su padre con el objetivo de lograr ser mejor cocinero que él.\r\nUn día,su padre sugiere la posibilidad de que Sôma entre en una escuela de cocina...\r\n¿¿Aquí empieza la nueva etapa culinaria de Sôma!!\r\n(Incluido en la historia corta Shokugeki no Sôma)', 210, 'foodwars1.jpg', 1),
(6, '9 788416 244638', 'Kingdom Hearts 1', 'Shiro Amano', 'Planeta comic', 'comic', '2020-11-04', 10, 20000, 'Un manga de Kingdom hearts, una saga que dispone de videojuegos varios.', 200, 'kingdomhearts1.jpg', 1),
(7, '9 788416 244645', 'Kingdom Hearts 2', 'Shiro Amano', 'Planeta Comic', 'comic', '2020-11-04', 10, 2300, 'Un manga de Kingdom hearts, una saga que dispone de videojuegos varios. El numero 2 de la saga amarilla.', 215, 'kingdomhearts2.jpg', 1),
(8, '9 788416 308866', 'Kingdom hearts 358/2Days 1', 'Shiro Amano', 'Planeta Comic', 'comic', '2020-11-04', 10, 20000, 'edicion azul', 200, 'kingdomhearts3581.jpg', 1),
(9, '9 788416 308873', 'Kingdom Hearts 358/2 2', 'Shiro Amano', 'Planeta Cómic', 'comic', '2020-11-17', 10, 23000, 'edición azul', 210, 'kingdomhearts3582.jpg', 1),
(10, '9 788416 308880', 'Kingdom Hearts 358/2 3', 'Shiro Amano', 'Planeta Comic', 'comic', '2015-11-10', 10, 20500, 'edición azul', 210, 'kingdomhearts3583.jpg', 1),
(11, '9 788416 308897', 'Kingdom hearts 358/2 4', 'Shiro Amano', 'Planeta Comic', 'comic', '2015-11-29', 10, 20345, 'edición azul', 190, 'kingdomhearts3584.jpg', 1),
(12, '9 788416 308903', 'Kingdom hearts 258/2 5', 'Shiro Amano', 'Planeta Cómic', 'comic', '2015-11-04', 10, 17000, 'edición azul', 210, 'kingdomhearts3585.jpg', 1),
(13, '9 788498 478181', 'Fairy Tail 1', 'Hiro Mashima', 'Norma editorial', 'comic', '2006-11-10', 10, 20354, 'Un gremio de magos es una organización que ofrece a los hechiceros todo tipo de trabajos: desde búsqueda de objetos ahsta la caza de demonios. Pero entre todos los gremios hay uno que tiene la fama de ser un poco peligroso, pero divertido y tremendamente escandaloso.\r\n¿Quieres formar parte del gremio de fairy tail?', 200, 'fairytail1.jpg', 1),
(14, '9 788498 478198', 'Fairy Tail 2', 'Hiro Mashima', 'Norma editorial', 'comic', '2006-11-17', 10, 23659, 'Entre los numerosos gremios de magos que hay por todo el mundo, fairy tail es el que reúne a los más problemáticos: Natsu, que maneja el fuego a voluntad, el gato Happy, Gray el excibicionista, Loki el mujeriego... Cuando Lucy se une a ellos forma equipo con Natsu y Happy, y emprenden su primer trabajo. ♥\r\nEl encargo es...¡¿Como?! ¡¿Un robo!?', 205, 'fairytail2.jpg', 1),
(15, '9 788498 478204', 'Fairy Tail 3', 'Hiro Mashima', 'Norma editorial', 'comic', '2006-11-17', 10, 20365, 'Miembros del gremio oscuro Eisenwait, liderados por Erigol, pretenden usar la flauta mágica Lullaby para provocar... ¡¿Una masacre indiscrimindada?! Pero el equipo más fuerte de fairy tail, formado por Natsu, Gray y Elsa (más Lucy y Happy,que se apuntan a todo),están dispuestos a lo que sea para detenerles.', 215, 'fairytail3.jpg', 1),
(16, '9 788468 471549', 'One Piece 3', 'Eiichiro oda', 'Planeta DeAgostini', 'comic', '2020-11-03', 10, 26798, 'Luffy, Zorro y Nami se hacen a la mar. en su primera escala encuentran a Gaimon, un pirata que desde hace veinte años protege un sorprendente tesoro, oculto en una isla desierta.\r\nDecididos a conseguir un buen barco, nuestros amigos viajan al continente. Allí conocen a Usuff, un chico valiente pero terriblemente mentiroso y al Capitán Kuro, un pirata despiadado que prepara el golpe perfecto.', 200, 'onepiece3.jpg', 1),
(17, '9 788416 090242', 'Magi El laberinto de la mágia 1', 'Shinobu Ohtaka', 'Planeta cómic', 'comic', '2020-11-03', 5, 2365, 'Innumerables encuentros y despedidas, misterios ocultos en un mundo desconocido...\r\n¡¡Aquí empieza la gran aventura, llena de magia y tesoros secretos, del extraño Aladdin!!\r\n¡¡Primer tomo de esta refrescante epopeya mágica!!', 185, 'magi1.jpg', 1),
(18, '9 788491 461142', 'Sword Art Online Phantom Bullet 001', 'Koutarou Yamada,Reki Kawahara,Abec', 'Planeta cómic', 'comic', '2014-11-05', 8, 21306, '\"Este \'juego\' no es ningún juego.\"\r\nAkihiko Kayaba, programador de Sword Art Online.\r\nHa pasado un año desde que se produjo el incidente de SAO y ya todo ha vuelto a la normalidad. Kirito,\"el espadachín negro\",cuyo nombre es Kazuto Kirigaya en la vida real, recibe una llamada de Seijirô kikuoka,un funcionario del gobierno que le pide su colaboración para investigar cierto \"incidente\".\r\nLo imposible ha ocurrido: ha muerto gente en la vida real tras recibir un disparo dentro de un nuevo VRMMO llamado Gun Gale Online.\r\nPor otro lado,dentro del juego se encuentra una chica sedienta de rivales poderosos,siempre lista para apretar el gatillo. Su nombre es Sinon.\r\npero...¿Cuál es el verdadero objetivo que hay detrás de la lucha?', 215, 'saoph1.jpg', 1),
(19, '9 788430 582969', '666 Receptes de cuina', 'susaeta', 'susaeta', 'cocina', '2020-11-04', 10, 2035, 'Un libro con 666 recetas de cocina mallorquinas.', 370, 'receptesdecuina.jpg', 1),
(20, 'No ISBN', 'Una micona mes', 'IB3', 'IB3', 'cocina', '2020-11-10', 5, 200, 'Un libro de cocina mallorquina del programa \'\'una micona mes\'\' con colaboración de última hora,televisión de las islas baleares y nova televisió.', 194, 'unamiconames.png', 1),
(21, '9 788415 432319', 'Les cuineres de binissalem', 'Miquel Àngel Barrios', 'Manjevents', 'cocina', '2020-11-17', 10, 2000, '\"Aplec de receptes de cuina d\'avui i de sempre\"\r\nmenjar es tradició, a més d\'una necessitat. També és una moda. En aquest aplec de receptes no trobaràs hidrogen,deconstruccions,glasificadores,thermomix ni paco jet. Tampoc trobaràs un món fet per les presses.', 201, 'cuineresbinissalem.jpg', 1),
(22, '9 788460 582755', 'Las mejores recetas de nuestra vieja cocina de MALLORCA', 'Xesc Bonnin', 'Xesc Bonnin', 'cocina', '2020-11-18', 10, 2000, 'Xesc nació en Manacor el 20 de enero de 1935...', 96, 'xescbonnin.jpg', 1),
(23, '9 788430 565542', 'Repostería casera', 'susaeta', 'susaeta', 'cocina', '2020-11-18', 10, 1960, 'Un libro de repostería de la colección Estilo Gourmet', 251, 'reposteriacasera.jpg', 1),
(24, '9 788424 122126', 'Cocina andaluza', 'Ana Maria Calera', 'Everest', 'cocina', '2020-11-03', 10, 1233, 'Libro de cocina andaluza escrito por Ana Maria Calera y publicado por Everest', 216, 'anamariacalera.jpg', 1),
(25, '978-84-206-8780-3', '1080 Recetas de cocina', 'Simone Ortega', 'Alianza Editorial', 'cocina', '2020-11-19', 10, 1230, 'El libro de simone forma parte ya,con letras de oro,de la historia de la gastronomía española- Sin su libro todo este boom de la cocina española no hubiera existido.', 1100, 'simoneortega.jpg', 1),
(26, '978-1-4075-9425-5', 'El mejor PAN CASERO', 'Linda Doeser', 'Parragon', 'cocina', '2020-11-03', 7, 2013, 'Sencillas y deliciosas recetas para elaborar panes,pizzas y bollos con una panificadora.', 96, 'lindadoeser.jpg\r\n', 1),
(27, '123456789', 'Razas Humanas', 'Biblioteca Hispania', 'Biblioteca Hispania', 'literatura', '2020-12-02', 5, 200, 'Libro sobre las razas humanas', 703, 'razashumanas.jpg', 1),
(28, '84-406-9682-5', 'En el país del dragón', 'Jamie Zeppa', 'grandes viajeros', 'literatura', '2020-12-01', 10, 3561, 'La canadiense Zeppa tenía solo 22 años y no había salido en su vida de Norteamérica cuando decidió aplazar la boda con su prometido para aceptar una plaza de profesora en bután.', 379, 'enelpaisdeldragon.jpg', 1),
(29, '84-666-0200-3', 'La ciudad de los djinns', 'William Dalrymple', 'biblioteca grandes viajeros', 'literatura', '2020-12-02', 7, 2500, 'Galardonado con el premio Thomas Cook de 1997, este libro ofrece un original retraso de Delhi y de sus estratos históricos a través de angostas calejuelas,mezquitas,ruinas abandonadas y templos mortuorios...', 390, 'laciudaddelosdjinns.jpg', 1),
(30, '84-666-0295-X', 'El largo camino africano', 'Roger Mimó', 'biblioteca grandes viajeros', 'literatura', '2020-12-01', 8, 2345, 'La crónica de este viaje cuenta el exhaustivo periplo que el autor, en compañía de otro viajero,emprende por África occidental en su astroso y destartalado jeep.', 415, 'ellargocaminoafricano.jpg', 1),
(31, '84-666-0114-7', 'Rumbo a Tartaria', 'Robert D.Kaplan', 'biblioteca grandes viajeros', 'literatura', '2020-12-07', 9, 2346, 'Hace siete años, Robert D.Kaplan publicó un libro sobre un recóndito rincón de la Europa del Este que se convirtió en un clásico de la literatura de viajes.', 390, 'rumboatartaria.jpg', 1),
(32, '978-84-01-33720-8', 'El nombre del viento', 'Patrick Rothfuss', 'Plaza Janés', 'literatura', '2020-12-09', 8, 2154, 'He robado princesas a reyes agónicos.\r\nIncendié la ciudad de Trebon. He pasado la noche con Felurian y he despertado vivo y cuerdo.Me expulsarón de la universidad a una edad a la que a la mayoría no los dejan entrar. He recorrido de noche caminos de los que otros no se atreven a hablar siquiera de día...', 872, 'elnombredelviento.jpg', 1),
(33, '9-788-408-050-735', 'El último merovingio', 'Jim Hougan', 'Planeta Editorial', 'literatura', '2020-12-01', 6, 1234, 'En londres,un reconocido profesor de psicología es brutalmente asesinado...', 377, 'elultimomerovingio.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `permiso_id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `reserva_id` int(11) NOT NULL,
  `dni` text NOT NULL,
  `isbn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `dni` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido1` text NOT NULL,
  `apellido2` text NOT NULL,
  `cumpleanyos` date NOT NULL,
  `direccion` text NOT NULL,
  `poblacion` text NOT NULL,
  `cp` int(11) NOT NULL,
  `email` text NOT NULL,
  `usuario` text NOT NULL,
  `contrasenya` text NOT NULL,
  `perfil` set('usuario','bibliotecario','administrador') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `dni`, `nombre`, `apellido1`, `apellido2`, `cumpleanyos`, `direccion`, `poblacion`, `cp`, `email`, `usuario`, `contrasenya`, `perfil`) VALUES
(12, '45612783B', 'Drago', 'VBD', 'Productions', '1997-04-21', 'andreu jaume i nadal 14 3A', 'palma', 7013, 'vicen333@gmail.com', 'drago', '$2y$10$QVM3BCS2.eylGlmP8F6D3eOOl2qDpXJxhq9eg7VSJG5AgYoUTcaRq', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`permiso_id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`reserva_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `reserva_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`permiso_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`reserva_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
