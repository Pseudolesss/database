CREATE TABLE IF NOT EXISTS Intervention(
	n_intervention BIGINT AUTO_INCREMENT,
	date_intervention VARCHAR(10) CHECK(STR_TO_DATE(date_intervention, '%d/%m/%Y') > STR_TO_DATE('1/2/3', '%d/%m/%Y')), 
	description VARCHAR(100),
	n_registre BIGINT,
	nom_scientifique VARCHAR(50),
	n_puce INT NOT NULL,
	PRIMARY KEY (n_intervention),
	FOREIGN KEY (n_registre) REFERENCES Veterinaire(n_registre),
	FOREIGN KEY (nom_scientifique,n_puce) REFERENCES Animal(nom_scientifique,n_puce)
) ENGINE=InnoDB;
