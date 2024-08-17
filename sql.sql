
CREATE TABLE estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(100) NOT NULL,
    Documento VARCHAR(100) NOT NULL,
    Fecha_de_Nacimiento DATE NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Direccion VARCHAR(100) NOT NULL,
    Telefono VARCHAR(50) NOT NULL
);

