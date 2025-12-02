CREATE TABLE Matiere (
    Numat CHAR(5), 
    Nommat VARCHAR(20), 
    coeff SMALLINT(1), 
    Numens CHAR(5),
    CONSTRAINT MtEns
    FOREIGN KEY (Numens) REFERENCES enseignant(Numens)
    ON DELETE CASCADE )

CREATE TABLE NOTE (
Numetu char(5), 
Numat char(5), 
Note DECIMAL(4,2) NOT NULL,
    CONSTRAINT PRIMARY KEY (Numetu, Numat),
CONSTRAINT NotEtu
    FOREIGN KEY (Numetu) REFERENCES etudiant(Numetu),
CONSTRAINT NotMat
    FOREIGN KEY (Numat) REFERENCES matiere(Numat),
CHECK(Note <= 20.00 AND Note >= 00.00)
) 

------------------------------------------------------------------------

INSERT INTO sexe(Cdsexe, Libsexe)
VALUES ('M', 'Masculin');

INSERT INTO sexe(Cdsexe, Libsexe)
VALUES ('F', 'Feminin');