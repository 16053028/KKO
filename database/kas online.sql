CREATE DATABASE KKO;
USE KKO;


CREATE TABLE Login_kas(
npm int (8),
nama VARCHAR (35),
password VARCHAR (15),
status VARCHAR (20),
PRIMARY KEY (npm)
);

INSERT INTO Login_kas
(npm,nama,password,status)
VALUES
('16050000','admin','kko2016','');