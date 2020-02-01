cd cs313-php

heroku pg:psql

CREATE TABLE names (
	name_id 	SERIAL NOT NULL PRIMARY KEY,
	username	VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE journal (
	journal_id	SERIAL NOT NULL PRIMARY KEY,
	name_id		INT NOT NULL REFERENCES names(name_id),
	entry		VARCHAR(10000) NOT NULL,
	ts		TIMESTAMP
);


