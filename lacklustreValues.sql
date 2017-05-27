-- CREATE TABLE members (
--     mid INT UNIQUE AUTO_INCREMENT NOT NULL,
--     mfirstname VARCHAR(20) NOT NULL,
--     mlastname VARCHAR(40) NOT NULL,
--     street_address VARCHAR(30) NOT NULL,
--     postcode VARCHAR(10) NOT NULL,
--     suburb VARCHAR(20) NOT NULL,
--     phone VARCHAR(15) NOT NULL,

INSERT INTO members VALUES(1, 'Nick', 'Vaiente', '129 Parkwood Boulevard', '4214', 'Parkwood', '0400000001');
INSERT INTO members VALUES(2, 'Cameron', 'Francis', '111 Hope Island Street', '4212', 'Hope Island', '0400000002');
INSERT INTO members VALUES(3, 'Rick', 'Perry', '128 Parkwood Boulevard', '4214', 'Parkwood', '0400000003');
INSERT INTO members VALUES(4, 'Rick', 'Sherry', '127 Parkwood Boulevard', '4214', 'Parkwood', '0400000004');
INSERT INTO members VALUES(5, 'Rick', 'Berry', '126 Parkwood Boulevard', '4214', 'Parkwood', '0400000005');
INSERT INTO members VALUES(6, 'Rick', 'Kerry', '125 Parkwood Boulevard', '4214', 'Parkwood', '0400000006');



-- serial_number INT UNIQUE AUTO_INCREMENT NOT NULL,
-- title VARCHAR(80) NOT NULL,
-- genre VARCHAR(30) NOT NULL,
-- release_date DATE NOT NULL,
-- rating CHAR(3) NOT NULL,
-- rental_time INT NOT NULL,
-- cost DECIMAL(4, 2) NOT NULL,
-- copies INT NOT NULL,


-- MOVIES
INSERT INTO rentals VALUES(1, 'The Shawshank Redemption', 'drama', '1994-10-14', '9.3', 7, 2.00, 5);
INSERT INTO rentals VALUES(2, 'The Godfather', 'drama', '1972-03-24', '9.3', 7, 2.00, 5);
INSERT INTO rentals VALUES(3, 'The Godfather: Part 2', 'drama', '1974-12-20', '9.0', 7, 2.00, 5);
INSERT INTO rentals VALUES(4, 'The Dark Knight', 'action', '2008-07-18', '9.0', 7, 2.00, 5);
INSERT INTO rentals VALUES(5, '12 Angry Men','drama', '1957-04-01', '8.9', 7, 2.00, 5);
INSERT INTO rentals VALUES(6, 'Schindler\'s List', 'drama', '1994-02-04', '8.9', 7, 2.00, 5);
INSERT INTO rentals VALUES(7, 'Pulp Fiction', 'drama', '1994-10-14', '8.9', 7, 2.00, 5);
INSERT INTO rentals VALUES(8, 'The Lord of the Rings: Return of the King', 'adventure', '2003-12-17', '8.9', 7, 2.00, 5);
INSERT INTO rentals VALUES(9, 'The Good, the Bad and the Ugly', 'western', '1967-12-29', '8.9', 7, 2.00, 5);
INSERT INTO rentals VALUES(10, 'Fight Club', 'drama', '1999-10-15', '8.8', 7, 2.00, 5);
INSERT INTO rentals VALUES(11, 'The Lord of the Rings: Fellowship of the Ring', 'adventure', '2001-12-19', '8.8', 7, 2.00, 5);
INSERT INTO rentals VALUES(12, 'Star Wars: Episode V - The Empire Strikes Back', 'action', '1980-06-20', '8.8', 7, 2.00, 5);
INSERT INTO rentals VALUES(23, 'Rogue One', 'action', '2016-12-16', '8.0', 1, 4.00, 5);

-- TV SHOWS
INSERT INTO rentals VALUES(13, 'Planet Earth II', 'documentary', '2017-02-18', '9.7', 7, 4.00, 5);
INSERT INTO rentals VALUES(14, 'Band of Brothers', 'drama', '2001-09-09', '9.5', 7, 2.00, 5);
INSERT INTO rentals VALUES(15, 'Planet Earth', 'documentary', '2007-03-25', '9.5', 7, 4.00, 5);
INSERT INTO rentals VALUES(16, 'Game of Thrones', 'drama', '2011-04-17', '9.5', 7, 4.00, 5);
INSERT INTO rentals VALUES(17, 'Breaking Bad', 'drama', '2008-01-20', '9.5', 7, 4.00, 5);
INSERT INTO rentals VALUES(18, 'The Wire', 'drama', '2002-06-02', '9.4', 7, 4.00, 5);
INSERT INTO rentals VALUES(19, 'Cosmos: A Spacetime Odyssey', 'documentary', '2014-03-09', '9.3', 7, 4.00, 5);
INSERT INTO rentals VALUES(20, 'Rick and Morty', 'comedy', '2013-12-02', '9.3', 7, 4.00, 5);
INSERT INTO rentals VALUES(21, 'Cosmos', 'documentary', '1980-09-28', '9.3', 7, 2.00, 5);
INSERT INTO rentals VALUES(22, 'The Sopranos', 'drama', '1990-01-10', '9.2', 7, 2.00, 5);



-- fname VARCHAR(20) NOT NULL,
-- lname VARCHAR(20) NOT NULL,
-- serial_number INT NOT NULL,

-- MOVIE Actors
INSERT INTO film_actors VALUES('Tim', 'Robbins', 1);
INSERT INTO film_actors VALUES('Morgan', 'Freeman', 1);
INSERT INTO film_actors VALUES('Marlon', 'Brando', 2);
INSERT INTO film_actors VALUES('Al', 'Pacino', 2);
INSERT INTO film_actors VALUES('Al', 'Pacino', 3);
INSERT INTO film_actors VALUES('Robert', 'De Niro', 3);
INSERT INTO film_actors VALUES('Christian', 'Bale', 4);
INSERT INTO film_actors VALUES('Heath', 'Ledger', 4);
INSERT INTO film_actors VALUES('Henry', 'Fonda', 5);
INSERT INTO film_actors VALUES('Lee J.', 'Cobb', 5);
INSERT INTO film_actors VALUES('Liam', 'Neeson', 6);
INSERT INTO film_actors VALUES('Ralph', 'Fiennes', 6);
INSERT INTO film_actors VALUES('John', 'Travolta', 7);
INSERT INTO film_actors VALUES('Uma', 'Thurman', 7);
INSERT INTO film_actors VALUES('Elijah', 'Wood', 8);
INSERT INTO film_actors VALUES('Viggo', 'Mortensen', 8);
INSERT INTO film_actors VALUES('Clint', 'Eastwood', 9);
INSERT INTO film_actors VALUES('Eli', 'Wallach', 9);
INSERT INTO film_actors VALUES('Brad', 'Pitt', 10);
INSERT INTO film_actors VALUES('Edward', 'Norton', 10);
INSERT INTO film_actors VALUES('Elijah', 'Wood', 11);
INSERT INTO film_actors VALUES('Ian', 'McKellan', 11);
INSERT INTO film_actors VALUES('Mark', 'Hamill', 12);
INSERT INTO film_actors VALUES('Harrison', 'Ford', 12);



-- TV Actors
INSERT INTO film_actors VALUES('David', 'Attenborough', 13);
INSERT INTO film_actors VALUES('Scott', 'Grimes', 14);
INSERT INTO film_actors VALUES('Damian', 'Lewis', 14);
INSERT INTO film_actors VALUES('David', 'Attenborough', 15);
INSERT INTO film_actors VALUES('Bryan', 'Cranston', 17);
INSERT INTO film_actors VALUES('Aaron', 'Paul', 17);
INSERT INTO film_actors VALUES('Dominic', 'West', 18);
INSERT INTO film_actors VALUES('Lance', 'Reddick', 18);
INSERT INTO film_actors VALUES('Neil deGrasse', 'Tyson', 19);
INSERT INTO film_actors VALUES('Justin', 'Roiland', 20);
INSERT INTO film_actors VALUES('Chris', 'Parnell', 20);
INSERT INTO film_actors VALUES('Carl', 'Sagan', 21);
INSERT INTO film_actors VALUES('James', 'Gandolfini', 22);
INSERT INTO film_actors VALUES('Lorraine', 'Bracco', 22);
-- INSERT INTO film_actors VALUES('', '', );


-- serial_number INT NOT NULL,
-- director VARCHAR(40) NOT NULL,
-- runtime VARCHAR(10) NOT NULL,

INSERT INTO movie VALUES(1, 'Frank Darabont', '2h 22min');
INSERT INTO movie VALUES(2, 'Francis Ford Coppola', '2h 55min');
INSERT INTO movie VALUES(3, 'Francis Ford Coppola', '3h 22min');
INSERT INTO movie VALUES(4, 'Christopher Nolan', '2h 32min');
INSERT INTO movie VALUES(5, 'Sidney Lumet', '1h 36min');
INSERT INTO movie VALUES(6, 'Steven Spielberg', '3h 15min');
INSERT INTO movie VALUES(7, 'Quentin Tarantino', '2h 34min');
INSERT INTO movie VALUES(8, 'Peter Jackson', '3h 21min');
INSERT INTO movie VALUES(9, 'Sergio Leone', '2h 41min');
INSERT INTO movie VALUES(10, 'David Fincher', '2h 19min');
INSERT INTO movie VALUES(11, 'Peter Jackson', '2h 58min');
INSERT INTO movie VALUES(12, 'Irvin Kreshner', '2h 4min');
-- INSERT INTO movie VALUES(, '', '');


-- serial_number INT NOT NULL,
-- season INT NOT NULL,
-- discs INT NOT NULL,
-- ep_runtime VARCHAR(8),

INSERT INTO tv_series VALUES(13, 2, 2, '1hr');
INSERT INTO tv_series VALUES(14, 1, 4, '1hr');
INSERT INTO tv_series VALUES(15, 1, 2, '1hr');
INSERT INTO tv_series VALUES(16, 1, 4, '1hr');
INSERT INTO tv_series VALUES(16, 2, 4, '1hr');
INSERT INTO tv_series VALUES(16, 3, 4, '1hr');
INSERT INTO tv_series VALUES(16, 4, 4, '1hr');
INSERT INTO tv_series VALUES(16, 5, 4, '1hr');
INSERT INTO tv_series VALUES(16, 6, 4, '1hr');
INSERT INTO tv_series VALUES(17, 1, 4, '1hr');
INSERT INTO tv_series VALUES(17, 2, 4, '1hr');
INSERT INTO tv_series VALUES(17, 3, 4, '1hr');
INSERT INTO tv_series VALUES(17, 4, 4, '1hr');
INSERT INTO tv_series VALUES(17, 5, 4, '1hr');
INSERT INTO tv_series VALUES(18, 1, 4, '1hr');
INSERT INTO tv_series VALUES(18, 2, 4, '1hr');
INSERT INTO tv_series VALUES(18, 3, 4, '1hr');
INSERT INTO tv_series VALUES(18, 4, 4, '1hr');
INSERT INTO tv_series VALUES(18, 5, 4, '1hr');
INSERT INTO tv_series VALUES(19, 1, 4, '1hr');
INSERT INTO tv_series VALUES(20, 1, 4, '22min');
INSERT INTO tv_series VALUES(20, 2, 4, '22min');
INSERT INTO tv_series VALUES(20, 3, 4, '22min');
INSERT INTO tv_series VALUES(21, 1, 4, '1hr');
INSERT INTO tv_series VALUES(22, 2, 4, '1hr');
INSERT INTO tv_series VALUES(22, 3, 4, '1hr');
INSERT INTO tv_series VALUES(22, 4, 4, '1hr');
INSERT INTO tv_series VALUES(22, 5, 4, '1hr');
INSERT INTO tv_series VALUES(22, 6, 4, '1hr');







-- late_fees (
-- mid INT NOT NULL,
-- serial_number INT NOT NULL,
-- fees VARCHAR(10) NOT NULL,
INSERT INTO late_fees VALUES(4, 1, '2.00');
    
    
    
-- purchase_items (
-- brand VARCHAR(15) NOT NULL UNIQUE,
-- flavour VARCHAR(15) NOT NULL UNIQUE,
-- type VARCHAR(15) NOT NULL,
-- cost DECIMAL(4, 2) NOT NULL,
INSERT INTO purchase_items VALUES('Golden Gaytime', 'Original', 'Ice-cream', 3.00, 10);
INSERT INTO purchase_items VALUES('Magnum', 'Caramel', 'Ice-cream', 3.00, 10);
INSERT INTO purchase_items VALUES('Mars', 'Original', 'Chocolate', 2.00, 10);
INSERT INTO purchase_items VALUES('Mars', 'Dark', 'Chocolate', 2.00, 10);
INSERT INTO purchase_items VALUES('Kettle', 'Salted', 'Chips', 2.50, 10);
INSERT INTO purchase_items VALUES('Kettle', 'Salt and Vinegar', 'Chips', 2.50, 10);


-- current_rentals (
-- mid INT NOT NULL,
-- serial_number INT NOT NULL,
-- date_rented DATE NOT NULL,
-- date_due DATE NOT NULL,
-- INSERT INTO current_rentals VALUES(1, 23, '2017-04-19', DATE_ADD(date_rented, INTERVAL 3 DAY), '2017-04-22');
-- INSERT INTO current_rentals VALUES(2, 23, '2017-04-19', DATE_ADD(date_rented, INTERVAL 3 DAY), '2017-04-22');
-- INSERT INTO current_rentals VALUES(2, 22, '2017-04-19', DATE_ADD(date_rented, INTERVAL 3 DAY), '2017-04-22');
-- INSERT INTO current_rentals VALUES(2, 21, '2017-04-19', DATE_ADD(date_rented, INTERVAL 3 DAY), '2017-04-22');
-- INSERT INTO current_rentals VALUES(1, 1, '2017-04-19', DATE_ADD(date_rented, INTERVAL 3 DAY), '2017-04-22');
-- INSERT INTO current_rentals VALUES(4, 1, '2017-04-19', DATE_ADD(date_rented, INTERVAL 3 DAY), '2017-04-23');


-- INSERT INTO users VALUES('root', 'password');
-- INSERT INTO users VALUES('em1', 'password');