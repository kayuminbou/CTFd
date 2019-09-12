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
INSERT INTO users (id,name,password) VALUES (1, 'ca59d7e40d3e12e3ef3f152e61b75d27','a7e782e9ac08da707db80c8586d65941');
