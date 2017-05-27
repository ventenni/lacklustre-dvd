DROP DATABASE IF EXISTS lacklustre; 

CREATE DATABASE lacklustre; 

USE lacklustre; 

DROP TABLE IF EXISTS members;
CREATE TABLE members 
  ( 
     mid            INT UNIQUE auto_increment NOT NULL, 
     mfirstname     VARCHAR(20) NOT NULL, 
     mlastname      VARCHAR(40) NOT NULL, 
     street_address VARCHAR(30) NOT NULL, 
     postcode       VARCHAR(10) NOT NULL, 
     suburb         VARCHAR(20) NOT NULL, 
     phone          VARCHAR(15) NOT NULL, 
     PRIMARY KEY (mid) 
  ); 

DROP TABLE IF EXISTS rentals;
CREATE TABLE rentals 
  ( 
     serial_number INT UNIQUE auto_increment NOT NULL, 
     title         VARCHAR(80) NOT NULL, 
     genre         VARCHAR(15) NOT NULL, 
     release_date  DATE NOT NULL, 
     rating        CHAR(3) NOT NULL, 
     rental_time   INT NOT NULL, 
     cost          DECIMAL(4, 2) NOT NULL, 
     copies        INT NOT NULL, 
     PRIMARY KEY (serial_number), 
     CHECK (genre IN ('horror', 'thriller', 'western', 'action', 'comedy', 
     'adventure', 'documentary', 'animation', 'drama', 'romance', 'sci-fi', 
     'indie', 'biopic')) 
  ); 
 

DROP TABLE IF EXISTS film_actors;
CREATE TABLE film_actors 
  ( 
     fname         VARCHAR(20) NOT NULL, 
     lname         VARCHAR(20) NOT NULL, 
     serial_number INT NOT NULL, 
     PRIMARY KEY (fname, lname, serial_number), 
     FOREIGN KEY (serial_number) REFERENCES rentals(serial_number) 
  ); 

DROP TABLE IF EXISTS movie;
CREATE TABLE movie 
  ( 
     serial_number INT NOT NULL, 
     director      VARCHAR(40) NOT NULL, 
     runtime       VARCHAR(10) NOT NULL, 
     PRIMARY KEY (serial_number), 
     FOREIGN KEY (serial_number) REFERENCES rentals(serial_number) 
  ); 


DROP TABLE IF EXISTS tv_series;
CREATE TABLE tv_series 
  ( 
     serial_number INT NOT NULL, 
     season        INT NOT NULL, 
     discs         INT NOT NULL, 
     ep_runtime    VARCHAR(8), 
     PRIMARY KEY (serial_number, season), 
     FOREIGN KEY (serial_number) REFERENCES rentals(serial_number) 
  ); 

DROP TABLE IF EXISTS late_fees;
CREATE TABLE late_fees 
  ( 
     mid           INT NOT NULL, 
     serial_number INT NOT NULL, 
     fees          VARCHAR(10) NOT NULL, 
     PRIMARY KEY (mid, serial_number), 
     FOREIGN KEY (mid) REFERENCES members(mid), 
     FOREIGN KEY (serial_number) REFERENCES rentals(serial_number) 
  ); 

DROP TABLE IF EXISTS purchase_items;
CREATE TABLE purchase_items 
  ( 
     brand   VARCHAR(15) NOT NULL, 
     flavour VARCHAR(20) NOT NULL, 
     type    VARCHAR(15) NOT NULL, 
     cost    DECIMAL(4, 2) NOT NULL,
     stock   INT NOT NULL,
     PRIMARY KEY (brand, flavour), 
     CHECK (type IN ('ice-cream', 'chocolate', 'chips')) 
  ); 

DROP TABLE IF EXISTS current_rentals;
CREATE TABLE current_rentals 
  ( 
     mid           INT NOT NULL,
     serial_number INT NOT NULL,
     date_rented   DATE NOT NULL,
     date_due      DATE NOT NULL,
	 date_returned DATE			,
     PRIMARY KEY (mid, serial_number),
     FOREIGN KEY (mid) REFERENCES members(mid),
     FOREIGN KEY (serial_number) REFERENCES rentals(serial_number), 
     CHECK (date_rented < date_due) 
  ); 
  
-- DROP TABLE IF EXISTS users;
-- CREATE TABLE users 
--     (
--     id              INT AUTO_INCREMENT NOT NULL,
--     username        VARCHAR(15) NOT NULL,
--     password        VARCHAR(80) NOT NULL,
--     remember_token  VARCHAR(100),
--     PRIMARY KEY (username)
--     );