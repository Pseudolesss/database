CREATE TABLE IF NOT EXISTS Intervention(
	n_intervention BIGINT AUTO_INCREMENT,
	date_intervention VARCHAR(10),
	description VARCHAR(100),
	n_registre BIGINT,
	nom_scientifique VARCHAR(50),
	n_puce INT,
	PRIMARY KEY (n_intervention),
	FOREIGN KEY (n_registre) REFERENCES Veterinaire(n_registre),
	FOREIGN KEY (nom_scientifique) REFERENCES Espece(nom_scientifique),
	FOREIGN KEY (n_puce) REFERENCES Animal(n_puce)
) ENGINE=InnoDB;
