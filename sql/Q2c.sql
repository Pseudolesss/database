SELECT n_registre 

FROM (SELECT n_registre, COUNT(DISTINCT n_enclos) AS nb_enclos
	 FROM Entretien
	 GROUP BY n_registre) tmp_table
	 
WHERE nb_enclos = ( SELECT COUNT(DISTINCT n_enclos) FROM Enclos)  