SELECT "平均値"集計種別,AVG(age)集計結果 FROM users
UNION
SELECT "最大値"集計種別,MAX(age)集計結果 FROM users
UNION
SELECT "最小値"集計種別,MIN(age)集計結果 FROM users ;

DROP TABLE books ;
DROP TABLE authors ;
CREATE TABLE authors (id INT PRIMARY KEY,family_name VARCHAR(255),first_name VARCHAR(255));
CREATE TABLE books (id INT PRIMARY KEY,name VARCHAR(255),author_id INT);
INSERT INTO authors VALUES(1,"鳥山","明"),
(2,"福本","伸行"),
(3,"臼井","儀人"),
(4,"武内","直子");
INSERT INTO books VALUES(1,"ドラゴンボール",1),
(2,"アカギ",2),
(3,"賭博目次録カイジ",2),
(4,"クレヨンしんちゃん",3),
(5,"ONE PIECE",5);
SELECT
	books.id AS 本ID,
	books.name AS 本タイトル,
	CONCAT(authors.family_name," ",authors.first_name)AS　著者名
FROM
	books 
INNER JOIN authors ON
	authors.id =books.author_id ;

SELECT 
	books.id AS 本ID,
	books.name AS 本タイトル,
	CONCAT(authors.family_name,"",authors.first_name)AS 著者名
FROM
	books
JOIN authors ON
authors.id =books.author_id; 

SELECT 
	b.id AS 本ID,
	b.name AS 本タイトル,
	CONCAT(a.family_name,"",a.first_name)AS 著者名
FROM
	books AS b
JOIN authors AS a ON a.id=b.author_id ;

SELECT
	b.id 本ID,
	b.name 本タイトル,
	CONCAT(a.family_name,"",a.family_name)著者名
FROM
	books b 
JOIN authors a ON 
	a.id=b.author_id ;

SELECT 
	a.id 著者ID,
	CONCAT(a.family_name,"",a.first_name)著者名,
	b.id 本ID,
	b.name 本タイトル,
	b.author_id books_著者ID
FROM
	authors a
LEFT OUTER JOIN books b ON
	b.author_id=a.id;

SELECT 
	A.ID 著者ID,
	CONCAT(a.family_name,"",a.first_name)著者名,
	b.id 本ID,
	b.name 本タイトル,
	b.author_id books_著者ID
FROM
	authors a
RIGHT OUTER JOIN books b ON
	b.author_id=a.id ;

SELECT *FROM  books b 
WHERE b.id=3
UNION 
SELECT *FROM books b WHERE b.id =1;

SELECT 
	a.id 著者ID,
	CONCAT(a.family_name,"",a.first_name)著者名,
	b.id 本ID,
	b.name 本タイトル,
	b.author_id books_著者ID
FROM
	authors a 
LEFT OUTER JOIN books b ON
	b.author_id =a.id
UNION 
SELECT
	a.id 著者ID,
	CONCAT(a.family_name,"",a.first_name)著者名,
	b.id 本ID,
	b.name 本タイトル,
	b.author_id books_著者ID
FROM
	authors a 
RIGHT OUTER JOIN books b ON
	b.author_id =a.id; 

SELECT 
	a.id 著者ID,
	CONCAT(a.family_name,"",a.first_name)著者名,
	b.id 本ID,
	b.name 本タイトル,
	b.author_id books_著者ID
FROM
	authors a 
CROSS JOIN books b 
ORDER BY 著者ID ASC ;



