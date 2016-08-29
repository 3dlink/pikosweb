-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-08-2016 a las 11:54:22
-- Versión del servidor: 5.5.42-cll
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pikoscom_pikos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE IF NOT EXISTS `carritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `carritos`
--

INSERT INTO `carritos` (`id`, `name`) VALUES
(1, 'Diego'),
(2, 'ruth'),
(3, 'diego');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `name`) VALUES
(12, 'Dormitorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consejos`
--

CREATE TABLE IF NOT EXISTS `consejos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `consejos`
--

INSERT INTO `consejos` (`id`, `nombre`, `descripcion`, `contenido`, `imagen`, `created`, `modified`) VALUES
(1, '¿Cómo doblar un esquinero?', 'Doblar los esquineros en lugar de enrollarlos de cualquier manera es una forma práctica de mantener la ropa de cama organizada y de aprovechar al máximo el espacio disponible.', '<p>Doblar los esquineros en lugar de enrollarlos de cualquier manera es una forma pr&aacute;ctica de mantener la ropa de cama organizada y de aprovechar al m&aacute;ximo el espacio disponible. Ya seas un mani&aacute;tico del orden o simplemente una persona a la que le gusta ahorrar espacio, puede resultar muy &uacute;til aprender a doblar un esquinero de forma eficaz. Se trata de un proceso sencillo, y una vez que le pilles el truco podr&aacute;s hacerlo con los ojos cerrados.</p>\r\n<p><a title="Esquineros" href="http://www.google.de/imgres?imgurl=http%3A%2F%2Fpad3.whstatic.com%2Fimages%2Fthumb%2F5%2F5a%2FFold-a-Fitted-Sheet-Step-2.jpg%2F670px-Fold-a-Fitted-Sheet-Step-2.jpg&amp;imgrefurl=http%3A%2F%2Fes.wikihow.com%2Fdoblar-una-s%25C3%25A1bana-ajustable&amp;h=536&amp;w=670&amp;tbnid=7Ym54rdeofJDxM%3A&amp;docid=kwEdE8pB_KO58M&amp;ei=Di_kVbbwNIXZerHFl6gB&amp;tbm=isch&amp;iact=rc&amp;uact=3&amp;dur=343&amp;page=3&amp;start=62&amp;ndsp=33&amp;ved=0CJkCEK0DMFFqFQoTCLavsviQ08cCFYWsHgodseIFFQ" target="_blank">Mas informaci&oacute;n</a></p>', 'img1464531626QYK.png', '2015-08-31 06:49:39', '2016-05-29 10:20:37'),
(2, 'Tu primer éxito del día', 'Hacer la cama diariamente...', '<p style="box-sizing: border-box; margin: 0px 0px 30px; color: #575756; font-family: Roboto, ''Helvetica Neue'', Helvetica, Arial, San-serif; font-size: 19px; line-height: 36px; text-align: justify;">Si haces la cama todas la ma&ntilde;anas,<span style="box-sizing: border-box; font-weight: bold;">&nbsp;en unos minutos habr&aacute;s logrado hacer bien la primera tarea del d&iacute;a.</span>&nbsp;Y no de cualquier forma, sino de manera brillante.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; color: #575756; font-family: Roboto, ''Helvetica Neue'', Helvetica, Arial, San-serif; font-size: 19px; line-height: 36px; text-align: justify;">&nbsp;</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; color: #575756; font-family: Roboto, ''Helvetica Neue'', Helvetica, Arial, San-serif; font-size: 19px; line-height: 36px; text-align: justify;">Un peque&ntilde;o &eacute;xito que&nbsp;<span style="box-sizing: border-box; font-weight: bold;">te empujar&aacute; a seguir</span>&nbsp;completando y cumpliendo con el resto de tus responsabilidades diarias.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; color: #575756; font-family: Roboto, ''Helvetica Neue'', Helvetica, Arial, San-serif; font-size: 19px; line-height: 36px; text-align: justify;">&nbsp;</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; color: #575756; font-family: Roboto, ''Helvetica Neue'', Helvetica, Arial, San-serif; font-size: 19px; line-height: 36px; text-align: justify;">Al final del d&iacute;a,&nbsp;<span style="box-sizing: border-box; font-weight: bold;">esa tarea completada se convertir&aacute; en una larga lista de victorias personales.&nbsp;</span></p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; color: #575756; font-family: Roboto, ''Helvetica Neue'', Helvetica, Arial, San-serif; font-size: 19px; line-height: 36px; text-align: justify;">&nbsp;</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; color: #575756; font-family: Roboto, ''Helvetica Neue'', Helvetica, Arial, San-serif; font-size: 19px; line-height: 36px; text-align: justify;">Puedes pensar que dicha actividad&nbsp;es una soberana estupidez, pero lo cierto es que, cumplir con&nbsp;algo tan mundano, tiene un gran impacto en nuestro inconsciente.&nbsp;Es la prueba irrefutable de que, para nosotros,&nbsp;<span style="box-sizing: border-box; font-weight: bold;">las peque&ntilde;as cosas de la vida s&iacute; importan.</span>Porque&nbsp;<span style="box-sizing: border-box; font-weight: bold;">si no puedes hacer esto bien, jam&aacute;s podr&aacute;s hacer lo propio con las grandes cuestiones.&nbsp;</span></p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; color: #575756; font-family: Roboto, ''Helvetica Neue'', Helvetica, Arial, San-serif; font-size: 19px; line-height: 36px; text-align: justify;">Y, si por casualidad terminas teniendo un d&iacute;a miserable, al menos acabar&aacute;s la jornada descansado en una cama bien hecha. Un peque&ntilde;o placer con el que hacer borr&oacute;n y cuenta nueva para encarar un nuevo d&iacute;a.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; color: #575756; font-family: Roboto, ''Helvetica Neue'', Helvetica, Arial, San-serif; font-size: 19px; line-height: 36px; text-align: justify;">&nbsp;</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; color: #575756; font-family: Roboto, ''Helvetica Neue'', Helvetica, Arial, San-serif; font-size: 19px; line-height: 36px; text-align: justify;">&nbsp;</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; color: #575756; font-family: Roboto, ''Helvetica Neue'', Helvetica, Arial, San-serif; font-size: 19px; line-height: 36px; text-align: justify;">As&iacute; que, recuerda,&nbsp;<span style="box-sizing: border-box; font-weight: bold;">si de verdad quieres cambiar el mundo, empieza con los detalles m&aacute;s peque&ntilde;os de tu vida.</span></p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 30px; color: #575756; font-family: Roboto, ''Helvetica Neue'', Helvetica, Arial, San-serif; font-size: 19px; line-height: 36px; text-align: justify;">Fuente: http://goo.gl/pDV2eB</p>', 'img1464531961CRR.jpg', '2016-05-29 10:28:17', '2016-05-29 10:28:17'),
(3, 'Crea tu dormitorio ideal!', 'Te mostramos una página increíble... y consejos, muchos consejos.', '<p><span style="color: #333333; font-family: ''Droid Sans'', Arial, Verdana, sans-serif; font-size: 14px; line-height: 22px;">&iquest;A veces te sientes un extra&ntilde;o en tu habitaci&oacute;n?, &iquest;no te identificas con la decoraci&oacute;n?, &iquest;quieres un lugar donde se combine el estilo y la comodidad? En el dormitorio cargamos las bater&iacute;as para un nuevo d&iacute;a. Si no tienes idea de c&oacute;mo empezar, he aqu&iacute; los pasos para andar el camino hacia el lugar de tus sue&ntilde;os, desde el inicio hasta el final.</span></p>\r\n<p>Visita:&nbsp;http://www.mujerestalk.com/20-pasos-para-crear-tu-dormitorio-ideal/</p>\r\n<p>http://nuevo-estilo.micasarevista.com/dormitorios</p>\r\n<p>&nbsp;</p>\r\n<p>Insp&iacute;rate y&nbsp;dale rienda suelta a tu imaginaci&oacute;n! felices sue&ntilde;os...</p>', 'img14645327176BS.png', '2016-05-29 10:38:44', '2016-05-29 10:38:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `name`) VALUES
(1, 'Amazonas'),
(2, 'Anzoategui'),
(3, 'Apure'),
(4, 'Aragua'),
(5, 'Barinas'),
(6, 'Bolivar'),
(7, 'Carabobo'),
(8, 'Cojedes'),
(9, 'Delta Amacuro'),
(10, 'Distrito Capital'),
(11, 'Falcón'),
(12, 'Guárico'),
(13, 'Lara'),
(14, 'Mérida'),
(15, 'Miranda'),
(16, 'Monagas'),
(17, 'Nueva Esparta'),
(18, 'Portuguesa'),
(19, 'Sucre'),
(20, 'Táchira'),
(21, 'Trujillo'),
(22, 'Vargas'),
(23, 'Yaracuy'),
(24, 'Zulia'),
(25, 'Dependencias Federales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

CREATE TABLE IF NOT EXISTS `lineas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `subcategoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`id`, `nombre`, `imagen`, `subcategoria_id`) VALUES
(7, 'linea 1', '', 11),
(8, 'linea 2', '', 11),
(9, 'linea 1', 'img1442796517CGK.png', 12),
(10, 'linea 2', 'img144279653135Q.png', 12),
(11, 'Línea Clásica', 'img1443994789V6N.JPG', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_tokens`
--

