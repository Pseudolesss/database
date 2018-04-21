CREATE TABLE IF NOT EXISTS Provenance(
	nom_scientifique VARCHAR(50),
	n_puce INT,
	nom_institution VARCHAR(50),
	PRIMARY KEY (nom_scientifique),
	PRIMARY KEY (n_puce),
	FOREIGN KEY (nom_scientifique) REFERENCES Animal(nom_scientifique),
	FOREIGN KEY (n_puce) REFERENCES Animal(n_puce),
	FOREIGN KEY (nom_institution) REFERENCES Institution(nom_institution)
) ENGINE=InnoDB;