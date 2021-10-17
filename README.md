CREATE DATABASE test;

select * from test_tb;

create table test_tb(
	id varchar(20),
    pw varchar(100),
    address varchar(100)
);

commit;

CREATE TABLE new_member(
	seq INT NOT NULL AUTO_INCREMENT,
	id VARCHAR(20),
    name VARCHAR(20),
	pw VARCHAR(100),
	join_date datetime not null,
    grade int,
	PRIMARY KEY(seq)
) CHARSET=utf8;

CREATE TABLE old_member(
	seq INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(20),
	phone VARCHAR(100),
	join_date datetime not null,
    grade int,
	PRIMARY KEY(seq)
) CHARSET=utf8;

CREATE TABLE admin(
	seq INT NOT NULL AUTO_INCREMENT,
	id VARCHAR(20),
    name VARCHAR(20),
	pw VARCHAR(100),
    grade int,
	PRIMARY KEY(seq)
) CHARSET=utf8;

CREATE TABLE board (
	seq INT NOT NULL AUTO_INCREMENT,
	id VARCHAR(20),
    title VARCHAR(100),
	content VARCHAR(4000),
	date date,
	PRIMARY KEY(seq)
) CHARSET=utf8;

select * from board;
drop table board;

select * from member;
drop table old_member;
drop table admin;

INSERT INTO admin(id, pw, name, grade) values ('server_master', '111', '서버마스터', 1);
INSERT INTO admin(id, pw, name, grade) values ('admin_master', '111', '원장', 2);
INSERT INTO admin(id, pw, name, grade) values ('admin11', '111', '강사', 3);

INSERT INTO old_member(id, pw, name, grade) values ('admin11', '111', '강사', 3);

drop table test_tb;