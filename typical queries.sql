-- 1. Given the member ID, return their name and
-- the sum of all late fees they might owe.

SELECT M.mfirstname AS First_Name, M.mlastname AS Surname, SUM(L.fees) as Total_Fees
FROM members M
INNER JOIN late_fees L ON M.mid = L.mid
GROUP BY M.mid;




-- 2. Given the member ID, return all of the current titles that the member is currently renting.

SELECT R.title, M.mfirstname, M.mlastname
FROM rentals R, members M
WHERE R.serial_number IN
	(SELECT serial_number
	FROM current_rentals 
	WHERE mid = 1);




-- 3.	Given the name of a rental,	return a list of actors that are in that rental.
SELECT F.fname, F.lname
FROM film_actors F, rentals R
WHERE F.serial_number = 1
GROUP BY F.fname, F.lname;





-- 4.	Given a name, return a list of movies that have been directed by that person.

SELECT R.title
FROM rentals R
WHERE R.serial_number IN  
	(SELECT serial_number
	FROM movie
	WHERE director LIKE '%Spielberg%');
  
  
-- 5. 	Return a list of movies/tv shows that star a given actor

SELECT R.title, R.genre, R.release_date, R.rating, R.rental_time, R.cost
FROM rentals R
WHERE R.serial_number IN (
	SELECT F.serial_number
	FROM film_actors F
	WHERE F.fname LIKE 'Al' OR F.lname LIKE 'Al');




-- 6.	Return a list of movies/tv shows that are newly released.
SELECT title
FROM rentals
WHERE release_date > DATE_SUB(CURDATE(), INTERVAL 1 MONTH);



-- 7.	For a given date, list all of the titles that are due to be returned.

SELECT title
FROM rentals 
WHERE serial_number IN
	(SELECT serial_number
	FROM current_rentals
	WHERE date_due = '2017-04-22');



-- 8.	For a given date, list all of the titles that were rented.


SELECT title
FROM rentals
WHERE serial_number IN
	(SELECT serial_number
	FROM current_rentals
	WHERE date_rented = '2017-04-19');




-- 9.	For a given rental serial number, return a list of members that are currently renting the title.

SELECT M.mfirstname, M.mlastname
FROM members M
WHERE M.mid IN
	(SELECT C.mid
	FROM current_rentals C
	WHERE C.serial_number = 22);

