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