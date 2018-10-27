-- tao db aptech_php_14_ss3;
CREATE DATABASE aptech_php_15_ss3;
use aptech_php_15_ss3;

-- tao table users:id(pk,AI),name(varchar(255)),email(varchar(255)),password(varchar(255))
CREATE TABLE users(
user_id int not null AUTO_INCREMENT,
user_name varchar(255),
user_email varchar(255),
user_password varchar(255),
PRIMARY KEY (user_id)
);

-- them 5 du lieu vao users
INSERT INTO users(user_name,user_email,user_password)
VALUE ('Alfreds Futterkiste','AlfredsFutterkiste@gmail.com','12209'),
('Around the Horn','AroundtheHorn@gmail.com','98128'),
('Berglunds snabbköp','Berglundssnabbköp@gmail.com','59801'),
('Wilman Kala','WilmanKala@gmail.com','8765416'),
('Wolski','Wolski@gmail.com','87963');

-- tao bang categories: id, name
CREATE TABLE categories(
category_id int not null AUTO_INCREMENT,
category_name varchar(255),
PRIMARY KEY (category_id)
);
-- them du lieu
INSERT INTO categories(category_name)
VALUE ('Kinh te'),
('Van hoa'),
('Giao duc');

-- tao bang posts:id,titte,category_id
CREATE TABLE posts(
post_id int not null AUTO_INCREMENT,
post_title varchar(255),
category_id int,
PRIMARY KEY (post_id)
);

-- them du lieu 
INSERT INTO posts(post_title,category_id)
VALUE ('Facebook pulls Iran accounts trying to influence UK politics',1),
('Dyson to build new electric car in Singapore',2),
('Intact shipwreck found at sea - 2,500 years on',3),
('Virgin jet in closest ever drone near-miss',1),
('Superbugs to kill 10 million a year by 2050, MPs warn',1),
('Self-driving taxis to launch in London by 2021, firm says',2),
('Facebook hires Nick Clegg as top PR man',3),
('Lift off! Spacecrafts 5bn mile journey to Mercury',1),
('Fake news inquiry MPs targeted by campaign',2),
('Apple is best private firm to work for in UK',3),
('Dangerous moon mission eases Musks woes',1);

-- lay du lieu post co id =5 va ten category cua no
 SELECT posts.post_id, posts.post_title, categories.category_name FROM categories,posts
 where posts.post_id=5 and categories.category_id=posts.category_id;

-- lay ra tat cat cac post co category_id=2 va category_name cua no
SELECT posts.post_id, posts.post_title, posts.category_id,categories.category_name from posts
inner join categories on (posts.category_id=categories.category_id)
where posts.category_id=2;

-- QUAN HE MANY-MANY
-- tao bang post_category
CREATE TABLE post_category(
post_category_id int not null AUTO_INCREMENT,
post_id int,
category_id int,
PRIMARY KEY (post_category_id),
FOREIGN KEY (category_id) REFERENCES categories(category_id),
FOREIGN KEY (post_id) REFERENCES posts(post_id)
);
-- them du lieu 
INSERT INTO post_category(post_id,category_id)
value (1,1),(1,2),(1,3),(2,2),(2,3),(3,3),(4,1),(5,2),(6,3),(7,1),(8,2),(9,3),(10,1);

-- lay ra du lieu category cua tung post
select posts.post_id,posts.post_title,categories.category_name from posts
inner join post_category on (posts.post_id=post_category.post_id)
inner join categories on (post_category.category_id=categories.category_id)
order by posts.post_id;

