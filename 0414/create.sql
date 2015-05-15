drop database if exists school;
create database school;
use school;

CREATE TABLE teacher (
	Id             	integer,
    Last			varchar(15),
    First			varchar(15),
    contact_id		integer
);

INSERT INTO teacher VALUES
(7003, "Rogers", "Tom", 6),
(7008, "Thompson", "Art", 7),
(7012, "Lane", "John", 8),
(7051, "Flynn", "Mabel", 9);

CREATE TABLE class
(
    code		INT		PRIMARY KEY,
    teacher_id 	INT 	    	NOT NULL,
    subject 		VARCHAR(32)	NOT NULL,
    room 		INT 		NOT NULL
);

INSERT INTO class (code, teacher_id, subject, room)
VALUES	(908, 7008, 'Data structures', 	114),
	(926, 7003, 'Java programming', 	101),
	(931, 7051, 'Compilers', 		222),
	(951, 7012, 'Software engineering', 	210), 
	(978, 7012, 'Operating systems', 	109);