CREATE TABLE IF NOT EXISTS `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidas`
--

CREATE TABLE IF NOT EXISTS `medidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medida` text NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Volcado de datos para la tabla `medidas`
--

INSERT INTO `medidas` (`id`, `medida`, `precio`, `cantidad`, `producto_id`) VALUES
(11, 'Matrimonial 1.40 x 1.90 x 0.30m', 42400, 2, 16),
(12, 'Queen 1.60 x 1.90 x 0.30m', 44400, 2, 16),
(13, 'King 2.00 x 2.00 x 0.30m', 49900, 2, 16),
(14, 'Matrimonial 1.40 x 1.90 x 0.30m', 42400, 2, 19),
(15, 'Queen 1.60 x 1.90 x 0.30m', 44400, 2, 19),
(16, 'King 2.00 x 2.00 x 0.30m', 49900, 2, 19),
(17, 'Matrimonial 1.40 x 1.90 x 0.30m', 42400, 2, 22),
(18, 'Queen 1.60 x 1.90 x 0.30m', 44400, 2, 22),
(19, 'Queen 1.60 x 1.90 x 0.30m', 49898, 2, 22),
(20, 'Matrimonial 1.40 x 1.90 x 0.30m', 42400, 2, 25),
(21, 'Queen 1.60 x 1.90 x 0.30m', 44400, 2, 25),
(22, 'King 2.00 x 2.00 x 0.30m', 49900, 2, 25),
(23, 'Matrimonial 1.40 x 1.90 x 0.30m', 42400, 2, 28),
(24, 'Queen 1.60 x 1.90 x 0.30m', 44400, 2, 28),
(25, 'King 2.00 x 2.00 x 0.30m', 49900, 2, 28),
(26, 'Matrimonial 1.40 x 1.90 x 0.30m', 42400, 2, 31),
(27, 'Queen 1.60 x 1.90 x 0.30m', 44400, 2, 31),
(28, 'King 2.00 x 2.00 x 0.30m', 49900, 2, 31),
(30, '1.00 x 1.90 x 0.20 m', 28000, 5, 36),
(31, 'ñaaksdj ', 12345, 12, 38),
(32, 'qwert', 12345, 12, 37),
(33, 'aasd', 123, 123, 38),
(34, '', 9750, 6, 40),
(35, 'Matrimonial 140x190x30 cm', 42400, 2, 41),
(36, 'Queen 160x190x30 cm', 44400, 2, 41),
(37, 'King 200x200x30cm', 49900, 2, 41);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `subcategoria_id` int(11) NOT NULL,
  `imagen_principal` varchar(255) NOT NULL,
  `imagen_2` varchar(255) DEFAULT NULL,
  `imagen_3` varchar(255) DEFAULT NULL,
  `imagen_4` varchar(255) DEFAULT NULL,
  `imagen_5` varchar(255) DEFAULT NULL,
  `destacado` tinyint(1) NOT NULL,
  `linea_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `name`, `categoria_id`, `descripcion`, `subcategoria_id`, `imagen_principal`, `imagen_2`, `imagen_3`, `imagen_4`, `imagen_5`, `destacado`, `linea_id`) VALUES
(16, 'Sepia', 12, '<p>La l&iacute;nea Cl&aacute;sico de Pikos ofrece modelos sobrios en suaves colores para lucir un dormitorio elegante y confortable.</p>\r\n<p>&nbsp;</p>\r\n<p>Color: Beige</p>\r\n<p>Estampado: rayas gris/beige</p>\r\n<p>Composici&oacute;n: 60% Algod&oacute;n, 40% Poli&eacute;ster, 180 Hilos</p>\r\n<p>Contenido: 1 S&aacute;bana encimera, 1 Esquinero, 1 Funda para tama&ntilde;o Individual y 2 Fundas para tama&ntilde;o Matrimonial, Queen y King</p>\r\n<p>Consejo: Lavar colores oscuros por separado, Lavar en agua fr&iacute;a, Usar jab&oacute;n suave, No usar cloro, Secar a temperatura media</p>\r\n<p>&nbsp;Nuestros precios incluyen IVA</p>', 11, 'img1440867066F47.JPG', 'img1440867219969.JPG', 'img144086741605C.JPG', NULL, NULL, 1, 7),
(19, 'Marino', 12, '<p>La l&iacute;nea Cl&aacute;sico de Pikos ofrece modelos sobrios en suaves colores para lucir un dormitorio elegante y confortable.</p>\r\n<p>&nbsp;</p>\r\n<p>Color: Blanco</p>\r\n<p>Estampado: rayas azul marino/blanco</p>\r\n<p>Composici&oacute;n: 60% Algod&oacute;n, 40% Poli&eacute;ster, 180 Hilos</p>\r\n<p>Contenido: 1 S&aacute;bana encimera, 1 Esquinero, 1 Funda para tama&ntilde;o Individual y 2 Fundas para tama&ntilde;o Matrimonial, Queen y King</p>\r\n<p>Consejo: Lavar colores oscuros por separado, Lavar en agua fr&iacute;a, Usar jab&oacute;n suave, No usar cloro, Secar a temperatura media</p>\r\n<p>&nbsp;Nuestros precios incluyen IVA</p>', 11, 'img1440878681SI7.JPG', 'img14408788336GQ.JPG', 'img1440879056KMA.JPG', NULL, NULL, 1, 7),
(22, 'Clásico Elegante/Burbujas beige', 12, '<p>La l&iacute;nea Cl&aacute;sico de Pikos ofrece modelos sobrios en suaves colores para lucir un dormitorio elegante y confortable.</p>\r\n<p>&nbsp;</p>\r\n<p>Color: Beige</p>\r\n<p>Estampado: Burbujas gris/beige</p>\r\n<p>Composici&oacute;n: 60% Algod&oacute;n, 40% Poli&eacute;ster, 180 Hilos</p>\r\n<p>Contenido: 1 S&aacute;bana encimera, 1 Esquinero, 1 Funda para tama&ntilde;o Individual y 2 Fundas para tama&ntilde;o Matrimonial, Queen y King</p>\r\n<p>Consejo: Lavar colores oscuros por separado, Lavar en agua fr&iacute;a, Usar jab&oacute;n suave, No usar cloro, Secar a temperatura media</p>\r\n<p>&nbsp;Nuestros precios incluyen IVA</p>', 11, 'img1440880473G4Q.JPG', 'img14408806233H5.JPG', 'img1440880796HIC.JPG', NULL, NULL, 1, 7),
(25, 'Clásico Elegante/Brubujas gris', 12, '<p>La l&iacute;nea Cl&aacute;sico de Pikos ofrece modelos sobrios en suaves colores para lucir un dormitorio elegante y confortable.</p>\r\n<p>&nbsp;</p>\r\n<p>Color:&nbsp;Gris</p>\r\n<p>Estampado: Burbujas gris/beige</p>\r\n<p>Composici&oacute;n: 60% Algod&oacute;n, 40% Poli&eacute;ster, 180 Hilos</p>\r\n<p>Contenido: 1 S&aacute;bana encimera, 1 Esquinero, 1 Funda para tama&ntilde;o Individual y 2 Fundas para tama&ntilde;o Matrimonial, Queen y King</p>\r\n<p>Consejo: Lavar colores oscuros por separado, Lavar en agua fr&iacute;a, Usar jab&oacute;n suave, No usar cloro, Secar a temperatura media</p>\r\n<p>&nbsp;Nuestros precios incluyen IVA</p>', 11, 'img1440884094SN2.JPG', 'img1440884263BVE.JPG', 'img1440884404ZWK.JPG', NULL, NULL, 0, 7),
(28, 'Clásico Elegante/Rayado Blanco', 12, '<p>La l&iacute;nea Cl&aacute;sico de Pikos ofrece modelos sobrios en suaves colores para lucir un dormitorio elegante y confortable.</p>\r\n<p>&nbsp;</p>\r\n<p>Color:&nbsp;Blanco</p>\r\n<p>Estampado: Rayas&nbsp;gris/blanco</p>\r\n<p>Composici&oacute;n: 60% Algod&oacute;n, 40% Poli&eacute;ster, 180 Hilos</p>\r\n<p>Contenido: 1 S&aacute;bana encimera, 1 Esquinero, 1 Funda para tama&ntilde;o Individual y 2 Fundas para tama&ntilde;o Matrimonial, Queen y King</p>\r\n<p>Consejo: Lavar colores oscuros por separado, Lavar en agua fr&iacute;a, Usar jab&oacute;n suave, No usar cloro, Secar a temperatura media</p>\r\n<p>&nbsp;Nuestros precios incluyen IVA</p>', 11, 'img1440889633PR1.JPG', 'img1440889753P9L.JPG', 'img14408898974YO.JPG', NULL, NULL, 1, 7),
(31, 'Clásico Elegante/Rayado Gris', 12, '<p>La l&iacute;nea Cl&aacute;sico de Pikos ofrece modelos sobrios en suaves colores para lucir un dormitorio elegante y confortable.</p>\r\n<p>&nbsp;</p>\r\n<p>Color:&nbsp;Gris</p>\r\n<p>Estampado: Rayas&nbsp;gris/negro</p>\r\n<p>Composici&oacute;n: 60% Algod&oacute;n, 40% Poli&eacute;ster, 180 Hilos</p>\r\n<p>Contenido: 1 S&aacute;bana encimera, 1 Esquinero, 1 Funda para tama&ntilde;o Individual y 2 Fundas para tama&ntilde;o Matrimonial, Queen y King</p>\r\n<p>Consejo: Lavar colores oscuros por separado, Lavar en agua fr&iacute;a, Usar jab&oacute;n suave, No usar cloro, Secar a temperatura media</p>\r\n<p>&nbsp;Nuestros precios incluyen IVA</p>', 11, 'img1440896806TCE.JPG', 'img1440896960N6F.JPG', 'img1440897119NX0.JPG', NULL, NULL, 0, 7),
(36, 'Línea Infantil', 12, '<p>Dise&ntilde;os llenos de fantas&iacute;a para complacer el gusto de los m&aacute;s peque&ntilde;os.</p>\r\n<p>&nbsp;</p>\r\n<p>Color:&nbsp;Amarillo claro</p>\r\n<p>Estampado:&nbsp;Ratoncito aviador</p>\r\n<p>Composici&oacute;n: 60% Algod&oacute;n, 40% Poli&eacute;ster, 180 Hilos</p>\r\n<p>Contenido: 1 S&aacute;bana encimera, 1 Esquinero, 1 Funda para tama&ntilde;o Individual y 2 Fundas para tama&ntilde;o Matrimonial, Queen y King</p>\r\n<p>Consejo: Lavar colores oscuros por separado, Lavar en agua fr&iacute;a, Usar jab&oacute;n suave, No usar cloro, Secar a temperatura media</p>\r\n<p>&nbsp;Nuestros precios incluyen IVA</p>', 6, 'img1441115367T5F.jpg', 'img1464523352F25.jpg', 'img1464523195KMA.jpg', 'img146452328342S.jpg', 'img1464523527V95.jpg', 1, 0),
(40, 'Accesorios ', 12, '<p>Pi&eacute; de cama, un accesorio que le otorga personalidad a tu dormitorio... color y dinamismo con los accesorios Pikos!!</p>', 9, 'img14645339234R8.jpg', 'img1464533948FBK.JPG', 'img1464533955B2C.JPG', 'img1464533977F50.JPG', 'img1464533983C6X.JPG', 1, 0),
(41, 'Colores Pikos', 12, '<p>Colores es una l&iacute;nea alegre y osada, una aliada perfecta para darle dolor a tu vida!</p>', 11, 'img1464535317LEH.jpg', 'img14645355027SU.jpg', 'img1464535476KTQ.jpg', 'img1464535520TRJ.jpg', 'img1464535493US4.jpg', 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_users`
--

