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
    ohjaaja_nimi VARCHAR(100) NOT NULL
);

create Table elokuva (
    /* id int PRIMARY KEY AUTO_INCREMENT, */
    elokuva_ID INT AUTO_INCREMENT PRIMARY KEY,
    elokuva_nimi VARCHAR(40) not null,
    genre_ID int NOT NULL,
    ohjaaja_ID INT NOT NULL,
    julkaisuvuosi INT NOT NULL,
    FOREIGN KEY (genre_ID) REFERENCES genre(genre_ID),
    FOREIGN KEY (ohjaaja_ID) REFERENCES ohjaaja(ohjaaja_ID)
);

INSERT into genre (tyylilaji) VALUES ('Komedia');
INSERT into genre (tyylilaji) VALUES ('Kauhu');
INSERT into genre (tyylilaji) VALUES ('Toiminta');
INSERT into genre (tyylilaji) VALUES ('Draama');
INSERT into genre (tyylilaji) VALUES ('Fantasia');
INSERT into genre (tyylilaji) VALUES ('Animaatio');
INSERT into genre (tyylilaji) VALUES ('Romantiikka');
INSERT into genre (tyylilaji) VALUES ('Supersankari');
INSERT into genre (tyylilaji) VALUES ('Sci fi');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Quentin Tarantino');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Peter Jackson');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Chris Columbus');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Steven Spielberg');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Martin Scorsese');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('James Cameron');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Christopher Nolan');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Matt Reeves');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Tim Miller');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Elgar Wright');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Denis Villeneuve');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Chris Buck');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Andrew Stanton');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Nick Cassavetes');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Spike Jonze');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('James Wan');
INSERT INTO ohjaaja (ohjaaja_nimi) VALUES ('Stanley Kubrick');
