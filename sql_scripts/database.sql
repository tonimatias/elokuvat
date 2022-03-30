drop database if exists elokuvat;
create database elokuvat;
use elokuvat;
create Table elokuva (
    /* id int PRIMARY KEY AUTO_INCREMENT, */
    elokuva_ID INT AUTO_INCREMENT PRIMARY KEY,
    elokuva_nimi VARCHAR(40) not null,
    genre_ID int FOREIGN KEY REFERENCES genre(genre_ID),
    ohjaaja_ID INT FOREIGN KEY REFERENCES ohjaaja(ohjaaja_ID,)
    julkaisuvuosi DATE NOT NULL
);
create Table genre (
    genre_ID INT AUTO_INCREMENT PRIMARY KEY,
    tyylilaji VARCHAR(50)/* ,
    ikaraja INT */
   /*  FOREIGN key  */
);

create Table ohjaaja (
    ohjaaja_ID INT AUTO_INCREMENT PRIMARY KEY,
    ohjaaja_nimi VARCHAR(100) NOT NULL,
    elokuvat_lkm INT NOT NULL
);