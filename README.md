# apiFaceCook
Api para conectar la App FaceCook con la base de datos externa, que será la que haga el login de usuario.

<h3>Sentencias SQL para la creación de la tabla en la BD</h3>
<pre>CREATE TABLE `usuarios` (
  `login` varchar(30) NOT NULL PRIMARY KEY,
  `pass` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `coordenada_x` double,
  `coordenada_y` double,
  `tlf` int(9) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fecha_alta` date NOT NULL,
  `comentarios` varchar(200) NOT NULL
);</pre>

<h3>Usuarios de ejemplo</h3>
<pre>INSERT INTO `usuarios` (`login`, `pass`, `nombre`, `apellidos`, `fecha_nacimiento`, `email`, `coordenada_x`, `coordenada_y`, `tlf`, `foto`, `fecha_alta`, `comentarios`) VALUES
('admin', 'admin', 'Alberto', 'Lucena Gómez', '1992-05-22', 'alberto@gmail.com', 37.579437, -4.635722, 523659659, 'http://192.168.1.148/apiFaceCook/imagenes/admin.jpg', '2019-02-04', 'Aficionado'),
('gatsu', 'gatsu', 'Gatsu', 'The Berserk', '1988-11-05', 'gatsu@gmail.com', 37.679637, -4.635727, 653449235, 'http://192.168.1.148/apiFaceCook/imagenes/gatsu.jpg', '2019-02-11', 'Profesional');</pre>
