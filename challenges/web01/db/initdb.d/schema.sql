DROP SCHEMA IF EXISTS sample_db;
CREATE SCHEMA sample_db;
USE sample_db;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    comment VARCHAR(32) NOT NULL,
    PRIMARY KEY (id)
);
INSERT INTO users (id,name,comment) VALUES 
(1, '山田課長','働き者'),
(2, '寺田副部長','将来有望'),
(3, '田中部長','とてもいい人');

DROP TABLE IF EXISTS flag;
CREATE TABLE flag (
    flag VARCHAR(32) NOT NULL,
    PRIMARY KEY (flag)
);
INSERT INTO flag (flag) VALUES ('ctfgate{51mpl3_un10n_5ql1!}');