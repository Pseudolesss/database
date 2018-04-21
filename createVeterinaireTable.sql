CREATE TABLE IF NOT EXISTS Veterinaire (
	n_registre BIGINT NOT NULL,
	n_licence BIGINT NOT NULL,
	specialite VARCHAR(50),
	PRIMARY KEY (n_registre),
	FOREIGN KEY (n_registre) REFERENCES Personnel(n_registre)
) ENGINE=InnoDB;