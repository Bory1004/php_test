# php_test

show databases;

use test;

CREATE TABLE member_table (
	seq INT NOT NULL AUTO_INCREMENT,
	mb_id VARCHAR(20),
	mb_pw VARCHAR(100),
	address VARCHAR(100),
	join_date datetime not null, 
	PRIMARY KEY(seq)
) ENGINE=MYISAM CHARSET=utf8;
