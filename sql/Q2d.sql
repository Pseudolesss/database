SELECT   
   	(SELECT COUNT(n_intervention) AS nb_mauvais_climats FROM Intervention WHERE n_intervention NOT IN(
        SELECT n_intervention FROM    
                (SELECT nom_scientifique, nom_climat, n_intervention FROM 
                    (SELECT * FROM 
                        (SELECT n_intervention, nom_scientifique, n_puce FROM Intervention) interv_anim NATURAL JOIN (SELECT nom_scientifique, n_puce, n_enclos FROM Animal) enclos_anim 
                    ) interv_anim_enclos 
                    NATURAL JOIN 
                    (SELECT n_enclos, nom_climat FROM Enclos) enclos_climat
                 ) interv_anim_enclos_climat
                 NATURAL JOIN
                 (SELECT * FROM Climat) tmp  )  
     ) / (SELECT COUNT(n_intervention) FROM Intervention) AS ratio_mauvais_climat_inter