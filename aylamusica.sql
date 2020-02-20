-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-02-2020 a las 10:04:01
-- Versión del servidor: 5.7.29-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aylamusica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`aid`, `usuario`, `pass`) VALUES
(1, 'robert9191', 'a2PaP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `id_anuncio` int(11) NOT NULL,
  `visitas` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `multimedia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mail` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `anuncio`
--

INSERT INTO `anuncio` (`id_anuncio`, `visitas`, `url`, `multimedia`, `activo`, `fecha_creacion`, `mail`) VALUES
(1, 0, 'https://robert9191.com', 'data/ads/001-juan-banco.png', 1, '2020-02-20 09:48:07', 'robert@robert9191.com'),
(2, 0, 'https://google.com', 'data/ads/002-juan-anuncio.png', 1, '2020-02-20 09:49:07', 'robert@robert9191.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE `cancion` (
  `id_cancion` int(100) NOT NULL,
  `titulo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `artista` varchar(255) CHARACTER SET latin1 NOT NULL,
  `imagen` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fecha_subida` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`id_cancion`, `titulo`, `artista`, `imagen`, `fecha_subida`) VALUES
(1, 'Tusa', 'Nicki Minaj, Karol G', 'data/images/songs-cover/001tusa.png', '2020-02-20 00:00:00'),
(2, 'Morado', 'J Balvin', 'data/images/songs-cover/002morado.png', '2020-02-20 00:00:00'),
(3, 'Medusa', 'Anuel AA, J Balvin, Jhay Cortez', 'data/images/songs-cover/003medusa.png', '2020-02-20 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `contenido` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id_parrafo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `contenido`, `id_parrafo`) VALUES
(1, 'Me encanta como canta esta mujer', 8),
(2, 'Que ritmo joder!', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insulto`
--

CREATE TABLE `insulto` (
  `id_insulto` int(11) NOT NULL,
  `insulto` varchar(25) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `insulto`
--

INSERT INTO `insulto` (`id_insulto`, `insulto`) VALUES
(1, 'mamahuevo'),
(2, 'tonto'),
(3, 'gilipollas'),
(4, 'joder');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parrafos`
--

CREATE TABLE `parrafos` (
  `id_parrafo` int(11) NOT NULL,
  `contenido` varchar(2048) COLLATE utf8_spanish_ci NOT NULL,
  `id_cancion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `parrafos`
--

INSERT INTO `parrafos` (`id_parrafo`, `contenido`, `id_cancion`) VALUES
(2, '¿Qué pasó contigo? Dímelo\r\nRrr!\r\nO-O-Ovy on the Drums! (Mmm)', 1),
(3, 'Ya no tiene excusa (No, no)\r\nHoy salió con su amiga disque pa\' matar la tusa (Ah, tusa)\r\nQue porque un hombre le pagó mal (Ah)\r\nEstá dura y abusa (Eh)\r\nSe cansó de ser buena\r\nAhora es ella quien los usa (Hmm-mm)\r\nQue porque un hombre le pagó mal (Mal)\r\nYa no se le ve sentimental (-tal)\r\nDice que por otro man no llora, no (Llora)', 1),
(4, 'Pero si le ponen la canción (Hmm)\r\nLe da una depresión tonta\r\nLlorando lo comienza a llamar\r\nPero él la dejó en buzón (No)\r\n¿Será porque con otra está (Con otra está)\r\nFingiendo que a otra se puede amar?', 1),
(5, 'Pero diste todo este llanto por nada\r\nAhora soy una chica mala\r\nAnd now you kickin\' and screamin\', a big toddler\r\nDon\'t try to get your friends to come holla, holla\r\nAyo, I used to lay low\r\nI wasn\'t in the clubs, I was on my J.O (Woop-woop)\r\nUntil I realized you a epic fail\r\nSo don\'t tell your guys that I\'m still your bae, yo (Ah!)\r\n\'Cause it\'s a new day, I\'m in a new place (Aha)\r\nGettin\' some new D, sittin\' on a new face (Okay)\r\n\'Cause I know I\'m the baddest bitch that you ever really met (Woop)\r\nYou searchin\' for a badder bitch, and you ain\'t met her yet (Woop)\r\nAyo! Tell \'em to back off\r\nHe wanna slack off\r\nAin\'t no more booty calls, you gotta jack off\r\nIt\'s me and Karol G, we let them rats talk\r\nDon\'t run up on us, \'cause they lettin\' the MACs off\r\n(Rrr!)', 1),
(6, 'Pero si le ponen la canción (Hmm)\r\nLe da una depresión tonta\r\nLlorando lo comienza a llamar\r\nPero él la dejó en buzón (No)\r\n¿Será porque con otra está (Con otra está)\r\nFingiendo que a otra se puede amar?', 1),
(7, 'Eh, ah\r\nUn-un shot pa\' la pena profunda (Un shot, eh)\r\nY seguimo\' gastando la funda (La funda)\r\nOtro shot pa\' la mente (Yeah-yeh)\r\nPa\' que el recuerdo no la atormente (Ah, oh)\r\nYa no le copia nada (Na\')\r\nSu ex ya no vale nada (Nada)\r\nSe va pa\' la disco y sólo quiere perrear (Perrear)\r\nPero se confunde cuando empieza a tomar (Tomar)\r\nElla se cura con rumba (Ah)\r\nY el amor pa\' la tumba (Yeh)\r\nTo\' los hombre\' le zumban (Le zumban)', 1),
(8, 'Pero si le ponen la canción (Oh)\r\nLe da una depresión tonta (Tonta)\r\nLlorando lo comienza a llamar\r\nPero él la dejó en buzón (Oh)\r\n¿Será porque con otra está (Con otra está)\r\nFingiendo que a otra se puede amar?', 1),
(9, 'Ey, Karol G (Ajá, Karol G)\r\nNicki Minaj (Ah, ajá), ey\r\n\"The Queen\" with \"The Queen\" (Ajá, jajaja)\r\nO-O-Ovy on the Drums', 1),
(10, 'Colores, wuh\r\nYah, leggo', 2),
(11, 'Colores, wuh\r\nYah, leggo', 2),
(12, 'Después de tres canciones seguida\' (yeah, yeah)\r\nAnalizando la movida (yeah, yeah)\r\nNo sale si está de día\r\nQuiere janguear, es su estilo de vida', 2),
(13, 'No le gustan principiantes (nope)\r\nQue sean calle, pero elegantes (yah)\r\nPerreamos hasta que tú ya no aguante\', yeah (leggo)', 2),
(14, 'Yo pedí un trago y ella la botella, ah-ah\r\nAbusa siempre que estoy con ella (yah, yah, yah), oh, yeah\r\nHazle caso, si no te estrellas, oh-oh\r\nCualquier problema, es culpa de ella, ah (de ella, de ella, de ella, de ella)\r\nYo pedí un trago y ella (wuh)', 2),
(15, 'Baila pa\' que su\' nalga\' reboten (duro)\r\nPide whisky hasta que se agote (plah)\r\nSi lo prende, exige que rote (eh)\r\nBailando así vas a hacer que nos boten (eh)', 2),
(16, 'Nena, seguro que en llegar fuiste la primera\r\nEn la cama siempre tú te exageras (exagerá\')\r\nSi te quieres ir, pues nos vamos cuando quieras, girl\r\nNena, seguro que en llegar fuiste la primera (primera)\r\nEn la cama siempre tú te exageras (yah, yah, yah, yah)', 2),
(17, 'Yo pedí un trago y ella la botella (tra, tra, tra, tra, tra)\r\nAbusa siempre que estoy con ella (tra, tra, tra, tra, tra, tra), oh yeah\r\nHazle caso, si no te estrellas (tra, tra, tra, tra, tra, tra, tra, tra, tra), oh-oh\r\nCualquier problema, es culpa de ella, ah, eh', 2),
(18, 'Yo pedí un trago y ella la botella (uh, uh), oh\r\nAbusa siempre que estoy con ella, oh, yeah\r\nHazle caso, si no te estrellas, oh-oh\r\nCualquier problema, es culpa de ella, ah\r\nYo pedí un trago y ella', 2),
(19, 'Me robó, pa\' su casa me invitó (wuh)\r\nDe repente me haló\r\nY pa\'l cuarto me llevó (oye)\r\nDe lo que hicimo\' no me acuerdo\r\nY pa\' hacerme el loco sí que soy experto-perto (duro)', 2),
(20, 'Me tiene soñando despierto (ye-ah)\r\nVolando sin aeropuerto (ye-uh)\r\nY por cosas de la vida (eh)\r\nTerminé echando bebidas en tu cuerpo (echa, eh)', 2),
(21, 'Nena, seguro que en llegar fuiste la primera\r\nEn la cama siempre tú te exageras\r\nSi te quieres ir, pues nos vamos cuando quieras, girl (yeh)\r\nNena, seguro que en llegar fuiste la primera (primera)\r\nEn la cama siempre tú te exageras (eh)', 2),
(22, 'Yo pedí un trago y ella la botella (uh, uh, ouh), ah-ah\r\nAbusa siempre que estoy con ella (yah, yah, yah), oh, yeah\r\nHazle caso, si no te estrellas, oh-oh\r\nCualquier problema, e\' culpa de ella, ah (de ella, de ella, de ella, de ella)\r\nYo pedí un trago y ella (wuh)', 2),
(23, 'Sky, yah (eh)\r\n¿Estamo\' rompiendo o no estamo\' rompiendo, muchacho\'? (eh)\r\nY seguimo\' rompiendo (eh)\r\nGlobal (eh, eh)\r\nTra-tra-tra, perreando (eh)\r\nJ. Balvin, man (eh)\r\nLeggo, leggo, wuh', 2),
(24, 'Me sigues o no me sigues todavía\r\nReal Hasta La Muerte\r\nBrrr', 3),
(25, 'No hay excusa (no hay excusa)\r\nGasté treinta mil en la medusa (Versace)\r\nElla siempre que quiere me usa (ah)\r\nAquí si la sacas, la usas, usas (usas)\r\nQué cojones, aquí se gasta chavos con cojones (con cojones)\r\nPero siempre con el palo (con los palos), por si me bajo\r\nBrr, prr, y lo jalo, brr', 3),
(26, 'No hay excusa (no hay excusa)\r\nGasté treinta mil en la medusa (Versace)\r\nElla siempre que quiere me usa (me usa)\r\nAquí si la sacas, la usas, usas (usas)\r\nQué cojones, aquí se gasta chavos con cojones (con cojones)\r\nSiempre andamos con los palos (los palos) y nos bajamos (nos bajamos)\r\nBrr, y te los damos (brr)', 3),
(27, 'Hey y los jalo (jalo)\r\nAquí todas las balas son Halo (brr)\r\nAquí te mueres bueno o malo (o malo)\r\nAquí se mueren Pablo y Gonzalo (prr, prr)\r\nHey, los kilos de los USA\r\nEstoy millonario en el jet jugando 2K\r\nTe pillamos dormido y te prendemos la spray\r\nY tengo la corona del trap, yo siempre he sido el rey (brr)\r\nEh, bájame el moco\r\nO te tumbamos del palo como Coco\r\nAhora todos quieren guerra con el loco (loco)\r\nY si te alumbro, te apagamos como foco (brr, eh)', 3),
(28, 'No hay excusa (no hay excusa)\r\nGasté treinta mil en la medusa (Versace)\r\nElla siempre que quiere me usa (me usa)\r\nAquí si la sacas, la usas, usas (usas)\r\nQué cojones, aquí se gasta chavos con cojones (cojones)\r\nSiempre andamos con los palos (los palos) y nos bajamos (nos bajamos, brr)\r\nPrr, y te los damos\r\n', 3),
(29, 'Haciendo tickets y más que ellos\r\nSin ir a Cuba, las cubanas en el cuello\r\nPa que llore la mía, que llore la de ellos\r\nY los palestinos pa tumbarte del camello (brr, ¿me sigues?)\r\n(Ah) Me siento como Messi (como Messi)\r\nPero él está con Adidas y yo con Nike (Nike, ah)\r\nCristiano Ronaldo (Ronaldo)\r\nTodas mis casas y todos mis carros están saldos\r\nLa Presión es Real Hasta La Muerte\r\nTu corillo coopera con los agentes\r\nEn la muñeca, cabrón, tengo ciento veinte\r\nLe hice el abdomen y ahora me pidió los dientes, hey (prr)\r\nQue si Anuel está choteando (ah)\r\nY los papeles están más limpios que los cien millones que tengo en el banco\r\nSoy 27, no Blanco\r\nY me gasté un millón en el Patek Philippe, ya yo estoy manco\r\nTu puta en el VIP\r\nTú no entras a la disco si no tienes ID\r\nElla dice que es bi mamándome el bish\r\nY si no es brr es prra y no es La Maravish, ey\r\nHazme un despojo (amén)\r\nLa X6 diabólica, asientos en rojo, ey\r\nYa mi disco es platino\r\nComo Anuel charteando en los Billboard Latino, me sigue', 3),
(30, 'Me casé con una reina, Mufasa (Karol)\r\nSiete millones vale mi casa (uy)\r\nUna casa vale el Richard Millie (Richard Millie)\r\nY a estos envidiosos qué les pasa? (Brr, brr, ah)', 3),
(31, 'No hay excusa (no hay excusa)\r\nGasté treinta mil en la medusa (Versace)\r\nElla siempre que quiere me usa (me usa)\r\nAquí si la sacas, la usas, usas (usas)\r\nQué cojones, aquí se gasta chavos con cojones (cojones)\r\nSiempre con el palo (con los palos) por si me bajo\r\nPrr, y lo jalo', 3),
(32, 'Directo desde Medellín (wuh)\r\nYo no soy Kanye, pero puede que me veas con Kim (Kim)\r\nNo voy al banco, pero hay chavos en el maletín (-tín)\r\nY no soy Don, pero me siento como el King of Kings (Kings)\r\nLeggo\r\nY no hay excusa (Y no hay excusa)\r\nEn la Versace compramos todaa las medusas\r\nMe hice rico en Medellín con la plata de la USA\r\nY en la calle a mí me cuidan por si alguien conmigo abusa (amén)\r\nY no fronteen (no fronteen)\r\nQue ustedes todos saben mis niveles (brr)\r\nLo de la joya ya compré cuando era un nene (bling bling)\r\nDesde que tengo millones no hablo de cienes (shh)\r\nY no hablamos tantos\r\nLos Murakamis costaron tanto (cash, cash, cash)\r\nMe compré otro jet que vuela más alto (fium)\r\nY cuando me bajo, es directo pal Phantom, ya', 3),
(33, 'No hay excusa\r\nGasté no sé cuánto en la medusa\r\nElla siempre que quiere me usa\r\nAquí estamos, my g, no te confundas, yeah\r\nQué cojones, aquí se gasta chavos con cojones (con cojones)\r\nSiempre con el palo (con los palos) por si me bajo\r\nPrr, y lo jalo', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`id_anuncio`);

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD UNIQUE KEY `id_cancion` (`id_cancion`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `parrafo-comentario` (`id_parrafo`);

--
-- Indices de la tabla `insulto`
--
ALTER TABLE `insulto`
  ADD PRIMARY KEY (`id_insulto`);

--
-- Indices de la tabla `parrafos`
--
ALTER TABLE `parrafos`
  ADD PRIMARY KEY (`id_parrafo`),
  ADD UNIQUE KEY `id_parrafo` (`id_parrafo`),
  ADD KEY `parrafo-cancion` (`id_cancion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `id_anuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `insulto`
--
ALTER TABLE `insulto`
  MODIFY `id_insulto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `parrafos`
--
ALTER TABLE `parrafos`
  MODIFY `id_parrafo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `parrafo-comentario` FOREIGN KEY (`id_parrafo`) REFERENCES `parrafos` (`id_parrafo`);

--
-- Filtros para la tabla `parrafos`
--
ALTER TABLE `parrafos`
  ADD CONSTRAINT `parrafo-cancion` FOREIGN KEY (`id_cancion`) REFERENCES `cancion` (`id_cancion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
