DROP DATABASE IF EXISTS users; 

CREATE DATABASE users; 

USE users; 

DROP TABLE IF EXISTS employees;
CREATE TABLE employees 
  ( 
     e_id            INT UNIQUE auto_increment NOT NULL, 
     username        VARCHAR(20) NOT NULL,
     password        VARCHAR(15) NOT NULL,
     PRIMARY KEY (e_id) 
  ); 
  
  
  
INSERT INTO employees VALUES(1, 'root', 'password');
INSERT INTO employees VALUES(2, 'em1', 'password');
INSERT INTO employees VALUES(3, 'em2', 'password');

