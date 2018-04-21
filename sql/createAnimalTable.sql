CREATE TABLE IF NOT EXISTS Animal (
	nom_scientifique VARCHAR(50) NOT NULL,
	n_puce INT NOT NULL,
	taille INT,
	sexe VARCHAR(1) CHECK (sexe = 'M' OR sexe = 'F'),
	date_naissance VARCHAR(10),
	n_enclos INT,
	PRIMARY KEY (nom_scientifique, n_puce),
	FOREIGN KEY (nom_scientifique) REFERENCES Espece(nom_scientifique),
	FOREIGN KEY (n_enclos) REFERENCES Enclos(n_enclos)
) ENGINE=InnoDB;
