SELECT nom_scientifique, n_puce, COUNT(n_registre) AS nb_doctor
FROM (SELECT nom_scientifique, n_puce
	 FROM Animal) animals
		NATURAL JOIN
	 (SELECT DISTINCT n_registre, nom_scientifique, n_puce
	 FROM Intervention) intervention
GROUP BY nom_scientifique, n_puce
ORDER BY nb_doctor
