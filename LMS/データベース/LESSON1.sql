SELECT MAX(age) FROM users ;
SELECT MIN(age) FROM users ;
SELECT AVG(age) FROM users ;
SELECT SUM(age) FROM users ;
SELECT COUNT(*) FROM users ;
SELECT COUNT(nickname) FROM users ;
SELECT prefecture,AVG(age) FROM users WHERE prefecture ="東京都";
SELECT prefecture AS 都道府県,AVG(age) AS 平均年齢 FROM users WHERE prefecture ="東京都";
SELECT prefecture AS 都道府県,AVG(age) AS 平均年齢 FROM users GROUP BY prefecture ;
SELECT prefecture AS 都道府県,AVG(age) AS 平均年齢 FROM users WHERE prefecture IN("大阪府","東京都")GROUP BY prefecture ;
SELECT 
	prefecture AS 都道府県,
	AVG(age) AS 平均年齢 
FROM
	users 
WHERE
	prefecture IN("大阪府","東京都")
GROUP BY
	prefecture
HAVING
	AVG(age)<=20;
