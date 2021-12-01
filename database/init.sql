CREATE DATABASE IF NOT EXISTS store_db default charset cp1251;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT,DELETE ON store_db.* TO 'user'@'%';
FLUSH PRIVILEGES;

use store_db;
CREATE TABLE IF NOT EXISTS users (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  login VARCHAR(20) NOT NULL,
  password VARCHAR(40) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO users(login, password)
VALUES ('admin', 'admin');


CREATE TABLE IF NOT EXISTS toys (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  price int(10) NOT NULL,
  PRIMARY KEY (ID)
);
CREATE TABLE IF NOT EXISTS stores (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(40) NOT NULL,
  address VARCHAR(100) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO toys (name, price)
VALUES
('Milas','10312'),
('Fasan','421'),
('Iron man','2131'),
('Spider man','552'),
('Joker toy','213'),
('Jonks Boy','3000'),
('Near of Plan','603'),
('Kangeroi','5004'),
('Baby Stel','4190');


INSERT INTO stores (name, address) VALUES
('Ручеек','ул. Ручейкова, д.9'),
('Cолнышнко','ул. Салютов, д. 228к12'),
('Антошка','ул. Антонова, д. 10к1'),
('Чайка','ул. Илфайза , д. 2'),
('Колокольчик','ул. Красный Казанец, д. 1');

