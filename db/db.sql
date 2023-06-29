CREATE TABLE dht11 (
    id int(11) unsigned NOT NULL AUTO_INCREMENT,
    temperatura double DEFAULT NULL,
    humedad double DEFAULT NULL,
    indice double DEFAULT NULL,
    fecha datetime DEFAULT current_timestamp(),
    PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;

CREATE TABLE Monitoreo (
    id int(11) unsigned NOT NULL AUTO_INCREMENT,
    Temperatura double DEFAULT NULL,
    Humedad double DEFAULT NULL,
    CalidadAire double DEFAULT NULL,
    PRIMARY KEY (id)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;