CREATE TABLE IF NOT EXISTS `productos_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `medida` text NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '0' COMMENT '0/nada, 1/esperando, 2/aprobado, 3/enviado',
  `forma` int(11) DEFAULT '0' COMMENT '0: trasferencia, 1: mercadopago',
  `created` datetime NOT NULL,
  `medida_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE IF NOT EXISTS `subcategorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `name`, `categoria_id`) VALUES
(6, 'Juegos de sábanas infantiles', 12),
(7, 'Duvets', 12),
(8, 'Fundas', 12),
(9, 'pié de cama', 12),
(11, 'Juegos de sábanas', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tracks`
--

CREATE TABLE IF NOT EXISTS `tracks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `estado_id` int(11) NOT NULL,
  `carrito_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `username`, `password`, `salt`, `email`, `first_name`, `last_name`, `phone`, `email_verified`, `active`, `ip_address`, `created`, `modified`, `estado_id`, `carrito_id`) VALUES
(1, 1, 'admin', '30fe8a1926b1c64ecb3be9bb6548e39e', 'ec2234badffcebab0d8960bfc4928710', 'admin@admin.com', 'Admin', '', '', 1, 1, '', '2015-06-06 22:04:45', '2015-08-30 20:39:57', 0, 0),
(2, 2, 'diego', '4a528b865bdf01a5c1af4906c8cdd27a', 'f9d5bd39c2e054c45fbebd8043916242', 'dbrito_9_9@hotmail.com', 'diego', 'brito', '04242011692', 1, 1, NULL, '2015-06-27 00:08:14', '2015-08-24 02:22:24', 2, 3),
(3, 2, NULL, 'c67fbc175385e753334618fb6303ff7b', '63c1f7b51c5f72cdea1065770f3d2bcb', 'carmen@carmen.com', 'carmen', 'carmen', '04242011222', 1, 1, NULL, '2015-08-17 23:46:19', '2015-08-17 23:46:19', 2, 0),
(4, 2, NULL, '897dbbf6f523c48482c3ad5aadd980c8', '71762dc5f1ddad892c37238bbddaad0f', 'fannymigliore@gmail.com', 'Fanny', 'Migliore', '04143335900', 1, 1, NULL, '2015-08-29 10:39:50', '2015-08-29 10:39:50', 15, 0),
(5, 2, NULL, '129b61bd80e11fa014fbc306d778e8f9', '97b7dce06c52530af2e6bfbf0e056dff', 'marianitar@hotmail.com', 'mariana ', 'rubio', '04123284377', 1, 1, NULL, '2016-05-03 16:03:49', '2016-05-03 16:03:49', 15, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `alias_name`, `allowRegistration`, `created`, `modified`) VALUES
(1, 'Admin', 'Admin', 0, '2015-06-06 22:04:46', '2015-06-06 22:04:46'),
(2, 'User', 'User', 1, '2015-06-06 22:04:46', '2015-06-06 22:04:46'),
(3, 'Guest', 'Guest', 0, '2015-06-06 22:04:46', '2015-06-06 22:04:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_group_permissions`
--

CREATE TABLE IF NOT EXISTS `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=169 ;

--
-- Volcado de datos para la tabla `user_group_permissions`
--

INSERT INTO `user_group_permissions` (`id`, `user_group_id`, `controller`, `action`, `allowed`) VALUES
(1, 1, 'Pages', 'display', 1),
(2, 2, 'Pages', 'display', 1),
(3, 3, 'Pages', 'display', 1),
(4, 1, 'UserGroupPermissions', 'index', 1),
(5, 2, 'UserGroupPermissions', 'index', 0),
(6, 3, 'UserGroupPermissions', 'index', 0),
(7, 1, 'UserGroupPermissions', 'update', 1),
(8, 2, 'UserGroupPermissions', 'update', 0),
(9, 3, 'UserGroupPermissions', 'update', 0),
(10, 1, 'UserGroups', 'index', 1),
(11, 2, 'UserGroups', 'index', 0),
(12, 3, 'UserGroups', 'index', 0),
(13, 1, 'UserGroups', 'addGroup', 1),
(14, 2, 'UserGroups', 'addGroup', 0),
(15, 3, 'UserGroups', 'addGroup', 0),
(16, 1, 'UserGroups', 'editGroup', 1),
(17, 2, 'UserGroups', 'editGroup', 0),
(18, 3, 'UserGroups', 'editGroup', 0),
(19, 1, 'UserGroups', 'deleteGroup', 1),
(20, 2, 'UserGroups', 'deleteGroup', 0),
(21, 3, 'UserGroups', 'deleteGroup', 0),
(22, 1, 'Users', 'index', 1),
(23, 2, 'Users', 'index', 0),
(24, 3, 'Users', 'index', 0),
(25, 1, 'Users', 'viewUser', 1),
(26, 2, 'Users', 'viewUser', 0),
(27, 3, 'Users', 'viewUser', 0),
(28, 1, 'Users', 'myprofile', 1),
(29, 2, 'Users', 'myprofile', 1),
(30, 3, 'Users', 'myprofile', 0),
(31, 1, 'Users', 'login', 1),
(32, 2, 'Users', 'login', 1),
(33, 3, 'Users', 'login', 1),
(34, 1, 'Users', 'logout', 1),
(35, 2, 'Users', 'logout', 1),
(36, 3, 'Users', 'logout', 1),
(37, 1, 'Users', 'register', 1),
(38, 2, 'Users', 'register', 1),
(39, 3, 'Users', 'register', 1),
(40, 1, 'Users', 'changePassword', 1),
(41, 2, 'Users', 'changePassword', 1),
(42, 3, 'Users', 'changePassword', 0),
(43, 1, 'Users', 'changeUserPassword', 1),
(44, 2, 'Users', 'changeUserPassword', 0),
(45, 3, 'Users', 'changeUserPassword', 0),
(46, 1, 'Users', 'addUser', 1),
(47, 2, 'Users', 'addUser', 0),
(48, 3, 'Users', 'addUser', 0),
(49, 1, 'Users', 'editUser', 1),
(50, 2, 'Users', 'editUser', 0),
(51, 3, 'Users', 'editUser', 0),
(52, 1, 'Users', 'dashboard', 1),
(53, 2, 'Users', 'dashboard', 1),
(54, 3, 'Users', 'dashboard', 0),
(55, 1, 'Users', 'deleteUser', 1),
(56, 2, 'Users', 'deleteUser', 0),
(57, 3, 'Users', 'deleteUser', 0),
(58, 1, 'Users', 'makeActive', 1),
(59, 2, 'Users', 'makeActive', 0),
(60, 3, 'Users', 'makeActive', 0),
(61, 1, 'Users', 'accessDenied', 1),
(62, 2, 'Users', 'accessDenied', 1),
(63, 3, 'Users', 'accessDenied', 1),
(64, 1, 'Users', 'userVerification', 1),
(65, 2, 'Users', 'userVerification', 1),
(66, 3, 'Users', 'userVerification', 1),
(67, 1, 'Users', 'forgotPassword', 1),
(68, 2, 'Users', 'forgotPassword', 1),
(69, 3, 'Users', 'forgotPassword', 1),
(70, 1, 'Users', 'makeActiveInactive', 1),
(71, 2, 'Users', 'makeActiveInactive', 0),
(72, 3, 'Users', 'makeActiveInactive', 0),
(73, 1, 'Users', 'verifyEmail', 1),
(74, 2, 'Users', 'verifyEmail', 0),
(75, 3, 'Users', 'verifyEmail', 0),
(76, 1, 'Users', 'activatePassword', 1),
(77, 2, 'Users', 'activatePassword', 1),
(78, 3, 'Users', 'activatePassword', 1),
(79, 1, 'Start', 'index', 1),
(80, 2, 'Start', 'index', 1),
(81, 3, 'Start', 'index', 1),
(82, 1, 'Productos', 'delete', 1),
(83, 2, 'Productos', 'delete', 0),
(84, 3, 'Productos', 'delete', 0),
(85, 1, 'Productos', 'edit', 1),
(86, 2, 'Productos', 'edit', 0),
(87, 3, 'Productos', 'edit', 0),
(88, 1, 'Productos', 'add', 1),
(89, 2, 'Productos', 'add', 0),
(90, 3, 'Productos', 'add', 0),
(91, 1, 'Productos', 'view', 1),
(92, 2, 'Productos', 'view', 1),
(93, 3, 'Productos', 'view', 1),
(94, 1, 'Productos', 'index', 1),
(95, 2, 'Productos', 'index', 1),
(96, 3, 'Productos', 'index', 1),
(97, 1, 'Start', 'contacto', 1),
(98, 2, 'Start', 'contacto', 1),
(99, 3, 'Start', 'contacto', 1),
(100, 1, 'Start', 'register', 1),
(101, 2, 'Start', 'register', 1),
(102, 3, 'Start', 'register', 1),
(103, 1, 'Productos', 'upload', 1),
(104, 2, 'Productos', 'upload', 0),
(105, 3, 'Productos', 'upload', 0),
(106, 1, 'Consejos', 'upload', 1),
(107, 2, 'Consejos', 'upload', 0),
(108, 3, 'Consejos', 'upload', 0),
(109, 1, 'Consejos', 'todos', 1),
(110, 2, 'Consejos', 'todos', 0),
(111, 3, 'Consejos', 'todos', 0),
(112, 1, 'Consejos', 'delete', 1),
(113, 2, 'Consejos', 'delete', 0),
(114, 3, 'Consejos', 'delete', 0),
(115, 1, 'Consejos', 'edit', 1),
(116, 2, 'Consejos', 'edit', 0),
(117, 3, 'Consejos', 'edit', 0),
(118, 1, 'Consejos', 'add', 1),
(119, 2, 'Consejos', 'add', 0),
(120, 3, 'Consejos', 'add', 0),
(121, 1, 'Consejos', 'view', 1),
(122, 2, 'Consejos', 'view', 1),
(123, 3, 'Consejos', 'view', 1),
(124, 1, 'Consejos', 'index', 1),
(125, 2, 'Consejos', 'index', 1),
(126, 3, 'Consejos', 'index', 1),
(127, 1, 'Productos', 'sendQuestion', 1),
(128, 2, 'Productos', 'sendQuestion', 1),
(129, 3, 'Productos', 'sendQuestion', 1),
(130, 1, 'Productos', 'todos', 1),
(131, 2, 'Productos', 'todos', 0),
(132, 3, 'Productos', 'todos', 0),
(133, 1, 'Start', 'sendMail', 1),
(134, 2, 'Start', 'sendMail', 1),
(135, 3, 'Start', 'sendMail', 1),
(136, 1, 'Productos', 'agregaralcarrito', 1),
(137, 2, 'Productos', 'agregaralcarrito', 1),
(138, 3, 'Productos', 'agregaralcarrito', 0),
(139, 1, 'Start', 'carrito', 1),
(140, 2, 'Start', 'carrito', 1),
(141, 3, 'Start', 'carrito', 0),
(142, 1, 'Start', 'deleteProducto', 1),
(143, 2, 'Start', 'deleteProducto', 1),
(144, 3, 'Start', 'deleteProducto', 0),
(145, 1, 'Start', 'comoComprar', 1),
(146, 2, 'Start', 'comoComprar', 1),
(147, 3, 'Start', 'comoComprar', 1),
(148, 1, 'Start', 'perfil', 1),
(149, 2, 'Start', 'perfil', 1),
(150, 3, 'Start', 'perfil', 0),
(151, 1, 'Start', 'prueba', 1),
(152, 2, 'Start', 'prueba', 1),
(153, 3, 'Start', 'prueba', 0),
(154, 1, 'Start', 'sendMailTrasnferencia', 1),
(155, 2, 'Start', 'sendMailTrasnferencia', 1),
(156, 3, 'Start', 'sendMailTrasnferencia', 0),
(157, 1, 'Start', 'mercadopago', 1),
(158, 2, 'Start', 'mercadopago', 1),
(159, 3, 'Start', 'mercadopago', 0),
(160, 1, 'Productos', 'getPrecios', 1),
(161, 2, 'Productos', 'getPrecios', 1),
(162, 3, 'Productos', 'getPrecios', 1),
(163, 1, 'Productos', 'getLineas', 1),
(164, 2, 'Productos', 'getLineas', 0),
(165, 3, 'Productos', 'getLineas', 0),
(166, 1, 'Productos', 'lineas', 1),
(167, 2, 'Productos', 'lineas', 1),
(168, 3, 'Productos', 'lineas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carrito_id` int(11) NOT NULL,
  `track_id` int(11) NOT NULL,
  `precio_total` float NOT NULL,
  `direcciom_envio` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
