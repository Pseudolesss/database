/*

SELECT  nom_scientifique, n_puce COUNT (n_intervention)
FROM Intervention
WHERE 
	FROM 
		(SELECT nom_scientifique, n_puce, n_enclos 
		FROM Animal)
		NATURAL JOIN
		(SELECT n_enclos, climat
		FROM Enclos)
	WHERE (nom_scientifique, climat) NOT IN
		(SELECT nom_scientifique
		FROM Espece)
		NATURAL JOIN
		(SELECT *
		FROM Climat)
*/	
/*
SELECT nb_mvx_enclos_interv / nb_total_interv
FROM (		
	(SELECT COUNT (*) AS nb_total_interv
	FROM Intervention) e
	NATURAL JOIN 
	(SELECT COUNT (*) AS nb_mvx_enclos_interv
	FROM 
		(SELECT nom_scientifique, n_puce, n_enclos 
		FROM 
			( SELECT nom_scientifique, n_puce, n_enclos
			FROM Animal) a
			NATURAL JOIN
			( SELECT nom_scientifique, n_puce
			FROM Intervention) b			
		) c
		NATURAL JOIN
		(SELECT n_enclos, climat
		FROM Enclos) d
	WHERE (nom_scientifique, climat) NOT IN
		(SELECT nom_scientifique
		FROM Espece) g
		NATURAL JOIN
		(SELECT *
		FROM Climat) h) f
)	

*/
	
	SELECT nom_scientifique, climat FROM
		(SELECT nom_scientifique, n_puce, n_enclos 
		FROM 
			( SELECT nom_scientifique, n_puce, n_enclos
			FROM Animal) a
			NATURAL JOIN
			( SELECT nom_scientifique, n_puce
			FROM Intervention) b
		) c	
		NATURAL JOIN
		(SELECT n_enclos, climat
		FROM Enclos
		) d		
	
	WHERE (nom_scientifique , climat) IN
		SELECT * FROM
			(SELECT nom_scientifique
			FROM Espece) g
			NATURAL JOIN
			(SELECT *
			FROM Climat) h
