/*resultat_examen(
    Id INT AUTO_INCREMENT,
    note INT,
    code_matiere CHAR,
    niveau enum
)*/

SELECT * FROM resultat_examen GROUP BY niveau WHERE (SELECT count(*) FROM resultat_examen GROUP BY code_matiere WHERE code_matiere = "ALG") >= 30
