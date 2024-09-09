CREATE TABLE items (id int primary key,name varchar(255)not null);

CREATE  TABLE purchases(id int primary key,
user_id int,
item_id int,
FOREIGN KEY user_fk(user_id)REFERENCES users(id),
FOREIGN KEY item_fk(item_id)REFERENCES items(id));



INSERT INTO items(id,name)values(1,"川スプレイ"),
(2,"カメラ"),
(3,"エアコン"),
(4,"テレビ"),
(5,"掃除ロボット");

INSERT INTO purchases(id,user_id,item_id)values(1,1,1),
(2,2,4),(3,5,1),(4,2,5),(5,11,4),(6,12,3),(7,6,3),
(8,1,5),(9,4,5),(10,3,2),(11,7,4),(12,7,1),(13,2,5),(14,6,4);

SELECT 
	MAX(number_of_users)最多購入回数,
	MIN(number_of_users)最少購入回数,
	AVG(number_of_users)平均購入回数
FROM 
(
SELECT
	COUNT(p.user_id) number_of_users
FROM 
	users u
left join purchases p on
	p.user_id=u.id
group BY 
	u.id

)main
;

WITH
	number_of_users AS(
	SELECT
		COUNT(p.user_id) number_of_users
	FROM 
		users u
	left join purchases p on
		p.user_id=u.id
	group BY 
		u.id
)
SELECT 
	MAX(number_of_users)最多購入回数,
	MIN(number_of_users)最少購入回数,
	AVG(number_of_users)平均購入回数
FROM
	number_of_users
;

