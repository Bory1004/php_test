# php_test

mysql

show databases;

use test;

CREATE TABLE member(
	seq INT NOT NULL AUTO_INCREMENT,
	id VARCHAR(20),
    name VARCHAR(20),
	pw VARCHAR(100),
	address VARCHAR(100),
	join_date datetime not null, 
	PRIMARY KEY(seq)
) ENGINE=MYISAM CHARSET=utf8;

CREATE TABLE board (
	seq INT NOT NULL AUTO_INCREMENT,
	id VARCHAR(20),
	name VARCHAR(20),
    title VARCHAR(100),
	content VARCHAR(4000),
	date date,
	PRIMARY KEY(seq)
) ENGINE=MYISAM CHARSET=utf8;

drop table member_table;