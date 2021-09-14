CREATE DATABASE IF NOT EXISTS 'battlegame' DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use 'battlegame';

CREATE TABLE 'personnages'(
    'id' int(11) NOT NULL,
    'nom' varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    'force' int(11) NOT NULL,
    'degats' int(11) NOT NULL,
    'niveau' int(11) NOT NULL,
    'experience' int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE 'personnages' ADO PRIMARY KEY ( 'id' );

ALTER TABLE 'personnages' MODIF 'id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;