CREATE TABLE IF NOT EXISTS Espece (
	nom_scientifique VARCHAR(50) NOT NULL,
	nom_courant VARCHAR(50) NOT NULL,
	regime_alimentaire VARCHAR(50),
	PRIMARY KEY  (nom_scientifique)
) ENGINE=InnoDB;