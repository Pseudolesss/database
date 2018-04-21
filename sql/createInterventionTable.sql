CREATE TABLE IF NOT EXISTS Intervention(
	n_intervention BIGINT AUTO_INCREMENT,
	date_intervention DATE CHECK(date_intervention >= SELECT date_naissance FROM Animal WHERE nom_scientifique = Intervention.nom_scientifique AND n_puce = Intervention.n_puce),
	description VARCHAR(500),
	n_registre BIGINT,
	nom_scientifique VARCHAR(50),
	n_puce INT,
	PRIMARY KEY (n_intervention),
	FOREIGN KEY (n_registre) REFERENCES Veterinaire(n_registre),
	FOREIGN KEY (nom_scientifique) REFERENCES Animal(nom_scientifique),
	FOREIGN KEY (n_puce) REFERENCES Animal(n_puce)
) ENGINE=InnoDB;