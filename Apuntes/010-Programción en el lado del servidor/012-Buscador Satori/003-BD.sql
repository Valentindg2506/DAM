sudo mysql -u root -p

##### CREAMOS BD #######
CREATE DATABASE Satori;
USE Satori;

#### CREAMOS TABLA #####
CREATE TABLE paginas(
	id INT PRIMARY KEY AUTO_INCREMENT,
	titulo VARCHAR(255),
	url VARCHAR(255),
	contenido TEXT
);

##### CREAMOS USUARIO #######
CREATE USER 
'Satori'@'localhost' 
IDENTIFIED  BY 'Satori123$';

GRANT USAGE ON *.* TO 'Satori'@'localhost';

ALTER USER 'Satori'@'localhost' 
REQUIRE NONE 
WITH MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON Satori.* 
TO 'Satori'@'localhost';

FLUSH PRIVILEGES;
