CREATE TABLE IF NOT EXISTS Technicien (
	n_registre BIGINT NOT NULL,
	PRIMARY KEY (n_registre),
	FOREIGN KEY (n_registre) REFERENCES Personnel(n_registre)
) ENGINE=InnoDB;