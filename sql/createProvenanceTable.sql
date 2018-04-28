CREATE TABLE IF NOT EXISTS Provenance(
	nom_scientifique VARCHAR(50) NOT NULL,
	n_puce INT NOT NULL,
	nom_institution VARCHAR(50) NOT NULL,
	PRIMARY KEY (nom_scientifique, n_puce),
	FOREIGN KEY (nom_scientifique,n_puce) REFERENCES Animal(nom_scientifique,n_puce),
	FOREIGN KEY (nom_institution) REFERENCES Institution(nom_institution)
) ENGINE=InnoDB;