drop database if exists elokuvat;
create database elokuvat;
use elokuvat;

create Table genre (
    genre_ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    tyylilaji VARCHAR(50)/* ,
    ikaraja INT */
);

create Table ohjaaja (
    ohjaaja_ID INT NOT null AUTO_INCREMENT PRIMARY KEY,
    ohjaaja_nimi VARCHAR(100) NOT NULL,
    elokuvat_lkm INT NOT NULL
);

create Table elokuva (
    /* id int PRIMARY KEY AUTO_INCREMENT, */
    elokuva_ID INT AUTO_INCREMENT PRIMARY KEY,
    elokuva_nimi VARCHAR(40) not null,
    genre_ID int NOT NULL,
    ohjaaja_ID INT NOT NULL,
    julkaisuvuosi DATE NOT NULL,
    FOREIGN KEY (genre_ID) REFERENCES genre(genre_ID),
    FOREIGN KEY (ohjaaja_ID) REFERENCES ohjaaja(ohjaaja_ID)
    
);