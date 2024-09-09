CREATE DATABASE cafe;
use cafe;
SHOW DATABASES;
CREATE TABLE contacts(
	id int comment'システムID' primary key AUTO_INCREMENT,
	name varchar(50)not null comment'氏名',
	kana varchar(50)not null comment'フリガナ',
	tel varchar(11) comment'電話番号',
	email varchar(50)not null comment'メールアドレス',
	body text comment'お問合せ内容',
	created_at datetime comment'送信日時' DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
select*from contacts;




