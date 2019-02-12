<?php
$this->db->exec( 'CREATE DATABASE IF NOT EXISTS comercio DEFAULT character SET utf8 COLLATE utf8_spanish_ci; USE comercio;');
$query = 'CREATE TABLE IF NOT EXISTS tipos (
        tipo VARCHAR(20) NOT NULL,
        PRIMARY KEY(tipo)
)engine = InnoDb';

$this->db->exec($query);

$query = 'CREATE TABLE IF NOT EXISTS localidades (
        localidad  VARCHAR(20)      NOT NULL,
        PRIMARY KEY(localidad)
)engine = InnoDb';

$this->db->exec($query);

$query = 'CREATE TABLE IF NOT EXISTS viviendas (
        id            INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
        dormitorios   INTEGER NOT NULL,
        precio        DEC(8,2) NOT NULL,
        image         VARCHAR(40),
        garaje        BINARY DEFAULT 0,
        padel         BINARY DEFAULT 0,
        piscina       BINARY DEFAULT 0,
        tipo          VARCHAR(20) NOT NULL,
        localidad     VARCHAR(20) NOT NULL,
        FOREIGN KEY (tipo) REFERENCES tipos(tipo),
        FOREIGN KEY (localidad) REFERENCES localidades(localidad)
    )engine = InnoDb';

$this->db->exec($query);

$insert_productos = "INSERT INTO `tipos`(`tipo`) VALUES 
('Piso'),('Apartamento'),('Adosado'),('Chalet'),('Finca'),('Parcela')
";

$this->db->exec($insert_productos);

$insert_productos = "INSERT INTO `localidades`(`localidad`) VALUES 
('Pozuelo'),('Las Rozas'),('Majadahonda'),('Madrid'),('Villalba'),('Alcobendas'),('Alcorcon')
";

$this->db->exec($insert_productos);


?>
