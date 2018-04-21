CREATE TABLE IF NOT EXISTS Climat (
	nom_scientifique VARCHAR(50) NOT NULL,
	nom_climat VARCHAR(50) NOT NULL,
	PRIMARY KEY (nom_scientifique),
	FOREIGN KEY (nom_scientifique) REFERENCES Enclos(climat)
) ENGINE=InnoDB;