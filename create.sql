

CREATE TABLE `usuarios` (
  `nombre` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`nombre`) VALUES
('Juan'),
('Pedro');


ALTER TABLE `usuarios` ADD `id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;
ALTER TABLE `usuarios` ADD `apellido` VARCHAR( 255 ) NOT NULL AFTER `nombre`;
ALTER TABLE `usuarios` ADD `fecha` TIMESTAMP NOT NULL AFTER `apellido`;

