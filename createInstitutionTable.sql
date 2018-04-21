CREATE TABLE IF NOT EXISTS Institution (
	nom_institution VARCHAR(50) NOT NULL,
	rue VARCHAR(50) NOT NULL,
	code_postal VARCHAR(10) NOT NULL,
	pays VARCHAR(50) NOT NULL,
	PRIMARY KEY  (nom_institution)
) ENGINE=InnoDB;