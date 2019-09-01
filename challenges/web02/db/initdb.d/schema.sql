DROP SCHEMA IF EXISTS sample_db;
CREATE SCHEMA sample_db;
USE sample_db;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    password VARCHAR(32) NOT NULL,
    PRIMARY KEY (id)
);
INSERT INTO users (id,name,password) VALUES (1, 'ctfgate{bl1nd_5ql1_15_h4rd!}','a140872db281f3a2dda3f683cd2b76ef');
