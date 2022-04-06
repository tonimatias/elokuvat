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

INSERT INTO elokuva VALUES (NULL,'Reservoir dogs',4,1,1992);
INSERT INTO elokuva VALUES (NULL,'Pulp fiction',4,1,1994);
INSERT INTO elokuva VALUES (NULL,'Once upon a time in Hollywood',4,1,2019);
INSERT INTO elokuva VALUES (NULL,'The Lord of the Rings: The Fellowship of the Ring',5,2,2001);
INSERT INTO elokuva VALUES (NULL,'The Lord of the Rings: The Two Towers',5,2,2002);
INSERT INTO elokuva VALUES (NULL,'The Lord of the Rings: The Return of the King',5,2,2003);
INSERT INTO elokuva VALUES (NULL,'Harry Potter and the Sorcerers Stone',5,3,2001);
INSERT INTO elokuva VALUES (NULL,'Harry Potter and the Chamber of Secrets',5,3,2002);
INSERT INTO elokuva VALUES (NULL,'Harry Potter and the Prisoner of Azkaban',5,3,2004);
INSERT INTO elokuva VALUES (NULL,'Saving Private Ryan',4,4,1998);
INSERT INTO elokuva VALUES (NULL,'Schindlers list',4,4,1993);
INSERT INTO elokuva VALUES (NULL,'Raiders of the Lost Ark',4,3,1981);
INSERT INTO elokuva VALUES (NULL,'Taxi Driver',4,5,1976);
INSERT INTO elokuva VALUES (NULL,'Goodfellas',4,5,1990);
INSERT INTO elokuva VALUES (NULL,'Mean Streets',4,5,1973);
INSERT INTO elokuva VALUES (NULL,'Avatar',5,6,2009);
INSERT INTO elokuva VALUES (NULL,'Titanic',7,6,1997);
INSERT INTO elokuva VALUES (NULL,'Terminator 2: Judgment Day',9,6,1991);
INSERT INTO elokuva VALUES (NULL,'Tenet',9,7,2020);
INSERT INTO elokuva VALUES (NULL,'Interstellar',9,7,2014);
INSERT INTO elokuva VALUES (NULL,'Inception',9,7,2010);
INSERT INTO elokuva VALUES (NULL,'The Batman',3,8,2022);
INSERT INTO elokuva VALUES (NULL,'Let Me In',2,8,2010);
INSERT INTO elokuva VALUES (NULL,'War for the Planet of the Apes',3,8,2017);
INSERT INTO elokuva VALUES (NULL,'Deadpool',1,9,2016);
INSERT INTO elokuva VALUES (NULL,'Terminator: Dark Fate',9,9,2019);
INSERT INTO elokuva VALUES (NULL,'Love, Death & Robots (TV-series)',3,9,2019);
INSERT INTO elokuva VALUES (NULL,'Shaun of the Dead',1,10,2004);
INSERT INTO elokuva VALUES (NULL,'Baby Driver',3,10,2017);
INSERT INTO elokuva VALUES (NULL,'Last Night in Soho',4,10,2021);
INSERT INTO elokuva VALUES (NULL,'Dune',3,11,2021);
INSERT INTO elokuva VALUES (NULL,'Blade Runner 2049',3,11,2017);
INSERT INTO elokuva VALUES (NULL,'Incendies',4,11,2010);
INSERT INTO elokuva VALUES (NULL,'Frozen',6,12,2013);
INSERT INTO elokuva VALUES (NULL,'Surfs Up',6,12,2007);
INSERT INTO elokuva VALUES (NULL,'Frozen II',6,12,2019);
INSERT INTO elokuva VALUES (NULL,'Wall-E',6,13,2008);
INSERT INTO elokuva VALUES (NULL,'Finding Nemo',6,13,2003);
INSERT INTO elokuva VALUES (NULL,'Finding Dory',6,13,2016);
INSERT INTO elokuva VALUES (NULL,'The Notebook',7,14,2004);
INSERT INTO elokuva VALUES (NULL,'My Sisters Keeper',4,14,2009);
INSERT INTO elokuva VALUES (NULL,'Prisoners of the Ghostland',3,14,2021);
INSERT INTO elokuva VALUES (NULL,'Her',7,15,2013);
INSERT INTO elokuva VALUES (NULL,'Three Kings',1,15,1999);
INSERT INTO elokuva VALUES (NULL,'Where The Wild Things Are',4,15,2009);
INSERT INTO elokuva VALUES (NULL,'The Conjuring 2',2,16,2016);
INSERT INTO elokuva VALUES (NULL,'Saw',2,16,2004);
INSERT INTO elokuva VALUES (NULL,'Fast & Furious 7',3,16,2015);
INSERT INTO elokuva VALUES (NULL,'2001: A Space Odyssey',9,17,1968);
INSERT INTO elokuva VALUES (NULL,'A Clockwork Orange',9,17,1971);
INSERT INTO elokuva VALUES (NULL,'Barry Lyndon',4,17,1975);