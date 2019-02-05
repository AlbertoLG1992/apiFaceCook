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
  `coordenada_x` double NOT NULL,
  `coordenada_y` double NOT NULL,
  `tlf` int(9) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fecha_alta` date NOT NULL,
  `comentarios` varchar(200) NOT NULL
);</pre>

<h3>Usuarios de ejemplo</h3>
<pre>INSERT INTO `usuarios` (`login`, `pass`, `nombre`, `apellidos`, `fecha_nacimiento`, `email`, `coordenada_x`, `coordenada_y`, `tlf`, `foto`, `fecha_alta`, `comentarios`) VALUES
('user1', 'passuser1', 'User1', 'Apellido1 Apellido2', '2000-01-01', 'ejemplo@gmail.com', 62.579437, -65.635722, 523659659, 'foto1.jpg', '2019-02-04', 'Aficionado'),
('user2', 'passuser2', 'Cocinero', 'Apellidos', '2001-01-01', 'cocinero@gmail.com', 42.579437, 62.579437, 523659659, 'foto2.jpg', '2019-02-05', 'Profesional');</pre>
