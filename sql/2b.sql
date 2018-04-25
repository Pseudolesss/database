SELECT nom_scientifique, n_puce, COUNT(n_registre) AS n_doctor

FROM (SELECT nom_scientifique, n_puce)
	 FROM Animal)
		NATURAL JOIN
	 (SELECT DISTINCT n_registre, nom_scientifique, n_puce
	 FROM Intervention)
	 
GROUP BY nom_scientifique, n_puce
ORDER BY n_doctor
