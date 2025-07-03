CREATE DATABASE IF NOT EXISTS Pierre_Sofip;
USE Pierre_Sofip;

CREATE TABLE Stagiaire (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(200) NOT NULL,
    age INT NOT NULL,
    date_naissance DATE NOT NULL,
    email VARCHAR(50) NOT NULL,
    ville VARCHAR(50) NOT NULL
);