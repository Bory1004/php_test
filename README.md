show databases;

use test;

CREATE TABLE member(
	seq INT NOT NULL AUTO_INCREMENT,
	id VARCHAR(20),
    name VARCHAR(20),
	pw VARCHAR(100),
	join_date datetime not null,
    grade int,
    code VARCHAR(20),
	PRIMARY KEY(seq)
) ENGINE=MYISAM CHARSET=utf8;

CREATE TABLE old_member(
	seq INT NOT NULL AUTO_INCREMENT,
	id VARCHAR(20),
    name VARCHAR(20),
	pw VARCHAR(100),
	join_date datetime not null,
    grade int,
    code VARCHAR(20),
	PRIMARY KEY(seq)
) ENGINE=MYISAM CHARSET=utf8;

CREATE TABLE board (
	seq INT NOT NULL AUTO_INCREMENT,
	id VARCHAR(20),
    title VARCHAR(100),
	content VARCHAR(4000),
	date date,
    count int,
	PRIMARY KEY(seq)
) ENGINE=MYISAM CHARSET=utf8;

drop table board;
drop table member;

select * from member;

select * from board order by seq desc;

commit;

INSERT INTO member(id, pw, name, join_date)VALUES("test","test","test", now());

INSERT INTO member(id, pw, name,join_date, grade, code) values ('server_master', '111', '서버마스터', now(), 1, 'a1');
INSERT INTO member(id, pw, name,join_date, grade, code) values ('admin_master', '111', '원장', now(), 2, 'a2');
INSERT INTO member(id, pw, name,join_date, grade, code) values ('admin1', '111', '강사', now(), 3, 'a3');

select grade from member where id='test';