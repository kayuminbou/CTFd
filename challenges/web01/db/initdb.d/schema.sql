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
INSERT INTO users (id,name,comment) VALUES (1, '山田課長','働き者');
INSERT INTO users (id,name,comment) VALUES (2, '田中部長','サボりがち');
INSERT INTO users (id,name,comment) VALUES (3, 'モナ王','王');

DROP TABLE IF EXISTS flag;
CREATE TABLE flag (
    flag VARCHAR(32) NOT NULL,
    PRIMARY KEY (flag)
);
INSERT INTO flag (flag) VALUES ('ctfgate{51mpl3_un10n_5ql1!}');