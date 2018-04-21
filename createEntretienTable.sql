CREATE TABLE IF NOT EXISTS Entretien(
	n_entretien BIGINT AUTO_INCREMENT,
	n_registre BIGINT,
	n_materiel INT,
	date_entretien DATE,
	n_enclos INT,
	PRIMARY KEY (n_intervention),
	FOREIGN KEY (n_registre) REFERENCES Technicien(n_registre),
	FOREIGN KEY (n_materiel) REFERENCES Materiel(n_materiel),
	FOREIGN KEY (n_enclos) REFERENCES Enclos(n_enclos)
) ENGINE=InnoDB;