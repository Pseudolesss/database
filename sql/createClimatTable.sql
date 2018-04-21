CREATE TABLE IF NOT EXISTS Climat (
	nom_scientifique VARCHAR(50) NOT NULL,
	nom_climat VARCHAR(50) NOT NULL,
	PRIMARY KEY (nom_scientifique, nom_climat),
	FOREIGN KEY (nom_scientifique) REFERENCES Espece(nom_scientifique)
) ENGINE=InnoDB;
