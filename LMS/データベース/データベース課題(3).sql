CREATE TABLE A_users(id int PRIMARY KEY,
	nickname varchar(255)NOT NULL,
	email varchar(255)NOT NULL UNIQUE,
	last_logged_in date);

INSERT INTO A_users VALUES(1,"やまぽん","yama@example.com","2022-01-02"),
(2,"たなか","tanaka@example.com","2022-04-01"),
(3,"たかくん","taka@example.com","2022-05-23"),
(4,"けんくん","ken@example.com","2022-01-02"),
(5,"たろくん","taro@example.com","2021-12-23"),
(6,"りゅうちゃん","ryu@example.com","2022-01-04"),
(7,"しょう","syo@example.com","2022-05-01"),
(8,"やまっち","yamachi@example.com","2022-03-16"),
(9,"はっとり","hattori@example.com","2022-06-29"),
(10,"こうくん","ko@example.com","2022-04-14"),
(11,"れん","ren@example.com","2022-01-25");

CREATE TABLE B_users(id int PRIMARY KEY,
	nickname varchar(255)NOT NULL,
	email varchar(255)NOT NULL UNIQUE,
	last_logged_in date);

INSERT INTO B_users VALUES(1,"たっくん","taku@example.com","2022-01-02"),
(2,"やまぽん","yama@example.com","2022-01-02"),
(3,"たかくん","taka@example.com","2022-05-23"),
(4,"しん","shin@example.com","2022-01-02"),
(5,"しょうや","shoya@example.com","2022-01-02"),
(6,"しょう","syo@example.com","2022-05-01"),
(7,"やまっち","yamachi@example.com","2022-03-16"),
(8,"せいじ","seiji@example.com","2022-01-02"),
(9,"しょうご","shogo@example.com","2022-06-29"),
(10,"まさ","masa@example.com","2022-01-02");

SELECT COUNT(*)FROM A_users
INNER JOIN B_users ON 
B_users.nickname=A_users.nickname; 

SELECT COUNT(*)FROM A_users
LEFT OUTER JOIN B_users ON
B_users.nickname=A_users.nickname
WHERE B_users.nickname IS NULL;

SELECT COUNT(*)FROM A_users
RIGHT OUTER JOIN B_users ON
B_users.nickname=A_users.nickname
WHERE A_users.nickname IS NULL;

SELECT 
(SELECT COUNT(*)FROM A_users
LEFT OUTER JOIN B_users ON
B_users.nickname=A_users.nickname)
+
(SELECT COUNT(*)FROM A_users
RIGHT OUTER JOIN B_users ON
B_users.nickname=A_users.nickname
WHERE A_users.nickname IS NULL)
total_cnt from dual;