drop database if exists elokuvat;
create database elokuvat;
use elokuvat;
create Table elokuva (
    /* id int PRIMARY KEY AUTO_INCREMENT, */
    elokuva_nimi VARCHAR(100) not null unique PRIMARY KEY,
    tyylilaji_ID int AUTO_INCREMENT,
    ohjaaja_ID INT
    julkaisuvuosi INT
);
create Table genre (
    tyylilaji_ID INT AUTO_INCREMENT,
    tyylilaji VARCHAR(50),
    ikaraja INT
    FOREIGN key 
);

create Table ohjaaja (
    ohjaaja_ID INT AUTO_INCREMENT,
    ohjaaja VARCHAR(100),
    elokuvat_lkm INT
);